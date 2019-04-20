<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 10.04.2019
 * Time: 13:55
 */

require_once 'HttpClient.php';

class NotificationResource extends HttpClient
{

    private $multicast_id;
    private $success;
    private $failure;
    private $canonical_ids;
    private $result;

    public function setMulticastId($multicast_id)
    {
        $this->multicast_id = $multicast_id;
    }

    public function getMulticastId()
    {
        return $this->multicast_id;
    }

    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setFailure($failure)
    {
        $this->failure = $failure;
    }

    public function getFailure()
    {
        return $this->failure;
    }

    public function setCanonicalIds($canonical_ids)
    {
        $this->canonical_ids = $canonical_ids;
    }

    public function getCanonicalIds()
    {
        return $this->canonical_ids;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

}