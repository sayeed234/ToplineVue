<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliverymanController extends Controller
{
    public function index(){
        return view('admin.pages.company.deliveryman');
    }
}
