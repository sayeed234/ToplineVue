<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Vendor;
use DB;
use Session;
use App\Vendor\Doctor;
use App\Vendor\HospitalService;

class HospitalController extends Controller
{
    
    public function hospital_info_edit($id){
      if(Session::get('logid')==$id){
            $data=Vendor::find($id);
         }else{
         return redirect()->back();
         }
        return view('vendor.pages.hospital.hospital_info',[
            'data'=>$data
        ]);
    }
    public function hospital_info_update(Request $request){
    

              // dd($request);

                $companyById = Vendor::find($request->id);
                $agreement=$request->file('slider');
                $image=$request->file('image');
                           
                if ($agreement) {
                    $name=uniqid().$agreement->getClientOriginalName();
                    $uploadPath='public/image/';
                    $agreement->move($uploadPath,$name);
                    $imageUrl2=$uploadPath.$name;
                  
                } 
                else{
                    $imageUrl2 = $companyById->slider;  
                }
                if ($image) {
                    $names=uniqid().$image->getClientOriginalName();
                    $uploadPath='public/image/';
                    $image->move($uploadPath,$names);
                    $imageUrl1=$uploadPath.$names;
                  
                } else{
                    $imageUrl1 = $companyById->vendor_logo;
                }
                 $this->imge($request,$imageUrl1,$imageUrl2);
                 return redirect()->back()->with('edit','success');                
               
              }
           
        public function imge($request,$imageUrl1,$imageUrl2){

                    // dd($request->id);

                    $vendor=Vendor::find($request->id);
                    $vendor->vendor_name=$request->vendorname;
                    $vendor->slug=$request->slug;
                    $vendor->vendor_logo=$imageUrl1;
                    $vendor->special=$request->special;
                    $vendor->openday=$request->openday;
                    $vendor->opentime=$request->opentime;
                    $vendor->closeday=$request->closeday;
                    $vendor->closetime=$request->closetime;
                    $vendor->sortdescription=$request->sortdescription;
                    $vendor->slider=$imageUrl2;
                    $vendor->longdescription=$request->longdescription;
                    $vendor->save();       
            
                  }

        public function doctor_list(){

   if(Session::get('role')==2){
        $doctor = DB::table('doctors')->where('vendor_id',Session::get('logid'))->get();
        return view('vendor.pages.hospital.doctor_list',[
            'doctor'=>$doctor
        ]);
        } 
        else {
            return redirect()->back();
        }
       
                 
    }

        public function doctor_list_store(Request $request){
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
            $this->imges($request,$imageUrl);
          
            return redirect()->back()->with('add','success');    
        }
              public function imges($request,$imageUrl){

                      $doctor=new Doctor();
                      $doctor->name=$request->name;
                      $doctor->qualification=$request->qualification;
                      $doctor->speciality=$request->speciality;
                      $doctor->time=$request->time;
                      $doctor->onday=$request->onday;
                      $doctor->offday=$request->offday;
                      $doctor->image=$imageUrl;
                      $doctor->vendor_id=Session::get('logid'); 
                      $doctor->oncall=0;
                      $doctor->chamber=1;
                      $doctor->save();         
                      return redirect()->back();
              }
              public function doctor_list_edit($id){    
                  $data=Doctor::find($id);
                  return  $data;
              }

     public function doctor_list_update(Request $request){


            $productById = Doctor::find($request->id);
            $image=$request->file('image');

            if ($image) {
                $name=uniqid().$image->getClientOriginalName();
                $uploadPath='public/image/';
                $image->move($uploadPath,$name);
                $imageUrl=$uploadPath.$name;
            
            } else {
                $imageUrl = $productById->image;
            }
            $this->img($request,$imageUrl);
            return redirect()->back()->with('edit','success');    
        
        }
      public function img($request,$imageUrl){

            $doctor=Doctor::find($request->id);
            $doctor->name=$request->name;
            $doctor->qualification=$request->qualification;
            $doctor->speciality=$request->speciality;
            $doctor->time=$request->time;
            $doctor->onday=$request->onday;
            $doctor->offday=$request->offday;
            $doctor->image=$imageUrl;
            $doctor->save();
        

      }
      public function doctor_list_delete($id){
    $hm=Doctor::find($id);
    $hm->delete();
    return redirect()->back()->with('delete','success');    
  
  }

    public function status($id){
            $status = Doctor::find($id);
            if ($status->oncall==1) {
              $status->oncall=0;
              $status->save();
              return redirect()->back();
            }else if($status->oncall==0){
              $status->oncall=1;
              $status->save();
              return redirect()->back();
            }
            
          }
          public function status2($id){
            $status = Doctor::find($id);
            if ($status->chamber==1) {
              $status->chamber=0;
              $status->save();
              return redirect()->back();
            }else if($status->chamber==0){
              $status->chamber=1;
              $status->save();
              return redirect()->back();
            }
            
          }
    public function service_list(){
      if(Session::get('role')==2){
        $service = DB::table('hospital_services')->where('vendor',Session::get('logid'))->get();
        return view('vendor.pages.hospital.service',[
                'service'=>$service
        ]);
      }else{
        return redirect()->back();
      }
     
    }

    public function service_store(Request $request){
              $service=new HospitalService();
              $service->service_name=$request->name;
              $service->vendor=Session::get('logid'); 
              $service->save();         
              return redirect()->back()->with('add','success');    
    }
    public function service_edit($id){    
                  $data=HospitalService::find($id);
                  return  $data;
              }

    public function service_update(Request $request){
              $service=HospitalService::find($request->id);
              $service->service_name=$request->name;
              $service->save();         
              return redirect()->back()->with('edit','success');    
    }

    public function service_delete($id){
    $hm=HospitalService::find($id);
    $hm->delete();
    return redirect()->back()->with('delete','success');    
  
  }

}
