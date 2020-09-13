@extends('FrontEnd.layouts.app')
@section('title')
{{ $productdetails->product_name }} || topline.com.bd
@endsection
@section('content')
<div class="page-heading blog-list-heading">
<span></span> <!-- for dark-overlay on the bg -->

<div class="container">

          <h1>{{ $productdetails->product_name }}</h1>

          <div class="heading-link">
          <a href="{{ url('/') }}"><i  style="color:white;" class="fa fa-home"></i>Home</a>

          <i>/</i>

           <?php 
           $result=DB::table('vendors')->where('vendors.id',$productdetails->grocery_id)->first();
           //dd($result);
           ?>

          <a href="{{ url('/v/'.$result->slug) }}">{{$result->vendor_name  }}</a>
          <i>/</i>
          
          <a href=""><i  class="fa fa">{{ $productdetails->product_name }}</i></a>
          </div>

</div> <!-- END .container-->
</div> <!-- END .about-us-heading -->

</div> <!-- END .SEARCH and slide-section -->

<div id="page-content">
<div class="container">
<div class="page-content bl-list">
<div class="row">
          <div class="col-md-8">
          <div class="blog-list blog-post">

          <div class="post-with-image">
          <!--<div class="date-month">-->
          <!--  <a href="#">-->
          <!--    <span class="date">12</span>-->
          <!--    <span class="month">Sep</span>-->
          <!--  </a>-->
          <!--</div>-->

          <div class="post-image">
          <img src="{{asset($productdetails->image)}}" alt="">
          </div>
          <br>
          <h2 class="title">{{ $productdetails->product_name }}</h2>

          <p class="user">
          <a href="{{url('/v/'.$result->slug)}}"><i class="fa fa-user"></i>{{$result->vendor_name  }}</a>
          <a href="#"><i class="fa fa-folder-open-o"></i>Others Food</a>
          <a href="#"><i class="fa fa-comments-o"></i> Silver Fork's Top Food </a>
          </p>

          <div class="post">
          <p><strong>{{ $productdetails->sortdescription }}</strong>
          </p>


          <p>{{ $productdetails->longdescription }}
          </p>
          </div>

          <div class="share-this">
          <h4>Share This Post</h4>

          <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
          </div>

          <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
          </p>

          <div class="comments-section">
          <div class="comment-title">
                    <h4>2 Comments</h4>
          </div>

          <ul class="comments">
                    <li>

                    <div class="comment">
                    <img src="img/content/comment-image-1.jpg" alt="" class="avatar">

                    <div class="meta">
                    <a href="#"><strong>John Doe</strong></a>
                    -12 sep, 2014 - 9:14 Am -
                    <a href="#" class="reply">Reply</a>
                    </div>

                    <div class="content">
                    <p>Phasellus congue lacus eget neque. Phasellus ornare,
                    ante vitae consectetuer consequat, purus sapien ultricies dolor.</p>
                    </div>

                    </div> <!-- end .comment -->

                    <ul>
                    <li>
                    <div class="comment">
                    <img src="img/content/comment-image-2.jpg" alt="" class="avatar">

                    <div class="meta">
                              <a href="#"><strong>John Doe</strong></a>
                              -12 sep, 2014 - 9:14 Am -
                              <a href="#" class="reply">Reply</a>
                    </div>

                    <div class="content">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Facilis qui aspernatur ad eaque reiciendis ipsum.</p>
                    </div>
                    </div>

                    </li> <!-- end nasted li -->
                    </ul> <!-- end .nasted ul-->
                    </li> <!-- end .main list -->
          </ul> <!-- end .comments -->

          <h4>Join Conversation</h4>

          <form class="comment-form">
                    <div class="row">
                    <div class="col-md-4">
                    <input type="text" placeholder="Name *" required>
                    </div>

                    <div class="col-md-4">
                    <input type="email" placeholder="Email *" required>
                    </div>

                    <div class="col-md-4">
                    <input type="url" placeholder="Website">
                    </div>
                    </div>

                    <textarea placeholder="Your Comment ..." required></textarea>

                    <button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i> Send Message</button>
          </form>

          </div> <!-- end .comment-section -->

          </div> <!-- end .post-with-image -->
          </div> <!-- end .blog-post -->

          <div class="back-to-list">
          <a class="back-list" href="{{ url('/v/'.$result->slug) }}"><i class="fa fa-angle-left"></i>Back to Home</a>
          </div>

          </div> <!-- end .grid-layout -->

          <div class="col-md-4">
          <div class="post-sidebar" >

          <div class="latest-post-content">
          <h2>Price:- {{ $productdetails->price }} Tk.</h2>

          <div class="latest-post clearfix"style="background:gray;">
                    
                    <form class="comment-form">
                    <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">
                    <input class="form-control" type="number" min="1" value="1">
                    </div>
                    <div class="col-md-3"> </div>
                    </div>
          </form>
          <br>
          </div> <!-- end .latest-post -->
          </div> 
          <div class="latest-post clearfix"style="background:gray;">
                    
                    <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-4">
                    <button class="btn btn-primary">Add to Cart</button> 
                    </div>
                    <div class="col-md-4"> </div>
                    </div>
          <br>
          </div>

          <div class="post-categories">

          <h2>Categories</h2>

          <ul>
          <li><a href="#"><i class="fa fa-angle-right"></i>Lunch</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Dinner</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Breakfast</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Party</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Special Menu</a></li>
          </ul>
          </div> <!-- end .post-categories -->

          <div class="square-button">
          <button><img src="img/content/square-button.png" alt=""></button>

          <button><img src="img/content/square-button.png" alt=""></button>
          </div> <!-- end .sqare-button -->

          <div class="recently-added">
          <h2>Related Products</h2>

          @foreach($related as $related)

          <div class="single-product">
          <figure>
                    <img src="{{asset($related->thumbnail)}}" alt="">

                    <div class="rating">

                    <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                    </ul>

                    </div> <!-- end .rating -->
          </figure>

          <h4><a href="{{ url('/grocery_product/'.$related->id )}}">{{ $related->product_name }}</a></h4>

          <p>{{ str_limit($related->sortdescription,50) }}</p>

          <a class="read-more" href="{{ url('/grocery_product/'.$related->id )}}"><i class="fa fa-angle-right"></i>Read More</a>

          </div> <!-- end .recently-added -->

          @endforeach



          <div class="archive-calendar">
          <h2>Calendar</h2>

          <div id="datepicker">

          </div>

          </div> <!-- end .archive-calendar -->


          <div class="medium-rectangle">
          <img src="img/content/medium-rectangle.jpg" alt="">
          </div> <!-- end .medium-rectangle -->

          </div> <!-- end .post-sidebar -->
          </div> <!-- end .grid-layout -->

</div> <!-- end .row -->
</div> <!-- end .page-content -->
</div> <!-- end .container -->

</div> <!-- end #page-content -->
</div> <!-- end #page-content -->


@endsection