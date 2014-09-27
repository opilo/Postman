<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\WebhookSmsRepository;
use Opilo\Postman\Models\WebhookSmsModelModel as WebhookSmsModelModel;

class WebhookSmsRepositoryEloquent implements WebhookSmsRepository {
    protected $model;

    public function __construct(WebhookSmsModelModel $model)
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