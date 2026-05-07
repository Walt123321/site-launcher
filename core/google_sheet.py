import streamlit as st
import gspread
from google.oauth2.service_account import Credentials
from datetime import datetime
import re


SHEET_NAME = "Таблиця"


def connect_sheet():
    creds_dict = dict(st.secrets["gcp"])

    creds = Credentials.from_service_account_info(
        creds_dict,
        scopes=[
            "https://www.googleapis.com/auth/spreadsheets",
            "https://www.googleapis.com/auth/drive"
        ],
    )

    client = gspread.authorize(creds)
    sheet = client.open_by_url(
        st.secrets["google_sheet_url"]
    ).worksheet(SHEET_NAME)

    return sheet


def normalize(text):
    text = str(text).lower().strip()
    text = re.sub(r"[^a-z0-9а-яіїє]", "", text)
    return text


def get_all_rows():
    sheet = connect_sheet()
    return sheet.get_all_values()


def find_duplicates(brand, domain):
    rows = get_all_rows()

    brand_norm = normalize(brand)
    domain = domain.lower().strip()

    dup_brand = []
    dup_domain = []

    for i, row in enumerate(rows[1:], start=2):
        row_brand = normalize(row[2]) if len(row) > 2 else ""
        row_domain = row[6].lower().strip() if len(row) > 6 else ""

        if row_brand == brand_norm:
            dup_brand.append(i)

        if row_domain == domain:
            dup_domain.append(i)

    return dup_brand, dup_domain


def get_next_row():
    sheet = connect_sheet()
    values = sheet.col_values(3)  # C
    return len(values) + 1


def append_launch(data):
    sheet = connect_sheet()

    row = get_next_row()

    number = row - 1
    date = datetime.now().strftime("%d.%m")

    values = [
        number,
        date,
        data["brand"],
        data["geo"],
        data["gl"],
        data["hl"],
        data["domain"],
        data["template"],
        data["review"],
        "",  # J
        "🟡 Створюється сайт"
    ]

    sheet.update(f"A{row}:K{row}", [values])

    return row


def update_status(row, status):
    sheet = connect_sheet()
    sheet.update(f"K{row}", status)
