<?php

class Office_Controller extends Base_Controller
{

    public function action_index()
    {
        
        return View::make('office.dashboard');
    }



    public function action_subbi_list()
    {
     	$subbis = Subbi::get();

     	$data = array(
     			'subbis' => $subbis 
     			);

        return View::make('office.subbi_list',$data);
    }

}