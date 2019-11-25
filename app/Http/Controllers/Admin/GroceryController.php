<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\GroceryMenu;
use App\Admin\GroceryCategory;

class GroceryController extends Controller
{
    public function grocery_menu(){
        $menu=GroceryMenu::all();
     return view('admin.pages.category.grocery_menu',['menu'=>$menu]);
 }

 public function grocery_menu_store(Request $request){                
                  $menu=new GroceryMenu();
                  $menu->menu=$request->menu;
                  $menu->icon=$request->icon;
                  $menu->sort=0;
                  $menu->save();
     return redirect()->back()->with('add','success');
 }
 public function  grocery_menu_edit($id){
         $data=GroceryMenu::find($id);
        return $data;
     }
     public function grocery_menu_update(Request $request){                
                  $menu=GroceryMenu::find($request->id);
                  $menu->menu=$request->menu;
                  $menu->icon=$request->icon;
                  $menu->sort=$request->sort;
                  $menu->save();
                  return redirect()->back()->with('edit','success');
 }
 public function grocery_menu_delete($id){
         $product=GroceryMenu::find($id);
         $product->delete();
         return redirect()->back()->with('delete','success');
 }


 public function restaurent_category(){
    $category=GroceryCategory::all();
return view('admin.pages.category.grocery_category',['category'=>$category]);
}

public function grocery_category_store(Request $request){
     $category=new GroceryCategory();
      $category->name=$request->name;
      $category->save();
      return redirect()->back()->with('add','success');
   }
public function grocery_category_edit($id){
$data=GroceryCategory::find($id);
return $data;
}
public function grocery_category_update(Request $request){
     $category=GroceryCategory::find($request->id);
      $category->name=$request->name;
      $category->save();
 return redirect()->back()->with('edit','success');
   }
public function grocery_category_delete($id){
$product=GroceryCategory::find($id);
$product->delete();
return redirect()->back()->with('delete','success');
}

}
