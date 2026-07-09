        <footer class="site-footer">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-grid">
        
                        <div class="footer-brand">
                            <a href="<?= $site_url ?>/index.php" class="logo">
                                <div class="logo-icon" style="display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width: 60%; height: 60%;">
                                        <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                        <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                                        <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                                        <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                                        <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
                                    </svg>
                                </div>
        
                                <span><?= $site_name ?></span>
                            </a>
        
                            <p><?= $footer_brand_description ?></p>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_platform_title ?></h4>
        
                            <ul>
                                <li><a href="<?= $site_url ?>/index.php#platform"><?= $footer_platform_interface ?></a></li>
                                <li><a href="<?= $site_url ?>/index.php#features"><?= $nav_features ?></a></li>
                                <li><a href="<?= $site_url ?>/index.php#markets"><?= $footer_platform_markets ?></a></li>
                            </ul>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_pages_title ?></h4>
        
                            <ul>
                                <li><a href="about-us.php"><?= $footer_page_about ?></a></li>
                                <li><a href="contact.php"><?= $footer_page_contact ?></a></li>
                                <li><a href="faq.php"><?= $nav_faq ?></a></li>
                                <li><a href="sign.php"><?= $footer_page_signin ?></a></li>
                            </ul>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_legal_title ?></h4>

                            <ul>
                                <li><a href="conditions.php"><?= $footer_terms ?></a></li>
                                <li><a href="privacy.php"><?= $footer_privacy ?></a></li>
                            </ul>
                        </div>
        
                    </div>
                </div>
        
                <div class="footer-bottom">
                    <p class="disclaimer">
                        <strong><?= $footer_disclaimer_title ?></strong>
                        <?= $footer_disclaimer_text ?>
                    </p>
        
                    <div class="footer-meta-links">
                        <span style="text-align:center; width: 100%;">
                            &copy; 2026 <?= $site_name ?>. <?= $footer_copyright ?>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </section>
<div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
  <form id="cq-isolated-form" class="leadform js-cq-chat-form rf-form js-rf-form cq-pure-custom-form" method="post" action="./integration/send.php">
    <input type="hidden" name="js_token" value="<?= $jsToken; ?>">
    <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
      <input type="text" name="website" tabindex="-1" autocomplete="off">
      <input type="text" name="company" style="position:absolute; left:-9999px;">
    </div>
    <input type="hidden" name="country" value="<?= $form_country; ?>">
    <input type="hidden" name="language" value="<?= $form_language; ?>">
    <input type="hidden" name="phone_country" value="<?= $form_phone_country; ?>">
    <input type="hidden" name="only_countries" value='<?= $form_only_countries; ?>'>
    <div class="form-preloader hidden">
      <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
    </div>
    <div class="cq-field-group">
      <input type="text" name="fname" id="cq-field-fname" placeholder="<?= htmlspecialchars($quiz_placeholder_fname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="text" name="lname" id="cq-field-lname" placeholder="<?= htmlspecialchars($quiz_placeholder_lname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="email" name="email" id="cq-field-email" placeholder="<?= htmlspecialchars($quiz_placeholder_email) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="tel" name="fullphone" id="cq-field-phone" placeholder="" required>
      <span class="error-msg hide"></span>
    </div>
    <button type="submit" class="submit" id="cq-custom-submit-btn"><?= $quiz_btn_submit ?></button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>

<div id="chat-quiz-root" style="position: fixed !important; bottom: 24px !important; right: 24px !important; z-index: 999999 !important; font-family: 'Inter', system-ui,   -apple-system, sans-serif !important; box-sizing: border-box !important;">
        
        <style>
            /* Анімація пульсації головної кнопки кольором бренду.
               box-shadow не можна анімувати напряму — кнопка вже має свій
               box-shadow заданий інлайново з !important, тож пульсуємо
               через transform на кнопці + окремий ::after кільце. */
            .cq-pulse-button {
                animation: cq-brand-pulse 2s ease-in-out infinite;
            }
            .cq-pulse-button::after {
                content: '';
                position: absolute;
                inset: 0;
                border-radius: 50%;
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.6);
                animation: cq-brand-pulse-ring 2s ease-out infinite;
                pointer-events: none;
            }
            @keyframes cq-brand-pulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.08); }
            }
            @keyframes cq-brand-pulse-ring {
                0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.6); }
                70% { box-shadow: 0 0 0 15px rgba(16, 185, 129, 0); }
                100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
            }
    
            /* Анімація появи повідомлень */
            @keyframes chatIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes confettiFall {
                0% { transform: translateY(-10px) rotate(0deg); opacity: 1; }
                100% { transform: translateY(450px) rotate(360deg); opacity: 0; }
            }
        </style>
            
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 60px !important; height: 60px !important; border-radius: 50% !important; background: linear-gradient(135deg, var(--color-accent-hover) 0%, var(--color-accent) 100%) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 30px rgba(5, 150, 105, 0.3) !important; display: flex !important; align-items: center !important;    justify-content: center !important; transition: var(--transition-smooth) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: var(--color-warning) !important; border-radius: 50% !important; border: 2px solid var(--color-bg-soft) !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform:  scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
            <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3   20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        </button>
        
    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: var(--color-card) !important; border: 1px solid var(--color-border) !important; border-radius: 24px !important; box-shadow: var(--shadow-premium) !important; backdrop-filter: blur(20px) !important; flex-direction: column !important; overflow: hidden !important; width: 360px !important; max-height: 85vh !important; transition: var(--transition-smooth) !important;    opacity: 0 !important; transform: translateY(20px) !important;">
                
        <div style="background-color: rgba(255, 255, 255, 0.03) !important; border-bottom: 1px solid var(--color-border) !important; padding: 16px 20px !important; display:    flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
                <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 42px !important; height: 42px !important; border-radius: 50% !important; border: 2px solid var(--color-accent) !important; background-color: var(--color-bg-muted) !important; display: flex !important; align-items: center !important;  justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img src="./consultant.png" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" onerror="this.style.display='none';    this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;">
                    <svg style="display: none; width: 22px; height: 22px; color: var(--color-text-muted);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span style="position: absolute !important; bottom: 0 !important; right: 0 !important; width: 10px !important; height: 10px !important; background-color:   var(--color-success) !important; border: 2px solid var(--color-card) !important; border-radius: 50% !important;"></span>
                    </div>
                    <div style="text-align: left !important;">
                    <h4 style="color: var(--color-text-main) !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; padding: 0  !important; line-height: 1.2 !important; letter-spacing: -0.01em !important;"><?= $quiz_consultant_name ?></h4>
                    <p style="color: var(--color-text-secondary) !important; font-size: 12px !important; margin: 2px 0 0 0 !important; padding: 0 !important; font-weight:  500 !important; opacity: 0.9;"><?= $quiz_consultant_role ?></p>
                    </div>
                </div>
            <button id="chat-close-btn" style="color: var(--color-text-muted) !important; background: transparent !important; border: none !important; cursor: pointer  !important; padding: 6px !important; display: flex !important; align-items: center !important; transition: color 0.2s;">
                    <svg style="width: 20px !important; height: 20px !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        
        <div id="chat-messages" style="flex: 1 !important; overflow-y: auto !important; padding: 20px !important; display: flex !important; flex-direction: column  !important; gap: 14px !important; scroll-behavior: smooth !important; max-height: 400px !important;">
            </div>
        
        <div id="typing-indicator" style="display: none; padding: 10px 20px !important; font-size: 13px !important; color: var(--color-text-muted) !important; font-style:  italic !important; background-color: transparent !important; text-align: left !important;">
                <?= $quiz_consultant_name ?> <?= $quiz_text_typing ?>
            </div>
        
        <div id="chat-controls" style="padding: 14px 20px !important; background-color: rgba(255, 255, 255, 0.02) !important; border-top: 1px solid var(--color-border)     !important; min-height: 60px !important; display: flex !important; align-items: center !important; justify-content: center !important; gap: 10px !important;">
            </div>
        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const rootBlock = document.getElementById('chat-quiz-root');
        if (rootBlock && rootBlock.parentElement !== document.body) {
            document.body.appendChild(rootBlock);
        }
        
        setTimeout(() => {
            const notiDot = document.getElementById('chat-noti-dot');
            if (notiDot) notiDot.style.transform = 'scale(1)';
        }, 3000);
        
        const quizLang = {
            welcome: `<?= addslashes($quiz_text_welcome) ?>`,
            q1: `<?= addslashes($quiz_text_q1) ?>`,
            a1_yes: `<?= addslashes($quiz_text_a1_yes) ?>`,
            a1_no: `<?= addslashes($quiz_text_a1_no) ?>`,
            q2: `<?= addslashes($quiz_text_q2) ?>`,
            q3: `<?= addslashes($quiz_text_q3) ?>`,
            a3_yes: `<?= addslashes($quiz_text_a3_yes) ?>`,
            a3_no: `<?= addslashes($quiz_text_a3_no) ?>`,
            q4: `<?= addslashes($quiz_text_q4) ?>`,
            a4_1: `<?= addslashes($quiz_text_a4_1) ?>`,
            a4_2: `<?= addslashes($quiz_text_a4_2) ?>`,
            a4_3: `<?= addslashes($quiz_text_a4_3) ?>`,
            q5: `<?= addslashes($quiz_text_q5) ?>`,
            a5_yes: `<?= addslashes($quiz_text_a5_yes) ?>`,
            a5_no: `<?= addslashes($quiz_text_a5_no) ?>`,
            loaderText: `<?= addslashes($quiz_text_loader) ?>`,
            finalTitle: `<?= addslashes($quiz_text_final_ttl) ?>`,
            processing: `<?= addslashes($quiz_text_processing) ?>`
        };
        
        const steps = [
            { id: 'welcome', type: 'text', content: quizLang.welcome, next: 'q1' },
            { id: 'q1', type: 'options', question: quizLang.q1, options: [{ text: quizLang.a1_yes, next: 'q2' }, { text: quizLang.a1_no, next: 'q2' }] },
        { id: 'q2', type: 'options', question: quizLang.q2, options: [{ text: '18–25', next: 'q3' }, { text: '26–40', next: 'q3' }, { text: '41–55', next: 'q3' }, { text:  '56+', next: 'q3' }] },
            { id: 'q3', type: 'options', question: quizLang.q3, options: [{ text: quizLang.a3_yes, next: 'q4' }, { text: quizLang.a3_no, next: 'q4' }] },
        { id: 'q4', type: 'options', question: quizLang.q4, options: [{ text: quizLang.a4_1, next: 'q5' }, { text: quizLang.a4_2, next: 'q5' }, { text: quizLang.a4_3, next:    'q5' }] },
            { id: 'q5', type: 'options', question: quizLang.q5, options: [{ text: quizLang.a5_yes, next: 'loader' }, { text: quizLang.a5_no, next: 'loader' }] }
        ];
        
        const toggleBtn = document.getElementById('chat-toggle-btn');
        const chatWindow = document.getElementById('chat-window');
        const closeBtn = document.getElementById('chat-close-btn');
        const messagesContainer = document.getElementById('chat-messages');
        const controlsContainer = document.getElementById('chat-controls');
        const typingIndicator = document.getElementById('typing-indicator');
        
        let quizStarted = false;
        let chatFormInitialized = false;

        function initChatForm() {
            if (chatFormInitialized) return;

            const form = document.getElementById('cq-isolated-form');
            if (!form || !window.intlTelInput) return;

            const phone = form.querySelector('input[name="fullphone"]');
            const onlyCountriesInput = form.querySelector('input[name="only_countries"]');
            const phoneCountry = form.querySelector('input[name="phone_country"]');
            const preloader = form.querySelector('.form-preloader');
            const errorMsg = form.querySelector('.error-msg');

            if (!phone || !preloader) return;

            let onlyCountries = [];
            try {
                onlyCountries = JSON.parse(onlyCountriesInput?.value || '[]');
            } catch (e) {
                onlyCountries = [];
            }

            const errorMap = ['Invalid number', 'Invalid country code', 'Too short', 'Too long', 'Invalid number'];

            const iti = window.intlTelInput(phone, {
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js',
                separateDialCode: true,
                initialCountry: phoneCountry?.value || 'auto',
                onlyCountries: onlyCountries,
                geoIpLookup: function (success, failure) {
                    fetch('https://ipapi.co/json')
                        .then(function (res) { return res.json(); })
                        .then(function (data) { success(data.country_code); })
                        .catch(function () { failure(); });
                }
            });

            function showPhoneError(msg) {
                if (errorMsg) {
                    errorMsg.innerHTML = msg;
                    errorMsg.classList.remove('hide');
                }
                phone.classList.add('error');
            }

            function resetErrors() {
                if (errorMsg) {
                    errorMsg.innerHTML = '';
                    errorMsg.classList.add('hide');
                }
                phone.classList.remove('error');
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                resetErrors();

                if (!phone.value.trim()) {
                    showPhoneError('Required');
                    return;
                }

                if (!iti.isValidNumber()) {
                    const errorCode = iti.getValidationError();
                    showPhoneError(errorMap[errorCode] || 'Invalid number');
                    return;
                }

                if (onlyCountries.length && !onlyCountries.includes(iti.getSelectedCountryData().iso2)) {
                    showPhoneError('This country is not supported');
                    return;
                }

                preloader.classList.remove('hidden');
                phone.value = iti.getNumber();

                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        const url = `Thanks.php?language=${encodeURIComponent(data.lead_language)}&phone=${encodeURIComponent(data.fullphone)}&pfb=${encodeURIComponent(data.pfb)}&click_id=${encodeURIComponent(data.click_id)}&redirect_url=${encodeURIComponent(data.redirect_url)}`;
                        window.location.href = url;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        preloader.classList.add('hidden');
                    });
            });

            chatFormInitialized = true;
        }

        function setResponsiveSizes() {
            if (window.innerWidth < 640) {
                chatWindow.style.width = 'calc(100vw - 40px)';
                chatWindow.style.height = '500px';
            } else {
                chatWindow.style.width = '385px';
                chatWindow.style.height = '575px';
            }
        }
        window.addEventListener('resize', setResponsiveSizes);
        setResponsiveSizes();
        
        toggleBtn.addEventListener('click', () => {
            toggleBtn.style.transform = 'scale(0)';
            setTimeout(() => { toggleBtn.style.display = 'none'; }, 200);
            
            chatWindow.style.display = 'flex';
            setTimeout(() => {
                chatWindow.style.opacity = '1';
                chatWindow.style.transform = 'translateY(0)';
            }, 50);
            
            if (!quizStarted) {
                quizStarted = true;
                runStep('welcome');
            }
        });
        
        closeBtn.addEventListener('click', () => {
            chatWindow.style.opacity = '0';
            chatWindow.style.transform = 'translateY(20px)';
            setTimeout(() => {
                chatWindow.style.display = 'none';
                toggleBtn.style.display = 'flex';
                setTimeout(() => { toggleBtn.style.transform = 'scale(1)'; }, 20);
            }, 350);
        });
        
        function scrollToBottom() {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
        
        function toggleTyping(show) {
            typingIndicator.style.display = show ? 'block' : 'none';
            scrollToBottom();
        }
        
        function appendAgentMessage(text) {
            const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; gap: 10px !important; max-width: 88% !important; align-items: flex-start !important; flex-direction: row !important;     text-align: left !important; animation: chatIn 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;";
            msg.innerHTML = `
        <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid var(--color-accent); background-color: var(--color-bg-muted); display: flex;   align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
            <img src="./consultant.png" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width:100%; height:100%;     object-fit:cover;">
            <svg style="display:none; width:14px; height:14px; color:var(--color-text-muted);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
        <div style="background-color: var(--color-bg-soft); color: var(--color-text-main); padding: 11px 14px; border-radius: 14px; border-top-left-radius: 0; font-size:   13px; line-height: 1.45; border: 1px solid var(--color-border); box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                ${text}
            </div>
            `;
            messagesContainer.appendChild(msg);
            scrollToBottom();
        }
        
        function appendUserMessage(text) {
            const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; width: 100% !important; justify-content: flex-end !important; flex-direction: row !important; animation: chatIn 0.25s    ease-out forwards;";
            msg.innerHTML = `
        <div style="background: var(--color-accent); color: #ffffff; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500;    max-width: 85%; text-align: left; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.15);">
                ${text}
            </div>
            `;
            messagesContainer.appendChild(msg);
            scrollToBottom();
        }
        
        function runStep(stepId) {
            controlsContainer.innerHTML = '';
            if (stepId === 'loader') { handleLoaderStep(); return; }
            if (stepId === 'final') { handleFinalStep(); return; }
            
            const step = steps.find(s => s.id === stepId);
            if (!step) return;
            
            toggleTyping(true);
            
            setTimeout(() => {
                toggleTyping(false);
                if (step.type === 'text') {
                    appendAgentMessage(step.content);
                    setTimeout(() => runStep(step.next), 1000);
                } else if (step.type === 'options') {
                    appendAgentMessage(step.question);
                    renderOptions(step.options);
                }
            }, 1000);
        }
        
        function renderOptions(options) {
            const wrapper = document.createElement('div');
            if (options.length > 2 || options[0].text.length > 15) {
                wrapper.style.cssText = "display: flex !important; flex-direction: column !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
            } else {
            wrapper.style.cssText = "display: grid !important; grid-template-columns: repeat(2, 1fr) !important; gap: 8px !important; width: 100% !important; padding: 0 2px    !important;";
            }
            
            options.forEach(opt => {
                const btn = document.createElement('button');
            btn.style.cssText = "background-color: var(--color-bg-soft) !important; color: var(--color-text-main) !important; border: 1px solid var(--color-border) !important; border-radius: 12px !important; font-size: 13px !important; font-weight: 500 !important; padding: 11px 14px !important; cursor: pointer !important;     text-align: center !important; transition: all 0.2s ease !important; outline: none !important; width: 100% !important; box-sizing: border-box !important;";
                btn.textContent = opt.text;
                
                // Фікс наведення: Текст ЗАВЖДИ білий, а фон плавно перетікає в основний акцент сайту
                btn.onmouseover = () => { 
                    btn.style.borderColor = 'var(--color-accent)'; 
                    btn.style.color = '#ffffff'; 
                    btn.style.backgroundColor = 'var(--color-accent)';
                    btn.style.boxShadow = '0 4px 12px rgba(16, 185, 129, 0.2)';
                };
                btn.onmouseout = () => { 
                    btn.style.borderColor = 'var(--color-border)'; 
                    btn.style.color = 'var(--color-text-main)'; 
                    btn.style.backgroundColor = 'var(--color-bg-soft)';
                    btn.style.boxShadow = 'none';
                };
                
                btn.addEventListener('click', () => {
                    appendUserMessage(opt.text);
                    controlsContainer.innerHTML = '';
                    setTimeout(() => runStep(opt.next), 500);
                });
                wrapper.appendChild(btn);
            });
            
            controlsContainer.appendChild(wrapper);
            scrollToBottom();
        }
        
        function handleLoaderStep() {
            toggleTyping(true);
            
            setTimeout(() => {
                toggleTyping(false);
                
                const loaderCard = document.createElement('div');
            loaderCard.style.cssText = "width: 88% !important; background-color: var(--color-bg-soft) !important; border: 1px solid var(--color-border) !important; padding: 16px !important; border-radius: 14px !important; box-sizing: border-box !important; animation: chatIn 0.3s ease-out forwards; display: flex; flex-direction:   column; gap: 10px;";
                
                const loaderText = document.createElement('div');
                loaderText.style.cssText = "color: var(--color-text-main); font-size: 12px; font-weight: 500; text-align: left; line-height: 1.4;";
                loaderText.textContent = quizLang.loaderText;
                
                const track = document.createElement('div');
                track.style.cssText = "width: 100%; height: 6px; background-color: var(--color-bg-muted); border-radius: 4px; overflow: hidden; position: relative;";
                
                const bar = document.createElement('div');
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, var(--color-accent-hover), var(--color-accent)); border-radius: 4px; transition:   width 0.1s linear;";
                
                track.appendChild(bar);
                loaderCard.appendChild(loaderText);
                loaderCard.appendChild(track);
                messagesContainer.appendChild(loaderCard);
                scrollToBottom();
                
                let progress = 0;
                const interval = setInterval(() => {
                    progress += 5;
                    if (progress <= 100) {
                        bar.style.width = progress + '%';
                    } else {
                        clearInterval(interval);
                        setTimeout(() => {
                            runStep('final');
                        }, 300);
                    }
                }, 80);
                
            }, 600);
        }
        
        function handleFinalStep() {
            const celebration = document.createElement('div');
            celebration.style.cssText = "position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:100; overflow:hidden;";
            for(let i=0; i<25; i++) {
                const particle = document.createElement('div');
                const colors = ['var(--color-accent)', 'var(--color-accent-hover)', 'var(--color-warning)', '#10b981'];
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.cssText = `position: absolute; top: -10px; left: ${Math.random() * 100}%; width: ${Math.random() * 6 + 4}px; height: ${Math.random() * 6 + 4}px;     background-color: ${randomColor}; border-radius: 50%; animation: confettiFall 2.2s linear ${Math.random() * 1.5}s forwards; opacity: 0.8;`;
                celebration.appendChild(particle);
            }
            chatWindow.appendChild(celebration);
            
            toggleTyping(true);
            
            setTimeout(() => {
                toggleTyping(false);
                appendAgentMessage(quizLang.finalTitle);
                
                const formCard = document.getElementById('cq-form-card');
                if (formCard) {
                formCard.style.cssText = "width: 100% !important; background-color: var(--color-bg-soft) !important; border: 1px solid var(--color-border) !important; padding: 18px !important; border-radius: 16px !important; box-sizing: border-box !important; margin-top: 6px !important; box-shadow: inset 0 2px 4px rgba(   0,0,0,0.05) !important; animation: chatIn 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) forwards; display: block !important;";
                    formCard.removeAttribute('hidden');
                    formCard.setAttribute('aria-hidden', 'false');
                    messagesContainer.appendChild(formCard);
                    
                    requestAnimationFrame(() => initChatForm());
                }
                controlsContainer.style.setProperty('display', 'none', 'important');
                
                scrollToBottom();
                setTimeout(() => celebration.remove(), 4000);
            }, 1200);
        }
    });
    </script>
