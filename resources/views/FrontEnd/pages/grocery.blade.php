@extends('FrontEnd.layouts.app')
@section('title')
{{$profile->vendor_name}} || topline.com.bd
@endsection
@section('content')
<div class="header-search company-profile-height">
  <div class="company-heading-view" background="bgimage.jpg">
    {{-- <div class="container">
      <div class="button-content">
        <button class="general-view-btn active"><i class="fa fa-newspaper-o"></i><span>General</span></button>
        <button class="map-view-btn"><i class="fa fa-map-marker"></i><span>Map</span></button>
        <button class="male-view-btn"><i class="fa fa-male"></i><span>Street</span></button>
      </div>
    </div> --}}
    <div class="company-slider-content">

      <div class="general-view" >
        @if($profile->vendor_logo=='')
        <span>
          <img src="https://i2.wp.com/www.christiesrealestate.com/blog/wp-content/uploads/2018/08/2016_Issue_1_restaurants_banner.jpg?resize=1600%2C550&ssl=1" width="100%" height="100%">
        
        </span> 
        @else
        <span>
            <img src="{{asset($profile->slider)}}" width="100%" height="100%">
          
          </span>
        @endif
        <div class="container">

          <div class="logo-image">
            <img src="{{asset($profile->vendor_logo)}}" alt="">
          </div>

           <h1></h1>
        </div>
        
      </div> <!-- END .general-view -->

      <div class="company-map-view">
        <!--<div id="company_map_canvas"></div>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1532.7393576213892!2d91.11010930638493!3d23.
        9784999484396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375405bc1aeee443%3A0xfce3f35dfd78c2f2!2sSilver
        %20Fork%20Chinese%20Restaurant!5e0!3m2!1sen!2sbd!4v1570095990535!5m2!1sen!2sbd"
        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div> <!-- END .company-map-view -->

      <div class="company-map-street">
        <div id="company_map_canvas_street"></div>
      </div> <!-- END .company-map-view-street -->

    </div> <!-- END .company-slider-content -->

  </div> <!-- END .about-us-heading -->
</div> <!-- END .SEARCH and slide-section -->



<div id="mySidenav" class="sidenav">

<a href="{{ url('/') }}" id="contact">0 Item </a>
  
</div>
<div id="page-content">
  <div class="container">
      <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
      
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
              </div>
      
              <div class="modal-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
              </div>
      
            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->
 
        

        
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="page-content company-profile">

          <div class="tab-content">
            <div class="tab-pane " id="company-profile">
              <h2>{{$profile->vendor_name}}</h2>
              <h5>
                <p style="color:darkgray;">{{$profile->special}}</p>
              </h5>

              <div class="social-link text-right">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>

              <div class="company-text">
                <p>
                  <strong>{{ $profile->sortdescription }}</strong>
                </p>

                <p>{{ $profile->longdescription }}.
                </p>
              </div> <!-- end company-text -->



              <div class="company-service">
                <h4>Range of Service</h4>

                <ul class="list-inline">
                  <li><a href="#">Fast food</a></li>
                  <li><a href="#">Dinner</a></li>
                  <li><a href="#">Snack's</a></li>
                  <li><a href="#">Coffe</a></li>
                  <li><a href="#">Lunch</a></li>
                  <li><a href="#">Weading Party</a></li>
                  <li><a href="#">Party Food</a></li>
                </ul>
              </div> <!-- end company-service -->

              <div class="company-ratings">
                <h4>Related  Restaurent</h4>



                <div class="rating-with-details">

                  <div class="single-content">
                    <div class="company-rating-box">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv_XfVQYssyi-eAfsNlce9GCVE4JjPvWceWSMxq_1Icr0HtpGt" width="60px;">
                   </div>
                   <div class="rating-details">
                    <div class="meta">
                      <p><a href="#"><strong>Santoor Restaurant</strong></a></p><br>
                      
                    </div>

                    <div class="content">
                      <p>Phasellus congue lacus eget neque. Phasellus ornare,
                        ante vitae consectetuer consequat, purus sapien ultricies dolor.
                      </p>
                    </div>
                  </div>
                </div> <!-- end .single-content -->

                <div class="single-content">
                  <div class="company-rating-box">
                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpO9WI55Pzi7ip8RyvowQMJV0T6DHJBrqJCd0n0tL2s-1QX30H" width="80px;">
                 </div>

                 <div class="rating-details">
                  <div class="meta">
                    <p><a href="#"><strong>Fritha Restaurant</strong></a></p><br>
                    
                  </div>

                  <div class="content">
                    <p>Phasellus congue lacus eget neque. Phasellus ornare,
                      ante vitae consectetuer consequat, purus sapien ultricies dolor.
                    </p>
                  </div>
                </div>
              </div> <!-- end .single-content -->

              <div class="single-content">
                <div class="company-rating-box">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4SJ3qovhydPX-h9TJ2cVxM9R3kLE1uherd0j81AxxWAvICxQ2aw" width="90px;">

                 
               </div>

               <div class="rating-details">
                <div class="meta">
                 <p> <a href="#"><strong>KFC Restaurant</strong></a></p><br>
                 
               </div>

               <div class="content">
                <p>Phasellus congue lacus eget neque. Phasellus ornare,
                  ante vitae consectetuer consequat, purus sapien ultricies dolor.
                </p>
              </div>
            </div>
          </div> <!-- end .single-content -->

          <div class="single-content">
            <div class="company-rating-box">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEi5VWg1v8oUSxeKW7X4JYUxFJxR8ERhA99zQP3EuxQSYFAeXP" width="90px;">
            </div>

            <div class="rating-details">
              <div class="meta">
                <p><a href="#"><strong>Fast food Restaurant</strong></a></p><br>
                
              </div>

              <div class="content">
                <p>Phasellus congue lacus eget neque. Phasellus ornare,
                  ante vitae consectetuer consequat, purus sapien ultricies dolor.
                </p>
              </div>
            </div>
          </div> <!-- end .single-content -->

          <div class="single-content">
            <div class="company-rating-box">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxNsmvRvbqSqQVzuNFgtkFM-MtL80Jjx7ak7tMUr0NgvBhrSbr4g" width="90px;">
           </div>

           <div class="rating-details">
            <div class="meta">
              <p><a href="#"><strong>Burgar King Restaurant</strong></a></p>
              
            </div>

            <div class="content">
              <p>Phasellus congue lacus eget neque. Phasellus ornare,
                ante vitae consectetuer consequat, purus sapien ultricies dolor.
              </p>
            </div>
          </div>
        </div> <!-- end .single-content -->

      </div> <!-- end .rating-with-details -->
    </div> <!-- end .company-rating -->

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
  </div> <!-- end .tab-pane -->

  <div class="tab-pane active" id="company-product">
   
    <div class="company-product">

      <h2 class="text-uppercase mb30">{{$profile->vendor_name}}<br><span><a href="index.html">
        <i  style="font-size:15px;" class="fa fa-home">&nbsp;HOME </i></a></span>
        <span><i style="font-size:15px;" class="fa fa"><b>/</b> &nbsp;{{$profile->vendor_name}}</i></span></h2> 
        
        
        <div class="sort-by">
          <!--<a href="index.html"><i  style="font-size:25px;" class="fa fa-home">HOME</i></a>-->
          <select class="" data-placeholder="-sort by-">
            <option value="option1">Name</option>
            <option value="option2">Tupe</option>
            <option value="option3">Name</option>
            <option value="option4">Type</option>
          </select>

        </div>

        <div class="row">


          @foreach($product as $product)
          <div class="col-sm-4 col-xs-6">
            <div class="single-product">
              <figure>
                <img src="{{asset($product->thumbnail)}}" alt="">

                <figcaption>
                  <div class="bookmark">
                    <a href="#"> Add to Cart</a>
                  </div>

                  <div class="read-more">
                  <a href="{{ url('/restaurent_product/'.$product->id )}}"><i class="fa fa-angle-right"></i> Read More</a>
                  </div>

                </figcaption>
              </figure>

            <h4><a href="{{ url('/restaurent_product/'.$product->id )}}">{{  $product->product_name }}</a></h4>

              <h5>Price:- {{ $product->price  }} Tk.</h5>
            </div> <!-- end .single-product -->
          </div> <!-- end .grid-layout -->

        @endforeach 

    </div> <!-- end .row -->
  </div> <!-- end .company-product -->
</div> <!-- end .tab-pane -->

<div class="tab-pane" id="company-portfolio">

  <div class="company-portfolio">
    <h2 class="text-uppercase mb30">Our Portfolio</h2>

    <div class="sort-by">

      <select class="" data-placeholder="-sort by-">
        <option value="option1">Name</option>
        <option value="option2">Tupe</option>
        <option value="option3">Name</option>
        <option value="option4">Type</option>
      </select>

    </div>

    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

      <div class="col-sm-4 col-xs-6">
        <div class="single-product">
          <figure>
            <img src="img/content/post-img-9.jpg" alt="">

            <figcaption>
              <div class="bookmark">
                <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
              </div>

              <div class="read-more">
                <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
              </div>

            </figcaption>
          </figure>

          <h4><a href="#">Project Name</a></h4>

          <h5><a href="#">Category</a></h5>
        </div> <!-- end .single-product -->
      </div> <!-- end .grid-layout -->

    </div> <!-- end .row -->
  </div> <!-- end .company-portfolio -->
</div> <!-- end .tab-pane -->

<div class="tab-pane" id="company-events">

  <div class="company-events">

    <h2 class="mb30">Events</h2>

    <div class="post-with-image">
      <div class="date-month">
        <a href="#">
          <span class="date">12</span>
          <span class="month">Sep</span>
        </a>
      </div>

      <div class="post-image">
        <img src="img/content/blog-list-image1.jpg" alt="">
      </div>

      <h2 class="title"><a href="blog-post.html">This is Event title</a></h2>

      <p class="event-place">
        <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
        <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
        <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
      </p>

      <p class="post">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper.
      </p>

      <p class="tag">
        <i class="fa fa-tag"></i>
        <a href="#">Good,</a>
        <a href="#">Ui,</a>
        <a href="#">Experience,</a>
        <a href="#">Article</a>
      </p>

      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

    </div> <!-- end .post-with-image -->

    <div class="post-with-image">
      <div class="date-month">
        <a href="#">
          <span class="date">12</span>
          <span class="month">Sep</span>
        </a>
      </div>

      <div class="post-image">
        <img src="img/content/blog-list-image2.jpg" alt="">
      </div>

      <h2 class="title"><a href="#">This is Event title</a></h2>

      <p class="event-place">
        <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
        <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
        <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
      </p>

      <p class="post">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper.
      </p>

      <p class="tag">
        <i class="fa fa-tag"></i>
        <a href="#">Good,</a>
        <a href="#">Ui,</a>
        <a href="#">Experience,</a>
        <a href="#">Article</a>
      </p>

      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

    </div> <!-- end .post-with-image -->

    <div class="post-with-image">
      <div class="date-month">
        <a href="#">
          <span class="date">12</span>
          <span class="month">Sep</span>
        </a>
      </div>

      <div class="post-image">
        <img src="img/content/blog-list-image3.jpg" alt="">
      </div>

      <h2 class="title"><a href="#">This is Event title</a></h2>

      <p class="event-place">
        <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
        <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
        <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
      </p>

      <p class="post">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper.
      </p>

      <p class="tag">
        <i class="fa fa-tag"></i>
        <a href="#">Good,</a>
        <a href="#">Ui,</a>
        <a href="#">Experience,</a>
        <a href="#">Article</a>
      </p>

      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

    </div> <!-- end .post-with-image -->




    <div class="post-with-image">
      <div class="date-month">
        <a href="#">
          <span class="date">12</span>
          <span class="month">Sep</span>
        </a>
      </div>

      <div class="post-image">
        <img src="img/content/blog-list-image2.jpg" alt="">
      </div>

      <h2 class="title"><a href="#">This is Event title</a></h2>

      <p class="event-place">
        <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
        <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
        <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
      </p>

      <p class="post">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque
      </p>

      <p class="tag">
        <i class="fa fa-tag"></i>
        <a href="#">Good,</a>
        <a href="#">Ui,</a>
        <a href="#">Experience,</a>
        <a href="#">Article</a>
      </p>

      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

    </div> <!-- end .post-with-image -->


    <div class="post-with-image">
      <div class="date-month">
        <a href="#">
          <span class="date">12</span>
          <span class="month">Sep</span>
        </a>
      </div>

      <div class="post-image">
        <img src="img/content/blog-list-image1.jpg" alt="">
      </div>

      <h2 class="title"><a href="#">This is Event title</a></h2>

      <p class="event-place">
        <a href="#"><i class="fa fa-globe"></i> Rome, Italy</a>
        <a href="#"><i class="fa fa-calendar"></i> 12 Sep, 2014</a>
        <a href="#"><i class="fa fa-clock-o"></i> 8 PM</a>
      </p>

      <p class="post">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
        suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper.
      </p>

      <p class="tag">
        <i class="fa fa-tag"></i>
        <a href="#">Good,</a>
        <a href="#">Ui,</a>
        <a href="#">Experience,</a>
        <a href="#">Article</a>
      </p>

      <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

    </div> <!-- end .post-with-image -->

  </div> <!-- end .company-events -->
</div> <!-- end .tab-pane -->

<div class="tab-pane" id="company-blog">

  <div class="company-blog">

    <h2 class="text-uppercase mb30">Our Blog</h2>

    <div class="blog-list">

      <div class="post-with-image">
        <div class="date-month">
          <a href="#">
            <span class="date">12</span>
            <span class="month">Sep</span>
          </a>
        </div>

        <div class="post-image">
          <img src="img/content/blog-list-image1.jpg" alt="">
        </div>

        <h2 class="title"><a href="blog-post.html">This is Post Title</a></h2>

        <p class="user">
          <a href="#"><i class="fa fa-user"></i> Admin</a>
          <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
          <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
        </p>

        <p class="post">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
          Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
        </p>

        <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
        </p>

        <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

      </div> <!-- end .post-with-image -->

      <div class="post-with-image">
        <div class="date-month">
          <a href="#">
            <span class="date">12</span>
            <span class="month">Sep</span>
          </a>
        </div>

        <div class="post-image">
          <img src="img/content/blog-list-image2.jpg" alt="">
        </div>

        <h2 class="title"><a href="#">This is Post Title</a></h2>

        <p class="user">
          <a href="#"><i class="fa fa-user"></i> Admin</a>
          <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
          <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
        </p>

        <p class="post">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
          Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
        </p>

        <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
        </p>

        <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

      </div> <!-- end .post-with-image -->

      <div class="post-without-image">
        <div class="date-month">
          <a href="#">
            <span class="date">12</span>
            <span class="month">Sep</span>
          </a>
        </div>

        <h2 class="title"><a href="#">This is Post Title</a></h2>

        <p class="user">
          <a href="#"><i class="fa fa-user"></i> Admin</a>
          <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
          <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
        </p>

        <p class="post">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
          Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
        </p>

        <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
        </p>

        <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

      </div> <!-- end .post-without-image -->


      <div class="post-with-image">
        <div class="date-month">
          <a href="#">
            <span class="date">12</span>
            <span class="month">Sep</span>
          </a>
        </div>

        <div class="post-image">
          <img src="img/content/blog-list-image3.jpg" alt="">
        </div>

        <h2 class="title"><a href="#">This is Post Title</a></h2>

        <p class="user">
          <a href="#"><i class="fa fa-user"></i> Admin</a>
          <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
          <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
        </p>

        <p class="post">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
          Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
        </p>

        <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
        </p>

        <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

      </div> <!-- end .post-with-image -->

      <div class="post-without-image">
        <div class="date-month">
          <a href="#">
            <span class="date">12</span>
            <span class="month">Sep</span>
          </a>
        </div>

        <h2 class="title"><a href="#">This is Post Title</a></h2>

        <p class="user">
          <a href="#"><i class="fa fa-user"></i> Admin</a>
          <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>
          <a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a>
        </p>

        <p class="post">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
          Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
        </p>

        <p class="tag">
          <i class="fa fa-tag"></i>
          <a href="#">Good,</a>
          <a href="#">Ui,</a>
          <a href="#">Experience,</a>
          <a href="#">Article</a>
        </p>

        <a class="post-read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

      </div> <!-- end .post-without-image -->

    </div> <!-- end .blog-list -->

    <div class="blog-list-pagination">

      <ul class="pagination">
        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
      </ul>

    </div> <!-- end .blog-list-pagination -->
  </div> <!-- end .company-blog -->
</div> <!-- end .tab-pane -->

<div class="tab-pane" id="company-contact">
  <div class="company-profile company-contact">

    <h2>Contact Us</h2>

    <div class="social-link text-right">
      <ul class="list-inline">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>

    <div class="company-text">
      <p>
        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
          suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
        Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong>
      </p>

      <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,
        sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet,
        elit magna vulputate arcu, vel tempus metus leo non est.
        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
        Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,
        et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit,
        urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.
      </p>
    </div> <!-- end company-text -->


    <div class="row">
      <div class="col-md-6">

        <div class="contact-map-company">
          <div id="contact_map_canvas_one">

          </div>
        </div> <!-- end .map-section -->

        <h3>Headquarters</h3>

        <h5>Address Details</h5>

        <div class="address-details clearfix">
          <i class="fa fa-map-marker"></i>

          <p>
            <span>1234 Hyde Street</span>
            <span>San Francisco</span>
            <span>CA 94043</span>
          </p>
        </div>

        <div class="address-details clearfix">
          <i class="fa fa-phone"></i>

          <p>
            <span><strong>Phone:</strong> +1 123-456-7890</span>
            <span><strong>Fax:</strong> +1 123-456-7891</span>
          </p>
        </div>

        <div class="address-details clearfix">
          <i class="fa fa-envelope-o"></i>

          <p>
            <span><strong>E-mail:</strong> example@example.com</span>
            <span><span><strong>Website:</strong> www.example.com</span></span>
          </p>
        </div>

        <h5>Openig Hours</h5>

        <div class="address-details clearfix">
          <i class="fa fa-clock-o"></i>

          <p>
            <span><strong>Mo-Fri:</strong> 9AM - 5PM</span>
            <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
            <span><strong>Sunday:</strong> Closed</span>
          </p>
        </div>

      </div> <!-- end main grid layout -->

      <div class="col-md-6">
        <div class="contact-map-company">
          <div id="contact_map_canvas_two">

          </div>
        </div> <!-- end .map-section -->

        <h3>Retailing Point</h3>

        <h5>Address Details</h5>

        <div class="address-details clearfix">
          <i class="fa fa-map-marker"></i>

          <p>
            <span>1234 Hyde Street</span>
            <span>San Francisco</span>
            <span>CA 94043</span>
          </p>
        </div>

        <div class="address-details clearfix">
          <i class="fa fa-phone"></i>

          <p>
            <span><strong>Phone:</strong> +1 123-456-7890</span>
            <span><strong>Fax:</strong> +1 123-456-7891</span>
          </p>
        </div>

        <div class="address-details clearfix">
          <i class="fa fa-envelope-o"></i>

          <p>
            <span><strong>E-mail:</strong> example@example.com</span>
            <span><span><strong>Website:</strong> www.example.com</span></span>
          </p>
        </div>

        <h5>Openig Hours</h5>

        <div class="address-details clearfix">
          <i class="fa fa-clock-o"></i>

          <p>
            <span><strong>Mo-Fri:</strong> 9AM - 5PM</span>
            <span><span><strong>Saturday:</strong> 10AM - 2PM</span></span>
            <span><strong>Sunday:</strong> Closed</span>
          </p>
        </div>

      </div> <!-- end main grid layout -->
    </div> <!-- end .row -->

    <h3>Send Us A Message</h3>
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

  </div> <!-- end .company-contact -->
</div> <!-- end .tab-pane -->
</div> <!-- end .tab-content -->

</div> <!-- end .page-content -->

</div> <!-- end .main-grid layout -->

<div class="col-md-3 col-md-pull-9 category-toggle">
  <button><i class="fa fa-briefcase"></i></button>
  <div class="page-sidebar company-sidebar">
    <!--<i class="fa fa-home" aria-hidden="true"></i>-->
    

    <ul class="company-category nav nav-tabs home-tab" role="tablist">
      
      <li >
        <a href="#company-profile" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i> Profile</a>
      </li>

      <li class="active">
        <a href="#company-product" role="tab" data-toggle="tab"><i class="fa fa-cubes" aria-hidden="true"></i>Product</a>
      </li>

      @foreach($menu as $m)
      <li>
        <a href="#company-product" role="tab" data-toggle="tab"><i class="{{ $m->icon }}" aria-hidden="true"></i>{{ $m->menu }}</a>
      </li>
      @endforeach
    </ul>

    <div class="own-company">
      <a href="index.html"><i class="fa fa-home"></i>Back Home</a>
    </div>
    <div class="opening-hours">
        <h2>Openig Hours</h2>
  
        <ul class="list-unstyled">
          <li>
            <strong>{{ $profile->openday }}:</strong>
            <span>{{ $profile->opentime }}</span>
          </li>
          <li>
              <strong>{{ $profile->closeday }}:</strong>
              <span>{{ $profile->closetime }}</span>
         </li>
        </ul>
      </div>
    <div class="contact-details">
      <img src="https://s3.envato.com/files/265633598/Preview/300x600.jpg" width="260px;">
    </div>



    <div class="square-button">
      <a href="#"><img src="img/content/square-button.png" alt=""></a>
      <a href="#"><img src="img/content/square-button.png" alt=""></a>
      <a href="#"><img src="img/content/square-button.png" alt=""></a>
      <a href="#"><img src="img/content/square-button.png" alt=""></a>
    </div> <!-- end .sqare-button -->

  </div> <!-- end .page-sidebar -->
</div> <!-- end .main-grid layout -->
</div> <!-- end .row -->

</div> <!-- end .container -->
</div> <!-- end #page-content -->

@endsection
