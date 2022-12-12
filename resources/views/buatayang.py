import turtle

t= turtle.Turtle()
s= turtle.Screen()
t.penup()
t.goto(-100,10)
t.pendown()
t.color('blue')
style=('Courier',20,'italic')
t.write('          Halo Jani, I Love You!',font=style)
t.hideturtle()

s.bgcolor('#262626')
t.pencolor('magenta')
t.speed(100)

col = ('blue', 'yellow', 'red', 'light green')

for n in range(5):
    for x in range(8):
        t.speed(x+10)
        for i in range(2):
            t.pensize(2)
            t.circle(80+n*20,90)
            t.lt(90)
        t.lt(45)
    t.pencolor(col[n%4])
s.exitonclick()
turtle.done()