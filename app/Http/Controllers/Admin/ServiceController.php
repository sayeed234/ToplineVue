<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Service;
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
                $service=new Service();
                $service->name=$request->name;
                $service->icon=$request->icon;
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

            $service= Service::find($request->id);
            $service->name=$request->name;
            $service->icon=$request->icon;
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
            return redirect()->back();
          
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
    }

