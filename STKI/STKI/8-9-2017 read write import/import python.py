# -*- coding: utf-8 -*-
"""
Created on Fri Sep  8 08:37:51 2017

@author: praktikan
"""

import os
path = 'C:/Users/praktikan/Downloads/text files'
print (os.listdir(path)) # melist semua nama file dalam path
articles = {}
for item in os.listdir(path): # loop satu per satu file untuk membuka
    with open(path + "/" + item, 'r', encoding="utf8") as file: # path lengkap dengan nama file
        print (item, file.readline()) # print file, baris pertama
        articles[item] = file.read() # membaca dan input ke dictionary
    print (articles)

