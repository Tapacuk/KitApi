<?php

		namespace tapacuk\kitapi\Http\Controllers;
		
		use App\Http\Controllers\Controller;
		use tapacuk\kitapi\Models\KitApi;
		use GuzzleHttp\Exception\GuzzleException;
		use GuzzleHttp\Client;
		use Illuminate\Http\Request;
		
		class KitController extends Controller
		{
				public function index(Request $request)
				{
						$url = 'https://tk-kit.ru/API.1?f=get_im_services';
						$json = json_decode(file_get_contents($url), true);
						//$requestt = $request->get($wos); 
						dd($json['SRV']['item'][0]['ZA']);
						// {"type":"User"...'
						return view('tapacuk\kitapi::index');
				}
				
				public function add()
				{
						return view('tapacuk\kitapi::add');
				}
				
				public function store(Request $request)
				{
						$validator = Validator::make($request->all(), [
								'name' => 'required',
						]);
						
						if($validator->fails())
						{
								return redirect(route('/add'))->withErrors($validator)->withInput()->back();
						}
						
						KitApi::create([
								'name' => $request->input('name'),
								'email' => $request->input('email'),
								'password' => $request->input('password'),
						]);
				}
		}

?>