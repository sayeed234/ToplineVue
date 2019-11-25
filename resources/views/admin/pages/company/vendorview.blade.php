@extends('admin.layouts.app')
@section('content')
<div class="card">
          <div class="card-header">
<div class="row">

   <div class="col-md-10">
         
         <h3 class="m-0 font-weight-bold text-success text-center"> {{$vendorview->vendor_name}}</h3>
     </div>
<div class="col-md-2">

   <a class="btn btn-sm btn-success center-block" href="{{url('/vendorshop')}}"> <span>Vendor List</span> </a> 
</div>
</div>
</div>

 </div> 
     
 <?php
  $admin=DB::table('top_users')->where('top_users.id',$vendorview->created_by)->first();
  //dd($admin);
  $admin2=DB::table('top_users')->where('top_users.id',$vendorview->updated_by)->first();
  //dd($admin2);
 ?>
<div class="row">
          <div class="col-md-6">
          <div class="card">
          <div class="card-header">
           <h5>Vendor Info</h5>
          </div>
          <div class="card-body">
          <table class="table table-bordered">

               <tbody>
               <tr>
               <th scope="col">Service Name</th>
               <td scope="col">{{$vendorview->name}}</td>
               </tr>
               <tr>
               <th scope="col">Name</th>
               <td scope="col">{{$vendorview->vendor_name}}</td>
               </tr>
               <tr>
               <th scope="col">User Id</th>
               <td scope="col">{{$vendorview->vendor_id}}</td>
               </tr>
               <tr>
               <th scope="row">Address</th>
               <td>{{$vendorview->address}}</td>
               </tr>
               <tr>
               <th scope="row">Bank Acc</th>
               <td>{{$vendorview->bank}}</td>
               </tr>
               <tr>
               <th scope="row">Tin No</th>
               <td>{{$vendorview->tin}}</td>
               </tr> 
               <tr>
               <th scope="row">Agreement Date</th>
               <td>{{$vendorview->agr_date}}</td>
               </tr>  
               <tr>
               <th scope="row">Join Date</th>
               <td>{{$vendorview->joindate}}</td>
               </tr>  
               <tr>
               <th scope="row">Agreement Pdf</th>
               <td><a download="{{$vendorview->vendor_name}}.pdf" href="{{ asset( $vendorview->agreement) }}" title="{{$vendorview->vendor_name}}">Download</a></td>
               </tr>       
               </tbody>
               </table>
          </div>
        </div>
     </div>
     <div class="col-md-6">
     <div class="card">
       <div class="card-header">
          <h5>Owner Info</h5>
          </div>
          <div class="card-body">
               <table class="table table-bordered">
                    <thead>
                  
                    <tr>
                    <th scope="col">Name</th>
                    <td scope="col">{{$vendorview->Pro_name}}</td>
                    </tr>
                    <tr>
                    <th scope="col">Mobile</th>
                    <td scope="col">{{$vendorview->mobile}}</td>
                    </tr>
                    <tr>
                    <th scope="row">Email</th>
                    <td>{{$vendorview->email}}</td>
                    </tr>
                    <tr>
                    <th scope="row">Partial Owner</th>
                    <td>{{$vendorview->contact_name}}</td>
                    </tr> <tr>
                    <th scope="row">Mobile</th>
                    <td>{{$vendorview->Contact_mobile}}</td>
                    </tr>       
                    <tr>
                    <th scope="row">Created By</th>
                    <td>  @if($admin->name=='null') ------- @else{{ $admin->name}} @endif </td>
                    </tr>
                     <tr>
                    <th scope="row">Updated By</th>
                    <td> @if($admin2->name=='null') ------- @else{{ $admin2->name}} @endif</td>
                    </tr>
                    <tr>
                    <th scope="row">Slug</th>
                    <td>{{$vendorview->slug}}</td>
                     </tr>
                    <tr>
                    <th scope="row">Password</th>
                    <td></td>
                     </tr>             
                         </tbody>
                     </table>
               </div>
           </div>
     </div>
     <div class="col-md-6">
               <div class="card">
                 <div class="card-header">
                    <h5>Agreement Photo</h5> 
                    </div>
          <div class="card-body"> 

              <img src="{{asset($vendorview->agreement)}}" height="360px" width="100%">
               </div>
          </div>
     </div>
</div>

          

@endsection