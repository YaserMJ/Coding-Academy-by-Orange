# -*- coding: utf-8 -*-
"""
Created on Sun Dec  1 16:40:08 2019

@author: Yaser MJ
"""
import statistics as st
import random
import math
from PIL import Image,ImageDraw,ImageFilter

#Exercise one:
x = [3,15,4.5,6.75,2.25,5.75,2.25]
print(st.mean(x))
print(st.harmonic_mean(x))
print(st.median(x))
print(st.median_low(x))
print(st.median_high(x))
print(st.median_grouped(x))
print(st.mode(x))
print(st.pstdev(x))
print(st.pvariance(x))
print(st.stdev(x))
print(st.variance(x))
#==============================================================================
#Exercise two:
print(random.random())
print(random.randrange(10))
print(random.choice(['Ali','khalid','Hussam']))
print(random.sample(range(1000),10))
print(random.choice('Orange Academy'))
items = [1,5,8,9,2,4]
random.shuffle(items)
print(items)
print(random.randint(20,30))
print(random.randrange(1000,2111,5))
print(random.uniform(10000,11000))
print()
#==============================================================================
#Exercise three:
print ('pi: %.10f' % math.pi)
print(math.cos(200))
print(math.sin(30))
print(math.tan(180))
print(math.floor(10.8))
print(math.ceil(10.8))
#==============================================================================
#Exercise four:
pic=Image.open("sad.jpg")
print(pic.format,pic.size,pic.mode)
pic.show()
imageFlip=pic.transpose(Image.FLIP_TOP_BOTTOM)
imageFlip.show()
grayscale_image=pic.convert('L')
grayscale_image.show()
crop=pic.crop((0,0,50,50))
crop.show()
draw=ImageDraw.Draw(x)
draw.line((0,0)+pic.size,fill=(255,255,255))
draw.line((0,pic.size[1],pic.size[0],0),fill=(255,255,255))
draw.text((pic.size[0]/2-pic.size[0]/2,pic.size[1]/2+20),"sad",fill=(255,255,0))
pic.show()
new=pic.filter(ImageFilter.EDGE_ENHANCE)
new.show()
new=pic.filter(ImageFilter.FIND_EDGES)
new.show()
new=pic.filter(ImageFilter.SMOOTH)
new.show()
new=pic.filter(ImageFilter.SHARPEN)
new.show()
alpha=0.5
pic2=Image.open("sad_cat.jpg").resize(pic.size)
Image.blend(pic,pic2,alpha).save("sad_cat_new.jpg".format(alpha))
pic=Image.open("sad_cat_new.JPG")
pic.show()
blurred=pic.filter(ImageFilter.BLUR)
blurred.show()
size=(128,128)
pic.thumbnail(size)
pic.show()
rot=pic.rotate(90)
rot.show()
mask=Image.open("mask_of_sadness.Jpg")
mask=mask.resize(pic.size)
Image.composite(pic,pic2,mask).save("ultimate_sadness.jpg")
new=Image.open("ultimate_sadness.jpg")
new.show()
#==============================================================================