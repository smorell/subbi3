<?php

class Office_Promoter_Controller extends Base_Controller
{

    public function action_index()
    {
        
        return View::make('office.dashboard');
    }



    public function action_list()
    {
     	$promoter = Promoter::get();


     	$data = array(
     			'promoter' => $promoter 
     			);

        return View::make('office.promoter.list',$data);
        
    }


    public function action_new()
    {

        return View::make('office.promoter.new');
    }


    public function action_edit($id)
    {
        
        $promoter  = Promoter::find($id);

        //dd($promoter);

        $data = array(
                'promoter' => $promoter 
                );

        return View::make('office.promoter.edit',$data);
    }



    public function action_update()
    {
        // this is dirty but faster

        $data = Input::all();


        // update a new subbi
        DB::table('promoters')
            ->where('id', '=', $id)
            ->update($data);

        return Redirect::to('office/promoter');
    }

}