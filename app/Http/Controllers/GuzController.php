<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class GuzController extends Controller
{
    public function index()
				{
						$client = new Client();
						$res = $client->request('GET', 'https://tk-kit.ru/API.1?f=get_services
');
						//echo $res->getStatusCode();
						// "200"
						//echo $res->getHeader('content-type');
						// 'application/json; charset=utf8'
						dd($res->getBody());
						// {"type":"User"...'
						return view('home');
				}
}
