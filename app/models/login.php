<?php

class login extends Eloquent{

    public $timestamps = false;

    protected $fillable = ['username', 'password'];

    public $messages;


    public static $rules = [

        'username' => 'required',
        'password' => 'required'

    ];

    public function isValid(){

        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes())
            return true;

        $this->messages = $validation->messages();
            return false;

    }

}