<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\WebhookRepository;
use Opilo\Postman\Models\WebhookModel as WebhookModel;
use Opilo\Postman\Validators\WebhookValidator;
use Opilo\Postman\Libs\SignatureLib;
use Laracasts\Validation\FormValidationException;

class WebhookRepositoryEloquent implements WebhookRepository {

    protected $model;
    protected $validator;

    public function __construct(WebhookModel $model,WebhookValidator $validator,SignatureLib $SignatureLib)
    {
        $this->model     = $model;
        $this->validator = $validator;
        $this->SignatureLib = $SignatureLib;
    }

    public function newInstance(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }


    public function getByID($id){
        return $this->model->findOrFail($id);
    }

    public function makeNew($webhook)
    {
        $webhookModel = $this->model->newInstance();

        // Validation
        $attributes = array(
            'uid'     => $webhook->uid,
            'url'     => $webhook->url,
            'type'    => $webhook->type,
            'group'   => $webhook->group
        );

        try
        {
            $this->validator->validate($attributes);
        }
        catch (FormValidationException $e)
        {
            dd($e->getErrors());
        }

        $webhookModel->uid     = $webhook->uid;
        $webhookModel->url     = $webhook->url;
        $webhookModel->token   = $this->SignatureLib->genrateToken();
        $webhookModel->pattern = json_encode($webhook->fields);
        $webhookModel->group   = $webhook->group;
        $webhookModel->type    = $webhook->type;
        $webhookModel->status  = 1;
        $webhookModel->save();

        return $webhookModel;
    }

    /**
     * @param $newWebhook
     * @return \Illuminate\Support\Collection|static
     */
    public function Change($newWebhook){

        $webhook = $this->getByID($newWebhook->id);

        if(!is_null($newWebhook->newtoken)){
            if($newWebhook->newtoken == true)
                $webhook->token   = $this->SignatureLib->genrateToken();
            unset($newWebhook->newtoken);
        }

        if(!is_null($newWebhook->fields)){
            $webhook->pattern = json_encode($newWebhook->fields);
            unset($newWebhook->fields);
        }

        foreach($newWebhook as $key=>$val){
            if(!is_null($newWebhook->{$key}) ){
                $webhook->{$key} = $val;
            }
        }

        $attributes = array(
            'uid'     => $webhook->uid,
            'url'     => $webhook->url,
            'type'    => $webhook->type,
            'group'   => $webhook->group
        );

        try
        {
            $this->validator->validate($attributes);
        }
        catch (FormValidationException $e)
        {
            dd($e->getErrors());
        }

        $webhook->save();

        return $webhook;
    }

    public function ChangeStatus($id,$status){

    }

}