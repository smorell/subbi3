<?php

class Office_Controller extends Base_Controller
{

    public function action_index()
    {
        
        return View::make('office.dashboard');
    }



}