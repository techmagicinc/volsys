<?php

class mail extends Eloquent{


    protected $fillable = ['volunteer name', 'message'];

    public $messages;

    public static $rules = [
        'volunteer name' => 'required',
        'message' => 'required'
    ];

    public function isValid()
    {

        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes())
            return true;

        $this->messages = $validation->messages();
        return false;

    }

}

