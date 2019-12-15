# -*- coding: utf-8 -*-
"""
Created on Tue Dec 10 21:11:19 2019

@author: Yaser MJ
"""
from flask import Flask, redirect,url_for,request,render_template
app = Flask(__name__)
#==============================================================================
@app.route("/")
def index():
    return render_template("index.html")
#==============================================================================
@app.route("/login",methods=["POST","GET"])
def submit():
    if request.method == "POST":
        data=request.form
        return render_template("success.html",data=data)
    else:
        print(request.args.get('age'))
#==============================================================================
if __name__ == "__main__":
    app.run()