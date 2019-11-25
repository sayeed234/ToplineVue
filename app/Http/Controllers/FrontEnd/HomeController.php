<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Service;
use DB;

class HomeController extends Controller{

    
    public function home(){
        $service = DB::table('services')
                ->where('services.status', 1)
                ->orderBy('services.sort', 'asc')
                ->get();
                //dd($service);
        return view('welcome',[
            'service'=>$service
        ]);
    }
}
