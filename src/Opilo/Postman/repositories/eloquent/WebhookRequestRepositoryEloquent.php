<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\WebhookRequestRepository;
use Opilo\Postman\Models\WebhookRequestModelModel as WebhookRequestModelModel;

class WebhookRequestRepositoryEloquent implements WebhookRequestRepository {
    protected $model;

    public function __construct(WebhookRequestModelModel $model)
    {
        $this->model = $model;
    }

    public function newInstance(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }
} 