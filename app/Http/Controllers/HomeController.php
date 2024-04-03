<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Acc;

class HomeController extends Controller
{

    public function homeAction(){
        
        $data = Acc::all();
        return view( 'home',['data'=>$data] );
    }
}
