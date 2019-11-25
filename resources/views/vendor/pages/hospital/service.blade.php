@extends('vendor.app')
@section('content')
<div class="page-content fade-in-up">
          {{-- Add Sliders Modal --}} 
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Service </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <form enctype="multipart/form-data" action="{{url('/service_list/store')}}" method="post">
            @csrf
              <div class="modal-body">
               <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="Max Value">Name</label>
                    <input class="form-control" required  type="text" name="name">
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
          <div class="modal-dialog   modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Update Form</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
      <form enctype="multipart/form-data" action="{{url('/service_list/update')}}" method="post" >
                  @csrf
              <div class="modal-body">
                <div class="row">
                 <div class="col-sm-12 form-group">
                    <label for="Max Value">Name</label>
                    <input class="form-control name"type="text" name="name">
                    <input type="hidden" id="id" name="id" class="cId">
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
                  <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Service List</h5></div>
                  <div class="col-md-6">
                          <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                              Add Service                  
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
                        <th>Name</th>                      
                        <th>Action</th>
          
                      </tr>
                    </thead>
                    <tbody>
                     <?php $a=1; ?>
                     @foreach($service as $ser)
                      <tr>
                      <td>{{$a++}}</td>
                      <td>{{ $ser->service_name}}</td>
                    
                       <td>
                        <button onclick= 'edit({{$ser->id}});'  data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                            <span></span>  <i class="fas fa-edit"></i>
                        </button>
                      <a href="{{url('/service_list/delete/'.$ser->id)}}"  onclick="return confirm('Are you sure to delete this');" class="btn btn-sm btn-danger btn-circle">
                              <i class="fas fa-trash"></i>
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
                        url:"{{url('service_list/edit')}}/"+x,
                        success:function(response){
                            console.log(response);
                            $('.name').val(response.service_name);
                            $('.cId').val(response.id);                                                                             
            
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