# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

#read
path = 'C:/Users/praktikan/Downloads/text files/bk.txt'
artikel = open(path, 'r')
rd = artikel.read()
artikel.close()

#readline
artikel = open(path, 'r')
rl = artikel.readline()
artikel.close()

#readlines
artikel = open(path, 'r')
rls = artikel.readlines()
artikel.close()

#print ("1. ", rd)
#print ("2. ", rl)
#print ("3. ", rls)

#with open(path, 'r') as file:
    #print (file.readlines()[:3])

#write
new_path = 'C:/Users/praktikan/Downloads/text files/bk_new.txt'
new_artikel = open(new_path, 'w')
new_artikel.write("ini line baru write dari python."+"\n")
new_artikel.close()

artikel = open(new_path, 'r')
wl = artikel.readlines()
artikel.close()

with open(new_path, 'w') as file:
    file.write("ini line baru2 write dari python." + "\n")
    
#string manipulation
print (rd)
print (rd.lower()) # melowerkan karakter dalam string
print (rd.upper()) # mengupperkan karakter dalam string
print (rd.split(".")) # memecah string berdasarkan separator, defaultnya spasi
print ("&".join(rd.split())) # menggabungkan semua string dalam list dengan karakter tertentu
print (rd.replace(" ", "(spasi)")) # find-replace parameter kiri dengan parameter kanan
print (len(rd)) # jumlah karakter





    