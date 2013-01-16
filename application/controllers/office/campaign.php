<?php

class Office_Campaign_Controller extends Base_Controller
{

    public function action_index()
    {
        
        return View::make('office.dashboard');
    }



    public function action_list()
    {
     	$campaign = Campaign::get();


     	$data = array(
     			'campaign' => $campaign 
     			);

        return View::make('office.campaign.list',$data);
        
    }


    public function action_new()
    {

        return View::make('office.campaign.new');
    }


    public function action_edit($id)
    {
        
        $campaign  = Campaign::find($id);

        //dd($campaign);

        $data = array(
                'campaign' => $campaign 
                );

        return View::make('office.campaign.edit',$data);
    }



    public function action_update()
    {
        // this is dirty but faster

        $data = Input::all();


        // update a new subbi
        DB::table('campaigns')
            ->where('id', '=', $id)
            ->update($data);

        return Redirect::to('office/campaign');
    }

}