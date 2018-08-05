# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

list = ['abcd', '786', '2.34', 'john', 70.2]
tinylist = [123, 'john']

print (list) 
print (list[0])
print (list[1:3])
print (list[2:])
print (tinylist * 2)
print (list + tinylist)

# append untuk menggabungkan/menambahkan item ke dalam list
list.append(tinylist)
print (list)

#extend untuk menggabungkan list dan list, menggabungkan seluruh isi item
list.extend(tinylist)
print (list)

#list comprehension
print ([item for item in range(10)])

#mencetak item yang ada di list dan tidak ada di tinylist
print ([item for item in list if item not in tinylist])

print ("==========================")

def add_number(x,y,z):
    a = x + y
    b = x + z
    c = y + z
    print(a, b, c)

add_number(1,2,3)

#keyword argument dan default
def profile_info(username, followers, num=5000):
    print("Username : " + username)
    print("Followers : " + str(followers))
    print("Salary: " + str(followers*num))
    
profile_info("Abdur", 1000)

print ("==========================")

#break
number = 0
for number in range(10):
    number += 1
    if number == 5:
        break #break here
    print('Number is ' + str(number))
print('Out of loop')

#continue
for number in range(10):
    number += 1
    if number == 5:
        continue #continue here = skip index saat ini, dan lanjut ke index selanjutnya
    print('Number is ' + str(number))
print('Out of loop')

#pass
for number in range(10):
    number += 1
    if number == 5:
        pass #pass here = persyaratan if dianggap tidak ada
    print('Number is ' + str(number))
print('Out of loop')

print ("==========================")
#If, Elif, dan Else itu satu indent/kolom

#if
threshold = 70
nilai = int(input("inputkan nilai: "))
if nilai <= threshold:
    print ("gagal")
print("--------------")

#else
if nilai <= threshold:
    print ("gagal")
else:
    print ("lolos")
print("--------------")

#if else
if nilai <= threshold:
    print("lolos")
elif nilai == 100:
    print("perfect")
else:
    print("gagal")
print("--------------")

#nested if
if nilai <= threshold:
    print("gak lolos")
elif nilai == 100:
    if nilai == True:
        print("perfect")
    else:
        print("perfect")
else:
    print("gagal")