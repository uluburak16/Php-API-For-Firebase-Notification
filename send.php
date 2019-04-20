<?php

require_once 'src/CreateNotificationProperties.php';
require_once 'src/FirebaseInitialize.php';

//Be sure to set the Api key
$notify = new CreateNotificationProperties();
$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken('fywc9UQX--c:APA91bG8qCixyAJfeXiDG8Fxqz3V1BdhkFKIv0iFSQNvs_EjjBUT6fLf4eSslnwskYXRKs7GNhr0giV5Vbpo45EN9L7raAhHpx81cGqK5oGTJOz_FkBbdRDiD38UU946BznvmglT7vGj')
	   ->setSound(1)
	   ->setVibrate(1);

var_dump(FirebaseInitialize::create($notify)->getResult());
