<?php

class mailcontroller extends \BaseController {

 //   $email ;
 //   $volunteer ;

	public function store()
    {


        $vName = Input::get('vName');
        $message = Input::get('message');

        $data = array( 'volMess' => $message, 'volName' => 'Message from: '.$vName);

        Mail:: send('emails.message',//['key'=>'value']
                $data ,function ($message) use ($data){


                $message->to('presbw@gmail.com', 'Admin')
                    ->subject($data['volName']);
            });

        return Redirect::to('/SignIn');

    }

    public function mail()
    {



    }
}