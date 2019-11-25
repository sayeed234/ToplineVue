@extends('vendor.app')
@section('content')
    
<div class="page-content fade-in-up">
{{-- Add Sliders Modal --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Create Product</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{ url('/restaurent_product/store') }}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-4 form-group">
                <label for="Max Value">Product Category</label>
                <select class="form-control " name="category">
          @foreach($category as $category)
              <option class="form-control"value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
               </select>
            </div>
            <div class="col-sm-6 form-group">
                 <label for="Max Value">Product Name</label>
                 <input class="form-control" required type="text" name="pname">
           </div>
           <div class="col-sm-2 form-group">
              <label for="Max Value">Price</label>
              <input class="form-control" required type="text" name="price">
          </div>
        <div class="col-sm-6 form-group">
            <label for="Max Value"> Sort Description</label>
         <textarea class="form-control" type="text" name="sortdescription"> </textarea>
      </div>
           <div class="col-sm-6 form-group">
            <label for="Max Value">Long Description</label>
               <textarea class="form-control" type="text" name="longdescription"> </textarea>
            </div>
            <div class="col-sm-6 form-group">                	
            <label>Product thumbnail (250 X 250)</label>
            <input class="form-control" required type="file" name="thumbnail">
        </div>
        <div class="col-sm-6 form-group">                	
            <label>Product Image (550 X 550)</label>
            <input class="form-control" required type="file" name="image">
        </div>
        <div class=" col-sm-2 custom-control custom-checkbox custom-control-inline">
        </div>
    
      @foreach($menu as $menu)
        <div class=" col-sm-2 custom-control custom-checkbox custom-control-inline">
       <input type="checkbox" class="custom-control-input" name="menu[]" value="{{ $menu->id }}" id="defaultInline{{ $menu->id }}">
          <label class="custom-control-label" for="defaultInline{{ $menu->id }}">{{ $menu->menu}}</label>
     </div>
     @endforeach

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
      <form enctype="multipart/form-data" action="{{ url('/restaurent_product/update') }}" method="post" >
        @csrf
    <div class="modal-body">
            <div class="row">
              <div class="col-sm-4 form-group">
                <label for="Max Value">Product Category</label>
                <select class="form-control category" name="category">
          @foreach($categorys as $category)
              <option class="form-control"value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
          <input type="hidden" class="cId" id="id" name="id">
                </select>
            </div>
            <div class="col-sm-6 form-group">
                  <label for="Max Value">Product Name</label>
                  <input class="form-control pname"  required type="text" name="pname">
            </div>
            <div class="col-sm-2 form-group">
              <label for="Max Value">Price</label>
              <input class="form-control price" required type="text" name="price">
          </div>
        <div class="col-sm-6 form-group">
            <label for="Max Value"> Sort Description</label>
          <textarea class="form-control sortdescription" type="text" name="sortdescription">  </textarea>
      </div>
            <div class="col-sm-6 form-group">
            <label for="Max Value">Long Description</label>
                <textarea class="form-control longdescription" type="text" name="longdescription"> </textarea>
            </div>
            <div class="col-sm-6 form-group">                	
            <label>Product thumbnail (250 X 250)</label>
            <input class="form-control thumbnail"  type="file" name="thumbnail">
        </div>
        
        <div class="col-sm-6 form-group">                	
            <label>Product Image (550 X 550)</label>
            <input class="form-control image"  type="file" name="image">
        </div>
      
        <div class="col-sm-4 form-group">                	
          <label>Select Menu</label>
          <select class="form-control"  name="menu[]" multiple="multiple" >
              @foreach($menus as $menu)       
             <option class="form-control"  value="{{ $menu->id }}" >{{ $menu->menu}}</option>
             @endforeach
          </select>
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">All Product</h5></div>
      

        <div class="col-md-6">          
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    New Product                   
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
              <th>Category</th>
              <th>Price</th>
              <th>Status</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           <?php $sl=1; ?>
            @foreach($product as $ven)
            <tr>
              <td>{{$sl++}}</td>
              <td>{{$ven->product_name}}</td>
              <td>{{$ven->name}}</td>
              <td>{{ $ven->price}}</td>
              <td>@if($ven->status==1) Active @else Inactive @endif</td>
              <td><img src="{{asset($ven->thumbnail)}}" height="50px" width="70px"></td>
              <td>
          
                @if($ven->status==1)
                    <a href="{{route('productstatus',['id'=>$ven->id])}}" class=" btn btn-sm btn-success btn-circle" title="Active">
                        <i class="fas fa-check"></i>
                    </a>
                    @elseif($ven->status==0)
                    <a href="{{route('productstatus',['id'=>$ven->id])}}" class=" btn btn-sm btn-danger btn-circle" title="Inactive">
                        <i class="fas fa-times"></i>
                        </a>
                 @endif

             <button onclick='edit({{$ven->id}});'   data-toggle="modal" id="edit" data-target="#exampleModalCenter_edit" class=" btn btn-sm btn-info btn-circle">
                      <span></span>  <i class="fas fa-edit"></i>
                  </button>
                  
              <a href="{{ url('/restaurent_product/delete/'.$ven->id) }}"  onclick="return confirm('Are you sure to delete this');" class="btn btn-sm btn-danger btn-circle">
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
              url:"{{url('restaurent_product/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.category').val(response.product_category);
                  $('.cId').val(response.id);
                  $('.pname').val(response.product_name);
                  $('.price').val(response.price);
                  $('.sortdescription').val(response.sortdescription);
                  $('.longdescription').val(response.longdescription);
                  $('.menu').val(response.menu);
                
  
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