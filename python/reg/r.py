n=int(input("enter your num"))
for i in range(1,n+1):
    for j in range(1,n-i):
        print("*",end=' ')
    print()    