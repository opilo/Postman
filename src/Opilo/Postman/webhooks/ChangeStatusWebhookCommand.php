<?php namespace Opilo\Postman\Webhooks;


class ChangeStatusWebhookCommand {

    public $id;
    public $status;

    public function __construct($id,$status){
        $this->id     = $id;
        $this->status = $status;
    }
} 