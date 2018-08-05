# -*- coding: utf-8 -*-
"""
Created on Fri Sep 22 08:19:44 2017

@author: praktikan
"""
# Import file python pada file yang berbeda
import bow
import preprocessing
import os
import matrix

path = 'F:/Kuliah/STKI/2-11-2017 distance and similarity/text files/'

articles = {}
for item in os.listdir(path):
    if item.endswith(".txt"):
        with open(path + "/" + item, 'r', encoding="utf-8") as file:
            articles[item] = preprocessing.preprotext(file.read())

#representasi bow
list_of_bow = []

for key, value in articles.items():
    list_token = value.split()
    dic = bow(list_token)
    list_of_bow.append(dic)
#membuat matrix
matrix_akhir = matrix(list_of_bow)


print (matrix_akhir)