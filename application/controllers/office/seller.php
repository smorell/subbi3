<?php

class Office_Seller_Controller extends Base_Controller
{


    public function action_seller_list()
    {
     	$sellers = Seller::get();


     	$data = array(
     			'sellers' => $sellers 
     			);

        return View::make('office.seller.list',$data);
        
    }


    public function action_seller_new()
    {
     	$promo = Promoter::get();
     	$camp = Campaign::get();

     	$data = array(
     			'promoter' => $promo ,
     			'campaign' => $camp 
     			);

        return View::make('office.seller.new',$data);
    }


    public function action_seller_edit($id)
    {
        

        $promo  = Promoter::get();
        $camp   = Campaign::get();
        $seller  = Seller::find($id);

        //dd($seller);

        $data = array(
                'promoter' => $promo ,
                'campaign' => $camp, 
                'seller' => $seller 
                );

        return View::make('office.seller.edit',$data);
    }



    public function action_seller_update()
    {
        // this is dirty but faster

        $data = Input::all();

        // update a new seller
        DB::table('seller')
            ->where('id', '=', $id)
            ->update($data);

        return Redirect::to('office/seller');
    }

}