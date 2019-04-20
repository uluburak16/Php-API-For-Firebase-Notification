<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 13:55
 */

class Curl
{
    public function get($url, $header)
    {
        return $this->exec($url, array(
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $header
        ));
    }

    public function post($url, $header, $content)
    {
        return $this->exec($url, array(
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $content,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $header
        ));
    }

    public function exec($url, $options)
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}