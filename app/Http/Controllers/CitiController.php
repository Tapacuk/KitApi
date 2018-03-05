<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use tapacuk\kitapi\KitApi;

class CitiController extends Controller
{
    public function services()
    {
    		//$data = new KitApi();
    		//$services = $data->get_services();
    		//dd($cities->ZA);
    		$services = KitApi::get_services();
    		return view('services', compact('services'));
    }
    
    public function cities()
    {
    		$cities = KitApi::get_city_list();
    		return view('cities', compact('cities'));
    }
    
    public static function is_city($city)
    {
    		$isCity = KitApi::is_city($city);
    		return view('is_city', compact('isCity'));
    }
    
    public static function price_order(Request $request)
    {
    		$obj = new KitApi();
    		//_GET = ['DELIVERY' => 0, PICK_UP => 1]
            //value = 'DELIVERY=0&PICK_UP=1&'
      $url = "https://tk-kit.ru/API.1?f=price_order&";      
    		foreach($request->input() as $key => $value)
    		    {
    		    				
    		        if($value == null || $value == "" || $value == " ")
                    {
                        $value = 0;
                    }
    		        $value = $key.'='.$value.'&';
														$obj->$key = $value;
														$url .= $value;
										}
						//dd($url);
		  
				  $price = $obj->price_order($url);
    		return view('price', compact('price'));
    }
}
