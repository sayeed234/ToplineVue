<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('mydashboard')}}">
            <div class="sidebar-brand-text mx-3">topline.com.bd </div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
    
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="{{route('mydashboard')}}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>My Dashboard</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    

      @if(Session::get('serviceid')==3)
          <!-- Heading -->
          <div class="sidebar-heading">
           Hospital
          </div>   
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-plus fa-cog"></i>
              <span>Hospital Management</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
              <a class="collapse-item" href="{{url('/hospital_info/'.Session::get('logid'))}}">Hospital Info</a>
              <a class="collapse-item" href="{{url('/doctor_list')}}">Doctor's List</a>               
                <a class="collapse-item" href="{{url('/service_list')}}">Service's</a>
              </div>
            </div>
          </li>
          <hr class="sidebar-divider">

     @elseif(Session::get('serviceid')==4)

          <div class="sidebar-heading">
             Doctor
             </div>
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-user fa-user"></i>
              <span>Doctor Management</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('/doctor_info/'.Session::get('logid'))}}">My Profile</a>
              <a class="collapse-item" href="{{url('/doctor_chamber')}}">My Chamber</a>
              </div>
            </div>
          </li>

 @elseif(Session::get('serviceid')==2)

          <div class="sidebar-heading">
            Restaurent
             </div>
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-user fa-user"></i>
              <span>Restaurent Management</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('/restaurent_info/'.Session::get('logid'))}}">My Profile</a>
              <a class="collapse-item" href="{{ route('products') }}">Products</a>
              </div>
            </div>

          </li>
          
    @elseif(Session::get('serviceid')==7)
          <!-- Heading -->
          <div class="sidebar-heading">
           Grocery
          </div>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-user fa-user"></i>
              <span>Grocery Management</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('/restaurent_info/'.Session::get('logid'))}}">My Profile</a>
              <a class="collapse-item" href="{{ route('grocery_products') }}">Products</a>
              </div>
            </div>
          </li>

    @else
    
    
   @endif
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
    
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
    
        </ul>
        <!-- End of Sidebar -->