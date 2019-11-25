<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Service;
use App\Admin\Vendor;
use App\Admin\TopUser;
use DateTime;
use DB;
use Session;
class VendorshopController extends Controller
{
    public function index(){
        $service=Service::all();
        $services=Service::all();

        $vendor = DB::table('vendors')
            ->join('services', 'services.id', '=', 'vendors.service_id')
            ->select('vendors.*', 'services.name')
            ->get();
           // dd($vendor);

        return view('admin.pages.company.vendorshop',[
            'service'=>$service,
            'services'=>$services,
            'vendor'=>$vendor
        ]);
           
    }

    public function view($id){

      $vendorview = DB::table('vendors')
            ->join('services', 'services.id', '=' , 'vendors.service_id')
            ->select('vendors.*', 'services.name','services.icon')
            ->where('vendors.id', $id)
            ->first();
           // dd($vendorview);
        return view('admin.pages.company.vendorview',[
            'vendorview'=>$vendorview
        ]);
    }
    public function store(Request $request){

      $data=TopUser::where('mobile',$request->phone)->where('status',1)->first();
      if($data!=''){
          return redirect()->back()->with('alredy','admin');
      }
            $image1=$request->file('agreement');
            $name=uniqid().$image1->getClientOriginalName();
            $uploadPath='public/image/';
            $image1->move($uploadPath,$name);
            $imageUrl1=$uploadPath.$name;

            $image2=$request->file('image');
            $name=uniqid().$image2->getClientOriginalName();
            $uploadPath='public/image/';
            $image2->move($uploadPath,$name);
            $imageUrl2=$uploadPath.$name;
            $this->img($request,$imageUrl2,$imageUrl1);
            return redirect()->back()->with('add','success');
          
        }

              public function img($request, $imageUrl2, $imageUrl1){
                       $current_date = new DateTime("now");
                       $user= new TopUser();
                       $user->name=$request->ownername;
                       $user->mobile=$request->phone;
                       $user->email=$request->email;
                       $user->address=$request->address;
                       $user->password=bcrypt($request->password);
                       $user->type='Vendor';
                       $user->roleid=2;
                       $user->status=1;
                       $user->created_by=Session::get('logid');
                       $user->updated_by=Session::get('logid');
                       $user->nid=$request->nid;
                       $user->login_id=$current_date->format("Yis");
                       $user->joindate=$current_date->format("Y-m-d");                   
                       $user->save();

          
                        $vendor=new Vendor();
                        $vendor->service_id=$request->service;
                        $vendor->vendor_name=$request->shopname;
                        $vendor->slug=$request->slug;
                        $vendor->vendor_logo=$imageUrl2;
                        $vendor->Pro_name=$request->ownername;
                        $vendor->mobile=$request->phone;
                        $vendor->email=$request->email;
                        $vendor->user_id=$user->id;
                        $vendor->nid=$request->nid;
                        $vendor->bank=$request->bankacc;
                        $vendor->address=$request->address;
                        $vendor->agreement=$imageUrl1;
                        $vendor->agr_date=$request->agredate;
                        $vendor->contact_name=$request->powner;
                        $vendor->Contact_mobile=$request->pphone;
                        $vendor->joindate=$current_date->format("Y-m-d");
                        $vendor->password=bcrypt($request->password);
                        $vendor->vendor_id=$current_date->format("Yis");
                        $vendor->created_by=Session::get('logid');
                        $vendor->updated_by=Session::get('logid');
                        $vendor->save();                                        
                                                         
                    }

              public function edit($id){
                $data=Vendor::find($id);
                return $data;
              }

        public function update(Request $request){
             
                $companyById = Vendor::find( $request->id);
                $agreement=$request->file('agreement');
                $image=$request->file('image');
                           
                if ($agreement) {
                    $name=uniqid().$agreement->getClientOriginalName();
                    $uploadPath='public/image/';
                    $agreement->move($uploadPath,$name);
                    $imageUrl2=$uploadPath.$name;
                  
                } else {
                    $imageUrl2 = $companyById->agreement;
                }
                if ($image) {
                    $names=uniqid().$image->getClientOriginalName();
                    $uploadPath='public/image/';
                    $image->move($uploadPath,$names);
                    $imageUrl1=$uploadPath.$names;
                  
                } else {
                    $imageUrl1 = $companyById->vendor_logo;
                }
                 $this->imge($request,$imageUrl1,$imageUrl2);
                 return redirect()->back()->with('edit','success');
              
               
              }
            
                  public function imge($request,$imageUrl1,$imageUrl2){

                    $vendor=Vendor::find($request->id);
                    $vendor->service_id=$request->service;
                    $vendor->vendor_name=$request->shopname;
                    $vendor->slug=$request->slug;
                    $vendor->vendor_logo=$imageUrl1;
                    $vendor->Pro_name=$request->ownername;
                    $vendor->mobile=$request->phone;
                    $vendor->email=$request->email;
                    $vendor->nid=$request->nid;
                    $vendor->bank=$request->bankacc;
                    $vendor->address=$request->address;
                    $vendor->agreement=$imageUrl2;
                    $vendor->agr_date=$request->agredate;
                    $vendor->contact_name=$request->powner;
                    $vendor->Contact_mobile=$request->pphone;
                    $vendor->updated_by=Session::get('logid');
                    $vendor->save();       
            
                  }
                  public function vendorstatus($id){
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
}
