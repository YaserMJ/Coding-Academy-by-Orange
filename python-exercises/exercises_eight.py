import pandas as pd
import numpy as np
#Exercise one :
ds = pd.Series([2, 4, 6, 8, 10])
print(ds)
#==============================================================================
#Exercise two :
d = {'a': 100, 'b': 200, 'c':300, 'd':400, 'e':800}
s= pd.Series(d)
print(s)
#==============================================================================
#Exercise three :
data = [20,10,150,110,100,50]
s = pd.Series(data)
print( s.describe())
s.plot(kind="bar",color=['red', 'black', 'green', 'blue','yellow','cyan'])
#==============================================================================
#Exercise four :
Data = {'d1':[100,200,5,400,700,100,200,50,400,700],'d2':[140,0,300,400,200,140,0,700,400,200]}
df = pd.DataFrame(Data,columns=["d1", "d2"])
df.plot()
#==============================================================================
#Exercise five :
s = pd.DataFrame({
"X":[78,85,96,80,86],
"Y":[84,94,89,83,86],
"Z":[86,97,96,72,83]})
print('Expected Output: \n',s)
#==============================================================================
#Exercise six :
births = [968, 155, 77, 578, 973]
names = ['Bob','Jessica','Mary','John','Mel']
S = pd.DataFrame({'births': births,'names':names})
plot = S.plot.pie(y='births', figsize=(5, 5))
#==============================================================================
#Exercise seven :
df =pd.read_csv('x.csv',sep='\t',index_col=0)
print (df)
df.to_csv('fter.csv', sep=',')
#==============================================================================
#Exercise eight :
dates=pd.date_range('20000101',periods=4)
df = pd.DataFrame(np.random.randn(4, 2), index=dates, columns=['A','B'])
print (df)
print (df.head(2))
print (df[['A']])
print (df[0:1])
print (df['20000102':'20000104'])
print(df.loc['20000102':'20000104', ['A']])
print(df.iloc[:, 1:2])
print(df[df> 0])
print(df[df.B> 0])
df['A'] = [100,200,300,100]
print (df)
print(df[df['A'].isin([200, 300])])