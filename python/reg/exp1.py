a=int(input("enter your num"))
b=int(input("enter your num"))
c=int(input("enter your num"))
if(a<b):
    if(c<b):
        print(b,"greater")
    else:    
        print(c,"greater")
else:
    if(a>c):
        print(a,"greater")
    else:
        print(c,"greater")           
