# -*- coding: utf-8 -*-
"""
Created on Fri Sep 22 08:19:44 2017

@author: praktikan
"""
# Import file python pada file yang berbeda
import preprocessing

path = 'F:/Kuliah/STKI/22-9-2017 representasi/text files/bk.txt'

with open (path, 'r') as file:
    text = file.read()
# print (text)

def bow (list_token):
    """
    
    """
    vocab = list(set(list_token)) # mengembalikan kata yang unik
    bow_dict = {} # membuat dictionary kosong untuk diisi nilai kata, jumlah kemunculan
    
    for item in vocab:
        bow_dict[item] = list_token.count(item) # key, value diisi kata, jumlah kemunculan
    return bow_dict

def sortdic (dic, descending=True, n=None):
    """
    fungsi untuk mengurutkan dictionary representasi bag of words
    :param dic: dictionary key, value = string, int
    :param descendings: parameter untuk menentukan urutan menaik/menurun
    :param n: jumlah elemen yang ingin ditampilkan
    :return: dictionary bag of word yang sudah terurut berdasarkan value jumlah kata
    """
    ## python 2
    # key = dic.keys()
    # key = dic.values()
    
    # python 3
    key = list(dic.keys())
    val = list(dic.values())
    
    key_ordered = [x for _, x in sorted(zip(val, key), reverse=descending)][:n]
    val_ordered = sorted(val, reverse=descending)[:n]
    
    ## python 2
    # return list(zip(key_ordered, val_ordered))

    # python 3
    return list(zip(key_ordered, val_ordered))

# membuat representasi bag of words dari teks
list_token = preprocessing.preprotext(text).split() # memanggil function preprotext dari file preprocessing.py
dic = bow(list_token)

print (sortdic(dic, n=10))
print ("\n")

# menggunakan library counter untuk membuat bow, sudah ada fungsi untuk sorting
from collections import Counter
dic2 = Counter(list_token)
print (dic2)
print ("\n")
print (dic2.most_common(10))