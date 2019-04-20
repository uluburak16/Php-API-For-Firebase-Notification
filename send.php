<?php

require_once 'src/CreateNotificationProperties.php';
require_once 'src/FirebaseInitialize.php';

//Be sure to set the Api key
$notify = new CreateNotificationProperties();
$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken() //Set firebase token or tokens
	   ->setSound(1)
	   ->setVibrate(1);

var_dump(FirebaseInitialize::create($notify)->getResult());
