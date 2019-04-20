<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 22:46
 */

require_once 'BaseModel.php';
require_once 'JsonBuilder.php';

class CreateNotificationProperties extends BaseModel
{

    private $tokens;
    private $data;
    private $notification;

    public function setMessage($message)
    {
        $this->notification['message'] = $message;

        return $this;
    }

    public function setSound($sound)
    {
        $this->notification['sound'] = $sound;

        return $this;
    }


    public function setVibrate($vibrate)
    {
        $this->notification['vibrate'] = $vibrate;

        return $this;
    }

    public function setTitle($title)
    {
        $this->notification['title'] = $title;

        return $this;
    }

    public function setPriority($priority)
    {
        $this->notification['priority'] = $priority;

        return $this;
    }

    public function setBadge($badge)
    {
        $this->notification['badge'] = $badge;

        return $this;
    }

    public function getNotification()
    {
        return $this->notification;
    }

    public function setDeviceToken($tokens)
    {
        $this->tokens = is_array($tokens) ? $tokens : [$tokens];

        return $this;
    }

    public function getDeviceToken()
    {
        return $this->tokens;
    }

    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->addArray('registration_ids', $this->getDeviceToken())
            ->addArray('notification', $this->getNotification())
            ->addArray('data', $this->getData())
            ->getObject();
    }

}