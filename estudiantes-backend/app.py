from flask import Flask

app= Flask(__name__)

@app.route('/')
def inicio():
    return "Hola mundo Flask"

@app.route('/soyotraruta', method=['POST'])
def otra():
    return "Esta es la diección secundaria"

if __name__== '__main__':
    app.run(debug=True)
    