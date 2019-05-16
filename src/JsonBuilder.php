<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 8.04.2019
 * Time: 22:56
 */
namespace Firebase\Notification;

class JsonBuilder
{

    private $json;

    public function __construct(array $json)
    {
        $this->json = $json;
    }

    public static function create()
    {
        return new JsonBuilder([]);
    }

    public function add($key, $value)
    {
        if ( $value instanceof JsonConvertible ) {
            $this->json[$key] = $value->getJsonObject();
        } else {
            $this->json[$key] = $value;
        }
    }

    public function addArray($key, array $array = null)
    {
        if (isset($array)) {
            foreach ($array as $index => $value) {
                if ($value instanceof JsonConvertible) {
                    $this->json[$key][$index] = $value->getJsonObject();
                } else {
                    $this->json[$key][$index] = $value;
                }
            }
        }
        return $this;
    }

    public function getObject()
    {
        return $this->json;
    }

    public static function jsonEncode($json)
    {
        return json_encode($json);
    }

    public static function jsonDecode($json)
    {
        return json_decode($json);
    }


}