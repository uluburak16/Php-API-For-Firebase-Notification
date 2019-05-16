<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 22:43
 */
namespace Firebase\Notification;

class FBConfig
{

    public static function options()
    {
        $options = new Options();
        $options->setApiKey(''); //Set api key
        $options->setUrl('https://fcm.googleapis.com/fcm/send');

        return $options;
    }

}