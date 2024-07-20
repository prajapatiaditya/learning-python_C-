for i in range (1,5+1):
    for j in range(1,i+1):
        print("*",end=" ")
    print( )  
'''output
    '''

for i in range (1,5+1):
    for j in range(1,7-i):
        print("*",end=" ")
    print( )  
'''output
* * * * *
* * * *
* * *
* *
*       '''

for i in range (1,5+1):
    for j in range(1,i+1):
        print(i,end=" ")
    print( ) 

''' output
1
2 2
3 3 3
4 4 4 4
5 5 5 5 5'''

for i in range (1,5+1):
    for j in range(1,i+1):
        print(j,end=" ")
    print( )     
'''output
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5'''

k=65
for i in range (1,5+1):
    for j in range(1,i+1):
        print(chr(k),end=" ")
        k=k+1
    print( ) 
'''output
A
B C
D E F
G H I J
K L M N O   '''

k=65
for i in range (1,5+1):
    for j in range(1,i+1):
        print(chr(k),end=" ")
    k=k+1
    print( ) 
'''output
A
B B
C C C
D D D D
E E E E E   '''    