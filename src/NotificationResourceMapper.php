<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 14:44
 */

class NotificationResourceMapper
{

    public function mapNotification(NotificationResource $notificationResource, $json_object)
    {
        if ( isset($json_object->multicast_id) ){
            $notificationResource->setMulticastId($json_object->multicast_id);
        }

        if ( isset($json_object->success) ) {
            $notificationResource->setSuccess($json_object->success);
        }

        if ( isset($json_object->failure) ) {
            $notificationResource->setFailure($json_object->failure);
        }

        if ( isset($json_object->canonical_ids) ) {
            $notificationResource->setCanonicalIds($json_object->canonical_ids);
        }

        if ( isset($json_object->results) ) {
            $notificationResource->setResult($json_object->results);
        }
    }

}