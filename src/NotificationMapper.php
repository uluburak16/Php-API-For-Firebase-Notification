<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 14:38
 */

require_once 'NotificationResourceMapper.php';

class NotificationMapper extends NotificationResourceMapper
{

    private $json_object;

    public function __construct($json_object)
    {
        $this->json_object = $json_object;
    }

    public static function create($json_object = null)
    {
        return new NotificationMapper($json_object);
    }

    public function jsonDecode()
    {
        $this->json_object = JsonBuilder::jsonDecode($this->json_object);

        return $this;
    }

    public function mapNotificationResource(NotificationResource $notificationResource)
    {
        parent::mapNotification($notificationResource, $this->json_object);

        return $notificationResource;
    }

}