# -*- coding: utf-8 -*-
"""
Created on Thu Nov 21 14:24:20 2019

@author: Yaser MJ
"""

#Exercise one :
list1 = ['Apple','Banana','Orange','Potato']

for x in list1:
    print(x)
#==============================================================================
#Exercise two :
listOfNums = [1,2,3,4,5]
print(sum(listOfNums))
#==============================================================================
#Exercise three :
listOfNums = [1,2,3,4,5]
print(max(listOfNums))
#==============================================================================
#Exercise four :
setThelist = {10,20,30,20,10,50,60,40,80,50,40}
print(setThelist)
#==============================================================================
#Exercise five : 
listie=[1,2,3]
if len(listie) == 0:
    print("This list is empty!")
else:
    print("This list ain't empty!")
#==============================================================================
#Exercise six :
tuplrino=(1,"hehe",["lol","xD"],(6,6,6))
print(tuplrino)
#==============================================================================
#Exercise seven :
num_set= set([0, 1, 2, 3, 4, 5])
for x in num_set:
    print(x)
#==============================================================================
#Exercise eight :
s1={1,2,3,4,5,6}
s2={2,4,6} 
print(s1 & s2)
#==============================================================================
#Exercise nine :
#gives {'blue','green','yellow','red'}
#==============================================================================
#Exercise ten :
#gives 6
#==============================================================================
#Exercise eleven :
dic1={1:10,2:20}
dic2={3:30,4:40}
dic3={5:50,6:60}
dic4={}
for d in (dic1,dic2,dic3):
    dic4.update(d)
print(dic4)
# gives {1: 10, 2: 20, 3: 30, 4: 40, 5: 50, 6: 60} 
#==============================================================================
#Exercise tweleve :
a="Hello, World!"
print(a[1]) # gives e
print(a[2:5]) # gives llo
print(a[-5:-2]) # gives orl
print(len(a)) # gives 13
print(a.lower()) #gives hello, world!
print(a.replace("H","J")) #gives Jello, World!