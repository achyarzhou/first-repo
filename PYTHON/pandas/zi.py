import pandas as pd

# File input dan output
input_file = "input.xlsx"
output_file = "output.html"

# Baca data dari input.xlsx
df = pd.read_excel(input_file)

# Ganti NaN dengan string kosong
df.fillna("", inplace=True)

# Atasi kolom 'Unnamed' dengan mengosongkan namanya
df.columns = ["" if col.startswith("Unnamed") else col for col in df.columns]

# Tambahkan hyperlink hanya jika kolom "Link" memiliki nilai
df["Link"] = df["Link"].apply(lambda x: f'<a href="{x}" target="_blank">{x}</a>' if x else "")

# Fungsi untuk menambahkan gaya pada baris tertentu
def style_row(row):
    if "Aspek Pemenuhan (30%)" in row.values:
        return 'background-color:rgb(241, 247, 230); font-weight: bold; text-align: center;'  # Gaya khusus untuk aspek pemenuhan
    elif "Aspek Reform (30%)" in row.values:
        return 'background-color:rgb(241, 247, 230); font-weight: bold; text-align: center;'  # Gaya khusus untuk aspek reform
    return ''

# Konversi DataFrame ke HTML dengan gaya tambahan
html_rows = []
for _, row in df.iterrows():
    style = style_row(row)
    html_rows.append(f'<tr style="{style}">' + ''.join(f'<td>{cell}</td>' for cell in row) + '</tr>')

# Tambahkan header tabel
html_header = ''.join(f'<th>{col}</th>' for col in df.columns)

# Gaya CSS untuk tabel
html_style = """
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table th {
        background-color: #f4f4f4;
        color: #333;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
"""

# Gabungkan semua bagian HTML
final_html = f"""
<html>
<head>
    {html_style}
</head>
<body>
    <h1>Data ZI - Penguatan Akuntabilitas</h1>
    <table>
        <thead>
            <tr>{html_header}</tr>
        </thead>
        <tbody>
            {''.join(html_rows)}
        </tbody>
    </table>
</body>
</html>
"""

# Tulis ke file output.html
with open(output_file, "w") as f:
    f.write(final_html)

print(f"File berhasil dibuat dan disimpan sebagai {output_file}")
