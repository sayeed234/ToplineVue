<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Admin\TopUser;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index-admin');
    }
    public function users(Request $request){
      $request->validate([
        'mobile' => 'required',
    ]);
    $data=TopUser::where('mobile',$request->mobile)->where('status',1)->first();
    if($data!=''){
        return redirect()->back()->with('alredy','admin');
    }
        $current_date = new DateTime("now");
          $user=new TopUser();
          $user->name=$request->name;
          $user->mobile=$request->mobile;
          $user->email=$request->email;
          $user->gender=$request->gender;
          $user->password=bcrypt($request->password);
          $user->login_id=$current_date->format("isY");
          $user->type='Guest';
          $user->joindate=$current_date->format("Y-m-d");
          $user->roleid=3;
          $user->status=1;
          $user->save();

          Session::put('logid',$user->id);
          Session::put('name',$user->name);
          Session::put('mobile',$user->mobile);
          Session::put('role',$user->roleid);

          return redirect()->back()->with('user','success');

  
        }
}
  