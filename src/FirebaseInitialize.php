<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 13:51
 */

require_once 'FBConfig.php';
require_once 'NotificationResource.php';
require_once 'NotificationMapper.php';

class FirebaseInitialize extends NotificationResource
{

    public static function create(CreateNotificationProperties $request)
    {
        $options = FBConfig::options();
        $result  = parent::init()->post($options->getUrl(), parent::getHttpHeaders($options), $request->toJsonString());

        return NotificationMapper::create($result)->jsonDecode()->mapNotificationResource(new FirebaseInitialize());
    }

}