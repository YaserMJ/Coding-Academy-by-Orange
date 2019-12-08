# -*- coding: utf-8 -*-
"""
Created on Sun Dec  8 16:12:48 2019

@author: Yaser MJ
"""

#Exercise one :
from flask import Flask,render_template
app =Flask(__name__)

@app.route('/')
def index():
    return 'This is index page'

@app.route('/hello')
def hello():
    return 'Hello World!'

@app.route('/members')
def members():
    return 'Members page'

if __name__ == '__main__':
    app.run()
#==============================================================================
#Exercise two :

app=Flask(__name__)

@app.route('/')
def index(score):
    if score >=90:
        x = 'got A'
    elif score < 90 and score >=80:
        x = 'got B'
    elif score < 80 and score >=70:
        x = 'got C'
    elif score < 70 and score >=60:
        x = 'got D'
    else:
        x = 'Failed'
    return render_template('q2.html',title='Q2',score=x)

if __name__ == '__main__':
    app.run()
#==============================================================================
#Exercise three :
app = Flask(__name__)

@app.route('/')
@app.route('/index')
def index():
    user={'username' : 'Academy' ,'location' : 'Amman Jordan'}
    return render_template('q3.html',title='Q3',user=user,location=location)

if __name__ == "__main__":
    app.run()
