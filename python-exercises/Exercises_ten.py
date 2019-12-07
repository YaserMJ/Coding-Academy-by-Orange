# -*- coding: utf-8 -*-
"""
Created on Tue Dec  3 15:06:18 2019

@author: Yaser MJ
"""

from sympy.plotting import plot 
import sympy as sym
import xlsxwriter 
from xlrd import open_workbook
from sympy.plotting import plot3d
#Exercise one :
x = sym.Symbol('x') 
y, i ,n, a, b, z = sym.symbols('y i n a b z')
expr=x**2+x**3+21*x**4+10*x+1
print (expr.subs(x, 7))
print( sym.expand(x+y)**2)
print(sym.simplify(4*x**3+21*x**2+10*x+12))
print(sym.limit(1/(x**2),x,sym.oo))
print(sym.summation(2*i+i-1,(i,5,n)))
print(sym.integrate(sym.sin(x)+sym.exp(x)*sym.cos(x)+sym.tan(x),x))
print(sym.factor(x**3 + 12*x*y*z+3*y**2*z))
print(sym.solveset(x-4,x))
m1 = sym.Matrix([[5, 12 , 40], [30, 70, 2]])
m2 = sym.Matrix([2,1,0])
print(m1*m2) 
plot(x**3+3 ,(x,-10,10))
f=x**2*y**3
plot3d(f,(x,-6,6),(y,-6,6))
#==============================================================================
#Exercise two :
workbook = xlsxwriter.Workbook('test1.xlsx')
worksheet=workbook.add_worksheet()
worksheet.autofilter('A1:A5')
data=["This is Example","My first export example",1,2,3]
format1=workbook.add_format({'bold':True, 'font_color':'red'})
format2=workbook.add_format({'font_color':'black'})
worksheet.set_column('A:A', 20)
worksheet.write('A1', data[0],format1)
worksheet.write('A2', data[1], format2)
for x in range(2):
    worksheet.write(x+2, 0, x+1)
worksheet.write('A5', data[4],format1)
workbook.close()
#==============================================================================
#Exercise three :
wb=open_workbook('test2.xlsx')
for s in wb.sheets():
    print('sheet:',s.name)
    for row in range(s.nrows):
        values=[]
        for col in range(s.ncols):
            values.append(s.cell(row,col).value)
        print(''.join(values))
#==============================================================================