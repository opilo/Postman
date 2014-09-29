<?php namespace Opilo\Postman\WebhookCommands;


class ChangeStatusWebhookCommand {

    public $id;
    public $status;

    public function __construct($id,$status){
        $this->id     = $id;
        $this->status = $status;
    }
} 