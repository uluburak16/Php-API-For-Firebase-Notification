<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 13:55
 */

require_once 'Curl.php';


class HttpClient extends Curl
{

    public static function init()
    {
        return new HttpClient();
    }

    protected static function getHttpHeaders(Options $options)
    {
        $header = array(
            'Authorization: key=' . $options->getApiKey(),
            "Content-type: application/json",
        );

        return $header;
    }

}