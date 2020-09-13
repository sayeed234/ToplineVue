<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>

  <!-- Stylesheets -->
  <link href="{{asset('/css/app.css')}}" rel="stylesheet" /> 
  <link href="{{asset('/css/topline.css')}}" rel="stylesheet" />
  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
 
</head>
<style>
/*body {
  font-family: "Lato", sans-serif;
}*/

.sidebar {
  min-height: 90%;
  width: 0;
  position: fixed;
  z-index: 100;
  top: 0;
  right: 0;
  background-color: #85b7b0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 0px 8px 8px 32px;
  text-decoration: none;
  font-size: 10px;
  color: #ffffff;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 10px;
  font-size: 36px;
  margin-right: 2px;
  margin-top: 20%;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-right .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 250px;
  right: 10px;
  z-index: 100;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:teal;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>
      
  @include('FrontEnd.partial.header')
  
 <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form action="{{url('/userlogin')}}" method="POST">
      @csrf
     <div class="row" style="padding:30px;">
      <div class="col-md-1"></div>
       <div class="col-md-10"><img src="http://topline.com.bd/img/toplonelogo.png" style="height:30px;width:100%; margin-top:-20px;" class="d-inline-block float-lg-left float-md-left" ></div>
       <div class="col-md-1"></div>
       <br>
        {{-- <p >&nbsp;&nbsp;&nbsp;Please Enter your valid ID & Password</p> --}}
    <div class="col-sm-12">
      <div class="  input-group" >
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
        </div>
        <input type="text" class="form-control" name="mobile" placeholder="Phone No.">
      </div> 
</div>
<br><br><br>
  <div class="col-sm-12">
      <div class="input-group" >
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
        </div>
        <input type="password" class="form-control" name="password"  placeholder="Password">
      </div>
      </div>
      <br><br><br>
      <div>
      <div class="col-sm-12">    
        <div class="form-check">
      <label class="form-check-label">
      <input type="checkbox" class="form-check-input"   name="option1" value="something" style="margin-left:-60px;" >&nbsp;&nbsp;<span>Remember me</span>
      </label>
    </div>
  </div>
  </div>
   <div class="col-sm-12">
     <div class="col-sm-8"></div>
      <div class="col-sm-4">
         <button type="submit" class="btn btn-primary">Sign in</button>
      </div>          
    </div> 
  </form> 
    <br><br><br>
      <div class="col-sm-12">
     <div class="col-sm-5">
       <a href="" data-toggle="modal" data-target=".bd-example-modal">Registation</a>
     </div>
      <div class="col-sm-7">
        <a href="">Forget Password</a>
      </div>          
    </div> 
      </div> 
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog ">
    <div class="modal-content">
     
     <div class="row" style="padding:50px;">
       <div class="col-md-2"></div>
       <div class="col-md-8"><img src="http://topline.com.bd/img/toplonelogo.png" style="height:40px;width:250px;margin-top:-30px;" class="d-inline-block float-lg-left float-md-left" ></div>
       <div class="col-md-2"></div> <br>  
     <form action="{{url('/userregistration')}}" method="post" > 
    @csrf
    <div class="form-row">
      <div class="form-group col-md-12">
      <label for="inputEmail4"></label>
      <input type="text"  class="form-control" required name="name" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-12">
      <input type="number" class="form-control" required name="mobile"  placeholder="Phone Number">
    </div>
    <div class="form-group col-md-12">
      <input type="email" class="form-control" name="email"   name="email" placeholder=" Email">
    </div>
    <div class="form-group col-md-12">
    <select class="form-control"  name="gender" >
      <option>Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    </div>
    <div class="form-group col-md-12">
      <input type="password" class="form-control" required name="password"  placeholder=" Create Password">
    </div>
    <br><br>
     <div class="col-sm-12"> 
        <div class="form-check">
      <label class="form-check-label">
      <input type="checkbox" class="form-check-input"  required  name="option1" value="something" style="margin-left:-220px;" >&nbsp;&nbsp;<span>i read and agree to the terms and conditions</span>
      </label>
    </div>
  </div>
      <div class="form-group col-md-12">
        <div class="col-md-9"></div>
        <div class="col-md-3">
           {{-- <button class="btn btn-success">Submit</button> --}}
         <input  type="submit" class="form-control btn btn-sm btn-primary" value="SignUp"> 
           </div>
     
    </div>
      </div>
    </form>

      </div> 
    </div>
  </div>
</div>
  <div id="app">
    @yield('content')
    {{-- add to cart  --}}

    {{-- <cart></cart> --}}
  </div>
  
  <!-- OUR PARTNER SLIDER BEGIN -->


  
 {{-- <button class="openbtn" onclick="openNav()"  id="myBtn" title="Product Cart"><i class="fa fa-cart-arrow-down"></i>
  <p>0 Items</p>
  <hr>
  <p style="background-color: gray">$ 0000</p>
 </button>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  </div> --}}
  
  <!-- END OUR PARTNER SLIDER -->
  

  @include('FrontEnd.partial.footer')


  <script src="{{asset('/js/app.js')}}"></script>
  <script src="{{asset('/js/Topline.js')}}"></script>
  @yield('script')
  
</body>
</html>