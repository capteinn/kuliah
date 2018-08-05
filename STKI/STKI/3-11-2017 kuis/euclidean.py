# -*- coding: utf-8 -*-
"""
Created on Thu Nov  2 13:52:40 2017

@author: praktikan
"""
import math

def euclidean(vector1, vector2):
    """
    fungsi untung menghitung jarak aantara 2 vector dengan rumus euclidean ddist
    :param vector1: vektor 1
    :param vector2: vektor 2
    :return:
    """
    
    #**2 : pangkat 2
    #**3 : pangkat 3
    #**4 : pangkat 4 
    # dst..
    
    dist = [(a-b)**2 for a, b in zip (vector1, vector2)]
    dist = math.sqrt(sum(dist))
    
    return dist

#fungsi untuk nomor 2
def euclidean2(vector1, vector2):

    dot = [(a*b) for a, b in zip (vector1, vector2)] #mengalikan setiap item pada vektor 1 dengan vektor 2
    dot = sum(dot)
    
    dist = [(a**2+b**2) for a, b in zip (vector1, vector2)] #menjumlahkan hasil kuadrat dari setiap item pada vektor 1 dan vektor 2
    dist = sum(dist)
    
    hasil = dot/float(dist-dot) #membagi sesuai dengan rumus
    
    return hasil



