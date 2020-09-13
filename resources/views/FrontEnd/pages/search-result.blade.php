@extends('FrontEnd.layouts.app')
@section('title')
Result for {{$slider->name}} {{$total}} Vendors || topline.com.bd
@endsection

@section('content')
<div class="row">
  <div class="col-md-12" style="height:300px;">
  
  <img src="{{asset($slider->slider)}}" width="100%" height="100%">

  </div>
</div>
<header id="header">
  <div class="header-nav-bar">
    <div class="container">
      <nav>

        <button><i class="fa fa-bars"></i></button>

        <ul class="primary-nav list-unstyled">
          <li class="bg-color"><a href="index.html">Home</a>
            <!--<ul>-->
            <!--  <li><a href="home-map-grid.html">Home-map(grid)</a></li>-->
            <!--  <li><a href="home-map-list.html">Home-map(list)</a></li>-->
            <!--  <li><a href="index.html">Home slider(view-1)</a></li>-->
            <!--  <li><a href="home-category.html">Home slider(view-2)</a></li>-->
            <!--</ul>-->

          </li>

          <li class=""><a href="">Company</a>
          </li>

          <!--<li><a href="sample-page.html">Sample Page</a></li>-->
          <li><a href="">Best Sales</a></li>
            <li><a href="">Top Product</a></li>
              <li><a href="">Offer</a></li>
            <li><a href="">Popular Food</a></li>
          <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
      </nav>
    </div> 
  </div> 
</header> 
<div id="page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="page-content">

          <div class="product-details-list view-switch">
            <div class="tab-content">

              <div class="tab-pane" id="antique-all">
                <h2>Result for "Restaurent"<span class="comments">69</span></h2>

                <div class="change-view">

                  <div class="filter-input">
                    <input type="text" placeholder="Filter by Keywords">
                  </div>
                  <button class="grid-view"><i class="fa fa-th"></i></button>
                  <button class="list-view active"><i class="fa fa-bars"></i></button>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Tupe</option>
                      <option value="option3">Name</option>
                      <option value="option4">Type</option>
                    </select>

                  </div>

                  <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>

                </div> <!-- end .change-view -->

                <div class="row clearfix">
                  <div class="col-sm-4 col-xs-6">

                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-10.jpg')}}" alt="">

                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .col-sm-4 grid layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-6.jpg')}}" alt="">
                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-2.jpg')}}" alt="">
                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-4.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>
                      <h4><a href="#">Old Bookman's</a></h4>
                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-5.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>
                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-6.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>
                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-7.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-8.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>
                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-10.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-11.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>

                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-12.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="pagination-center">

                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>

                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .tabe-pane -->


              <div class="tab-pane" id="jewelry">
                <h2>Result for "jewelry"<span class="comments">69</span></h2>

                <div class="change-view">

                  <div class="filter-input">
                    <input type="text" placeholder="Filter by Keywords">
                  </div>
                  <button class="grid-view"><i class="fa fa-th"></i></button>
                  <button class="list-view active"><i class="fa fa-bars"></i></button>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Tupe</option>
                      <option value="option3">Name</option>
                      <option value="option4">Type</option>
                    </select>

                  </div>

                  <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>

                </div> <!-- end .change-view -->

                <div class="row clearfix">
                  <div class="col-sm-4 col-xs-6">

                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-5.jpg')}}" alt="">

                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .col-sm-4 grid layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-8.jpg')}}" alt="">
                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>


                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>
                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-6.jpg')}}" alt="">
                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>


                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-4.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>
                      <h4><a href="#">Old Bookman's</a></h4>
                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-5.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>
                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>
                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-6.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>
                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-7.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-8.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>


                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->


                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-9.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>


                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-10.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>


                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-11.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="col-sm-4 col-xs-6">
                    <div class="single-product">
                      <figure>
                        <img src="{{asset('/FrontEnd/img/content/post-img-12.jpg')}}" alt="">

                        <div class="rating">
                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>



                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                      <h4><a href="#">Old Bookman's</a></h4>

                      <h5><a href="#">Category</a>, <a href="#">Another Category</a></h5>

                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a,
                      scelerisque sed, lacinia in, mi. Cras vel lorem.</p>

                      <a class="read-more" href="#"><i class="fa fa-angle-right"></i>Read More</a>

                    </div> <!-- end .single-product -->
                  </div> <!-- end .grid-layout -->

                  <div class="pagination-center">

                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>

                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .tabe-pane -->

              <div class="tab-pane active" id="category-book">
              <h2>Result for "{{$slider->name}}"<span class="comments">{{$total}}</span></h2>

                <div class="change-view">

                  <div class="filter-input">
                    <input type="text" placeholder="Filter by Keywords">
                  </div>
                  <button class="grid-view"><i class="fa fa-th"></i></button>
                  <button class="list-view active"><i class="fa fa-bars"></i></button>

                  <div class="sort-by">

                    <select class="" data-placeholder="-sort by-">
                      <option value="option1">Name</option>
                      <option value="option2">Tupe</option>
                      <option value="option3">Name</option>
                      <option value="option4">Type</option>
                    </select>

                  </div>

                  <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>

                </div> <!-- end .change-view -->

                <div class="row col-sm-11 ">

          @foreach($result as $result)
                  <div class="col-sm-11 ">
                    <div class="single-product">
                      <figure>
                      <img src="{{asset($result->vendor_logo)}}" alt="">

                        <div class="rating">

                          <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                          </ul>
                        </div> <!-- end .rating -->

                        <figcaption>
                          <div class="bookmark">
                            <a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a>
                          </div>

                          <div class="read-more">
                            <a href="#"><i class="fa fa-angle-right"></i> Read More</a>
                          </div>

                        </figcaption>
                      </figure>

                    <h4><a href="{{url('/v/'.$result->slug)}}">{{$result->vendor_name}}</a></h4>
                      
                        <h5>{{$result->special}}</h5>
                         
                      <p>{{str_limit($result->sortdescription,110)}}</p>

                      <a class="read-more" href="{{url('/v/'.$result->slug)}}"><i class="fa fa-angle-right"></i>Read More</a>

                    </div>
                    <!-- end .single-product -->
                  </div> <!-- end .col-sm-4 grid layout -->

                     @endforeach


                  <div class="pagination-center">

                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>

                  </div>

                </div> <!-- end .row -->


              </div> <!-- end .tabe-pane -->
            </div> <!-- end .tabe-content -->

            <div class="advertisement">
              <p>Advertisement</p>
              <img src="{{asset('/FrontEnd/img/add.jpg')}}" alt="">
            </div>

          </div> <!-- end .product-details -->
        </div> <!-- end .page-content -->
      </div>

      <div class="col-md-3 col-md-pull-9 category-toggle">
        <button><i class="fa fa-briefcase"></i></button>

        <div class="page-sidebar">

          <div class="location-details">
            <form action="#">
              <div class="select-country">
                <label>Country</label>

                <select class="" data-placeholder="-Select-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                  <option value="option4">option 4</option>
                </select>

              </div> <!-- end .select-country -->

              <div class="select-state">
                <label>State</label>

                <select class="" data-placeholder="-Select-">
                  <option value="option1">option 1</option>
                  <option value="option2">option 2</option>
                  <option value="option3">option 3</option>
                  <option value="option4">option 4</option>
                </select>

              </div> <!-- end .select-state -->

              <div class="zip-code">
                <label>ZIP Code</label>

                <input type="text" placeholder="Enter">

              </div> <!-- end .zip-code -->
            </form>

          </div> <!-- end .location-details -->

          <div id="distance-range">
            <p>
              <label for="amount">Distance</label>
              <input type="text" id="amount">
            </p>

            <div id="slider-range-min"></div>
          </div>  <!-- end #distance-range -->

          <!-- Category accordion -->
          <div id="categories">
            <div class="accordion">
              <ul class="nav nav-tabs accordion-tab" role="tablist">
                <li>
                  <a href="#"><i class="fa fa-star-o"></i>All Categories</a>

                  <div>
                    <a href="#antique-all"  role="tab" data-toggle="tab">Antique</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-bullhorn"></i>advertisement</a>

                  <div>
                    <a  href="#jewelry" role="tab" data-toggle="tab">Jewelry</a>
                  </div>
                </li>

                <li class="active">
                  <a href="#" role="tab" data-toggle="tab"><i class="fa fa-shopping-cart"></i>E-commerce</a>

                  <div>
                    <a href="#antique" role="tab" data-toggle="tab">Antique</a>
                    <a class="active" href="#category-book" role="tab" data-toggle="tab">Books</a>
                    <a href="#cars-motorcycles" role="tab" data-toggle="tab">Cars &amp; Motorcycles</a>
                    <a href="#">Computer &amp; Tablets</a>
                    <a href="#">Creative &amp; Digitals</a>
                    <a href="#">Fashion</a>
                    <a href="#">Fitness &amp; Sport</a>
                    <a href="#">Furnishing</a>
                    <a href="#">Health &amp; Beauty</a>
                    <a href="#">Hobbies</a>
                    <a href="#">Jewelry</a>
                    <a href="#">Kitchen</a>
                    <a href="#">Leisure</a>
                    <a href="#">Music</a>
                    <a href="#">Ticket</a>
                    <a href="#">Video Game &amp; Console</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-graduation-cap"></i>Education</a>

                  <div>
                    <a href="#">Antique</a>
                    <a href="#">Computer &amp; Tablets</a>
                    <a href="#">Creative &amp; Digitals</a>
                    <a href="#">Fashion</a>
                    <a href="#">Fitness &amp; Sport</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-paper-plane-o"></i>Entertainment</a>

                  <div>
                    <a href="#">Fashion</a>

                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-home"></i>Home &amp; Garden</a>

                  <div>
                    <a href="#">Furnishing</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-cogs"></i>Industry</a>

                  <div>
                    <a href="#">Antique</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-book"></i>Libraries &amp; Public</a>

                  <div>
                    <a href="#">Antique</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-building-o"></i>Real Estate</a>

                  <div>
                    <a href="#">Antique</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-cutlery"></i>Resturants &amp; Pubs</a>

                  <div>
                    <a href="#">Antique</a>
                  </div>
                </li>

                <li>
                  <a href="#"><i class="fa fa-angle-right"></i>See More</a>

                  <div class="hide">
                    <a href="#">Antique</a>
                  </div>
                </li>

              </ul>
            </div> <!-- end .accordion -->
          </div> <!-- end #categories -->


        </div> <!-- end .page-sidebar -->
      </div> <!-- end grid layout-->
    </div> <!-- end .row -->
  </div> <!-- end .container -->
</div>
@endsection