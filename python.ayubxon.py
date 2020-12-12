var_type =[1,3.5,'code',True]
n = int(input())
a = []
i = 0
while i<n:
    a.append(var_type[i%len(var_type)])
    i+=1
print(a)    