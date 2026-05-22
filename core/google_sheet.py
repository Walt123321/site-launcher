import streamlit as st
import gspread
from google.oauth2.service_account import Credentials
from datetime import datetime
import re


# ==================================================
# SETTINGS
# ==================================================
SHEET_NAME = "Таблиця"


# ==================================================
# CONNECT
# ==================================================
def connect_sheet():
    creds_dict = dict(st.secrets["gcp"])

    creds = Credentials.from_service_account_info(
        creds_dict,
        scopes=[
            "https://www.googleapis.com/auth/spreadsheets",
            "https://www.googleapis.com/auth/drive",
        ],
    )

    client = gspread.authorize(creds)

    sheet = client.open_by_url(
        st.secrets["google_sheet_url"]
    ).worksheet(SHEET_NAME)

    return sheet


# ==================================================
# HELPERS
# ==================================================
def normalize(text):
    text = str(text).lower().strip()
    text = re.sub(r"[^a-z0-9а-яіїє]", "", text)
    return text


def get_all_rows():
    sheet = connect_sheet()
    return sheet.get_all_values()


# ==================================================
# DUPLICATES
# ==================================================
def find_duplicates(brand, domain):
    rows = get_all_rows()

    brand_norm = normalize(brand)
    domain_norm = str(domain).lower().strip()

    dup_brand = []
    dup_domain = []

    for i, row in enumerate(rows[1:], start=2):

        row_brand = normalize(row[2]) if len(row) > 2 else ""
        row_domain = row[6].lower().strip() if len(row) > 6 else ""

        if row_brand == brand_norm:
            dup_brand.append(i)

        if row_domain == domain_norm:
            dup_domain.append(i)

    return dup_brand, dup_domain


# ==================================================
# FIND FIRST EMPTY ROW BY COLUMN C
# ==================================================
def get_next_row():
    sheet = connect_sheet()

    values = sheet.col_values(3)  # Column C

    # шукаємо першу пусту клітинку починаючи з 2 рядка
    for i in range(2, len(values) + 1):
        if not str(values[i - 1]).strip():
            return i

    return len(values) + 1


# ==================================================
# ADD NEW LAUNCH
# ==================================================
def append_launch(data):
    sheet = connect_sheet()

    row = get_next_row()

    number = row - 1
    date = datetime.now().strftime("%d.%m")

    values = [
        number,                         # A
        date,                           # B
        data["brand"],                  # C
        data["geo"],                    # D
        data["gl"],                     # E
        data["hl"],                     # F
        data["domain"],                 # G
        data["template"],               # H
        data["review"],                 # I
        None,                           # J (НЕ чіпає dropdown)
        "Створюється сайт",             # K
    ]

    sheet.update(
        range_name=f"A{row}:K{row}",
        values=[values]
    )

    return row


# ==================================================
# STATUS UPDATE
# ==================================================
def update_status(row, status):
    sheet = connect_sheet()

    sheet.update(
        range_name=f"K{row}",
        values=[[status]]
    )
