<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\TopUser;
use DB;

class CustomerController extends Controller
{
    public function index(){
        
        $customer=DB::table('top_users')
                 ->where('top_users.roleid',3)
                 ->orderBy('top_users.id','desc')
                 ->get();
                // dd($customer);

        return view('admin.pages.company.customerlist',compact('customer'));
    }

    public function edit($id){
        $data=TopUser::find($id);
        return $data;
    }

    public function update(Request $request){
                         
        $companyById = TopUser::find($request->id);
        $image=$request->file('image');
      
        if ($image) {
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
          
        } else {
            $imageUrl = $companyById->image;
        }
         $this->imge($request,$imageUrl);
         return redirect()->back()->with('edit','admin');
                     
      }
    
          public function imge($request,$imageUrl){
                 $admin=TopUser::find($request->id);
                 $admin->nid=$request->nid;
                 $admin->address=$request->address;
                 $admin->type="Verified";
                 $admin->image=$imageUrl;
                 $admin->save();        
          }




}
