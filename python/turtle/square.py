import turtle as a

a.title("khachuaa")
a.shape("turtle")
a.speed(11)
a.pencolor("red")
a.pensize(2)
a.bgcolor("black")
a.penup()
a.right(90)
a.forward(170)
a.left(90)
a.pendown()
c=220 
for i in range(1,92):
  
   a.circle(c)
   a.penup()
   a.left(90)
   a.forward(10)
   a.right(90)
   a.pendown()
   c=c-10


  
 

a.done()