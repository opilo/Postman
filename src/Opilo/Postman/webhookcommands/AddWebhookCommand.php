<?php namespace Opilo\Postman\WebhookCommands;


class AddWebhookCommand {

    public $uid;
    public $url;
    public $token;
    public $fields;
    public $type;
    public $group;

    public function __construct($uid,$url,$fields,$type,$group)
    {
        $this->uid       = $uid;
        $this->url       = $url;
        $this->fields    = $fields;
        $this->type      = $type;
        $this->group     = $group;
    }
} 