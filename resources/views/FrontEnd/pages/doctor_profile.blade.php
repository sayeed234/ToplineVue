@extends('FrontEnd.layouts.app')
@section('title')
{{$profile->vendor_name}} || topline.com.bd
@endsection
@section('content')
 <br><br>
 <div class="row">
  <div class="col-md-12" style="height:300px;">
    <img src="{{asset($profile->slider)}}" width="100%" height="100%">
  </div>
</div>
  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <div class="page-content company-profile">

            <div class="tab-content">
              <div class="tab-pane active" id="company-profile">
              <h2>{{$profile->vendor_name}}</h2>
                <h5>
                  <a href="#">{{$profile->special}}</a>
                  
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
                  <strong>{{($profile->sortdescription)}}</strong>
                  </p>
                  <p>{{($profile->longdescription)}}</p>
                </div> <!-- end company-text -->
                <div class="company-ratings">
                  <h4>Chamber</h4>
                  <div class="rating-with-details">
                    @foreach($chamber as $chamber)                 
                    <div class="single-content">
                      <div class="company-rating-box" style="height:120px;width:120px;">
                      <img src="{{asset($chamber->vendor_logo)}}" width="100%" height="100%">
                        
                      </div>
                      <div class="rating-details">
                        <div class="meta">
                        <p><a href="{{url('/v/'.$chamber->slug)}}"><strong>{{$chamber->vendor_name}}</strong></a></p>
                        <p style="font-size:10px; color:gray;">
                            {{$chamber->special}}                            
                        </p>
                        </div>
                        <div class="content">
                        <p><strong>Time :</strong> {{$chamber->time}}</p>
                        @if($chamber->onday=='')
                        @else
                        <p><strong>Onday :</strong> {{$chamber->onday}}</p>
                         @endif
                        @if($chamber->offday== '')
                        @else
                        <p><strong>Offday :</strong> {{$chamber->offday}}</p>
                         @endif
                                                
                       </div>
                      </div>
                    </div> <!-- end .single-content -->
                    @endforeach
                    <br><br>           
                  </div> <!-- end .rating-with-details -->
                </div> <!-- end .company-rating -->
             
               <div class="company-ratings">
                 <h4> Oncall Hospital</h4>              
                  <div class="rating-with-details">
                    @foreach($chambers as $chamber)                 
                  <div class="single-content">
                    <div class="company-rating-box" style="height:120px;width:120px;">
                    <img src="{{asset($chamber->vendor_logo)}}" width="100%" height="100%">
                      
                    </div>
                    <div class="rating-details">
                      <div class="meta">
                      <p><a href="{{url('/v/'.$chamber->slug)}}"><strong>{{$chamber->vendor_name}}</strong></a></p>
                      <p style="font-size:10px; color:gray;">
                          {{$chamber->special}}
                          
                      </p>
                      </div>
                      <div class="content">
                      <p>{{str_limit($chamber->sortdescription,150)}}</p>                                      
                     </div>
                    </div>
                  </div> <!-- end .single-content -->
                  <br><br>
           @endforeach
              
                    
                     

                  </div> <!-- end .rating-with-details -->
                </div> <!-- end .company-rating -->
 
                <div class="comments-section">
                  <div class="comment-title">
                    <h4>2 Comments</h4>
                  </div>

                  <ul class="comments">
                    <li>

                      <div class="comment">
                        <img src="{{asset('/img/content/comment-image-1.jpg')}}" alt="" class="avatar">

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
                            <img src="{{asset('/img/content/comment-image-2.jpg')}}" alt="" class="avatar">

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

              <div class="tab-pane " id="company-product">
             
                <div class="company-product">

                  <h2 class="text-uppercase mb30">Our Menu <br><span><a href="index.html">
                      <i  style="font-size:15px;" class="fa fa-home">&nbsp;HOME </i></a></span>
                      <span><i style="font-size:15px;" class="fa fa"><b>/</b> &nbsp;Green Life</i></span></h2> 
                  
                 
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
                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/01/THORACIC-SURGERY.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#"> Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="blog-post.html"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">THORACIC SURGERY</a></h4>
                        <br>

                        <!--<h5><a href="#">Price:- 125 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/12/Burn-and-Plastic-Surgery.png" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#"> Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#"> PLASTIC SURGERY</a></h4>
                        <br>

                        <!--<h5><a href="#">Price:- 150 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/12/Anesthesia.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">ANESTHESIA</a></h4>
                         <br>
                        <!--<h5><a href="#">Price:- 120 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/RHEUMATOLOGY.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">RHEUMATOLOGY</a></h4><br>

                        <!--<h5><a href="#">Price:- 110 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/RADIOLOGY-IMAGING.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">RADIOLOGY </a></h4><br>

                        <!--<h5><a href="#">Price:- 150 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/PSYCHIATRY.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#"> Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">PSYCHIATRY</a></h4><br>

                        <!--<h5><a href="#">Price:- 120 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/PHYSICAL-MEDICINE-REHABILITATION.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#"> Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">PHYSICAL MEDICINE</a></h4><br>

                        <!--<h5><a href="#">Price:- 445 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->


                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/ORTHOPAEDIC.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">ORTHOPAEDIC</a></h4><br>

                        <!--<h5><a href="#">Price:- 333 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/NEUROMEDICINE.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!-- <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">NEUROMEDICINE</a></h4><br>

                        <!--<h5><a href="#">Price:- 234 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/MEDICAL-ONCOLOGY.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">MEDICAL ONCOLOGY</a></h4><br>

                        <!--<h5><a href="#">Price:- 678 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/NEPHROLOGY.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!--  <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">NEPHROLOGY</a></h4><br>

                        <!--<h5><a href="#">Price:- 223 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2018/04/ICU-HDU-1.jpg" alt="">

                          <figcaption>
                            <!--<div class="bookmark">-->
                            <!-- <a href="#">Add to Cart</a>-->
                            <!--</div>-->

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">ICU & HDU</a></h4><br>

                        <!--<h5><a href="#">Price:- 543 Tk.</a></h5>-->
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .company-product -->
              </div> <!-- end .tab-pane -->

              <div class="tab-pane" id="company-portfolio">

                <div class="company-portfolio">
                  <h2 class="text-uppercase mb30">Our Doctor List</h2>

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
                          <img src="http://brbhospital.com/wp-content/uploads/2019/08/68401908_424748111471974_3472405888298385408_n.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Dr. Farhana Quyum</a></h4>

                        <h5><a href="#"> Consultant - Dermatology & Venereology</a></h5>
                        <h5><a href="#">MBBS, FCPS</a></h5>
                        
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/05/Omar-Ali.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Pr. Dr. Md. Omar Ali</a></h4>

                        <h5><a href="#"> General & Laparoscopic Surgery</a></h5>
                          <h5><a href="#">MBBS, FCPS, FICS (USA)</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/05/Akram-Hossain.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Pr. Dr. Akram Hossain</a></h4>

                        <h5><a href="#">General & Laparoscopic Surgery</a></h5>
                          <h5><a href="#">MBBS, FCPS (Surgery), FRCS (Edin)</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/01/Dr.-Tariq-Akhter-Khan.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Dr. Tariq Akhter Khan</a></h4>

                        <h5><a href="#">Colorectal & Laparoscopic Surgery</a></h5>
                         <h5><a href="#">MBBS, FCPS (Surgery)</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/03/Hashin-Rabby.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Dr. Hashim Rabbi</a></h4>

                        <h5><a href="#">Hepatobilliary & Pancreatic Surgery</a></h5>
                         <h5><a href="#">FCPS, MRCS, MRCP</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="http://brbhospital.com/wp-content/uploads/2019/01/Prof.-Dr.-M-A-Masud.jpg" alt="">

                          <figcaption>
                            <div class="bookmark">
                              <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                            </div>

                            <div class="read-more">
                              <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                            </div>

                          </figcaption>
                        </figure>

                        <h4><a href="#">Prof. Dr. M A Masud</a></h4>

                        <h5><a href="#">Senior Consultant - Gastroenterolog</a></h5>
                         <h5><a href="#">MBBS, MD (Gastro)</a></h5>
                      </div> <!-- end .single-product -->
                    </div> <!-- end .grid-layout -->

                    <div class="col-sm-4 col-xs-6">
                      <div class="single-product">
                        <figure>
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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
                          <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

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

                  <h2 class="mb30">Our Service</h2>

                  <div class="post-with-image">
                    <!--<div class="date-month">-->
                    <!--  <a href="#">-->
                    <!--    <span class="date">12</span>-->
                    <!--    <span class="month">Sep</span>-->
                    <!--  </a>-->
                    <!--</div>-->

                    <div class="post-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtlebwf_LADOWiadkA1SSilwa6wssmIE1E1192PeJIm53gf6mU" alt="">
                    </div>

                    <h2 class="title"><a href="blog-post.html">Lab</a></h2>

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
                    <!--<div class="date-month">-->
                    <!--  <a href="#">-->
                    <!--    <span class="date">12</span>-->
                    <!--    <span class="month">Sep</span>-->
                    <!--  </a>-->
                    <!--</div>-->

                    <div class="post-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVfHZLUeOXs-zgOTRrywV6nxIHaA_GKIJ5VjmtFo_Uc6rXExIt" alt="">
                    </div>

                    <h2 class="title"><a href="#">Cafeteria And Food Corner</a></h2>

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
                    <!--<div class="date-month">-->
                    <!--  <a href="#">-->
                    <!--    <span class="date">12</span>-->
                    <!--    <span class="month">Sep</span>-->
                    <!--  </a>-->
                    <!--</div>-->

                    <div class="post-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHzcRq9V5_YWK_GuRfWAQ7MrQs6w2_aaHbX2x7l7uzGSMsxLfubg" alt="">
                    </div>

                    <h2 class="title"><a href="#">Blood Bank</a></h2>

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
                    <!--<div class="date-month">-->
                    <!--  <a href="#">-->
                    <!--    <span class="date">12</span>-->
                    <!--    <span class="month">Sep</span>-->
                    <!--  </a>-->
                    <!--</div>-->
                    <div class="post-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnWd4Rx_pAx_INVEQlGVW6lhA20C6nb0BxoklKdMLwYv0RIS8Z" alt="">
                    </div>
                    <h2 class="title"><a href="#">Pharmacy</a></h2>
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
                    <!--<div class="date-month">-->
                    <!--  <a href="#">-->
                    <!--    <span class="date">12</span>-->
                    <!--    <span class="month">Sep</span>-->
                    <!--  </a>-->
                    <!--</div>-->
                    <div class="post-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAS5x02PabwgQjtbUh9c1gwYW1qmcKwHii2pLqiHNFcNmKV443" alt="">
                    </div>
                    <h2 class="title"><a href="#">Ambulance</a></h2>
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
                        <img src="{{asset('/FrontEnd/img/content/blog-list-image1.jpg')}}" alt="">
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
                        <img src="{{asset('/FrontEnd/img/content/blog-list-image2.jpg')}}" alt="">
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
                        <img src="{{asset('/FrontEnd/img/content/blog-list-image3.jpg')}}" alt="">
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
                          <span><strong>:</strong></span>
                          <span><strong></strong> </span>
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
                            <span><strong>:</strong></span>
                            <span><strong></strong> </span>
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
           
            <div class="opening-hours" style="height:200px;width:250px;">
             <img src="{{asset($profile->vendor_logo)}}" width="100%" height="100%">
            </div>
            <div class="own-company">
                <a href="{{url('/')}}"><i class="fa fa-home"></i>Back Home</a>
               </div>
            <div class="contact-details">
                <img src="https://ca-flyers.com/public/gimg/6/0/0/8/7/1/600871-950-100000.jpg" width="260px;">
            </div>
            <br><br>
             <div class="contact-details">
                <img src="https://previews.123rf.com/images/alhovik/alhovik1802/alhovik180200085/95913378-this-weekend-special-offer-sale-banner-half-price-discount-50-off-.jpg" width="260px;">
            </div>
              <br><br>
            <div class="contact-details">
                <img src="http://i.e.aeropostale.com/wpm/702/ContentUploads2019/Promotional/May/0505AM/050519_AM_MUY-CALIENTE_A1.gif" width="260px;">
            </div>
            <div class="square-button">
              <a href="#"><img src="{{asset('/img/content/square-button.png')}}" alt=""></a>
              <a href="#"><img src="{{asset('/img/content/square-button.png')}}" alt=""></a>
              <a href="#"><img src="{{asset('/img/content/square-button.png')}}" alt=""></a>
              <a href="#"><img src="{{asset('/img/content/square-button.png')}}" alt=""></a>
            </div> <!-- end .sqare-button -->
          </div> <!-- end .page-sidebar -->
        </div> <!-- end .main-grid layout -->
      </div> <!-- end .row -->

    </div> <!-- end .container -->
  </div>
@endsection