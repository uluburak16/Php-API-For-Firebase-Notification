#PHP Firebase Notification API

**Table of Contents**

[TOCM]

[TOC]

###Links

See (https://firebase.google.com/docs/cloud-messaging)

###Send Message to Device

    <?php
	$notify = new CreateNotificationProperties();
	
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken(SET_DEVİCE_TOKEN) // with signle or array
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>
    

###Send Message to Multiple Device

    <?php
	$notify = new CreateNotificationProperties();
	
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken([SET_DEVİCE_TOKENS]) // array
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>

###Set properties of your notification
	<?php
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken([SET_DEVİCE_TOKENS]) // an array
	   ->setVibrate(1) // 0 or 1
	   ->setSound(1)
	   ->setPriority('high')
	   ->setBadge(5) // integer
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>

###Set specific data
	<?php
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setData(['animal' => 'cat' ]) // e.g.
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>