<?php

class edittimecontroller extends \BaseController {

    //   $email ;
    //   $volunteer ;

    public function store()
    {

        $time = new timestamp;
        $time->signin = Input::get('addtimein' + 'addtimeinM');
        $time->signout = Input::get('addtimeout');

        $time-> save();

        return Redirect::to('/SignIn');

    }

    public function edittime()
    {



    }
}