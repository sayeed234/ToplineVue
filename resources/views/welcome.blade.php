@extends('FrontEnd.layouts.app')
     
@include('FrontEnd.partial.slider')

@section('content')

<div class="top" style="margin-top:-210px;" >

    <div id="page-content" class="home-slider-content">
    <div class="container">
      <div class="home-with-slide">
        <div class="row">

          <div class="col-md-9 col-md-push-3">
            <div class="page-content">

              <div class="change-view">
                <div class="filter-input">
                  <input type="text" placeholder="Filter by Keywords">
                </div>
              </div> <!-- end .change-view -->
              <div class="product-details">
                <div class="tab-content">

                  <div class="tab-pane active" id="all-categories">
                    <h3>Top <span> Product List</span></h3>

                    <div class="row clearfix">
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <!--<a href="search-result.html"><i class="fa fa-university"></i>Antiques</a>-->
                          <a href="search-result.html"><img src="http://topline.com.bd/img/category/barger.png" width=170px; height=150px;> <br> Beef Barger</a>
                        </div>
                      </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                         <a href="search-result.html"><img src="img/category/Ensure.png" width=170px; height=150px;><br>Ensure</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/ddanish.png" width=170px; height=150px;><br>Danish Milk</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <!--<a href="search-result.html"><i class="fa fa-book"></i>Book</a>-->
                           <a href="search-result.html"><img src="img/category/chinis-sobgi..png" width=170px; height=150px;><br>Chinis-Sobgi.</a>
                        </div>

                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/nido.png" width=170px; height=150px;><br>Nido</a>
                        </div>

                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                           <a href="search-result.html"><img src="img/category/sma.png" width=170px; height=150px;><br>sma</a>
                        </div>

                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">
                            
                             <a href="search-result.html"><img src="img/category/kassi.png" width=170px; height=150px;><br>Khaschi Biyani</a>

                          <!--<a href="search-result.html"><i class="fa fa-car"></i>Cars &amp; Motorcycles</a>-->
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <!--<a href="search-result.html"><i class="fa fa-laptop"></i>Computers &amp; Tablets</a>-->
                           <a href="search-result.html"><img src="img/category/detol.png" width=170px; height=150px;><br>Dettol</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">
                             <a href="search-result.html"><img src="img/category/pizza.png" width=170px; height=150px;><br>Pizza</a>

                          <!--<a href="search-result.html"><i class="fa fa-paint-brush"></i>Creative &amp; Digital</a>-->
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <!--<a href="search-result.html"><i class="fa fa-female"></i>Fashion</a>-->
                           <a href="search-result.html"><img src="img/category/chashi.png" width=170px; height=150px;><br>Chasi</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                           <a href="search-result.html"><img src="img/category/mirzapore.png" width=170px; height=150px;><br>Mirzapore Tea Bag</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/Chef.png" width=170px; height=150px;><br>Chef oil</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                           <a href="search-result.html"><img src="img/category/fortune.png" width=170px; height=150px;><br>Fortune Oil</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                         <a href="search-result.html"><img src="img/category/lays.png" width=170px; height=150px;><br>Lays</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                           <a href="search-result.html"><img src="img/category/corn.png" width=170px; height=150px;><br>Pop Corn</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/ghee.png" width=170px; height=150px;><br>Orginal Ghee</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/kelluing.png" width=170px; height=150px;><br>Kelluing</a>
                        </div>

                      </div>
                
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/similac.png" width=170px; height=150px;><br>similac</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/Paijam-Rice-Premium.png" width=170px; height=150px;>Paijam-Rice</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/Onion.png" width=170px; height=150px;>Onion</a>
                        </div>

                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                           <a href="search-result.html"><img src="img/category/oil.png" width=170px; height=150px;>oil 5 lt</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/Nagir-Rice-Premium.png" width=170px; height=150px;>Nagir-Rice</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/ginger.png" width=170px; height=150px;>Ginger</a>
                        </div>

                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="category-item">

                          <a href="search-result.html"><img src="img/category/garlic.png" width=170px; height=150px;>Garlic Deshi</a>
                        </div>

                      </div>

                      <div class="view-more">
                        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>View More</a>
                      </div>

                    </div> <!-- end .row -->
                  </div> <!-- end .tabe-pane -->

              </div> <!-- end .product-details -->
            </div> <!-- end .page-content -->
          </div>
          </div>

          <div class="col-md-3 col-md-pull-9 home-ta category-toggle">
            <button><i class="fa fa-briefcase"></i></button>

            <div class="page-sidebar">
              <div class="categories" >
                <div class="ac">
                  <ul class="nav nav-tabs " >
                     <li style="background:#333;">
                     <a style="text-align:center; color:#fdc600">Our Service </a>
                    </li>
                    @foreach($service as $service)
                  <li >
                  <a  href="{{url('Service/'.$service->id)}}"><i class="{{$service->icon}}" aria-hidden="true"></i> {{$service->name}}</a>
                    </li>
                      @endforeach
                    </ul>
                </div>
            </div>

              <!-- Category accordion -->
              <div id="categories">
                <div class="accordion">
                  <ul class="nav nav-tabs home-tab" role="tablist">
                    <li class="active">
                      <a href="#all-categories"  role="tab" data-toggle="tab">All Categories
                        <span>Display all sub-categories</span>
                      </a>
                    </li>

                    <li>
                      <a href="#advertisemnet" role="tab" data-toggle="tab">advertisement
                        <span>Agencies, Marketing</span>
                      </a>
                    </li>

                    <li>
                      <a href="#e-commerce"  role="tab" data-toggle="tab">E-commerce
                        <span>Boutiques, Shop</span>
                      </a>
                    </li>

                    <li>
                      <a href="#education" role="tab" data-toggle="tab">Education
                        <span>Private School, Universities</span>
                      </a>
                    </li>

                    <li>
                      <a href="#entertainment" role="tab" data-toggle="tab">Entertainment
                        <span>Sport, Toys, Travels</span>
                      </a>
                    </li>

                    <li>
                      <a href="#home-garder" role="tab" data-toggle="tab">Home &amp; Garden
                        <span>Accessories, Furniture, Plants</span>
                      </a>
                    </li>

                    <li>
                      <a href="#industry" role="tab" data-toggle="tab">Industry
                        <span>Accessories, Products, Services</span>
                      </a>
                    </li>

                    <li>
                      <a href="#libraries-public" role="tab" data-toggle="tab">Libraries &amp; Public
                        <span>Libraries, Postal, Public Offices</span>
                      </a>
                    </li>

                    <li>
                      <a href="#real-estate" role="tab" data-toggle="tab">Real Estate
                        <span>Apartments, Commercial, House</span>
                      </a>
                    </li>

                    <li>
                      <a href="#resturants" role="tab" data-toggle="tab">Resturants &amp; Pubs
                        <span>Bars, Fast Food, Resturants</span>
                      </a>
                    </li>

                    <li>
                      <a href="#" role="tab" data-toggle="tab"><i class="fa fa-angle-right"></i>See More</a>

                    </li>

                  </ul>
                </div> <!-- end .accordion -->
              </div> <!-- end #categories -->
            </div>
            </div> <!-- end .page-sidebar -->
          </div> <!-- end grid layout-->
        </div> <!-- end .row -->
      </div> <!-- end .home-with-slide -->
    </div> <!-- end .container -->
  </div>  <!-- end #page-content -->
 
 <div class="featured-listing" id= "featured-list">
    <div class="container">
      
        <h2><strong>Topline Vendor's</strong></h2>
        <br>
      <div class="row clearfix">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="single-product">
            <figure>
              <img src="https://duyt4h9nfnj50.cloudfront.net/resized/bulk_actions_image_fdfc0416-b12e-4e71-8322-470f98327c86-w550-d2.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Food Hut</a></h4>

            <h5><a href="#">Lunch</a>, <a href="#">Grand Dinner</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://scontent.fdac64-1.fna.fbcdn.net/v/t1.0-9/11125257_370825083107347_4518890425211536912_n.jpg?_nc_cat=104&_nc_oc=AQncBAA-5VP5EHYClqYrK68P_N-YkXvMi9vWaQ4fjiKeB1FTL-9b40Utl5NiXu8b-Jo&_nc_ht=scontent.fdac64-1.fna&oh=59c822020468a543feff9a4a9f58c322&oe=5DF10B9E" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Silver Fork</a></h4>

            <h5><a href="#">Restaurent</a> <a href="#">& Banquet Hall</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFiravyuBmThEuqzE5hueE1LGJ31J7RJ1dwKDVVsc0mZZlAG5d" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Mahim General Store</a></h4>

            <h5> <a href="#">Faydabad, Dhaka 1230</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFiravyuBmThEuqzE5hueE1LGJ31J7RJ1dwKDVVsc0mZZlAG5d" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Ms Rental Car</a></h4>

            <h5><a href="#">Rent a Car</a>, <a href="#">In Bangladesh</a></h5>

          </div> <!-- end .single-product -->

        </div>
          <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://www.kfc.com.au/sites/default/files/alohadata/images/categories/submenu_20041_web_thumb.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">KFC</a></h4>

            <h5><a href="#">Fast food</a> <a href="#"> & restaurant</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM6nvo7_hUS4D3MfDbCBE20JwT2Tbip2Avonyx4gSAi_s4z_h9" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Mollika Food</a></h4>

            <h5><a href="#">Lunch Breakfast</a> <a href="#">& Dinner</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://www.moumaachi.com/upload/company/shwapno-super-shop.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Swopno SuperStore</a></h4>

            <h5><a href="#">Resaller</a>, <a href="#"> Grocery Shop</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="http://suprobhat.com/wp-content/uploads/2018/05/mudi-dokan-953697916.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Mamun Store</a></h4>

            <h5><a href="#">Dhaka</a>, <a href="#">Uttara, 1234</a></h5>

          </div> <!-- end .single-product -->
          
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://content.jdmagicbox.com/comp/bardhaman/d1/9999px342.x342.130205163400.b5d1/catalogue/azad-stores-burdwan-rajbari-bardhaman-soft-drink-retailers-i23akla.jpg" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">AZAD Store</a></h4>

            <h5><a href="#">All Gocery</a> <a href="#"> & Rice</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2OP7FAL5UqB-PuKf280V1mHkjRsOkZ7trdHpxwveiUIgb-k-8" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Agora</a></h4>

            <h5><a href="#">SuperShop</a> <a href="#">& Reseller</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0DL9lUpJt8m4lpmlF5JKcl631emmFIWhz1A-C7fkgt54Hkt9lHw" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">MenaClick</a></h4>

            <h5><a href="#">Resaller</a>, <a href="#"> Grocery Shop</a></h5>

          </div> <!-- end .single-product -->

        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">

          <div class="single-product">
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy7XM_rHDTq2g7AA-zyByFzw2haOzQZNAoJBLzs2TmRMXztWGhHA" alt="">

              <div class="rating">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>

                <p>Featured</p>

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
            <h4><a href="#">Nagarthana Store</a></h4>

            <h5><a href="#">Dhaka</a>, <a href="#">Banani, 1244</a></h5>

          </div> <!-- end .single-product -->
          
        </div>

      </div>  <!-- end .row -->

      <div class="discover-more">

        <a class="btn btn-default text-center" href="#"><i class="fa fa-plus-square-o"></i>Discover More</a>
      </div>
    </div>  <!-- end .container -->
  </div> 
  <div class="classifieds-content">
    <div class="container">
      <div class="heading-section clearfix">
        <h1>Classifieds</h1>

        <form action="#">
          <input type="text" placeholder="Search by keywords">

          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div> <!-- END .heading-section -->

      <!-- CLSSIFIEDS-CATEGROY BEGIN -->
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Superstore<span>(1786)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i>Restaurants<span>(754)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>
          </ul> <!-- END MAIN UL -->
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-car" aria-hidden="true"></i>Transport Service <span>(87)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building" aria-hidden="true"></i>Our Shops <span>(1405)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i>Baby Toys<span>(996)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-book"></i>Premium Shop <span>(1256)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fashion <span>(45)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->
        </div> <!-- End grid layout -->

        <div class="col-md-3 col-sm-6">
          <ul class="classifieds-category">
            <li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>Sweet and bakery <span>(2726)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
              </ul>

            </li>

            <li><a href="#"><i class="fa fa-building-o"></i>popular foods <span>(1131)</span></a>

              <ul class="sub-category">
                <li><a href="#">Antiques <span>(43)</span></a></li>
                <li><a href="#">Books <span>(31)</span></a></li>
                <li><a href="#">Cars &amp; Motorcycles <span>(49)</span></a></li>
                <li><a href="#">Computer &amp; Tablets <span>(111)</span></a></li>
                <li><a href="#">Creative &amp; Digitals <span>(67)</span></a></li>
                <li><a href="#">Fitness &amp; Sport <span>(78)</span></a></li>
                <li><a href="#">Furnishing <span>(13)</span></a></li>
                <li><a href="#">Health &amp; Beauty <span>(99)</span></a></li>
              </ul>

            </li>
          </ul>
          <!-- END .CLASSIFIES-CATEGORY -->

        </div> <!-- End grid layout -->
      </div> <!-- End .row -->
    </div> <!-- END .container-->
  </div>
  <div class="register-content">
    <div class="reg-heading">
      <h1><strong>Register</strong> now</h1>
    </div>

    <div class="registration-details">
      <div class="container">
        <div class="box regular-member">
          <h2><strong>Regular</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

        <div class="alternate">
          <h2>OR</h2>
        </div>

        <div class="box business-member">
          <h2><strong>Business</strong> Member</h2>

          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>
          <p><i class="fa fa-check-circle-o"></i> Loren ipsum dolor sit amet</p>

          <a href="#" class="btn btn-default-inverse"><i class="fa fa-plus"></i> Register Now</a>
        </div>

      </div>
      <!-- END .CONTAINER -->
    </div>
    <!-- END .REGISTRATION-DETAILS -->
  </div>   
    
@endsection