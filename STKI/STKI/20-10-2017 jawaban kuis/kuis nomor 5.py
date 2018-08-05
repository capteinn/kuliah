# -*- coding: utf-8 -*-
"""
Created on Fri Sep 22 08:19:44 2017

@author: praktikan
"""
# Import file python pada file yang berbeda
import preprocessing

# with open (path, 'r') as file:
    # text = file.read()
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
    
    print vocab_all
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

A = {'presiden':5, 'jokowi':5, 'pulang':3, 'sungkem':2, 'solo':1}
B = {'gibran':5, 'bambang':4, 'pulang':1, 'sungkem':2, 'balap':1}
C = {'presiden':5, 'sari':5, 'raden':3, 'kampung':7, 'solo':1}

print matrix([A,B,C])