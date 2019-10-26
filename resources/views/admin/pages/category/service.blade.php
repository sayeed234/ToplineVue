        @extends('admin.layouts.app')
        @section('content')
            
        <div class="page-content fade-in-up">
        {{-- Add Sliders Modal --}}

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Our Service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form enctype="multipart/form-data" action="{{url('/service/store')}}" method="post">
          @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="Max Value">Name</label>
                        <input class="form-control" required  type="text" name="name">
                    </div> 
                    <div class="col-sm-12 form-group">
                      <label for="Max Value">Icon</label>
                      <input class="form-control" required  type="text" name="icon">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="reset" class="btn btn-primary" >Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
        </div>
        </div>
        </div>

        {{-- Edit slider Modal --}}

        <div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <form enctype="multipart/form-data" action="{{url('service/update')}}" method="post" >
                @csrf
            <div class="modal-body">
                            <div class="row">
                  <div class="col-sm-12 form-group">
                            <label for="Max Value">Name</label>
                            <input class="form-control name"  type="text" name="name">
                            <input class="cId" type="hidden" name="id" id="id">
                  </div>
                  <div class="col-sm-8 form-group">
                            <label for="Max Value">Icon</label>
                            <input class="form-control icon"  type="text" name="icon">
                  </div>  
                  <div class="col-sm-4 form-group">
                            <label for="Max Value">Sort</label>
                            <input class="form-control sort" type="number" name="sort">
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
                <div class="col-md-6"><h5 class="m-0 font-weight-bold ">All Service</h5></div>
                <div class="col-md-6">
                        <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                            New Service                    
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
                      <th>Icon</th>
                      <th>Sort</th>
                      <th>Status</th>
                      <th>Created By</th>
                      <th>Update By</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($service as $Value)
                    <tr>
                    <td>{{$Value->name}}</td>
                    <td><i class="{{$Value->icon}}" aria-hidden="true"></i></td>
                      <td>{{$Value->sort}}</td>
                      <td>
                        @if($Value->status==0)Inactive @else Active @endif
                      </td>
                      <td>{{$Value->created_by}}</td>
                      <td>{{$Value->update_by}}</td>
                      <td>

                          @if($Value->status==0)
                          <a href="{{route('status',['id'=>$Value->id])}}" class=" btn btn-sm btn-success btn-circle" title="Active">
                              <i class="fas fa-check"></i>
                          </a>
                          @elseif($Value->status==1)
                          <a href="{{route('status',['id'=>$Value->id])}}" class=" btn btn-sm btn-danger btn-circle" title="Inactive">
                              <i class="fas fa-times"></i>
                              </a>
                          @endif 


                        {{-- <a href="#" class=" btn btn-sm btn-success btn-circle">
                        <i class="fas fa-check"></i>
                      </a>
                      <a href="#" class=" btn btn-sm btn-warning btn-circle">
                            <i class="fas fa-times"></i>
                          </a> --}}
                      <button onclick= 'edit({{$Value->id}});'  data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                          <span></span>  <i class="fas fa-edit"></i>
                      </button>
                      <a href="{{ url('/service/delete/'.$Value->id) }}"  onclick="return confirm('Are you sure to delete this');" class="btn btn-sm btn-danger btn-circle">
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
                      url:"{{url('service/edit')}}/"+x,
                      success:function(response){
                          console.log(response);
                          $('.name').val(response.name);
                          $('.cId').val(response.id);
                          $('.icon').val(response.icon);
                          $('.sort').val(response.sort);                     
          
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