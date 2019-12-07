from tkinter import*
import sqlite3
import tkinter.ttk as ttk
import tkinter.messagebox as tkMessageBox
#===============================CONFIGS========================================
root = Tk()
root.title("Python HR System")
screen_width = root.winfo_screenwidth()
screen_height = root.winfo_screenheight()
width = 1000
height = 500
x = (screen_width/2) - (width/2)
y = (screen_height/2) - (height/2)
root.geometry('%dx%d+%d+%d' % (width, height, x, y))
root.resizable(0, 0)
#===============================METHODS========================================
def Database():
    global conn, cursor
    conn = sqlite3.connect('OrgDB.db')
    cursor = conn.cursor()
    cursor.execute("CREATE TABLE IF NOT EXISTS `employee` (emp_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name TEXT, nationality TEXT, gender TEXT, address TEXT, department TEXT, salary REAL)")
    
def Create():
    if  NAME.get() == "" or NATIONALITY.get() == "" or GENDER.get() == "" or ADDRESS.get() == "" or DEPARTMENT.get() == "" or SALARY.get() == "":
        txt_result.config(text="Please fill all the required field(s)!", fg="red")
    else:
        Database()
        cursor.execute("INSERT INTO `employee` (name, nationality, gender, address, department, salary) VALUES(?, ?, ?, ?, ?, ?)", (str(NAME.get()), str(NATIONALITY.get()), str(GENDER.get()), str(ADDRESS.get()), str(DEPARTMENT.get()), str(SALARY.get())))
        conn.commit()
        NAME.set("")
        NATIONALITY.set("")
        GENDER.set("")
        ADDRESS.set("")
        DEPARTMENT.set("")
        SALARY.set("")
        cursor.close()
        conn.close()
        txt_result.config(text="Employee has been added successfully!", fg="green")

def Read():
    tree.delete(*tree.get_children())
    Database()
    cursor.execute("SELECT * FROM `employee` ORDER BY `name` ASC")
    fetch = cursor.fetchall()
    for data in fetch:
        tree.insert('', 'end', values=(data[1], data[2], data[3], data[4], data[5], data[6]))
    cursor.close()
    conn.close()
    txt_result.config(text="Data has been successfully read from the database!", fg="black")
    
def Exit():
    result = tkMessageBox.askquestion('Python HR System', 'Are you sure you want to exit?', icon="warning")
    if result == 'yes':
        root.destroy()
        exit()
#==============================VARIABLES=======================================
NAME = StringVar()
NATIONALITY = StringVar()
GENDER = StringVar()
ADDRESS = StringVar()
DEPARTMENT = StringVar()
SALARY = StringVar()

#================================FRAME=========================================
Top = Frame(root, width=900, height=50, bd=8, relief="raise")
Top.pack(side=TOP)
Left = Frame(root, width=300, height=500, bd=8, relief="raise")
Left.pack(side=LEFT)
Right = Frame(root, width=600, height=500, bd=8, relief="raise")
Right.pack(side=RIGHT)
Forms = Frame(Left, width=300, height=450)
Forms.pack(side=TOP)
Buttons = Frame(Left, width=300, height=100, bd=8, relief="raise")
Buttons.pack(side=BOTTOM)
RadioGroup = Frame(Forms)
Male = Radiobutton(RadioGroup, text="Male", variable=GENDER, value="Male", font=('arial', 16)).pack(side=LEFT)
Female = Radiobutton(RadioGroup, text="Female", variable=GENDER, value="Female", font=('arial', 16)).pack(side=LEFT)

#===============================LABEL==========================================

txt_title = Label(Top, width=900, font=('arial', 24), text = "Python HR System")
txt_title.pack()
txt_name = Label(Forms, text="Name:", font=('arial', 16), bd=15)
txt_name.grid(row=0, stick="e")
txt_nationality = Label(Forms, text="Nationality:", font=('arial', 16), bd=15)
txt_nationality.grid(row=1, stick="e")
txt_gender = Label(Forms, text="Gender:", font=('arial', 16), bd=15)
txt_gender.grid(row=2, stick="e")
txt_address = Label(Forms, text="Address:", font=('arial', 16), bd=15)
txt_address.grid(row=3, stick="e")
txt_department = Label(Forms, text="Department:", font=('arial', 16), bd=15)
txt_department.grid(row=4, stick="e")
txt_salary = Label(Forms, text="Salary:", font=('arial', 16), bd=15)
txt_salary.grid(row=5, stick="e")
txt_result = Label(Buttons)
txt_result.pack(side=TOP)

#===============================ENTRY==========================================
name = Entry(Forms, textvariable=NAME, width=30)
name.grid(row=0, column=1)
nationality = Entry(Forms, textvariable=NATIONALITY, width=30)
nationality.grid(row=1, column=1)
RadioGroup.grid(row=2, column=1)
address = Entry(Forms, textvariable=ADDRESS, width=30)
address.grid(row=3, column=1)
department = Entry(Forms, textvariable=DEPARTMENT, width=30)
department.grid(row=4, column=1)
salary = Entry(Forms, textvariable=SALARY, width=30)
salary.grid(row=5, column=1)

#==============================BUTTONS=========================================

btn_create = Button(Buttons, width=10, text="Add Employee", command=Create)
btn_create.pack(side=LEFT)
btn_read = Button(Buttons, width=10, text="View Records", command=Read )
btn_read.pack(side=LEFT)
btn_exit = Button(Buttons, width=10, text="Exit", command=Exit)
btn_exit.pack(side=LEFT)

#===============================LIST===========================================

scrollbary = Scrollbar(Right, orient=VERTICAL)
scrollbarx = Scrollbar(Right, orient=HORIZONTAL)
tree = ttk.Treeview(Right, columns=("name", "nationality", "Gender", "Address", "department", "salary"), selectmode="extended", height=500, yscrollcommand=scrollbary.set, xscrollcommand=scrollbarx.set)
scrollbary.config(command=tree.yview)
scrollbary.pack(side=RIGHT, fill=Y)
scrollbarx.config(command=tree.xview)
scrollbarx.pack(side=BOTTOM, fill=X)
tree.heading('name', text="Name", anchor=W)
tree.heading('nationality', text="Nationality", anchor=W)
tree.heading('Gender', text="Gender", anchor=W)
tree.heading('Address', text="Address", anchor=W)
tree.heading('department', text="Department", anchor=W)
tree.heading('salary', text="Salary", anchor=W)
tree.column('#0', stretch=NO, minwidth=0, width=0)
tree.column('#1', stretch=NO, minwidth=0, width=80)
tree.column('#2', stretch=NO, minwidth=0, width=120)
tree.column('#3', stretch=NO, minwidth=0, width=80)
tree.column('#4', stretch=NO, minwidth=0, width=150)
tree.column('#5', stretch=NO, minwidth=0, width=120)
tree.column('#6', stretch=NO, minwidth=0, width=120)
tree.pack()

#===========================INITIALIZATION=====================================
if __name__ == '__main__':
    root.mainloop()
