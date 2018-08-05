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


