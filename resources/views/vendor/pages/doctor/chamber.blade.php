@extends('vendor.app')
@section('content')
<div class="page-content fade-in-up">
          {{-- Add Sliders Modal --}} 
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Create Chamber</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <form enctype="multipart/form-data" action="{{url('/doctor_chamber/store')}}" method="post">
            @csrf
              <div class="modal-body">
               <div class="row">
                <div class="col-sm-8 form-group">
                    <label for="Max Value"> Chamber Name</label>
                    <select class="form-control" required name="chamber">
                      @foreach($hospital as $hospital)
                    <option class="form-control" value="{{$hospital->id}}">{{$hospital->vendor_name}}</option>
                      @endforeach
                    </select>
                    </div> 
                  <div class="col-sm-4 form-group">
                    <label for="Max Value">Time</label>
                    <input class="form-control" required placeholder="2PM - 5PM"  type="text" name="time">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Max Value">ON Day</label>
                    <input class="form-control" placeholder=" Monday-Friday" type="text" name="onday">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Max Value">OFF Day</label>
                    <input class="form-control"  placeholder="Saturday, Sunday" type="text" name="offday">
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
                <form enctype="multipart/form-data" action="{{url('/doctor_chamber/update')}}" method="post" >
                  @csrf
              <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-8 form-group">
                          <label for="Max Value"> Chamber Name</label>
                          <select class="form-control chamber" required name="chamber">
                            @foreach($hospitals as $hospital)
                          <option class="form-control" value="{{$hospital->id}}">{{$hospital->vendor_name}}</option>
                            @endforeach
                          </select>
                          <input type="hidden" class="cId" id="id" name="id">
                          </div> 
                        <div class="col-sm-4 form-group">
                          <label for="Max Value">Time</label>
                          <input class="form-control time" required placeholder="2PM - 5PM"  type="text" name="time">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="Max Value">ON Day</label>
                          <input class="form-control onday" placeholder=" Monday-Friday" type="text" name="onday">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="Max Value">OFF Day</label>
                          <input class="form-control offday"  placeholder="Saturday, Sunday" type="text" name="offday">
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
                  <div class="col-md-6"><h5 class="m-0 font-weight-bold ">My Chamber</h5></div>
                  <div class="col-md-6">
                          <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                             New Chamber                
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
                        <th>Hospital</th>
                        <th>Time</th>
                        <th>On Day</th>
                        <th>Status</th>                    
                        <th>Action</th>
          
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($chamber as $doc)
                      <tr>
                      <td>{{$doc->vendor_name}}</td>
                      <td>{{$doc->time}}</td>
                      <td>{{$doc->onday}} </td>
                      <td> @if($doc->oncall==0) Oncall  @else Chamber @endif </td>

                        <td>
                     @if($doc->oncall==0)
                    <a href="{{route('status',['id'=>$doc->id])}}" class=" btn btn-sm btn-success btn-circle" title="Oncall Doctor">
                              <i>C</i>
                    </a>
                    @elseif($doc->oncall==1)
                    <a href="{{route('status',['id'=>$doc->id])}}" class=" btn btn-sm btn-primary btn-circle" title="Chamber Doctor">
                              <i>O</i>
                              </a>
                    @endif 
          

                        <button onclick= 'edit({{$doc->id}});'  data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                            <span></span>  <i class="fas fa-edit"></i>
                        </button>
                        <a href="{{url('/doctor_chamber/delete/'.$doc->id) }}"  onclick="return confirm('Are you sure to delete this');" class="btn btn-sm btn-danger btn-circle">
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
                        url:"{{url('doctor_chamber/edit')}}/"+x,
                        success:function(response){
                            console.log(response);
                            $('.chamber').val(response.hospital_id);
                            $('.cId').val(response.id);
                            $('.time').val(response.time);
                            $('.onday').val(response.onday);                                                  $('.offday').val(response.offday);                                                    
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