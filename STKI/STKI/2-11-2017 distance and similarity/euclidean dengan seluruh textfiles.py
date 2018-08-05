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

path = 'F:/Kuliah/STKI/2-11-2017 distance and similarity/text files/'

#A dan B itu adalah sebuah vektor
#A = [0, 0, 5, 3, 5, 2, 0, 1, 0, 0, 0]
#B = [0, 2, 1, 0, 1, 0, 3, 0, 1, 0, 0]
#
#print (euclidean(A,B))

articles = {}
for item in os.listdir(path):
    if item.endswith(".txt"):
        with open(path + "/" + item, 'r', encoding="utf-8") as file:
            articles[item] = preprocessing.preprotext(file.read())

#representasi bow
list_of_bow = []

for key, value in articles.items():
    list_of_bow.append(bow.bow(value.split()))

#membuat matrix
matrix_akhir = matrix.matrix(list_of_bow)

#print (matrix_akhir)
#print (euclidean(matrix_akhir[0], matrix_akhir[3]))

#jarak = {}
#for key, vektor in zip(articles.keys(), matrix_akhir):
#    jarak[key] = euclidean.euclidean(matrix_akhir[0], vektor)
#
#print (jarak)

#jarak = []
#
#for vektor in matrix_akhir:
#    jarak.append(euclidean.euclidean(matrix_akhir[0], vektor))
#
#print (sorted(jarak))

jarak = {}
for key, vektor in zip(articles.keys(), matrix_akhir):
    jarak[key] = euclidean.euclidean(matrix_akhir[0], vektor)

#pisahkan key dan val dalam dictionary
key = list(jarak.keys())
val = list(jarak.values())

#menampilkan 5 terbesar yang memiliki jarak terdekat
print (sorted(zip(val, key), reverse=False)[:5])
