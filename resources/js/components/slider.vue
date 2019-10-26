<template>
         
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://a.mktgcdn.com/p/AhQAzmAGL-O6Xo3uUle-NXv8Epiw3i8fAq5ePomZ8bA/1920x1280.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="http://yesofcorsa.com/wp-content/uploads/2018/08/Supermarket-Wallpaper-HD.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="https://daishocreative.com/wp-content/uploads/2019/04/mic_dishes_banner.jpg" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h3>Third slide label</h3>
          <h5>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</h5>
        </div> -->
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
</template>
<script>
import slider from "./slider";

export default {
          components:{
            slider
          }
}
</script>
<style scoped>

</style>