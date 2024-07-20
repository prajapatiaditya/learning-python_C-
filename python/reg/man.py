#  Write a program to find the sum and average of all the positive 
#  numbers entered by the user. As soon as the user enters a neagtive 
#  number, stop taking in any further input from the user and display 
#  the sum and average.

a=int(input("enter your num = "))
b=int(input("enter your num = "))
if(a<0 or b<0):
    print("please enter positive no.")
else:
     c=(a+b)/3
     print("this is your average no.",c)   


     # factoreal

a=int(input("enter your no."))
fact=1
for i in range(1,a+1):
     fact=fact*i
     print(fact)





    