# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

# PATHnya garis miring di path WINDOWS dibalik DULU JANGAN LUPA!!!!!!d dari \ ganti ke /
path = 'C:/Users/praktikan/Desktop/text files/bk.txt'

with open (path, 'r') as file:
    text = file.read()
# print (text)

## Tokenisasi
def tokenize (string, separator=None):
    return string.split(separator)
# list_token = tokenize(text)
# print (list_token)

## Case Folding
def fold (string):
    return string.lower()
# text = fold(text)
# print (text)

## Squeeze whitespace
def squeeze_whitespace (string):
    # while '\n' in string:
    #    string = string.replace('\n', ' ')
    while '  ' in string:
        string = string.replace('  ', ' ')
    return string
# text = squeeze_whitespace (text)
# print (text)

## Remove Punctuation (string)
def remove_punctuation (string):
    punc = ["!", "#", "$", "&", "'", "(", ")", "*", "+", ",", "-", ".", "/", ":", ";", "<", "=", ">","?", "@", "[", "\\", "]", "^", "_", "`", "{", "|", "}", "~", "\""]
    for item in string:
        if item in punc:
            string = string.replace (item, " ")
        return string.strip()
    # text = remove punctuation (text)
    # print (text)
    
## Remove Stopwords
path_stopwords = "./stopwords.txt"
def remove_stopword (list_of_string):
    with open (path_stopwords, 'r') as file:
        stopwords = file.readlines()
        stopwords = [item.rstrip('\n') for item in stopwords]
    list_of_strings = [item for item in list_of_string if item not in stopwords and len(item) > 1]
    return list_of_strings
# text = remove_stopword(tokenize(text))
# print (text)

def preprotext (string):
    token = tokenize (squeeze_whitespace (string))
    cleantext = [fold(item) for item in token]
    cleantext = [remove_punctuation(item) for item in cleantext]
    cleantext = remove_stopword(cleantext)
    return " ".join (cleantext)

print (preprotext(text))