<?php

namespace tapacuk\kitapi;

class KitApi
{			
		public static function get_services()
		{
				$url = "https://tk-kit.ru/API.1?token=&f=get_services";
				$json = json_decode(file_get_contents($url), true);

				
				$obj = json_decode(json_encode($json['SRV']['item']), FALSE);
				
				$a = collect();
				
				foreach($obj as $ob)
						$a->push( (object) $ob);
				
				
				return $a;
		}
		
		public static function get_city_list()
		{
				$url = "https://tk-kit.ru/API.1?token=&f=get_city_list";
				$json = json_decode(file_get_contents($url), true);
				
				$obj = json_decode(json_encode($json['CITY']), FALSE);
				
				$a = collect();
				
				foreach($obj as $ob)
						$a->push( (object) $ob);
						
				return $a;	
		}
		
		public static function is_city($city)
		{
				$url = "https://tk-kit.ru/API.1?f=is_city&city=" . $city;
				$json = json_decode(file_get_contents($url), true);
				
				$obj = json_decode(json_encode($json), FALSE);
				
				$a = $obj[0];
				
				if($a == "0") return "There is no such city.";
				
				return $a;
		}
		
		public static function price_order($url)
		{
				//dd($url);
				$json = json_decode(file_get_contents($url), true);
				
				$obj = json_decode(json_encode($json), FALSE);

				//dd($obj);
				
				return $obj;
		}
}

?>