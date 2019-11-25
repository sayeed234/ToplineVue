@extends('vendor.app')
@section('content')
<div class="page-content fade-in-up">
          {{-- Add Sliders Modal --}} 
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Entry Doctors</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
<form enctype="multipart/form-data" action="{{url('/doctor_list/store')}}" method="post">
            @csrf
              <div class="modal-body">
               <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="Max Value">Name</label>
                    <input class="form-control" required  type="text" name="name">
                    </div> 
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">Qualification</label>
                    <input class="form-control" required  type="text" name="qualification">
                    </div>
                    <div class="col-sm-6 form-group">
                      <label for="Max Value">Speciality</label>
                      <input class="form-control" required  type="text" name="speciality">
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="Max Value">Time</label>
                    <input class="form-control"  type="text" name="time">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Max Value">ON Day</label>
                    <input class="form-control"  type="text" name="onday">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Max Value">OFF Day</label>
                    <input class="form-control"  type="text" name="offday">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Max Value">Photo</label>
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
          <div class="modal-dialog   modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Update Form</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
          <form enctype="multipart/form-data" action="{{url('/doctor_list/update')}}" method="post" >
                  @csrf
              <div class="modal-body">
                              <div class="row">
                 <div class="col-sm-6 form-group">
                    <label for="Max Value">Name</label>
                    <input class="form-control name"type="text" name="name">
                    <input type="hidden" id="id" name="id" class="cId">
                    </div> 
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">Qualification</label>
                    <input class="form-control qualification"  type="text" name="qualification">
                    </div>
                    <div class="col-sm-6 form-group">
                              <label for="Max Value">Speciality</label>
                              <input class="form-control speciality"  type="text" name="speciality">
                    </div>
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">Time</label>
                    <input class="form-control time"  type="text" name="time">
                    </div>
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">ON Day</label>
                    <input class="form-control onday"  type="text" name="onday">
                    </div>
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">OFF Day</label>
                    <input class="form-control offday"  type="text" name="offday">
                    </div>
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">Photo</label>
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
                  <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Doctor List</h5></div>
                  <div class="col-md-6">
                          <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                              New Doctor                  
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
                        <th>Qualification</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Chamber</th>                      
                        <th>Action</th>
          
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($doctor as $doc)
                      <tr>
                      <td>{{$doc->name}}</td>
                      <td>{{$doc->qualification}}</td>
                      <td> <img src="{{asset($doc->image)}}" height="60px" width="60px"></td>
                      <td> @if($doc->oncall==0) Oncall Doctor @else Chamber Doctor @endif </td>
                      <td> @if($doc->chamber==1)Available @else Not Available @endif </td>
                           
                        <td>
                    @if($doc->oncall==0)
                    <a href="{{route('status1',['id'=>$doc->id])}}" class=" btn btn-sm btn-success btn-circle" title="Oncall Doctor">
                              <i>C</i>
                    </a>
                    @elseif($doc->oncall==1)
                    <a href="{{route('status1',['id'=>$doc->id])}}" class=" btn btn-sm btn-danger btn-circle" title="Chamber Doctor">
                              <i>O</i>
                              </a>
                    @endif 

                    @if($doc->chamber==0)
                    <a href="{{route('status2',['id'=>$doc->id])}}" class=" btn btn-sm btn-success btn-circle" title="Available">
                              <i>A</i>
                    </a>
                    @elseif($doc->chamber==1)
                    <a href="{{route('status2',['id'=>$doc->id])}}" class=" btn btn-sm btn-danger btn-circle" title=" Not Available">
                              <i>N</i>
                              </a>
                    @endif 



                        <button onclick= 'edit({{$doc->id}});'  data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                            <span></span>  <i class="fas fa-edit"></i>
                        </button>
                        <a href="{{url('/doctor_list/delete/'.$doc->id) }}"  onclick="return confirm('Are you sure to delete this');" class="btn btn-sm btn-danger btn-circle">
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
                        url:"{{url('doctor_list/edit')}}/"+x,
                        success:function(response){
                            console.log(response);
                            $('.name').val(response.name);
                            $('.cId').val(response.id);
                            $('.qualification').val(response.qualification);
                            $('.speciality').val(response.speciality);                                        
                            $('.time').val(response.time);                                        
                            $('.onday').val(response.onday);                                        
                            $('.offday').val(response.offday);                                                                                    
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