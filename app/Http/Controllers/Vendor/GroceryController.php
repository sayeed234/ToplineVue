<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\GroceryCategory;
use App\Admin\GroceryMenu;
use App\Vendor\GroceryProduct;
use DB;
use Session;

class GroceryController extends Controller
{
    public function grocery_products(){

        $category=GroceryCategory::all();
        $menu=GroceryMenu::all();
        $categorys=GroceryCategory::all();
        $menus=GroceryMenu::all();

        $product = DB::table('grocery_products')
                ->join('grocery_categories', 'grocery_categories.id', '=', 'grocery_products.grocery_category')
                  ->select('grocery_products.*', 'grocery_categories.name')
                 ->where('grocery_products.grocery_id', Session::get('logid'))
                 ->get();

        return view('vendor.pages.grocery.grocery_product',compact('category','menu','categorys','menus','product'));
    }
public function grocery_products_store(Request $request){
  
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

    $product=new GroceryProduct();
    $product->grocery_id=Session::get('logid');
    $product->grocery_category=$request->category;
    $product->grocery_menu=$request->menu;
    $product->product_name=$request->pname;
    $product->price=$request->price;
    $product->sortdescription=$request->sortdescription;
    $product->longdescription=$request->longdescription;
    $product->thumbnail=$imageUrl1;
    $product->image=$imageUrl2;
    $product->status=1;
    $product->save(); 
}

public function grocery_products_edit($id){
    $product=GroceryProduct::find($id);
    return $product;
}


public function grocery_products_update(Request $request){

    //dd($request->all());
    $companyById = GroceryProduct::find($request->id);

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
 
    $product=GroceryProduct::find($request->id);
    $product->grocery_category=$request->category;
    $product->grocery_menu=$request->menu;
    $product->product_name=$request->pname;
    $product->price=$request->price;
    $product->sortdescription=$request->sortdescription;
    $product->longdescription=$request->longdescription;
    $product->thumbnail=$imageUrl1;
    $product->image=$imageUrl2;
    $product->save(); 
}

public function grocery_products_delete($id){
    $product=GroceryProduct::find($id);
    $product->delete();
    return redirect()->back()->with('delete','success');  
}
public function gproductstatus($id){

    $status =GroceryProduct::find($id);
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
