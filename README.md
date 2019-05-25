#PHP Firebase Notification API

# Table of contents
1. [Links](#links)
2. [Notification](#send)
    [Send Message to Device](#send)
    [Send Message to Multiple Device](#multiple)
    [Set Properties of Your Notification](#properties)
    [Set Specific Data](#data)

<a name="links"></a>
###Links

See (https://firebase.google.com/docs/cloud-messaging)

<a name="send"></a>
###Send Message to Device

    <?php
	$notify = new CreateNotificationProperties();
	
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken(SET_DEVİCE_TOKEN) // with signle or array
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>

<a name="multiple"></a>
###Send Message to Multiple Device

    <?php
	$notify = new CreateNotificationProperties();
	
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken([SET_DEVİCE_TOKENS]) // array
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	?>

<a name="properties"></a>
###Set Properties of Your Notification

    <?php
	$notify = new CreateNotificationProperties();
	
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setDeviceToken([SET_DEVİCE_TOKENS]) // array
	   	   ->setVibrate(1) // 0 or 1
	   ->setSound(1)
	   ->setPriority('high')
	   ->setBadge(5) // integer
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	?>

<a name="data"></a>
###Set Specific Data

    <?php
	$notify->setMessage('Test')
	   ->setTitle('Firebase Notification')
	   ->setData(['animal' => 'cat']) // e.g.
	   
	   var_dump(FirebaseInitialize::create($notify)->getResult());
	   ?>