<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\WebhookRepository;
use Opilo\Postman\Models\WebhookModel as WebhookModel;

class WebhookRepositoryEloquent implements WebhookRepository {

    protected $model;

    public function __construct(WebhookModel $model)
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