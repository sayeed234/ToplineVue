<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Vendor;
use App\Vendor\DoctorChamber;
use App\Admin\DoctorCategory;
use DB;
use Session;

class DoctorController extends Controller
{
    public function doctor_info_edit($id){
        if(Session::get('logid')==$id){
            $data=Vendor::find($id);
            $category=DoctorCategory::all();
         }else{
         return redirect()->back();
         }
        return view('vendor.pages.doctor.doctor_info', compact('data', 'category'));
    }

    public function doctor_info_update(Request $request){
    
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

           //dd($request->all());
            if($request->special){
                $special= implode(",",$request->special);
            }else{
                $vendor=Vendor::find($request->id);

                $special = $vendor->special;
                
            }
          
          $vendor=Vendor::find($request->id);
          $vendor->vendor_name=$request->vendorname;
          $vendor->slug=$request->slug;
          $vendor->vendor_logo=$imageUrl1;
          $vendor->special=$special;
          $vendor->openday=$request->openday;
          $vendor->sortdescription=$request->sortdescription;
          $vendor->slider=$imageUrl2;
          $vendor->longdescription=$request->longdescription;
          $vendor->save();       
  
        }

        public function doctor_chamber(){

            if(Session::get('role')==2){          

                $hospital=DB::table('vendors')->where('vendors.service_id',3)->get();
                $hospitals=DB::table('vendors')->where('vendors.service_id',3)->get();
               // dd($hospital); 
                $chamber = DB::table('doctor_chambers')
                       ->join('vendors', 'vendors.id', '=', 'doctor_chambers.hospital_id')
                       ->select('doctor_chambers.*', 'vendors.vendor_name', 'vendors.special','vendors.vendor_logo')
                      ->where('doctor_chambers.doctor_id',Session::get('logid'))
                       ->get(); 
                  //dd($chamber);      
               return view('vendor.pages.doctor.chamber',[
                   'hospital'=>$hospital,
                   'hospitals'=>$hospitals,
                   'chamber'=>$chamber
               ]);
              }else{
                return redirect()->back();
              }
           
        }
        public function doctor_chamber_store(Request $request){
               
             $chamber=new DoctorChamber();
             $chamber->doctor_id=Session::get('logid'); 
             $chamber->hospital_id=$request->chamber;
             $chamber->time=$request->time;
             $chamber->onday=$request->onday;
             $chamber->offday=$request->offday;
             $chamber->chamber=0;
             $chamber->oncall=0;
             $chamber->save();
             return redirect()->back()->with('add','success');    
        }
        
        public function doctor_chamber_edit($id){
            $data=DoctorChamber::find($id);
             return  $data;
        }

        public function doctor_chamber_update(Request $request){
               
               $chamber=DoctorChamber::find($request->id);
               $chamber->hospital_id=$request->chamber;
               $chamber->time=$request->time;
               $chamber->onday=$request->onday;
               $chamber->offday=$request->offday;
               $chamber->save();
               return redirect()->back()->with('edit','success');    
          }

 public function doctor_chamber_delete($id){
    $hm=DoctorChamber::find($id);
    $hm->delete();
    return redirect()->back()->with('delete','success');    
  
  }
        public function status($id){
            $status = DoctorChamber::find($id);
            //dd($status);
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
}
