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

    public function makeNew($uid,$url,$fields,$type,$group)
    {
        $webhook = $this->model->newInstance();

        // Validation
        $attributes = array(
            'uid'     => $uid,
            'url'     => $url,
//            'pattern' => $pattern,
            'type'    => $type,
            'group'   =>$group
        );
        try
        {
            $this->validator->validate($attributes);
        }
        catch (FormValidationException $e)
        {
            dd($e->getErrors());
        }

        $webhook->uid     = $uid;
        $webhook->url     = $url;
        $webhook->token   = $this->SignatureLib->genrateToken($attributes);
        $webhook->pattern = json_encode($fields);
        $webhook->group   = $group;
        $webhook->type    = $type;
        $webhook->status  = 1;
        $webhook->save();

        return $webhook;
    }

}