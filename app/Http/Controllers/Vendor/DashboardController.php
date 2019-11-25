<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class DashboardController extends Controller
{
    public function vendordashboard(){
        if(Session::get('role')==2){
            return view('vendor.pages.indexVendor');
        } 
        else {
            return redirect()->back();
        }
       
    }
}
