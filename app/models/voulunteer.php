<?php

class volunteer extends Eloquent{


    protected $fillable =['time in','time out', 'first name', 'last name', 'category'];

    public $messages;

    public static $rules =[
      'time in' => 'date|required',
      'time out' => 'date|required',
      'first name' => 'required',
      'last name' => 'required',
      'category' => 'required'

    ];

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if($validation->passes())
            return true;

        $this->messages = $validation->messages();
        return false;
    }

    public static function search($keyword){
        return static::where('fname','LIKE','%'.$keyword.'%');
    }


}