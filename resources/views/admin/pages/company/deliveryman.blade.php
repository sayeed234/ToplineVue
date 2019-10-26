@extends('admin.layouts.app')
@section('content')
    
<div class="page-content fade-in-up">
{{-- Add Sliders Modal --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Delivery Man Entry Form</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="" method="post">
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-4 form-group">
                <label for="Max Value">Name</label>
                <input class="form-control" required  type="text" name="name">
            </div>
            <div class="col-sm-4 form-group">
                    <label for="Max Value">TLD ID </label>
                    <input class="form-control" required  type="text" name="tldid">
           </div>  
            <div class="col-sm-4 form-group">
                 <label for="Max Value">Phone</label>
                 <input class="form-control" required type="number" name="phone">
           </div>
           <div class="col-sm-4 form-group">
                 <label for="Max Value">Alt Phone</label>
                 <input class="form-control" type="number" name="phone2">
            </div>
             <div class="col-sm-4 form-group">
                  <label for="Max Value">Email</label>
                <input class="form-control"  type="email" name="email">
                </div>
                  <div class="col-sm-4 form-group">
                    <label for="Max Value"> Present Address</label>
                    <input class="form-control"  type="text" name="address">
                 </div>
                  <div class="col-sm-4 form-group">
                    <label for="Max Value">NID</label>
                    <input class="form-control"    type="text" name="nid">
                 </div> 
                 <div class="col-sm-4 form-group">
                        <label for="Max Value">Bank Acc</label>
                        <input class="form-control"   type="text" name="bankacc">
                    </span>
                    </div>  
                <div class="col-sm-4 form-group">                	
            <label>Photo(Size 250 X 100)</label>
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
<form enctype="multipart/form-data" action="" method="post" >
    <div class="modal-body">
                    <div class="row">
          <div class="col-sm-4 form-group">
                    <label for="Max Value">Name</label>
                    <input class="form-control" required  type="text" name="name">
          </div>
          <div class="col-sm-4 form-group">
                    <label for="Max Value">TLD ID </label>
                    <input class="form-control" required  type="text" name="tldid">
          </div>  
          <div class="col-sm-4 form-group">
                    <label for="Max Value">Phone</label>
                    <input class="form-control" required type="number" name="phone">
          </div>
          <div class="col-sm-4 form-group">
                    <label for="Max Value">Alt Phone</label>
                    <input class="form-control" type="number" name="phone2">
          </div>
                    <div class="col-sm-4 form-group">
                    <label for="Max Value">Email</label>
                    <input class="form-control"  type="email" name="email">
                    </div>
                    <div class="col-sm-4 form-group">
                    <label for="Max Value"> Present Address</label>
                    <input class="form-control"  type="text" name="address">
                    </div>
                    <div class="col-sm-4 form-group">
                    <label for="Max Value">NID</label>
                    <input class="form-control"    type="text" name="nid">
                    </div> 
                    <div class="col-sm-4 form-group">
                      <label for="Max Value">Bank Acc</label>
                      <input class="form-control"   type="text" name="bankacc">
                    </span>
                    </div>  
                    <div class="col-sm-4 form-group">                	
          <label>Photo(Size 250 X 100)</label>
          <input class="form-control" required type="file" name="image">
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Delivery man Information</h5></div>
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    New Delivery man                    
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
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
              <td>
                <a href="#" class=" btn btn-sm btn-success btn-circle">
                <i class="fas fa-check"></i>
              </a>
              <a href="#" class=" btn btn-sm btn-warning btn-circle">
                    <i class="fas fa-times"></i>
                  </a>
              <a href="#"  data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                    <i class="fas fa-edit"></i>
                  </a>
            <a href="#" class="btn btn-sm btn-primary btn-circle">
                    <i class="far fa-eye"></i>
              </a>
              <a href="#" class="btn btn-sm btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
              </a>
              
            </td>
            </tr>           
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011/01/25</td>
              <td>$112,000</td>
              <td>
                    <a href="#" class=" btn btn-sm btn-success btn-circle">
                            <i class="fas fa-check"></i>
                          </a>
                    <a href="#" class=" btn btn-sm btn-warning btn-circle">
                                <i class="fas fa-times"></i>
                            </a>
                        <a href="#"  data-toggle="modal" id="edit"           data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info   btn-circle">
                                    <i class="fas fa-edit"></i>
                                  </a>
                        <a href="#" class="btn btn-sm btn-primary btn-circle">
                                <i class="far fa-eye"></i>
                          </a>
                          <a href="#" class="btn btn-sm btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                          </a> 
              </td>
            </tr>
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
              url:"{{url('company/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.name').val(response.name);
                  $('.cId').val(response.id);
                  $('.mobile').val(response.mobile);
                  $('.mobile2').val(response.mobile2);
                  $('.telephone').val(response.telephone);
                  $('.email').val(response.email);
                  $('.web').val(response.web);
                  $('.address').val(response.address);
                  $('.license').val(response.license);
                
  
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