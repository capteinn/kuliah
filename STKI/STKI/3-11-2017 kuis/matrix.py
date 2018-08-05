# -*- coding: utf-8 -*-
"""
Created on Thu Nov  2 13:38:01 2017

@author: praktikan
"""

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