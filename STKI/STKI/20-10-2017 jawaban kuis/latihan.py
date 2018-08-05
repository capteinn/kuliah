# -*- coding: utf-8 -*-
"""
Created on Fri Sep 22 08:19:44 2017

@author: praktikan
"""
# Import file python pada file yang berbeda
import preprocessing
import os

path = 'F:/Kuliah/STKI/20-10-2017 jawaban kuis/text files/bk.txt'
path1 = 'F:/Kuliah/STKI/20-10-2017 jawaban kuis/text files/bk_2.txt'
path2 = 'F:/Kuliah/STKI/20-10-2017 jawaban kuis/text files/bk_2.txt'
#path = 'G:/Kuliah/STKI/20-10-2017 jawaban kuis/text files/'

with open (path, 'r') as file:
    text = file.read()
#print (text)

with open (path1, 'r') as file:
    text1 = file.read()
#print (text)

with open (path2, 'r') as file:
    text1 = file.read()
#print (text)

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
    key_ordered = dic.keys()
    val_ordered = dic.values()
    
    # python 3
    #key = list(dic.keys())
    #val = list(dic.values())
    
    #key_ordered = [x for _, x in sorted(zip(val, key), reverse=descending)][:n]
    #val_ordered = sorted(val, reverse=descending)[:n]
    
    ## python 2
    return list(zip(key_ordered, val_ordered))

    # python 3
    #return list(zip(key_ordered, val_ordered))

def matrix(list_of_bow):
    
    """
    membuat nmatrix representasi bag of words
    baris dari matrix sejumlah banyaknya dictionary bow.
    sedangkan 
    """
    
    vocab_all = []
    jumlah_artikel = len(list_of_bow)
    
    #
    for item in list_of_bow:
        vocab_all.extend(item.keys())
        vocab_all = sorted(list(set(vocab_all)))
    
    #print vocab_all
    matrix_result = []
    for i in range(jumlah_artikel):
        matrix_result.append([])
    
    for j in range(jumlah_artikel):
        for kata in vocab_all:
            if kata not in list_of_bow[j].keys():
                matrix_result[j].append(0) # apabila tidak ada dalam dictionary awal, maka dimasukkan nilai 0 sebagai penanda bahwa kata tersebut tidak ada/bernilai 0 di dalam dictionary
            else:
                matrix_result[j].append(list_of_bow[j][kata])
    
    return matrix_result


# membuat representasi bag of words dari teks
list_token = preprocessing.preprotext(text).split() # memanggil function preprotext dari file preprocessing.py
dic = bow(list_token)

list_token1 = preprocessing.preprotext(text1).split() # memanggil function preprotext dari file preprocessing.py
dic1 = bow(list_token1)

A = dic
B = dic1
#print (sortdic(dic, n=10))
#print ("\n")

print (matrix([A,B]))

# menggunakan library counter untuk membuat bow, sudah ada fungsi untuk sorting
#from collections import Counter
#dic2 = Counter(list_token)
#print (dic2)
#print ("\n")
#print (dic2.most_common(10))