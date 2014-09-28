<?php namespace Opilo\Postman\Libs;

use Illuminate\Hashing\HasherInterface;

class SignatureLib {

    protected $hasher;

    public function __construct(HasherInterface $hasher){
        $this->hasher = $hasher;
    }

    public function genrateToken($data){
        $uniqString = '';
        foreach($data as $item){
            $uniqString .= $item;
        }
        return $this->hasher->make($uniqString);
    }
} 