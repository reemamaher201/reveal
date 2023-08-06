<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Client; 
use App\Models\Service; 

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){

        $data['services'] = Service::query()->get();
        $data['clients'] = Client::query()->get();
        
         return view('parts.app' , $data);
    }

    public function about(){
         return view('about');
    }
}
