# -*- coding: utf-8 -*-
"""
Created on Tue Nov 26 09:34:29 2019

@author: Yaser MJ
"""
class Person:
   
    def __init__(self,Name,Address):
        self._Name=Name
        self._Address=Address
    def getName(self):
        return self._Name
    def getAddress(self):
        return self._Address
    def setName(self,name):
        self._Name=name
    def setAddress(self,address):
        
        self._Address = address
    def __del__(self):
        print("Object deleted...")   
#==============================================================================
class Student(Person):
    StudentNumber : int
    __Subject : str
    __Marks : dict
    def __init__(self,Name,Address, StudentNumber, Subject, Marks):
        self.StudentNumber = StudentNumber
        self.__Subject = Subject
        self.__Marks = Marks
        Person._Name = Name
        Person._Address = Address
    def getSubject(self):
        return self.__Subject
    def setSubject(self, Subject):
        self.__Subject =  Subject
    def getMarks(self):
        return self.Marks
    def setMarks(self, Marks):
        self.__Marks =  Marks
    def getAverage(self):
        sum=0
        n=0
        for key in self.__Marks:
            sum = sum + self.__Marks[key]
            n+=1
        return sum/n
    def getAMarks(self):
        output = " "
        for x,y in self.__Marks.items():
            if y >= 90:
                output +=  str(x) +" "+ str(y) + " "
        return output
    def printInfo(self):
        print("Student Number :",self.StudentNumber)
        print("Name :",self._Name)
        print("Address :",self._Address)
        print("Subject :",self.__Subject)
        print("Marks :",self.__Marks)
        print("Average :",self.getAverage())
        print("A's are :",self.getAMarks())
        
    def __del__(self):
        print("Object deleted...")   
#==============================================================================
class Employee(Person):
    EmployeeNumber : int
    __Salary : float
    __JobTitle : str
    __Loans : list
    
    def __init__(self,EmployeeNumber,Salary,JobTitle,Loans,Name,Address):
        self.EmployeeNumber = EmployeeNumber
        self.__Salary = Salary
        self.__JobTitle = JobTitle
        self.__Loans = Loans
        Person._Name = Name
        Person._Address = Address
    
    def getSalary(self):
        return self.__Salary
    def setSalary(self,Salary):
        self.__Salary = Salary
    def getJobTitle(self):
        return self.__JobTitle
    def setJobTitle(self,JobTitle):
        self.__JobTitle = JobTitle
    def getTotalLoans(self):
        return sum(self.__Loans)
    
    def getMaxLoan(self):
        return max(self.__Loans)
    def getMinLoan(self):
        return min(self.__Loans)
    def setLoans(self,Loans):
        self.__Loans = Loans
    def getLoans(self):
        return self.__Loans
    def printInfo(self):
        print("Employee Number :",self.EmployeeNumber)
        print("Name :",self._Name)
        print("Address :",self._Address)
        print("JobTitle :",self.__JobTitle)
        print("Salary :",self.__Salary)
        print("Loans :",self.__Loans)
        print("Total Loans :" ,sum(self.__Loans))
        print("\n")
    def __del__(self):
        print("Object deleted...")   
#==============================================================================
Employee1 = Employee(1000,500,"HR Consultant",[150,3000,250],"Ahmad Yazan","Amman-Jordan")
#==============================================================================
Employee2 = Employee(2000,750,"Department Manager",[150,3000,250],"Hala Rana","Aqaba - Jordan")
#==============================================================================
Employee3 = Employee(3000,600,"HRS Consultant",[304,1000,250,300,500,235],"Mariam Ali","Mafraq - Jordan")
#==============================================================================
Employee4 = Employee(4000,865,"Director",[0],"Yasmeen Mohammad","Karak -Jordan")
#==============================================================================
Student1 = Student("Khalid Ali","Irbid-Jordan",20191000,"History",{'English':80,'Arabic':90,'Management':75,'Calculus':85,'OS':73,'Programming':90})
#==============================================================================
Student2 = Student("Reem Hani","Zarqa-Jordan",20182000,"Software Eng",{'English':80,'Arabic':90,'Management':75,'Calculus':85,'OS':73,'Programming':90})
#==============================================================================
Student3 = Student("Nawras hehe","Amman-Jordan",20161001,"Arts",{'English':83,'Arabic':92,'Management':70,'Art':90})
#==============================================================================
Student4 = Student("Amal Raed","Tafelah-Jordan",20172030,"Computer Eng",{'English':83,'Arabic':92,'Management':70,'Calculus':80,'OS':79,'Programming':91})
#==============================================================================
#==============================================================================
listOfEmps = [Employee1,Employee2,Employee3,Employee4]
#==============================================================================
listOfStds =[Student1,Student2,Student3,Student4]
#==============================================================================
print(len(listOfEmps))
#==============================================================================
print(len(listOfStds))
#==============================================================================
for x in listOfEmps:
    x.printInfo()
#==============================================================================
for x in listOfStds:
    x.printInfo()
#==============================================================================
maxx =0
for x in listOfStds:
    if x.getAverage() > maxx:
        maxx = x.getAverage()
print("Highest Avg is : ",maxx)
#==============================================================================
MinLoan = 0
for x in listOfEmps:
    if x.getMinLoan() <= MinLoan:
        mini = x.getMinLoan()
print("Minimum loan is : ",MinLoan)
#==============================================================================
MaxLoan = 0
for x in listOfEmps:
    if x.getMaxLoan() > MaxLoan:
        MaxLoan = x.getMaxLoan()
print("Maximum loan is : ",MaxLoan)
#==============================================================================
sumOfLoans=0
for x in listOfEmps:
    x.printInfo()
    sumOfLoans = sumOfLoans + x.getTotalLoans()
    
print(sumOfLoans)
#==============================================================================
LoansDictionary ={}
for x in listOfEmps:
    LoansDictionary[x.EmployeeNumber]= x.getLoans()
print(LoansDictionary)
#==============================================================================
for x in listOfStds:
    print("\n")
    print("Student name is",x.getName())
    print("\n")
    print("Student subject is",x.getSubject())
    print("\n")
    print("Student A marks are ",x.getAMarks())
    print("\n")

#==============================================================================


#==============================================================================
maxSalary =0
for x in listOfEmps:
    if x.getSalary() > maxSalary:
        maxSalary = x.getSalary()
print("Highest Salary is : ",maxSalary)
#==============================================================================
LowestSalary = Employee1.getSalary()
for x in listOfEmps:
    if x.getSalary() < LowestSalary:
        LowestSalary = x.getSalary()
print("Lowest Salary is : ",LowestSalary)
#==============================================================================
sumOfSalaries=0
for x in listOfEmps:
    sumOfSalaries = sumOfSalaries + x.getSalary()
print("Sum of all salaries is : ",sumOfSalaries)
#==============================================================================
for x in listOfEmps:
    x.__del__()
for y in listOfStds:
    y.__del__()