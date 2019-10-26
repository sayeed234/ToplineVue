<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function vendordashboard(){
        return view('vendor.pages.indexVendor');
    }
}
