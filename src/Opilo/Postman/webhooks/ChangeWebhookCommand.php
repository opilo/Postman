<?php namespace Opilo\Postman\Webhooks;


class ChangeWebhookCommand {

    public $id;
    public $uid;
    public $url;
    public $newtoken;
    public $fields;
    public $type;
    public $group;
    public $status;

    public function __construct($id,$uid = null,$url = null,$newtoken = null,$fields = null,$type = null,$group = null,$status = null)
    {
        $this->id        = $id;
        $this->uid       = $uid;
        $this->url       = $url;
        $this->newtoken  = $newtoken;
        $this->fields    = $fields;
        $this->type      = $type;
        $this->group     = $group;
        $this->status    = $status;
    }
} 