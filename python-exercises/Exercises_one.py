# -*- coding: utf-8 -*-
"""
Created on Tue Nov 19 12:50:39 2019

@author: Yaser MJ
"""

# Exercise One : 
print("""
Hello
    Hello
        Hello""")

#Exercise Two :
print("Orange Academy\n"*20)

#Exercises Three : 
x=float(1)
y=float(2.8)
z=float("3")
w=float("4.2")
print(x,y,z,w,sep="10") #answer is  1.0102.8103.0104.2

#Exercise Four :
numOne = int(input("Please enter the first number :"))
numTwo = int(input("Please enter the other number :"))
print(numOne * numTwo)

#Exercise Five : 
numOne = int(input("Please enter the first number :"))
numTwo = int(input("Please enter the second number :"))
numThree = int(input("Please enter the third number :"))
numFour = int(input("Please enter the fourth number :"))
numFive = int(input("Please enter the fifth number :"))

sumOfNums = numOne + numTwo + numThree + numFour + numFive
avg = sumOfNums /5
print(avg)

#Exercise Six :
<class 'int'>
<class 'float'>
<class 'complex'>
<class 'string'>
<class 'bool'>

#Exercise Seven :
"Orange"
1
100
-10

#Exercise Eight : 
x5=10
print(x5)
AB=14
print(AB)
print(10 * 10)

#Exercise Eleven :
"""
Hello,World!
Cheers,Mate!
"""
#Exercise Twelve :
name = input("Please enter your name : ") 
age = int(input("Please enter your age : "))
toHndrd = 100 - age
print("You will turn 100 years old in " + toHndrd)

#Exercise Thirteen :
base = float(input("Plase enter the base of the triangle :"))
height = float(input("Plase enter the height of the triangle :"))
area = 0.5 * base * height
print(area)