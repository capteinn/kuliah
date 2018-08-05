# -*- coding: utf-8 -*-
"""
Created on Fri Sep 08 08:04:40 2017

@author: nurrahmahsww
"""

path = 'D:/Kuliah/SEM 5/STKI/Praktikum/Pertemuan 3/STKI_Prak_tugas/bk.txt'
artikel = open(path, 'r')
rd = artikel.read()
artikel.close()

artikel = open(path, 'r')
rl = artikel.readline()
artikel.close()

artikel = open(path, 'r')
rls = artikel.readlines()
artikel.close()

print "====Read====\n"
print "1, ", rd
print "====Readline====\n"
print "2, ", rl
print "====Readlines====\n"
print "3, ", rls 

#langsung close
print "\n====WithOpen====\n"
with open(path, 'r') as file:
    print file.readlines()[:3]
    
#write

new_path = 'D:/Kuliah/SEM 5/STKI/Praktikum/Pertemuan 3/STKI_Prak_tugas/bk_new.txt'
new_artikel = open(new_path, 'w')
new_artikel.write("ini line baru write dr python"+"\n")
new_artikel.close()

#langsung close
with open(path, 'w') as file:
    file.write("Ini line baru write dr python"+"\n")
    
#String manipulation
print "\n====ReadDefault====\n"
print rd
print "====RdLower====\n"
print rd.lower() #me-lower-kan  karakter dalam string
print "====RdUpper====\n"
print rd.upper() #me-upper-kan karakter(Kapital)
print "====RdSplit====\n"
print rd.split(".") #memecah string berdasar separator, defaultnya spasi
print "\n====RdJoin====\n"
print "&".join(rd.split()) #menggabungkan semua string dalam list dg karakter tertentu
print "\n====findReplace====\n"
print rd.replace(" ","(spasi)") #find and replace param kiri dg param kanan
print "====jmlKarakter====\n"
print len(rd) #jumlah Karakter


import os
path = 'D:/Kuliah/SEM 5/STKI/Praktikum/Pertemuan 3/STKI_Prak_tugas'
print "\n====Membuka file dalam satu folder====\n"
print os.listdir(path) #listing semua nama file dalam path
articles = {}
for item in os.listdir(path): #loop satu per satu file untuk dibuka
    with open(path+"/"+item, 'r') as file: #path lengkap dengan nama file
        print "\n====Nama Text dan Judul====\n"    
        print item, file.readline() #print file baris pertama
        articles[item] = file.read() #membaca dan input dict
print "\n====Text Artikel All====\n" 
print articles

