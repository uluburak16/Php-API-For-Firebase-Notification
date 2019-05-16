<?php

include __DIR__.'/vendor/autoload.php';

use Firebase\Notification\CreateNotificationProperties;
use Firebase\Notification\FirebaseInitialize;

//Be sure to set the Api key
$notify = new CreateNotificationProperties();
$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken(SET_DEVİCE_TOKEN) // with signle or array
	   ->setSound(1)
	   ->setVibrate(1);

var_dump(FirebaseInitialize::create($notify)->getResult());
