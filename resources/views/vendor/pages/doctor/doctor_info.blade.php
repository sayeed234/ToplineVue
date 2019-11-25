@extends('vendor.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



<form enctype="multipart/form-data" action="{{url('/doctor_info/update')}}" method="post">
          @csrf
            <div class="modal-body">
                <div class="row">
           <input class="form-control vendorname" type="hidden" value="{{$data->id}}" name="id">
                    <div class="col-sm-4 form-group">
                        <label for="Max Value"> Name</label>
                    <input class="form-control vendorname"  type="text" value="{{$data->vendor_name}}" name="vendorname">
                    </div> 
                    <div class="col-sm-3 form-group">
                      <label for="Max Value">Address</label>
                      <input class="form-control address"  value="{{$data->address}}"  type="text" name="address">
                  </div>
                  <div class="col-sm-3 form-group">
                    <label for="Max Value"> Upload Image (250 X 250)</label>
                    <input class="form-control logo" value="{{$data->vendor_logo}}"  type="file" name="image">
                </div>
                <div class="col-sm-2 form-group">
              <label for="Max Value">Profile Picture</label>
              <img src="{{asset($data->vendor_logo)}}" height="60px" width="100px">
             </div>
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Upload Cover Image </label>
                    <input class="form-control" type="file" value="{{$data->slider}}" name="slider">
                </div>  
                <div class="col-sm-4 form-group">
                    <label for="Max Value">Cover Picture</label><br>
                    <img src="{{asset($data->slider)}}" height="60px" width="250px">
                    </div> 
                 <div class="col-sm-4 form-group">
                    <label for="Max Value">Slug</label>
                    <input class="form-control slug"  value="{{$data->slug}}" type="text" name="slug">
                </div>
                {{-- <div class="col-sm-6 form-group">
                    <label for="Max Value"> My Speciality</label>
                    <input class="form-control" type="text" value="{{$data->special}}" name="special">
                </div> --}}


                <div class="col-sm-6 form-group">
    <label for="Max Value"> My Speciality ( <span style="font-size:15px;color:deeppink;">{{ $data->special}}</span> )</label>

                @php
                 $array = explode(',', $data->special); 
                 $collect = collect($array);
                @endphp
                {{-- {{ dd($collect) }} --}}

                <select class="selectpicker form-control" name="special[]" multiple  data-live-search="true">
                        @foreach($category as $key => $category )
                        <option class="form-control" value="{{ $category->doctor_category }}">{{ $category->doctor_category}}</option>

                        {{-- @foreach($collect as $key => $col) --}}
                            {{-- <option @if( $category->doctor_category == $col[$key]) selected  @endif
                            value="{{ $category->doctor_category }}">{{ $category->doctor_category }}</option> --}}
                        {{-- @endforeach --}}

                        
                        @endforeach
                      </select>
                </div>
                {{-- <div class="col-sm-6 form-group">
                    <label for="Max Value"> My Speciality</label>
                   <select class="form-control select2_demo_1" name="special[] " multiple="">
                       @foreach($category as $category )
                  <option value="{{ $category->doctor_category }}">{{ $category->doctor_category}}</option>
                       @endforeach
                   </select>
                </div> --}}








                <div class="col-sm-6 form-group">
                    <label for="Max Value">Qualification</label>
                    <input class="form-control" type="text" value="{{$data->openday}}" name="openday">
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