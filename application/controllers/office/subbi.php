<?php

class Office_Subbi_Controller extends Base_Controller
{

    public function action_index()
    {
        
        return View::make('office.dashboard');
    }



    public function action_list()
    {
     	$subbis = Subbi::get();


     	$data = array(
     			'subbis' => $subbis 
     			);

        return View::make('office.subbi.list',$data);
        
    }


    public function action_new()
    {
     	$promo = Promoter::get();
     	$camp = Campaign::get();

     	$data = array(
     			'promoter' => $promo ,
     			'campaign' => $camp 
     			);

        return View::make('office.subbi.new',$data);
    }


    public function action_edit($id)
    {
        

        $promo  = Promoter::get();
        $camp   = Campaign::get();
        $subbi  = Subbi::find($id);

        //dd($subbi);

        $data = array(
                'promoter' => $promo ,
                'campaign' => $camp, 
                'subbi' => $subbi 
                );

        return View::make('office.subbi.edit',$data);
    }



    public function action_update($id)
    {
        // this is dirty but faster

        $data = Input::all();
        $data['dob']            = date('Y-m-d',strtotime(Input::get('dob')));
        $data['hist_1_from']    = date('Y-m-d',strtotime(Input::get('hist_1_from')));
        $data['hist_2_from']    = date('Y-m-d',strtotime(Input::get('hist_2_from')));
        $data['hist_3_from']    = date('Y-m-d',strtotime(Input::get('hist_3_from')));
        $data['hist_4_from']    = date('Y-m-d',strtotime(Input::get('hist_4_from')));
        $data['hist_5_from']    = date('Y-m-d',strtotime(Input::get('hist_5_from')));
        $data['hist_1_to']      = date('Y-m-d',strtotime(Input::get('hist_1_to')));
        $data['hist_2_to']      = date('Y-m-d',strtotime(Input::get('hist_2_to')));
        $data['hist_3_to']      = date('Y-m-d',strtotime(Input::get('hist_3_to')));
        $data['hist_4_to']      = date('Y-m-d',strtotime(Input::get('hist_4_to')));
        $data['hist_5_to']      = date('Y-m-d',strtotime(Input::get('hist_5_to')));

        // update a new subbi
        DB::table('subbis')
            ->where('id', '=', $id)
            ->update($data);

        return Redirect::to('office/subbi');
    }

}