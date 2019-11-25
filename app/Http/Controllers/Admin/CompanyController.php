<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Company;
use DB;

class CompanyController extends Controller
{
   public function index(){
    $company = Company::all();
    return view('admin.pages.company.company',[
        'company'=>$company
    ]);
     // dd($company);
    // return response()->json($company);
   }
    public function apiindex(){
        $company = Company::all();
        return response()->json($company);
       // 
    }    

   public function edit($id){
    $data=Company::find($id);
   return $data;
}
//    public function store(Request $request){

//     $image=$request->file('image');
//     $name=uniqid().$image->getClientOriginalName();
//     $uploadPath='public/image/';
//     $image->move($uploadPath,$name);
//     $imageUrl=$uploadPath.$name;
//     $this->img($request,$imageUrl);
  
//     return redirect()->back();
// }
//       public function img($request,$imageUrl){
//               $company=new Company();
//               $company->name=$request->name;
//               $company->mobile=$request->mobile;
//               $company->mobile2=$request->mobile2;
//               $company->telephone=$request->telephone;
//               $company->email=$request->email;
//               $company->web=$request->web;
//               $company->license=$request->license;
//               $company->address=$request->address;
//               $company->image=$imageUrl;
//               $company->save();         
//               return redirect()->back();
//       }

      public function update(Request $request){
     
        
        $companyById = Company::find( $request->id);
        $image=$request->file('image');
      
        if ($image) {
            $name=uniqid().$image->getClientOriginalName();
            $uploadPath='public/image/';
            $image->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
          
        } else {
            $imageUrl = $companyById->image;
        }
         $this->imge($request,$imageUrl);
         return redirect()->back()->with('edit','success');
      
       
      }
    
          public function imge($request,$imageUrl){
                 $company=Company::find($request->id);
                 $company->name=$request->name;
                 $company->mobile=$request->mobile;
                 $company->mobile2=$request->mobile2;
                 $company->telephone=$request->telephone;
                 $company->email=$request->email;
                 $company->web=$request->web;
                 $company->license=$request->license;
                 $company->address=$request->address;
                 $company->image=$imageUrl;
                 $company->save();        
    
          }
}
