<?php

class SearchController extends BaseController {

	public function executeSearch()
    {
        $keywords = Input::get('keywords');

        $users = User::all();

        $searchUsers=new \Illuminate\Database\Eloquent\Collection();

        foreach($users as $u)
        {
            if(Str::contains(Str::lower($u->name), Str::lower($keywords)))
                $searchUsers->add($u);
        }

        return View::make('/searchUsers')->with('searchUsers',$searchUsers);
    }
}
