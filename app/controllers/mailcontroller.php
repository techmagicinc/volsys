<?php

class mailcontroller extends \BaseController {

 //   $email ;
 //   $volunteer ;

    protected $mail;

    public function __construct(mail $mail)
    {
        $this->mail = $mail;
    }
	public function store()
    {



        $vName = Input::get('volunteer name');
        $message = Input::get('message');

        $data = array( 'volMess' => $message, 'volName' => 'Message from: '.$vName);

        $input = Input::all();

        if (!$this->mail->fill($input)->isValid()) {

            return Redirect::back() ->withInput() ->withErrors($this ->mail->messages);
        }

        Mail:: send('emails.message',//['key'=>'value']
            $data, function ($message) use ($data) {


                $message->to('presbw@gmail.com', 'Admin')
                    ->subject($data['volName']);
            });

        return Redirect::to('/SignIn');

    }

    public function mail()
    {



    }
}