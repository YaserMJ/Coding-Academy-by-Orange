# -*- coding: utf-8 -*-
"""
Created on Wed Nov 27 16:15:39 2019

@author: Yaser MJ
"""

import numpy as np
import matplotlib.pyplot as plt


#Exercise one :
zero=np.zeros(10)
print(zero)
one=np.ones(10)
print('\n',one)
five=np.ones(10)*5
print('\n',five)
#==============================================================================
#Exercise two :
integers=np.array(range(30,70))
print(integers)
#==============================================================================
#Exercise three :
integers=np.array(range(30,70,2))
print(integers)
#==============================================================================
#Exercise four :
num = np.identity(3)
print(num)
#==============================================================================
#Exercise five :
randomNumber=np.random.rand()
print(randomNumber)
#==============================================================================
#Exercise six :
arrays = np.arange(12).reshape(3,4)
arrayNum=[]
for nums in arrays:
    arr=[]
    for num in nums:
        arr.append(num)
    arrayNum.append(arr)
print(arrayNum)
#==============================================================================
#Exercise seven :
nums=np.arange(20)
nums[(nums >= 9) & (nums <= 15)] *= -1
print(nums)
#==============================================================================
#Exercise eight :
x=np.array([1,8,3,5])
y=np.random.randint(0,11,4)
print(x*y)
#==============================================================================
#Exercise nine :
matrix=np.array([[-1, 2, 6, 11],[-3, 18, 90, 0],[6, -17, 91, 0]])
print(matrix.shape)
#==============================================================================
#Exercise ten :
nums = np.random.random((3, 3, 3))
print(nums)
#==============================================================================
#Exercise eleven :
a=np.array([9,-1,2,5])
b=np.array([1,-6,0,10])
c=np.array([[1,8,2,5],[3,1,7,9]])
print("a-b: ",a-b)
print("a*b: ",a*b)
print("a.dot(b): ",a.dot(b))
print("a*2: ",a*2)
print("np.sin(a): ",np.sin(a))
print("a<3: ",a<3)
print("a.sum(): ",a.sum())
print("a.sum(axis=0): ",a.sum(axis=0))
print("c.sum(): ",c.sum())
print("c.sum(axis=0): ",c.sum(axis=0))
print("a.min(): ",a.min())
print("a.max(): ",a.max())
print("a.mean(): ",a.mean())
print("a average(): ",np.average(a))
print("a median(): ",np.median(a))
print("a std(): ",np.std(a))
print("a var(): ",np.var(a))
print("c.cumsum(): ",c.cumsum())
print("a[1:2] : ",a[1:2])
print("a[2:] : ",a[2:])
print("c[-1] : ",c[-1])
#==============================================================================
#Exercise tweleve :
x=range(1,50)
y=[value*3 for value in x]
plt.plot(x,y)
plt.title('Draw a Line')
plt.xlabel('x-axis')
plt.ylabel('y-axis')
plt.show()
#==============================================================================
#Exercise thirteen :
x1=[10,20,30]
y1=[20,40,10]
x2=[10,20,30]
y2=[40,10,30]
plt.figure()
plt.plot(x1, y1, label = r"line 1")
plt.plot(x2, y2, label = r"line 2")
plt.title("Two or more lines on same plot with suitable legends")
plt.xlabel("x-axis")
plt.ylabel("y-axis")
plt.legend(loc='upper right')
plt.show()
#==============================================================================
#Exercise fourteen :
t=np.arange(0.,5.,0.2)
t2=t**2
plt.plot(t, t, 'r--', t, t2, 'bs', t, t**3,'g^')
plt.show()
#==============================================================================
#Exercise fifteen :
x=['Python','Java','PHP','JavaScript','C#','C++']
popularity=[22.2,17.6,8.8,8,7.7,6.7]
xLen=np.arange(len(x))
plt.bar(xLen, popularity,color=['red', 'black', 'green', 'blue','yellow', 'cyan'])
plt.xticks(xLen, x)
plt.xlabel('Languages')
plt.ylabel('popularity')
plt.title('Popularity of Programming Language')
plt.show()