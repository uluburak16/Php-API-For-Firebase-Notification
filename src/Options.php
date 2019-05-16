<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 22:39
 */
namespace Firebase\Notification;

class Options
{

    private $api_key;
    private $url;

    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    public function getApiKey()
    {
        return $this->api_key;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

}