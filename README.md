# Site Launcher

Streamlit-додаток для автоматичного розгортання лендінгів через Keitaro tracker.

## Архітектура

```
app.py                  — головний Streamlit UI (multi-step wizard)
core/
  keitaro.py            — Keitaro Admin API (offers, campaigns, flows, domains)
  lang_pipeline.py      — генерація lang.php через OpenAI
  domain_suggest.py     — генерація доменних кандидатів через OpenAI
  domain_check.py       — перевірка доступності доменів через RDAP
  geo_detect.py         — автодетект GEO/мови за брендом через OpenAI
  google_sheet.py       — логування запусків у Google Sheets
  review_pipeline.py    — генерація відгуків через OpenAI
  translit.py           — транслітерація бренду для slug
  options.py            — GEO/мовні константи та маппінги
  ui.py                 — допоміжні UI компоненти
templates/
  template_1-1/         — фіолетова тема
  template_2/           — ...
  template_3/           — зелена/жовта тема
  template_4/           — ...
  template_5/           — ...
  template_for_review/  — шаблон для превʼю відгуків
buyers.json             — список баєрів
requirements.txt
```

## Флоу запуску сайту

1. **Step 1** — вибір GEO, мови, бренду, баєра, шаблону
2. **Step 2** — генерація/перевірка доменів (RDAP + дедуплікація через Google Sheets)
3. **Step 3** — генерація `lang.php` через OpenAI (локалізований контент, ціна, валюта)
4. **Step 4** — збірка ZIP + деплой на Keitaro

### Збірка ZIP (`build_domain_site_zip`)

- Читає файли з `templates/template_X/`
- `lang.php` підміняється згенерованим
- `offer_seo.php` патчиться (бренд, GEO, мова, ціна)
- Текстові файли (`.php`, `.js`, `.css`, `.html`, `.xml`, `.txt`) проходять через `_render_placeholders`:
  - `{{DOMAIN}}` → домен
  - `{{SITE_URL}}` → `https://домен`
  - `{{LANG}}` → мова
  - `{{LASTMOD}}` → поточна дата
  - `{{CURRENCY}}` → ціна+валюта
  - `{{BUYER_NAME}}` → ім'я баєра

### Деплой на Keitaro (`core/keitaro.py`)

1. `create_offer` — завантажує ZIP як offer (base64). Якщо offer вже існує (422) — оновлює ZIP через PUT
2. `create_campaign` — створює кампанію `домен | Баєр`
3. `create_flow` — прив'язує offer до кампанії
4. `add_domain` — реєструє домен у Keitaro

## Шаблони

Кожен шаблон — самодостатній PHP-сайт.

```
integration/
  config.php        — константи: Telegram bot token, chat IDs, BUYER_NAME
  send.php          — обробка форми: валідація → CRM API → Telegram
  validation.js     — клієнтська валідація форми
  helpers.php       — sendTGMessage, getBuyerDataFromSession, etc.
  offer_seo.php     — SEO-контент (патчиться при збірці ZIP)
```

### send.php — флоу обробки ліда

1. Перевірка `js_token` (захист від прямих POST-запитів)
2. Збір даних: форма + сесія + cookies
3. `click_id` — читається з `$_POST['click_id']` → `$_COOKIE['_subid']` → `$_SESSION['click_id']` → `'SEO'`
4. UTM-параметри — читаються з `$_POST` першочергово
5. Відправка в CRM (Lead Distribution API v2)
6. Відправка в Telegram: tech log + баєр
7. GET-запити → 405 Method Not Allowed

### validation.js — фільтрація email

- Список disposable доменів (~35 штук)
- Блокування доменів з ключовими словами: `webmail`, `mailsrv`, `mx-`
- Gmail dot trick: `>=3` крапок у local-частині для major провайдерів
- Спам-слова в local-частині: `traffic`, `lead`, `forex`, `trading`, `crypto`, `binary`, `invest`
- Email alias (`+` в local-частині)

### chat_widget.php (templates 1-1, 3)

PHP-include з чат-виджетом (quiz-бот). Підключається на всіх сторінках крім `index.php`. Використовує ту саму форму та `send.php`.

## Секрети (`.streamlit/secrets.toml`)

```toml
OPENAI_API_KEY      = "sk-..."
KEITARO_API_KEY     = "..."
KEITARO_BASE_URL    = "http://IP/admin_api/v1"
google_sheet_url    = "https://docs.google.com/spreadsheets/d/..."

[gcp]
type                = "service_account"
project_id          = "..."
private_key_id      = "..."
private_key         = "-----BEGIN RSA PRIVATE KEY-----\n..."
client_email        = "...@....iam.gserviceaccount.com"
client_id           = "..."
auth_uri            = "https://accounts.google.com/o/oauth2/auth"
token_uri           = "https://oauth2.googleapis.com/token"
```

## Запуск локально

```bash
pip install -r requirements.txt
streamlit run app.py --server.enableCORS false --server.enableXsrfProtection false
```

## Деплой на VPS (Ubuntu 22.04)

```bash
apt update && apt install python3 python3-pip git -y
git clone https://github.com/Walt123321/site-launcher.git
cd site-launcher
pip3 install -r requirements.txt
mkdir -p .streamlit
nano .streamlit/secrets.toml   # вставити секрети
streamlit run app.py --server.port 8501
```

### systemd сервіс

```ini
[Unit]
Description=Site Launcher
After=network.target

[Service]
User=root
WorkingDirectory=/root/site-launcher
ExecStart=/usr/local/bin/streamlit run app.py --server.port 8501
Restart=always

[Install]
WantedBy=multi-user.target
```

```bash
systemctl enable site-launcher
systemctl start site-launcher
```

## Гілки

| Гілка | Призначення |
|-------|------------|
| `dev` | розробка та тестування |
| `main` | продакшн |
