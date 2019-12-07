# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 15:09:15 2019

@author: Yaser MJ
"""
#Exercise one :

from tkinter import *
import tkinter.messagebox as tm
from tkinter.colorchooser import *

class LoginFrame(Frame):
    def __init__(self, master):
        super().__init__(master)

        self.label_username = Label(self, text="Username")
        self.label_password = Label(self, text="Password")
        self.entry_username = Entry(self)
        self.entry_password = Entry(self, show="*")
        self.label_username.grid(row=0, sticky=E)
        self.label_password.grid(row=1, sticky=E)
        self.entry_username.grid(row=0, column=1)
        self.entry_password.grid(row=1, column=1)
        self.logbtn = Button(self, text="Login", command=self._login_btn_clicked)
        self.logbtn.grid(columnspan=2)
        self.pack()

    def _login_btn_clicked(self):
        username = self.entry_username.get()
        password = self.entry_password.get()

        if username == "Orange" and password == "CodingAcademy":
            tm.showinfo("Login info", "Successful!")
            root.destroy()
            
        else:
            tm.showerror("Login error", "Incorrect username")

root = Tk()
lf = LoginFrame(root)
root.mainloop()
#==============================================================================
#Exercise two :
from tkinter import scrolledtext
def open_msg():
    c=Toplevel(root)
    c.title("Message child")
    c.geometry("200x160+230+230")
    Label(c,text="this is a message").grid()

def open_child1():
    var = Tk()
    name=Label(var,text="name")
    password=Label(var,text="password")
    entry1=Entry(var)
    entry2=Entry(var)
    name.grid(row=0,sticky=E)
    password.grid(row=1,sticky=E)
    entry1.grid(row=0,column=1)
    entry2.grid(row=1,column=1)
    Button(var,text="Submit").grid()
    
def open_child2():
    window=Tk()
    window.title("Window3")
    window.geometry("350x350")
    txt=scrolledtext.ScrolledText(window,width=40,height=10)
    txt.grid(column=0,row=0)
    window.mainloop()
    
root = Tk()
root.title("root window")
Button(root,text="Open Message",command=open_msg).grid()
Button(root,text="open child window1",command=open_child1).grid()
Button(root,text="open child window2",command=open_child2).grid()
root.mainloop()

#==============================================================================
#Exercise three :
root = Tk()
def getColor():
    color =askcolor()
    print(color)
    root.configure(background=color[1])

Button(text='Select Color',command=getColor).pack()
mainloop()