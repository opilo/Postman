<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\UrlTunnelSmsRepository;
use Opilo\Postman\Models\UrlTunnelSmsModelModel as UrlTunnelSmsModelModel;

class UrlTunnelSmsRepositoryEloquent implements UrlTunnelSmsRepository {
    protected $model;

    public function __construct(UrlTunnelSmsModelModel $model)
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