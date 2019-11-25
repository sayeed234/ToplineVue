@extends('vendor.app')
@section('content')
<form enctype="multipart/form-data" action="{{url('/restaurent_info/update')}}" method="post">
          @csrf
            <div class="modal-body">
                <div class="row">
           <input class="form-control vendorname" type="hidden" value="{{$data->id}}" name="id">
                    <div class="col-sm-4 form-group">
                        <label for="Max Value">Restaurent Name</label>
                    <input class="form-control vendorname"  type="text" value="{{$data->vendor_name}}" name="vendorname">
                    </div> 
                    <div class="col-sm-3 form-group">
                      <label for="Max Value">Address</label>
                      <input class="form-control address"  value="{{$data->address}}"  type="text" name="address">
                  </div>
                  <div class="col-sm-3 form-group">
                    <label for="Max Value">Logo (250 X 250)</label>
                    <input class="form-control logo" value="{{$data->vendor_logo}}"  type="file" name="image">
                </div>
                <div class="col-sm-2 form-group">
          <label for="Max Value">Current Logo</label>
          <img src="{{asset($data->vendor_logo)}}" height="60px" width="100px">
             </div>
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Slider (1800 X 800)</label>
                    <input class="form-control" type="file" value="{{$data->slider}}" name="slider">
                </div>  
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Current slider</label><br>
                    <img src="{{asset($data->slider)}}" height="60px" width="200px">
                    </div> 
                 <div class="col-sm-2 form-group">
                    <label for="Max Value">Slug</label>
                    <input class="form-control slug"  value="{{$data->slug}}" type="text" name="slug">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Restaurent Special</label>
                    <input class="form-control" type="text" value="{{$data->special}}" name="special">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Open Day</label>
                    <input class="form-control" type="text" value="{{$data->openday}}" name="openday">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Open Time</label>
                    <input class="form-control" type="text" value="{{$data->opentime}}" name="opentime">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Close Day</label>
                    <input class="form-control" type="text" value="{{$data->closeday}}" name="closeday">
                </div>
                <div class="col-sm-3 form-group">
                    <label for="Max Value">Close Time</label>
                    <input class="form-control" type="text" value="{{$data->closetime}}" name="closetime">
                </div>
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Sort Description</label>
                    <textarea class="form-control" type="text" value="{{$data->sortdescription}}" name="sortdescription">{{$data->sortdescription}}</textarea>
                </div>
                <div class="col-sm-8 form-group">
                    <label for="Max Value">Long Description</label>
                    <textarea class="form-control" type="text" value="{{$data->longdescription}}"name="longdescription">{{$data->longdescription}}</textarea>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
@endsection