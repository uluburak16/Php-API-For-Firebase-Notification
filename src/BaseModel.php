<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 23:00
 */

require_once 'JsonConvertible.php';

abstract class BaseModel implements JsonConvertible
{

    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }

}