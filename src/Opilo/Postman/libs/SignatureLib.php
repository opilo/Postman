<?php namespace Opilo\Postman\Libs;

class SignatureLib {

    public function genrateToken(){
        $token = md5(uniqid(mt_rand(), true));
        return $token;
    }
} 