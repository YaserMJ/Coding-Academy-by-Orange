# -*- coding: utf-8 -*-
"""
Created on Wed Nov 20 14:51:12 2019

@author: Yaser MJ
"""

#Exercise one : 

numOne = int(input("Please enter the first number : " ))
numTwo = int(input("Please enter the 2nd number : "))

if numOne > numTwo:
    print(numOne)
else:
    print(numTwo)
#===================================================================
#Exercise two : 

num = int(input("Please enter a number : "))
for a in range(1,11):
    print("5 x ",a,"=",a*num)
#===================================================================
#Exercise three :
for x in range(1,6):
    for y in range(x):
        print ("*", end=" ")
    print("\n")
    
for z in range(6,0,-1):
    for q in range(z):
        print("*",end=" ")
    print('\n')
#===================================================================
#Exercise four :
#answer is x y z b
#===================================================================
#Exercise five :
#Answer is 12 15 18 21 24
#===================================================================
#Exercise six :
#Answer is 1 2 
#===================================================================
#Exercise Seven :
num = int(input("Please enter a number : "))
for x in range(0,num):
    num+=x
print(num)
#===================================================================
#Exercise Eight :
num = int(input("Please enter a number : "))
if num%2==0:
    print("This number is even")
else:
    print("This number is odd!")
#===================================================================
#Exercise Nine :
for i in range(10):
    print(" "*(10-i), "*"*(i*2+1))
for i in range(10-2, -1, -1):
    print(" "*(10-i), "*"*(i*2+1))
#===================================================================
#Exercise Ten :

while True:
    try:
        num = int(input("Please enter a number : "))
        num = int(num)
        break
    except ValueError:
        print("This number ain't an integer,try again")
print("Integer read successfully!")
#===================================================================
#Exercise Eleven :
#  prints Error Occurred and Handled