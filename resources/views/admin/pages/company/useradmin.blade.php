@extends('admin.layouts.app')
@section('content')
    
<div class="page-content fade-in-up">
{{-- Add Sliders Modal --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add Admin</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{url('/user_admin/store')}}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label for="Max Value">Name</label>
                <input class="form-control" required  type="text" name="name">
            </div> 
            <div class="col-sm-6 form-group">
                    <label for="Max Value">Phone</label>
                    <input class="form-control" required type="number" name="phone">
                </div>
             <div class="col-sm-6 form-group">
                  <label for="Max Value">Email</label>
                <input class="form-control"  type="email" name="email">
                </div>
                  <div class="col-sm-6 form-group">
                    <label for="Max Value">Address</label>
                    <input class="form-control" required  type="text" name="address">
                 </div>
                  <div class="col-sm-6 form-group">
                    <label for="Max Value">Password</label>
                    <input class="form-control"  id="password"  required  onkeyup='check();' type="password" name="password">                  
                 </div> 

                 <div class="col-sm-6 form-group">
                        <label for="Max Value">Re-Password</label>
                        <input class="form-control" id="confirm_password" required  onkeyup='check();'  type="password" name="password">
                    </span>
                    <span class="text-success" id="message"></span> 
                    </div>     
                <div class="col-sm-6 form-group">                	
            <label>Photo(Size 250 X 100)</label>
            <input class="form-control"  type="file" name="image">
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
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <form enctype="multipart/form-data" action="{{url('/user_admin/update')}}" method="post" >
        @csrf
    <div class="modal-body">
            <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="Max Value">Name</label>
                        <input class="form-control name"  type="text" name="name">
                        <input class="cId" type="hidden" name="id" id="id">
                    </div> 
                    <div class="col-sm-6 form-group">
                            <label for="Max Value">Phone</label>
                            <input class="form-control phone" type="number" name="phone">
                        </div>
                     <div class="col-sm-6 form-group">
                          <label for="Max Value">Email</label>
                        <input class="form-control email"  type="email" name="email">
                        </div>
                          <div class="col-sm-6 form-group">
                            <label for="Max Value">Address</label>
                            <input class="form-control address"  type="text" name="address">
                         </div>     
                        <div class="col-sm-6 form-group">                	
                    <label>Photo(Size 250 X 100)</label>
                    <input class="form-control image"type="file" name="image">
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Admin Information</h5></div>
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                        Add Admin                    
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
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Address</th>
              <th>Status</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($admin as $admin)
            <tr>
              <td>{{$admin->name}}</td>
              <td>{{$admin->mobile}}</td>
              <td>{{$admin->email}}</td>
              <td>{{$admin->address}}</td>
              <td>
                @if($admin->status==0)
                     Inactive
                 @else
                     Active
                 @endif    
              </td>
              <td><img src="{{asset($admin->image)}}" height="60px" width="60px"></td>

              <td>
                  @if($admin->status==1)
                  <a href="{{route('adminstatus',['id'=>$admin->id])}}" class=" btn btn-sm btn-success btn-circle" title="Active">
                      <i class="fas fa-check"></i>
                  </a>
                  @elseif($admin->status==0)
                  <a href="{{route('adminstatus',['id'=>$admin->id])}}" class=" btn btn-sm btn-danger btn-circle" title="Inactive">
                      <i class="fas fa-times"></i>
                      </a>
               @endif
                  <button onclick='edit({{$admin->id}});'   data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                  <span><i class="fas fa-edit"></i></span>  
                          </button>
                    
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
              url:"{{url('user_admin/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.name').val(response.name);
                  $('.cId').val(response.id);
                  $('.phone').val(response.mobile);
                  $('.email').val(response.email);
                  $('.address').val(response.address);
                
  
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
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = '';
  }
}     </script>
{{--         
        <script>
        $('#conpassword').keyup(function(){
        var x=$('#password').val(); 
        var y=$('#conpassword').val();
        if (x==y)
        $('#conform2').text('');
        else
        $('#conform2').text('Password does not match');
        })
        </script> --}}
@endsection