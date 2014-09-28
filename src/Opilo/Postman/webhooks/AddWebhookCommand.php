<?php namespace Opilo\Postman\Webhooks;


class AddWebhookCommand {

    public $uid;
    public $token;
    public $url;
    public $fields;
    public $type;
    public $status;

    public function __construct($uid,$url,$fields,$type,$group)
    {
        $this->uid       = $uid;
        $this->url       = $url;
        $this->fields    = $fields;
        $this->type      = $type;
        $this->group     = $group;
    }
} 