

import os
import cv2
import numpy
import pickle
from time import sleep


images = []
labels = []
ids = {}
count = 0
for subdir in os.listdir('database'):
    ids[count] = subdir
    path = './database/'+subdir
    for filename in os.listdir(path):
        impath = path+ '/'+filename
        im = cv2.imread(impath,0)
        #cv2.imshow("Adding faces to traning set...", im)
        #sleep(1)
        images.append(im)
        labels.append(count)
    count+=1

images = numpy.array(images)
labels = numpy.array(labels)

#model = cv2.createFisherFaceRecognizer()
#model = cv2.face.FisherFaceRecognizer_create()
model = cv2.face.LBPHFaceRecognizer_create()
model.train(images, labels)
model.save('model.xml')
with open('model.pkl', 'wb') as f:
    pickle.dump(ids, f)
print("training completed")