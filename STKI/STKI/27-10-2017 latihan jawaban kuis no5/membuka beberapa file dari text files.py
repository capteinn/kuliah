# -*- coding: utf-8 -*-
"""
Created on Fri Sep  8 08:37:51 2017

@author: praktikan
"""

import preprocessing

path = 'F:/Kuliah/STKI/27-9-2017 latihan/text files/'

dokumen = ["en.txt", "en_2.txt", "en_3.txt", "en_4.txt", "en_5.txt"]
articles = {} # membuat dictionary kosong untuk menyimpan hasil path + file yang dipilih

for item in dokumen: # untuk setiap file di dalam list files
    with open(path+item, 'r', encoding="utf-8") as file: # path lengkap dengan nama file
        articles[item] = preprocessing.preprotext(file.read()) # nama file sebagai key
print (articles)

