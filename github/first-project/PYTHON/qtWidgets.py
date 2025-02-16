import sys
from PyQt5.QtWidgets import QApplication, QLabel, QWidget
# Membuat instance aplikasi
app = QApplication(sys.argv)

# Membuat widget utama
window = QWidget()
window.setWindowTitle('PyQt5 Example')
window.setGeometry(100, 100, 280, 80)

# Menambahkan label
label = QLabel('Hello, PyQt5!', parent=window)
label.move(90, 30)

# Menampilkan jendela
window.show()

# Menjalankan aplikasi
sys.exit(app.exec_())


