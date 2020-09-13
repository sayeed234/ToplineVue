@extends('admin.layouts.app')
@section('content')  


<div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Customer Verified </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <form enctype="multipart/form-data" action="{{ url('/customerlist/update') }}" method="post" >
        @csrf
    <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12 form-group">
                            <label for="Max Value">NID</label>
                            <input class="form-control nid" type="number" name="nid">
                            <input type="hidden" class="cId" id="id" name="id">
                        </div>
                          <div class="col-sm-12 form-group">
                            <label for="Max Value">Address</label>
                            <input class="form-control address"  type="text" name="address">
                         </div>     
                        <div class="col-sm-12 form-group">                	
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
                        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">All Customers List </h5></div>
                    </div>
                  </div>
                </div> 
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Mobile</th>
                              <th>Gender</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $i=1; @endphp
                        @foreach($customer as $customer)
                            <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $customer->name}}</td>
                              <td>{{ $customer->type}}</td>
                              <td>{{ $customer->mobile}}</td>
                              <td>{{ $customer->gender}}</td>
                              <td>
                                  <button onclick='edit({{$customer->id}});'   data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                                      <span></span>  <i class="fas fa-edit"></i>
                                  </button>
                                  
                            <a href="" class="btn btn-sm btn-primary btn-circle">
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
          </div> 
          <script>
              function edit(id) {
                      var x =id;
                      
                      $.ajax({
                          type:'GET',
                          url:"{{url('customerlist/edit')}}/"+x,
                          success:function(response){
                              console.log(response);
                              $('.nid').val(response.nid);
                              $('.cId').val(response.id);
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
@endsection