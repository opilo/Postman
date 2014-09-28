<?php namespace Opilo\Postman\Validators;

use Laracasts\Validation\FormValidator;


class WebhookValidator extends  FormValidator {
    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'uid' => 'required',
        'url' => 'required',
        'pattern' => 'required',
        'group' => '',
    ];
} 