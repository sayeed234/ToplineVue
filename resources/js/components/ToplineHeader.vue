 <template>
 <div>
 <header>
  <nav class="navbar navbar-nav navbar-light navcolor navbar-expand-md fixed-top nav-fill">
  <div class="container">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
     
  <div class="collapse navbar-collapse justify-content-end col-lg-4 col-md-6" id="navbarNav">
       
     <a class="nav-link nav-item link"></a>
   <a class="nav-link nav-item link" href="" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-power-off"></i> Login</a>


   <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->


  
     <a class="nav-link nav-item link " href=""><i class="fa fa-plus-square"></i> Register</a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link" href="sports.html">EN | বাং  </a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>
     <a class="nav-link nav-item link"></a>

   </div>
<a class="nav-link nav-item navbar-brand nav-justified" href="beta.html">
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
<br>

</div>

</template>
  <script>
import ToplineHeader from "./ToplineHeader";
export default {
    components: { 
        ToplineHeader
    }
    
}

</script>

<style>

.sbtn{
 margin-top:20px;
}
.navcolor{

  background:white;
}
</style>