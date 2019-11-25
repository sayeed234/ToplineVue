@extends('admin.layouts.app')
@section('content')
    
<div class="page-content fade-in-up">
{{-- Add Sliders Modal --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Create New </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{url('/vendorshop/store')}}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-4 form-group">
                <label for="Max Value">Service</label>
                <select class="form-control " name="service">
                  @foreach($service as $service)
                <option value="{{$service->id}}">{{$service->name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-sm-4 form-group">
                 <label for="Max Value">Name</label>
                 <input class="form-control" required  type="text" name="shopname">
           </div>
            <div class="col-sm-4 form-group">
                    <label for="Max Value">Agreement</label>
                    <input class="form-control" required  type="file" name="agreement">
           </div> 
           <div class="col-sm-4 form-group">
              <label for="Max Value">Owner Name</label>
           <input class="form-control"  type="text" name="ownername">
        </div> 
            <div class="col-sm-4 form-group">
                 <label for="Max Value">Phone ( User Id )</label>
                 <input class="form-control" required type="number" name="phone">
           </div>
           <div class="col-sm-4 form-group">
              <label for="Max Value">Email</label>
              <input class="form-control"  type="email" name="email">
        </div>
        <div class="col-sm-4 form-group">
            <label for="Max Value"> Partial Owner</label>
         <input class="form-control"  type="text" name="powner">
      </div>
           <div class="col-sm-4 form-group">
                 <label for="Max Value">Phone</label>
                 <input class="form-control" type="number" name="pphone">
            </div>
            <div class="col-sm-4 form-group">
                <label for="Max Value">Slug</label>
                <input class="form-control" type="text" name="slug">
           </div>
            <div class="col-sm-4 form-group">
                 <label for="Max Value"> Address</label>
                 <input class="form-control"  required type="text" name="address">
            </div>
                  <div class="col-sm-4 form-group">
                    <label for="Max Value">NID</label>
                    <input class="form-control" required  type="text" name="nid">
                 </div> 
               <div class="col-sm-4 form-group">
                  <label for="Max Value">Bank Acc</label>
                   <input class="form-control"   type="text" name="bankacc">
                </div> 
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Agreement Date</label>
                    <input class="form-control"  type="date" name="agredate">
               </div>  
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Password <span><input type="checkbox" onclick="myFunction()">Show</span></label>
                    <input class="form-control" id="myInput" required type="password" name="password">
                  
                    </div> 
                <div class="col-sm-4 form-group">                	
            <label>Logo(Size 250 X 250)</label>
            <input class="form-control" required type="file" name="image">
        </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-primary" >Clear</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</div>
</div>
</div>

{{-- Edit slider Modal --}}

<div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <form enctype="multipart/form-data" action="{{url('/vendorshop/update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-4 form-group">
                <label for="Max Value">Service</label>
                <select class="form-control service" name="service">
                  @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->name}}</option>
                  @endforeach
                 
               </select>
               
            </div>
            <div class="col-sm-4 form-group">
                 <label for="Max Value"> Shop Name</label>
                 <input class="form-control shopname" required  type="text" name="shopname">
                 <input class="cId" type="hidden" name="id" id="id">
           </div>
            <div class="col-sm-4 form-group">
                    <label for="Max Value">Agreement</label>
                    <input class="form-control agreement"  type="file" name="agreement">
           </div> 
           <div class="col-sm-4 form-group">
              <label for="Max Value">Owner Name</label>
           <input class="form-control ownername"  type="text" name="ownername">
        </div> 
            <div class="col-sm-4 form-group">
                 <label for="Max Value">Phone</label>
                 <input class="form-control phone" required type="number" name="phone">
           </div>
           <div class="col-sm-4 form-group">
              <label for="Max Value">Email</label>
              <input class="form-control email"  type="email" name="email">
        </div>
        <div class="col-sm-4 form-group">
            <label for="Max Value"> Partial Owner</label>
         <input class="form-control powner"  type="text" name="powner">
      </div>
           <div class="col-sm-4 form-group">
                 <label for="Max Value">Phone</label>
                 <input class="form-control pphone" type="number" name="pphone">
            </div>
            <div class="col-sm-4 form-group">
                <label for="Max Value">Slug</label>
                <input class="form-control slug" type="text" name="slug">
           </div>
            <div class="col-sm-4 form-group">
                 <label for="Max Value"> Shop Address</label>
                 <input class="form-control address"  required type="text" name="address">
            </div>
                  <div class="col-sm-4 form-group">
                    <label for="Max Value">NID</label>
                    <input class="form-control nid" required  type="text" name="nid">
                 </div> 
               <div class="col-sm-4 form-group">
                  <label for="Max Value">Bank Acc</label>
                   <input class="form-control bankacc"   type="text" name="bankacc">
                </div> 
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Agreement Date</label>
                    <input class="form-control agredate"  type="date" name="agredate">
               </div>   
                <div class="col-sm-4 form-group">                	
            <label>Logo(Size 250 X 250)</label>
            <input class="form-control image"  type="file" name="image">
        </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</form>
</div>
</div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-12">
    <div class="row">
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">All Vendors</h5></div>
        <div class="col-md-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>This number already exists other account</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    New Vendor                    
            </button>
        </div>
    </div>
  </div>
</div> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Service</th>
              <th>Vendor</th>
              <th>User Id</th>
              <th>Mobile</th>
              <th>Address</th>
              <th>Logo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $sl=1; ?>
            @foreach($vendor as $ven)
            <tr>
              <td>{{$sl++}}</td>
              <td>{{$ven->name}}</td>
              <td>{{$ven->vendor_name}}</td>
              <td>{{$ven->vendor_id}}</td>
              <td>{{$ven->mobile}}</td>
              <td>{{$ven->address}}</td>
              <td><img src="{{asset($ven->vendor_logo)}}" height="60px" width="60px"></td>
              <td>
             <?php 
                 $users = DB::table('vendors')
                    ->join('top_users', 'top_users.id', '=', 'vendors.user_id')
                    ->where('top_users.id', $ven->user_id)
                    ->select('vendors.*', 'top_users.id','top_users.status')
                    ->first();
                    //dd($users);
              ?>

                @if($users->status==1)
                    <a href="{{route('vendorstatus',['id'=>$users->id])}}" class=" btn btn-sm btn-success btn-circle" title="Active">
                        <i class="fas fa-check"></i>
                    </a>
                    @elseif($users->status==0)
                    <a href="{{route('vendorstatus',['id'=>$users->id])}}" class=" btn btn-sm btn-danger btn-circle" title="Inactive">
                        <i class="fas fa-times"></i>
                        </a>
                 @endif


             <button onclick='edit({{$ven->id}});'   data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                      <span></span>  <i class="fas fa-edit"></i>
                  </button>
                  
            <a href="{{ url('/vendorshop_singleview/'.$ven->id) }}" class="btn btn-sm btn-primary btn-circle">
                    <i class="far fa-eye"></i>
              </a>
              
            </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>  
<script>
  function edit(id) {
          var x =id;
          
          $.ajax({
              type:'GET',
              url:"{{url('vendorshop/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.service').val(response.service_id);
                  $('.cId').val(response.id);
                  $('.shopname').val(response.vendor_name);
                  $('.ownername').val(response.Pro_name);
                  $('.email').val(response.email);
                  $('.phone').val(response.mobile);
                  $('.address').val(response.address);
                  $('.powner').val(response.contact_name);
                  $('.pphone').val(response.Contact_mobile);
                  $('.slug').val(response.slug);
                  $('.bankacc').val(response.bank);
                  $('.nid').val(response.nid);
                  $('.agredate').val(response.agr_date);
                
  
              },
              error:function(xhr,status,error){
                  console.log(error);
                  
              }
  
          });
      }
  $(document).ready(function(){
  });   
          
  </script>
  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection