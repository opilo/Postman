<?php namespace Opilo\Postman\Repositories;


interface UrlTunnelSmsRepository {

    public function newInstance();

    public function create();

    public function getById($id);

    public function update($id,$data);
} 