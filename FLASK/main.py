from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def home(name=None):
	return render_template('home.html')

@app.route('/about')
def about(name=None):
	return render_template('about.html')

# used to run locally
if __name__ == '__main__':
	app.run(debug=True) 
	