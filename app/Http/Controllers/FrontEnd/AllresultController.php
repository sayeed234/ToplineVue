<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Vendor;
use DB;
use Count;

class AllresultController extends Controller
{
    public function allresult($id){
        $result= DB::table('vendors')
                ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                ->where('top_users.status', 1)
                ->where('vendors.service_id', $id)
                ->get();
    // dd($result);

        $slider= DB::table('vendors')
                ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                ->join('services', 'services.id', '=', 'vendors.service_id')
                ->where('top_users.status', 1)
                ->where('vendors.service_id', $id)
                ->limit(1)
                ->first();
        $total =DB::table('vendors')
                ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                ->join('services', 'services.id', '=', 'vendors.service_id')
                ->where('top_users.status', 1)
                ->where('vendors.service_id', $id)
                ->limit(1)
                ->count();
              //  dd($total);

        return view('FrontEnd.pages.search-result',[
            'result'=>$result,
            'slider'=>$slider,
            'total'=>$total
        ]);
    }
}
