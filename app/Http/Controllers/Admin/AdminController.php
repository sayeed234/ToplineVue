<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\TopUser;
use DateTime;
use DB;
use Session;
class AdminController extends Controller
{

    
    public function index(){

        $admin = DB::table('top_users')->where('roleid', '1')->get();
        return view('admin.pages.company.useradmin',[
            'admin'=>$admin
        ]);
    }
    public function store(Request $request){


      $data=TopUser::where('mobile', $request->phone)->where('status',1)->first();
      if($data!=''){
           return redirect()->back()->with('alredy','admin');
      }
         
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
            $this->img($request,$imageUrl);
          
            return redirect()->back()->with('add','admin');
       
      }
              protected function img($request,$imageUrl){
                      $current_date = new DateTime("now");
                      $admin=new TopUser();
                      $admin->name=$request->name;
                      $admin->mobile=$request->phone;
                      $admin->email=$request->email;
                      $admin->address=$request->address;
                      $admin->joindate=$current_date->format("Y-m-d");
                      $admin->created_by=Session::get('logid');
                      $admin->updated_by=Session::get('logid');
                      $admin->type='Admin';
                      $admin->roleid=1;
                      $admin->status=1;
                      $admin->password=bcrypt($request->password);
                      $admin->login_id=$current_date->format("Yis");
                      $admin->image=$imageUrl;
                      $admin->save();         
                      return redirect()->back();
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
                         $admin->name=$request->name;
                         $admin->mobile=$request->phone;
                         $admin->email=$request->email;
                         $admin->address=$request->address;
                         $admin->updated_by=Session::get('logid');
                         $admin->image=$imageUrl;
                         $admin->save();      
            
                  }

                  public function adminstatus($id){
                    $status =TopUser::find($id);
                    if ($status->status==1) {
                      $status->status=0;
                      $status->save();
                      return redirect()->back();
                    }else if($status->status==0){
                      $status->status=1;
                      $status->save();
                      return redirect()->back();
                    }
                    
                  }

                  public function userstore(Request $request){
                    dd($reques);

                    return response()->json([$request->all()] ,200);
                    // $user=new TopUser();
                    // $user->name=$request->name;
                    // $user->mobile=$request->mobile;
                    // $user->email=$request->email;
                    // $user->gender=$request->gender;
                    // $user->password=$request->password;
                    // $user->save(); 
                    // dd($user);    
                  }
}
