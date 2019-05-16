<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 22:59
 */
namespace Firebase\Notification;

interface JsonConvertible
{

    public function getJsonObject();

    public function toJsonString();

}