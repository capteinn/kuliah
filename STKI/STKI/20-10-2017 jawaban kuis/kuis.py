# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

def unlist (lista):
    res = []
    for item in lista:
        if type(item) != list:
            res.append(item)
        else:
            res.extend(unlist(item))
    return res

def palindrom1(text):
    tengah = len(text)/2
    if text[:tengah] == text[:-(tengah+1)]:
        print (text, "merupakan palindrom")
    else:
        print (text, "bukan palindrom")

def palindrom2(text):
    if "".join(reversed(text)) == text:
        print (text, "merupakan palindrom")
    else:
        print (text, "bukan palindrom")

lista = [1,25,"a"]
text = "tamat"

palindrom1(text)
