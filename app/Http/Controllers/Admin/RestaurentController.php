<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Menu;
use App\Admin\RestaurentCategory;

class RestaurentController extends Controller
{
    public function restaurent_menu(){
           $menu=Menu::all();
        return view('admin.pages.category.restaurent_menu',['menu'=>$menu]);
    }

    public function restaurent_menu_store(Request $request){                
                     $menu=new Menu();
                     $menu->menu=$request->menu;
                     $menu->icon=$request->icon;
                     $menu->sort=0;
                     $menu->save();
        return redirect()->back()->with('add','success');
    }
    public function  restaurent_menu_edit($id){
            $data=Menu::find($id);
           return $data;
        }
        public function restaurent_menu_update(Request $request){                
                     $menu=Menu::find($request->id);
                     $menu->menu=$request->menu;
                     $menu->icon=$request->icon;
                     $menu->sort=$request->sort;
                     $menu->save();
                     return redirect()->back()->with('edit','success');
    }
    public function restaurent_menu_delete($id){
            $product=Menu::find($id);
            $product->delete();
            return redirect()->back()->with('delete','success');
    }

//Restaurant Category..................................................................

public function restaurent_category(){
                   $category=RestaurentCategory::all();
        return view('admin.pages.category.restaurent_category',['category'=>$category]);
    }

public function restaurent_category_store(Request $request){
                    $category=new RestaurentCategory();
                     $category->name=$request->name;
                     $category->save();
                     return redirect()->back()->with('add','success');
                  }
    public function restaurent_category_edit($id){
             $data=RestaurentCategory::find($id);
              return $data;
        }
        public function restaurent_category_update(Request $request){
                    $category=RestaurentCategory::find($request->id);
                     $category->name=$request->name;
                     $category->save();
                return redirect()->back()->with('edit','success');
                  }
        public function restaurent_category_delete($id){
            $product=RestaurentCategory::find($id);
            $product->delete();
        return redirect()->back()->with('delete','success');
    }
}
