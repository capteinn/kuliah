# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

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
    #key_ordered = dic.keys()
    #val_ordered = dic.values()
    
    # python 3
    key = list(dic.keys())
    val = list(dic.values())
    
    key_ordered = [x for _, x in sorted(zip(val, key), reverse=descending)][:n]
    val_ordered = sorted(val, reverse=descending)[:n]
    
    ## python 2
    #return list(zip(key_ordered, val_ordered))

    # python 3
    return list(zip(key_ordered, val_ordered))

