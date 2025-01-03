from flask import Flask

app = Flask(__name__)  

@app.route('/')
def index():
    return '<h1>Project menggunakan flask sebagai framework website pribadi</h1>'

if __name__ == '__main__':
    app.run(debug=True)  
