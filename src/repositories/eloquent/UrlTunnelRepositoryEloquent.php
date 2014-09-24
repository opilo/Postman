<?php namespace Opilo\Postman\Repositories\Eloquent;

use Opilo\Postman\Repositories\UrlTunnelRepository;
use Opilo\Postman\Models\UrlTunnelModel as UrlTunnelModel;

class UrlTunnelRepositoryEloquent implements UrlTunnelRepository {

    protected $model;

    public function __construct(UrlTunnelModel $model)
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