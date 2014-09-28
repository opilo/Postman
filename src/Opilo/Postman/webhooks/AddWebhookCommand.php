<?php namespace Opilo\Postman\Webhooks;


class AddWebhookCommand {

    public $uid;
    public $token;
    public $url;
    public $pattern;
    public $status;

    public function __construct($uid,$url,$pattern,$group)
    {
        $this->uid       = $uid;
        $this->url       = $url;
        $this->pattern   = $pattern;
        $this->group     = $group;
    }
} 