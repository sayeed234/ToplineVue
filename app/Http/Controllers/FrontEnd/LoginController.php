<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Admin\TopUser;
use App\Admin\Vendor;
use Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        if($login_data=TopUser::where('mobile', $request->mobile)->where('status',1)->first()){
            if($login_data->mobile == $request->mobile && Hash::check($request->password,$login_data->password)){
                 
                //dd($login_data);
                if($login_data->roleid==0){
                    Session::put('logid',$login_data->id);
                    Session::put('name',$login_data->name);
                    Session::put('mobile',$login_data->mobile);
                    Session::put('role',$login_data->roleid);
                    return redirect('/dashboard');
                }else if($login_data->roleid==1){
                    Session::put('logid',$login_data->id);
                    Session::put('name',$login_data->name);
                    Session::put('mobile',$login_data->mobile);
                    Session::put('role',$login_data->roleid);
                    return redirect('/dashboard');
                }else if($login_data->roleid==2){
                    $vendor=DB::table('vendors')->where( 'vendors.user_id', $login_data->id )->first();
                    Session::put('logid',$vendor->id);
                    Session::put('vendorname',$vendor->vendor_name);
                    Session::put('serviceid',$vendor->service_id);
                    Session::put('name',$login_data->name);
                    Session::put('mobile',$login_data->mobile);
                    Session::put('role',$login_data->roleid);
                  
                    return redirect('/mydashboard');
                }else if($login_data->roleid==3){
                    Session::put('logid',$login_data->id);
                    Session::put('name',$login_data->name);
                    Session::put('mobile',$login_data->mobile);
                    Session::put('role',$login_data->roleid);
                    return redirect('/');
                }else{
                    Session::put('logid',$login_data->id);
                    Session::put('name',$login_data->name);
                    Session::put('mobile',$login_data->mobile);
                    Session::put('role',$login_data->roleid);
                    return redirect('/');
                }

                
            }
            else{
                return redirect('/')->with('invalidpass','ssss');

                
            }

        }
        else{
            return redirect('/')->with('invalid','ssss');


        }
    }

    public function logout(){
         Session::forget('logid');
         Session::forget('vendorname');
         Session::forget('name');
         Session::forget('mobile');
         Session::forget('role');
         Session::forget('serviceid');
         return redirect('/'); 
   }
}
    
    
