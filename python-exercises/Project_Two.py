# -*- coding: utf-8 -*-
"""
Created on Wed Dec  4 12:12:12 2019

@author: YaserMJ,Baraa Daraghmeh,Asem Qaffaf,Muath Baino
"""
#==============================================================================
from tkinter import * 
from tkinter.ttk import * 
from time import strftime 
from tkinter import messagebox
from tkinter import scrolledtext

#==============================================================================
class Person():
    def __init__(self,Name,Address):
        self.__Name = str(Name)
        self.__Address=str(Address)
    def getName (self):
        return self.__Name
    def setName (self,newName):
        self.__Name = newName
        return print (self.getName(),"new Name :",self.getName())
    def getAddress (self):
        return self.__Address
    def setAddress (self,newAddress):
         self.__Address = newAddress
         return print (self.getName(),"new Address :",self.getAddress())
#==============================================================================
root = Tk() 
root.title('CRUD PYTHON IS BORING') 
   
m = Menu(root) 
   
file = Menu(m, tearoff = 0) 
file.add_command(label ='Report', command = None) 
file.add_separator() 
file.add_command(label ='Exit', command = root.destroy)
m.add_cascade(label ='File', menu = file) 
#==============================================================================   
class Employee (Person):
    def __init__(self,EmployeeNumber,Name,Address,salary,jobTitle,loans):
        super().__init__(Name,Address)
        self.EmployeeNumber = int(EmployeeNumber)
        self.__salary = float(salary)
        self.__jobTitle = str(jobTitle)
        self.__loans = list(loans)
    def getSalary(self):
        return self.__salary
    def setSalary(self,newSalary):
        self.__salary = newSalary
    def getJobTitle(self):
        return self.__jobTitle
    def setJobTitle(self,newJobTitle):
        self.__jobTitle = newJobTitle
    def getTotalLoans(self):
        return sum(self.__loans)
    def getloans(self):
       return self.__loans
    def loanstotal(self):
       total=sum(self.__loans)
       return total
    def MaxLoans(self):
        if(len(self.__loans))==0:
            maxLoans="Empty"
        else:
           maxLoans=max(self.__loans)
        return maxLoans
    def MinLoans(self):
        if(len(self.__loans))==0:
           minLoans="Empty"
        else:
           minLoans=min(self.__loans)
        return minLoans
    def setLoans(self,newLoans):
        self.__loans = newLoans
    def LowestAndHighe(self):
        low = 0
        high = 0
        if self.__loans:
            low = reduce(lambda a,b : a if a < b else b , self.__loans)
            high = reduce(lambda a,b : a if a > b else b , self.__loans)
        return (low,high)
    def printEmployeeInfo(self):
            messagebox.showinfo('printEmployeeInfo',(self.EmployeeNumber,
                                                     self.getName(),
                                                    self.__salary,
                                                    self.__jobTitle,
                                                    self.__loans))
            
Employee1 = Employee(1000,"ahmad yazan","amman,jordan",500,"HR consultant",[434,200,1020])
Employee2 = Employee(2000,"Hala Rana","Aqaba,jordan",750,"Deparment Manager",[150,3000,250])
Employee3 = Employee(3000,"Mariam Ali","Mafraq,jordan",600,"HR S consultant",[304,1000,250,300,500,235])
Employee4 = Employee(4000,"Yasmeen Mohammad","Karak,jordan",865,"Director",[])
EmployeeList=[]
EmployeeList.append(Employee1)
EmployeeList.append(Employee2)
EmployeeList.append(Employee3)
EmployeeList.append(Employee4)
employee = Menu(m, tearoff = 0)
EmployeeList=[]
#==============================================================================
def add():
    EmployeeNum = StringVar()
    name = StringVar()
    address = StringVar()
    salary = StringVar()
    work = StringVar()
    loans = StringVar()
    c = Toplevel(root)
    c.title("child 1")
    c.geometry("400x260+230+130")
#==============================================================================
    def Press():
        newEmp = Employee(EmployeeNum.get(),name.get(),address.get(),salary.get(),work.get(),loans.get())
        EmployeeList.append(newEmp)
        messagebox.showinfo("Status","Added successfully!")
#==============================================================================
    employeeNumber = Label(c,text = "Number").grid(row = 0, column = 0)
    e1 = Entry(c,textvariable = EmployeeNum).grid(row = 0, column = 1)
    Name = Label(c,text = "Name").grid(row = 1, column = 0)
    e2 = Entry(c,textvariable = name).grid(row = 1, column = 1)
    Address = Label(c,text = "Address").grid(row = 2, column = 0)
    e3 = Entry(c,textvariable = address).grid(row = 2, column = 1)
    Salary = Label(c,text = "Salary").grid(row = 3, column = 0)
    e4 = Entry(c,textvariable = salary).grid(row = 3, column = 1)
    Work = Label(c,text = "Job title").grid(row = 4, column = 0)
    e5 = Entry(c,textvariable = work).grid(row = 4, column = 1)
    Loans = Label(c,text = "Loans").grid(row = 5, column = 0)
    e5 = Entry(c,textvariable = loans).grid(row = 5, column = 1)
    submit = Button(c, text = "Submit",command = Press).grid(row = 6, column = 0)
#==============================================================================
def info():
    for x in EmployeeList:
        window=Tk()
        window.title("All on record")
        txt=scrolledtext.ScrolledText(window,width=50,height=50)
        txt.grid(column=0,row=0)
        txt.insert(x.printEmployeeInfo())
        window.mainloop()
        #x.printEmployeeInfo()
#==============================================================================
def destroy():
    def delete():
        find=True
        for a,b in enumerate(EmployeeList):
            if(b.EmployeeNumber == int(number.get())):
                EmployeeList.pop(a)
                find=False
        if Empty:
            messagebox.showerror("Error")
            
    c = Toplevel(root)
    number=StringVar()
    EmployeeNumber = Label(c,text = "Enter the number").grid(row = 1, column = 0)
    entryID = Entry(c,textvariable=number).grid(row = 2, column = 0)
    b=Button(c, text="Delete",command=delete).grid(row = 3, column = 0)
#==============================================================================
employee.add_command(label ='Add', command = add)
employee.add_command(label ='View', command = info)
employee.add_command(label ='Delete',command=destroy)
m.add_cascade(label ='Employees', menu = employee)
#==============================================================================
class Student(Person):
    def __init__(self,number,Name,Address,Subject,Marks):
        super().__init__(Name,Address)
        self.Number = int(number)
        self.__Subject = str(Subject)
        self.__Marks=dict(Marks)
    def getSubject(self):
        return self.__Subject
    def setSubject(self,newSub):
        self.__Subject = newSub
    def getMarks(self):
        return self.__Marks
    def setMarks(self,newMarks):
        self.__Subject = newMarks
    def getAvarage(self):
        return statistics.mean(self.__Marks[key] for key in self.__Marks)
    def getAMarks(self):
        thedict={key:value for (key,value) in self.__Marks.items() if value >= 90}
        return thedict
    def Studentinfo(self):
        messagebox.showinfo('StudentInfo',(
        self.Number,
        self.getName(),
        self.getAddress(),
        self.__Subject,
        self.__Marks,
        self.getAvarage(),
        self.getAMarks()))
# =============================================================================
student1 = Student(20191000,"khalid ali","irbid,jordan","History",{'English':80,'Arabic':90,'Art':95,'Mangemnt':75})
student2 = Student(20181000,"Reem Hani","Zarqa,jordan","SoftwareEng",{'English':80,'Arabic':90,'Calculus':85,'Mangemnt':75,'OS':73,'programming':90})
student3 = Student(20161000,"Nawrass Abdulla","Amman,jordan","Arts",{'English':83,'Arabic':92,'Art':90,'Mangemnt':70})
student4 = Student(20171000,"Amal Raed","Tafelah,jordan","Computer Eng",{'English':83,'Arabic':92,'Calculus':80,'Mangemnt':75,'OS':79,'programming':91})
StudentList=[]
StudentList.append(student1)
StudentList.append(student2)
StudentList.append(student3)
StudentList.append(student4)
students = Menu(m, tearoff = 0) 
#==============================================================================
def getAllStudentsInfo():
    for x in StudentList:
        x.Studentinfo()
studentList = []
#==============================================================================
def addStudents():
    number =StringVar()    
    name = StringVar()
    Address = StringVar()
    Subject = StringVar()
    Mark = StringVar() 
    c = Toplevel(root)
    c.title("AddStudents")
    c.geometry("200x160+230+130")        
#==============================================================================        
def openChild3():
    c = Toplevel(root)
    c.title("Student")
    c.geometry("300x160+230+130")
    number = Label(c,text = "Number").grid(row = 0, column = 0)  
    s1 = Entry(c).grid(row = 0, column = 1)  
    name = Label(c,text = "Name").grid(row = 1, column = 0)  
    s1 = Entry(c).grid(row = 1, column = 1)  
    Address = Label(c,text = "Address").grid(row = 2, column = 0)  
    s2 = Entry(c).grid(row = 2, column = 1)  
    Major = Label(c,text = "Major").grid(row = 3, column = 0)  
    s3 = Entry(c).grid(row = 3, column = 1)
    Subject = Label(c,text = "Subject").grid(row = 4, column = 0)  
    s4 = Entry(c).grid(row = 4, column = 1)
    Mark = Label(c,text = "Mark").grid(row = 5, column = 0)  
    s5 = Entry(c).grid(row = 5, column = 1)    
    submit = Button(c, text = "Submit").grid(row = 6, column = 0)
#==============================================================================
def messageToYou():
    messagebox.showinfo("Something important","this was one of the most boring projects ever")
#==============================================================================        
m.add_cascade(label ='Students', menu = students) 
students.add_command(label ='Add',command=openChild3) 
students.add_command(label ='View', command = getAllStudentsInfo) 
students.add_command(label ='Delete', command = None) 
#==============================================================================   
help_ = Menu(m, tearoff = 0) 
m.add_cascade(label ='Help', menu = help_) 
help_.add_command(label ='About', command = messageToYou) 
#============================================================================== 
root.config(menu = m) 
root.geometry("800x600")
mainloop() 