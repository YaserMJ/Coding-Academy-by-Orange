from flask import Flask, request, render_template
import sqlite3
from flask import g
from flask import *
app = Flask(__name__)
DATABASE = './Org.db'
#==============================================================================

def get_db():
    db = getattr(g, '_database', None)
    if db is None:
        db = g._database = sqlite3.connect(DATABASE)
    return db

@app.teardown_appcontext
def close_connection(exception):
    db = getattr(g, '_database', None)
    if db is not None:
        db.close()


def query_db(query, args=(), one=False):
    cur = get_db().execute(query, args)
    rv = cur.fetchall()
    cur.close()
    return (rv[0] if rv else None) if one else rv

#==============================================================================

def valid_login(username, password):
    user = query_db('select * from login where username = ? and password = ?', [username, password], one=True)
    if user is None:
        return False
    else:
        return True


def log_the_user_in(username):
    return render_template('main.html', username=username)
#==============================================================================

@app.route('/', methods=['POST', 'GET'])
def login():
    error = None
    if request.method == 'POST':
        if valid_login(request.form['username'], request.form['password']):
            return log_the_user_in(request.form['username'])
        else:
            error = 'Invalid username/password'

    return render_template('login.html', error=error)
#==============================================================================

@app.route('/view')
def view():
    c = sqlite3.connect('Org.db')
    c.row_factory = sqlite3.Row
    cur = c.cursor()
    cur.execute("SELECT * from departments")
    rows = cur.fetchall()
    return render_template("view.html",rows=rows)
#==============================================================================

@app.route('/add')
def add():
    return render_template("add.html")
#==============================================================================

@app.route('/savedetails',methods=["POST","GET"])
def saveDetails():
    msg = "msg"
    if request.method == "POST":
        try:
            dep_id=request.form["dep_id"]
            dep_name=request.form["dep_name"]
            dep_location=request.form["dep_location"]
            with sqlite3.connect("Org.db") as con:
                cur = con.cursor()
                cur.execute("INSERT into departments(dep_id,dep_name,dep_location)values\
                            (?,?,?)",(dep_id,dep_name,dep_location))
                con.commit()
                msg ="Department added successfully"
        except:
                con.rollback()
                msg = "We cant add the department to the list"
        finally:
                return render_template("success.html",msg=msg)
                con.close()
#==============================================================================

@app.route('/emps/<int:depId>')
def emps(depId):
    c = sqlite3.connect('Org.db')
    c.row_factory = sqlite3.Row
    cur = c.cursor()
    cur.execute("SELECT * from employees where department_id = 1")
    dep = cur.fetchall()
    return render_template("emps.html",dep=dep)
#==============================================================================

@app.route("/delete")
def delete():
    return render_template("delete.html")
#==============================================================================

@app.route("/deleterecord",methods=["POST"])
def deleterecord():
    emp_id = request.form["emp_id"]
    with sqlite3.connect("Org.db") as con:
        try:
            cur = con.cursor()
            cur.execute("DELETE FROM employees where emp_id =?",emp_id)
            msg = "record deleted!"
        except:
            msg ="cant be deleted LOL!"
        finally:
            return render_template("deleted_record.html",msg=msg)
#==============================================================================

if __name__ == "__main__":
    app.run()
