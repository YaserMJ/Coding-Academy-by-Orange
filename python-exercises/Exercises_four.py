# -*- coding: utf-8 -*-
"""
Created on Sun Nov 24 12:35:12 2019

@author: Yaser MJ
"""

#Exercise one :
#Answer is 6 ,15,33

#Exercise two :
a=[1,2,3]
b=[4,5,6]
print(list(map(lambda a,b : a*b,a,b))) 


#Exercise three :
mult = lambda x,y : x*y

print(mult(2,4))

#Exercise four :

number_list =range(-5,5)
negativeNums= list(filter(lambda x : x <0 , number_list))
print(negativeNums)

#Exercise five :

#answer is 13

#Exercise six :
# answer is [('Joey', 'Chandler', 'David'), ('Monica', 'Pheobe', 'Rachel')]

#Exercise seven :

#answer is {'Bitcoin': 'BTC', 'Ether': 'ETH', 'Ripple': 'XRP', 'Litecoin': 'LTC'}

#Exercise eight :
#answer is ['e', 'o']

#Exercise nine :
#answer is List of students :  [1,20, 10]

#Exercise ten :
#answer is [1,4,9,16]

#Exercise eleven :
#answer is [3, 6, 8]

#Exercise twelve :
#answer is [6, 8]

#Exercise thirteen:
#answer is [4, 6, 8]


#Exercise fourteen :
import functools
listOfNums = [1,2,3,4,5,6,7]
print(functools.reduce(lambda a,b : a if a<b else b,listOfNums))

#Exercise :
def mix(numbers,letters): 
      
    mixed_list = [(numbers[i],letters[i]) for i in range(0, len(numbers))] 
    return mixed_list 
      
numbers = [1, 2, 3] 
letters= ['a', 'b', 'c'] 
print(mix(numbers,letters)) 