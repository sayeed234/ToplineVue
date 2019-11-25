
 <header>
  <nav style="background:#e3e3e3;" class="navbar navbar-nav navbar-light navcolor navbar-expand-md fixed-top nav-fill">
     @if (session('invalid'))
   <div class="alert alert-dismissible alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     Please Enter Valid Phone No.
   </div>
   @endif
   @if (session('invalidpass'))
   <div class="alert alert-dismissible alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     Wrong Password !! Help:01750758262
   </div>
   @endif
   @if (session('alredy'))
   <div class="alert alert-dismissible alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>Account already exists</strong>
   </div>
   @endif
  <div class="container">
    
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
     
  <div class="collapse navbar-collapse justify-content-end col-lg-4 col-md-6" id="navbarNav">
       
     <a class="nav-link nav-item link"></a>

     @if(Session::get('role')==3)
     <h5><a href="#" onclick="document.getElementById('Customerlogout').submit();"> <i class="fa fa-user"></i> Logout</a></h5>
     <form id="Customerlogout" action="{{ url('/userlogout') }}" method="post">
      @csrf
     </form>
  @elseif(Session::get('role')==2)
  <a class="nav-link nav-item link" href="{{url('/mydashboard')}}"><i class="fa fa-user"></i>  My Profile</a> 
  @elseif(Session::get('role')==1)
  <a class="nav-link nav-item link" href="{{url('/dashboard')}}"><i class="fa fa-user"></i> Dashboard</a>
      @else
   <a class="nav-link nav-item link" href="" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-user"></i> Login</a>
     <a class="nav-link nav-item link " href="" data-toggle="modal" data-target=".bd-example-modal"><i class="fa fa-plus-square"></i> Register</a>
     @endif


     {{-- <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a> --}}
     <a class="nav-link nav-item link" href="sports.html">EN | বাং  </a>
     {{-- <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a> --}}

   </div>
  
  <a class="nav-link nav-item navbar-brand nav-justified" href="{{url('/')}}">
    <img src="http://topline.com.bd/img/toplonelogo.png" style="height:40px;width:250px;" class="d-inline-block float-lg-left float-md-left" >
   </a>
 <div class="input-group mb-3 sbtn">
 
      <input type="text" class="form-control" placeholder="Search for food, grocery, transport"  >

      <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2"> <a ><i class="fa fa-search" aria-hidden="true"></i></a></span>
      </div>
    </div>

  </div>
  </nav>
</header>
<br>
<br>

