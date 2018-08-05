# -*- coding: utf-8 -*-
"""
Created on Thu Nov  2 14:02:26 2017

@author: praktikan
"""
import matrix
import bow
import preprocessing
import os
import euclidean

path = 'F:/Kuliah/STKI/3-11-2017 kuis/text files/'

articles = {}

for item in os.listdir(path):
    if item.endswith(".txt"):
        with open(path + "/" + item, 'r',encoding='utf-8') as file:
            articles[item] = preprocessing.preprotext(file.read())

#representasi bow
list_of_bow = []

for key, value in articles.items():
    list_of_bow.append(bow.bow(value.split()))

#membuat matrix
matrix_akhir = matrix.matrix(list_of_bow)

dokumen= ['bk.txt', 'ed.txt', 'ot.txt', 'en.txt', 'lf.txt', 'bl.txt', 'tk.txt']
dokumens = {}

#----------------------------------------------------------------------

for item in os.listdir(path):
    for item in dokumen:
        with open(path + "/" + item, 'r', encoding ='utf-8') as file:
            dokumens[item] = preprocessing.preprotext(file.read())

#representasi bow
list_of_bow_dokumen = []

for key, value in dokumens.items():
    list_of_bow_dokumen.append(bow.bow(value.split()))

#membuat matrix
matrix_akhir_dokumen = list(matrix.matrix(list_of_bow_dokumen))

jarak_dokumen = {}

for key, vektor in zip(dokumens.keys(), matrix_akhir_dokumen):      
        jarak_dokumen[key] = euclidean.euclidean(matrix_akhir_dokumen[0], vektor)

#----------------------------------------------------------------------

#pisahkan key dan val dalam dictionary
val_dokumen = list(jarak_dokumen.values())

#----------------------------------------------------------------------
jarak = {}
#
#number = 0
#for key, vektor in zip(articles.keys(), matrix_akhir):   
#    for item in matrix_akhir_dokumen:
#        jarak[key] = euclidean.euclidean(matrix_akhir, item)
#        number += 1

for key, vektor in zip(dokumens.keys(), matrix_akhir_dokumen):
    for item in matrix_akhir:    
        jarak[key] = euclidean.euclidean(item, vektor)

#----------------------------------------------------------------------

key = list(jarak.keys())
val = list(jarak.values())

#menampilkan 5 terbesar yang memiliki jarak terdekat
hasil = sorted(zip(val, key), reverse=False)
hasil_akhir = list(hasil[0])

print ("nama file : " + hasil_akhir[1])
print ("jaraknya : " + str(hasil_akhir[0]))

#print number
#print jarak
#print len(matrix_akhir_dokumen)

A = [3, 2, 0, 5, 0, 0, 0, 2, 0, 0]
B = [1, 0, 0, 0, 0, 0, 0, 1, 0, 2]

print (round (euclidean.euclidean2(A, B), 3))

