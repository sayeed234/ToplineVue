<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Service;
use App\Admin\DoctorCategory;
use Response;
use DB;
class ServiceController extends Controller
{
    public function index(){
        $service=Service::all();
         return view('admin.pages.category.service',['service'=>$service]);
    }
    public function indexapi(){
            //  $service=Service::all();
      $service = DB::table('services')
              ->where('services.status', 1)
              ->orderBy('services.sort','asc')
              ->get();
      //  return response()->json($service);
      return response($service->jsonSerialize(), 200);
    }

    public function store(Request $request){
      $image=$request->file('image');
    $name=uniqid().$image->getClientOriginalName();
    $uploadPath='public/image/';
    $image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;
    $this->img($request,$imageUrl);
    return redirect()->back()->with('add','success');
}
     public function img($request,$imageUrl){
        $service=new Service();
        $service->name=$request->name;
        $service->icon=$request->icon;
        $service->slider=$imageUrl;
        $service->sort=1;
        $service->status=1;
        $service->created_by=1;
        $service->update_by=1;
        $service->save();         
        return redirect()->back();
        }
        public function edit($id){
            $data=Service::find($id);
           return $data;
        }
        public function update(Request $request){
          
        $companyById = Service::find($request->id);
        $image=$request->file('image');
      
        if ($image) {
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
          
        } else {
            $imageUrl = $companyById->slider;
        }
         $this->imge($request,$imageUrl);
         return redirect()->back()->with('edit','success');
       
      }
      public function imge($request,$imageUrl){
            $service= Service::find($request->id);
            $service->name=$request->name;
            $service->icon=$request->icon;
            $service->slider=$imageUrl;
            $service->sort=$request->sort;
            $service->status=1;
            $service->created_by=1;
            $service->update_by=1;
            $service->save();         
            return redirect()->back();
        }
        public function delete($id){
            $product=Service::find($id);
            $product->delete();
            return redirect()->back()->with('delete','success');
          
          }
          public function status($id){
            $status = Service::find($id);
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
//doctor Category...................................................
          public function doctor_category(){
                $doctors=DoctorCategory::all();
          return view('admin.pages.category.doctor_category',['doctors'=>$doctors]);
          }

          public function doctor_category_store(Request $request){
          $category=new DoctorCategory();
            $category->doctor_category=$request->name;
            $category->save();
            return redirect()->back()->with('add','success');
          }

          public function doctor_category_edit($id){
          $data=DoctorCategory::find($id);
          return $data;
          }

          public function doctor_category_update(Request $request){
          $category=DoctorCategory::find($request->id);
            $category->doctor_category=$request->name;
            $category->save();
          return redirect()->back()->with('edit','success');
          }

          public function doctor_category_delete($id){
          $product=DoctorCategory::find($id);
          $product->delete();
          return redirect()->back()->with('delete','success');
          }

    }

