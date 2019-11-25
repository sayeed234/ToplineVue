<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Vendor;
use App\Admin\RestaurentCategory;
use App\Admin\RestaurentProduct;
use App\Admin\Menu;
use DB;
use Session;

class RestaurentController extends Controller {

//restaurent information..........................................................
    public function restaurent_info_edit($id){
              
         if(Session::get('logid')==$id){
            $data=Vendor::find($id);
         }else{
         return redirect()->back();
         }
        return view('vendor.pages.restaurent.restaurent_info',[
            'data'=>$data
        ]);
    }
    public function restaurent_info_update(Request $request){
    
              //dd($request);
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
                 return redirect()->back()->with('edit','edit');             
               
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

//restaurent product..........................................................

     public function product(){
        if(Session::get('role')==2){   
          $category=RestaurentCategory::all();
          $menu=Menu::all();
          $categorys=RestaurentCategory::all();
          $menus=Menu::all();
         // $product=RestaurentProduct::all();
          $product = DB::table('restaurent_products')
                   ->join('restaurent_categories', 'restaurent_categories.id', '=', 'restaurent_products.product_category')
                   ->select('restaurent_products.*', 'restaurent_categories.name')
                   ->where('restaurent_products.restaurent_id', Session::get('logid'))
                   ->get();

        //  dd($product);
        return view('vendor.pages.restaurent.product',[
            'category'=>$category,
            'menu'=>$menu,
            'categorys'=>$categorys,
            'menus'=>$menus,
            'product'=>$product
            
            ]);
        }else{
            return redirect()->back();
        }
     }

     public function productstore(Request $request){
    
            $image=$request->file('image');
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl2=$uploadPath.$name;                
          
            $thumbnail=$request->file('thumbnail');
            $names=uniqid().$thumbnail->getClientOriginalName();
            $uploadPath='public/image/';
            $thumbnail->move($uploadPath,$names);
            $imageUrl1=$uploadPath.$names;
          
         $this->love($request,$imageUrl1,$imageUrl2);
         return redirect()->back()->with('add','success');            
       
      }
   
     protected function love($request,$imageUrl1,$imageUrl2){


            $menu= implode(",",$request->menu);
            $product=new RestaurentProduct();
            $product->restaurent_id=Session::get('logid');
            $product->product_category=$request->category;
            $product->menu=$menu;
            $product->product_name=$request->pname;
            $product->price=$request->price;
            $product->sortdescription=$request->sortdescription;
            $product->longdescription=$request->longdescription;
            $product->thumbnail=$imageUrl1;
            $product->image=$imageUrl2;
            $product->status=1;
            $product->save(); 
     }

   public function productedit($id){
       $data=RestaurentProduct::find($id);
       return $data;
   }













   public function productupdate(Request $request){

    //dd($request->all());
    $companyById = RestaurentProduct::find($request->id);

    //dd($companyById);
    $thumbnail=$request->file('thumbnail');
    $image=$request->file('image');
               
    if ($image) {
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl2=$uploadPath.$name;
      
    } 
    else{
        $imageUrl2 = $companyById->image;  
    }
    if ($thumbnail) {
        $names=uniqid().$thumbnail->getClientOriginalName();
        $uploadPath='public/image/';
        $thumbnail->move($uploadPath,$names);
        $imageUrl1=$uploadPath.$names;
      
    } else{
        $imageUrl1 = $companyById->thumbnail;
    }
  
     $this->lovesa($request,$imageUrl1,$imageUrl2);
     return redirect()->back()->with('edit','success');             
}
protected function lovesa($request,$imageUrl1,$imageUrl2){

   // $menu= implode(",",$request->menu);

    if($request->menu){
        $menu= implode(",",$request->menu);
    }else{
        $menu=RestaurentProduct::find($request->id);
        $menu = $menu->menu;      
    }  
    $product=RestaurentProduct::find($request->id);
    $product->product_category=$request->category;
    $product->menu=$menu;
    $product->product_name=$request->pname;
    $product->price=$request->price;
    $product->sortdescription=$request->sortdescription;
    $product->longdescription=$request->longdescription;
    $product->thumbnail=$imageUrl1;
    $product->image=$imageUrl2;
    $product->save(); 
}
  
public function productdelete($id){
       $product=RestaurentProduct::find($id);
       $product->Delete();
       return redirect()->back()->with('delete','success');   
}
public function productstatus($id){

    $status =RestaurentProduct::find($id);
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
