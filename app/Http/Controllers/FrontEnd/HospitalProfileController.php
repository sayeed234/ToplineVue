<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Admin\Vendor;
use App\Admin\RestaurentProduct;
use App\Vendor\GroceryProduct;
use App\Admin\Menu;
use App\Admin\GroceryMenu;
use App\Admin\GroceryCategory;
use Response;

class HospitalProfileController extends Controller
{

    
    public function hospitalprofile($slug){
       
        $result=DB::table('vendors')
               ->where('vendors.slug', $slug)
               ->first();
        

//...........................Restaurent Profile Show........................................

     if($result->service_id==2){
     $profile= DB::table('vendors')
            ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
            ->where('top_users.status', 1)
            ->where('vendors.slug', $slug)
            ->select('vendors.*', 'vendors.id')
            ->first();

      $product=DB::table('restaurent_products')
            ->join('vendors', 'vendors.id', '=', 'restaurent_products.restaurent_id')
            ->where('restaurent_products.status',1)
            ->where('restaurent_products.restaurent_id',$profile->id)
            ->select('restaurent_products.*', 'restaurent_products.id')
            ->get();
            //dd($product);
  $menu=DB::table('menus')
          ->orderBy('menus.sort', 'asc')
          ->get();
        //dd($menu);

       return view('FrontEnd.pages.shop-profile',[
        'profile'=>$profile,
        'product'=>$product,
        'menu'=>$menu
       ]);
 //.........................Hospital profile Show..............................................
        }else if($result->service_id==3){
       //dd($result);
        $profile= DB::table('vendors')
                ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                ->where('top_users.status', 1)
                ->where('vendors.slug', $slug)
                ->select('vendors.*', 'top_users.name')
                ->first();
               // dd($profile);
        $doctor= DB::table('vendors')
                ->join('doctors', 'doctors.vendor_id', '=', 'vendors.id')              
                ->where('doctors.vendor_id',$profile->id)
                ->where('doctors.oncall', 1)
                ->get(); 
        $doctors= DB::table('vendors')
                ->join('doctors', 'doctors.vendor_id', '=', 'vendors.id')              
                ->where('doctors.vendor_id',$profile->id)
                ->where('doctors.oncall', 0)
                ->get();
        $service=DB::table('hospital_services')->where('hospital_services.vendor',$profile->id)->get();      
     // dd($service);
        return view('FrontEnd.pages.hospital-profile',[
            'profile'=>$profile,
            'doctor'=>$doctor,
            'doctors'=>$doctors,
            'service'=>$service
        ]);

//..........................Doctors Profile Show..............................................
    } else if($result->service_id==4){
        $profile= DB::table('vendors')
                ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                ->where('top_users.status', 1)
                ->where('vendors.slug', $slug)
                ->select('vendors.*', 'top_users.name')
                ->first();
       // dd($profile);
       $chamber = DB::table('doctor_chambers')
                 ->join('vendors', 'vendors.id', '=', 'doctor_chambers.hospital_id')
                  ->select('doctor_chambers.*', 'vendors.vendor_name','vendors.slug', 'vendors.special','vendors.vendor_logo')
                  ->where('doctor_chambers.doctor_id',$profile->id)
                  ->where('doctor_chambers.oncall',1)
                  ->get(); 
       $chambers = DB::table('doctor_chambers')
                 ->join('vendors', 'vendors.id', '=', 'doctor_chambers.hospital_id')
                  ->select('doctor_chambers.*', 'vendors.vendor_name', 'vendors.slug', 'vendors.sortdescription','vendors.special','vendors.vendor_logo')
                  ->where('doctor_chambers.doctor_id',$profile->id)
                  ->where('doctor_chambers.oncall',0)
                  ->get(); 
            //dd($chambers);
     return view('FrontEnd.pages.doctor_profile',[
      'profile'=>$profile,
      'chamber'=>$chamber,
      'chambers'=>$chambers
     ]);
    }else if($result->service_id==7){
        $profile=DB::table('vendors')
               ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
               ->where('top_users.status', 1)
               ->where('vendors.slug', $slug)
               ->select('vendors.*', 'vendors.id')
               ->first();
            //dd($product);
        $menu=DB::table('grocery_menus')
              ->orderBy('grocery_menus.sort', 'asc')
              ->get();
           //dd($menu);
   
          return view('FrontEnd.pages.grocery',[
           'profile'=>$profile,
           'menu'=>$menu
          ]);
    }
     else{
        return "working Now"; 
    }
}

 public function singleproduct($id){
       $productdetails=RestaurentProduct::find($id);
     
      // dd($productdetails);
       $related=DB::table('restaurent_products')
               ->where('restaurent_products.restaurent_id',$productdetails->restaurent_id)
               ->where('restaurent_products.status',1)
               ->inRandomOrder()
               ->limit(5)
               ->get();
         //dd($related);
    return view('FrontEnd.pages.restaurent_single_product',[
        'productdetails'=>$productdetails,
        'related'=>$related
        ]);
 }
 public function gsingleproduct($id){
    $productdetails=GroceryProduct::find($id);
  
   // dd($productdetails);
    $related=DB::table('grocery_products')
            ->where('grocery_products.grocery_id',$productdetails->grocery_id)
            ->where('grocery_products.status',1)
            ->inRandomOrder()
            ->limit(5)
            ->get();
      //dd($related);
 return view('FrontEnd.pages.grocery_single_product',[
     'productdetails'=>$productdetails,
     'related'=>$related
     ]);
}

public function tabshow(Request $request){
  //dd($request->id);
  if ($request->has('id') && !empty($request->id)) {
    $products = DB::table('grocery_products')
     ->join('vendors', 'vendors.id', '=', 'grocery_products.grocery_id')
     ->where('grocery_products.status',1)
     ->where('grocery_products.grocery_menu',$request->id)
     ->where('grocery_products.grocery_id',$request->profileId)
     ->select('grocery_products.*', 'grocery_products.id')
     ->get();
          
    return response()->json($products);
  }
  if ($request->has('profileId') && !empty($request->profileId)) {

    $products = DB::table('grocery_products')
     ->join('vendors', 'vendors.id', '=', 'grocery_products.grocery_id')
     ->where('grocery_products.status',1)
     ->where('grocery_products.grocery_id',$request->profileId)
     ->select('grocery_products.*', 'grocery_products.id')
     ->get();
   return response()->json($products);
  }
  return response()->json([]);

}

public function getMenu()
  {
    $menu=DB::table('grocery_menus')
              ->orderBy('grocery_menus.sort', 'asc')
              ->get();
    return response()->json($menu);


  }

}
