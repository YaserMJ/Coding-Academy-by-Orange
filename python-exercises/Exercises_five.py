# -*- coding: utf-8 -*-
"""
Created on Mon Nov 25 09:26:16 2019

@author: Yaser MJ
"""
class Employee:
    def __init__(self,name,number,address,salary,job):
        try:
            self.__name= str(name)
        except ValueError:
            print('name should be a string')
        try:
            self.number=int(number)
        except ValueError:
            print('number should be numbers only')
        try:
            self.__address=str(address)
        except ValueError:
            print("Address should be string")
        try:
            self.__salary=float(salary)
        except ValueError:
            print("salary must be a number")
        try:
            self.__job=str(job)
        except ValueError:
            print("job title must be string")
    def getName(self):
        return self.__name
    def getNumber(self):
        return self.number
    def getAddress(self):
        return self.__address
    def setAddress(self,newAddress):
        self.__address=newAddress
    def getJob(self):
        return self.__job
    def getSalary(self):
        return self.__salary
    def showData1(self):
        print("Information About: ",self.getName())
        print("Name : ",self.getName())
        print("Employee Number :",self.getNumber())
        print("Address : ",self.getAddress())
        print("Salary : ",self.getSalary())
        print("Job title: ",self.getJob())
    def showData2(self):
        print("Information About: ",self.getName()," , Name : ",self.getName()," , Employee Number: ",self.getNumber()," , Address: ",self.getAddress()," , Salary : ",self.getSalary()," , Job Title : ",self.getJob(),".")
    def __del__(self):
        print(self.__name + " has been fired")
#==============================================================================       
p1 = Employee("Mohammad Khalid",1,"Amman,Jordan",500,"Consultant")
p2 = Employee("Hala Rana",2,"Aqaba,Jordan",750,"Manager")
p1.showData1()
p1.showData2()
p1.setAddress("USA")
print(p1.getName(),"New Address is : ",p1.getAddress())
del p1
del p2




