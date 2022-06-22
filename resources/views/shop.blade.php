@extends('layouts.app')	
	

@section('main')
    <!-- =========================
      header
      ========================== -->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            </button>
            <a href="#body"><img src="{{asset('assets/images/logo.png')}}" alt=""/></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="{{url('/index-2')}}" class="smoothScroll">HOME</a></li>
              <li><a href="{{url('index-2#service')}}" class="smoothScroll">SERVICE</a></li>
              <li><a href="{{url('index-2#about')}}" class="smoothScroll">ABOUT</a></li>
              <li><a href="{{url('index-2#project')}}" class="smoothScroll">PROJECT</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                  data-close-others="false">PAGES<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/blog')}}">BLOG</a></li>
                  <li><a href="{{url('/singleblog')}}">SINGLE BLOG</a></li>
                  <li><a href="{{url('/shop')}}">SHOP</a></li>
                </ul>
              </li>
              <li><a href="{{url('/index-2#price')}}" class="smoothScroll">PRICE</a></li>
              <li><a href="{{url('/index-2#contact')}}" class="smoothScroll">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!--End header-->
    <!-- /main site-content-->
    <main class="site-content">
      <section>
        <div class="heading-shop home-section text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading-right">
                  <h2><strong>Shop</strong></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <!--left Slidebar-->
            <div class="col-sm-3">
              <div class="left-sidebar">
                <h2>CATEGORIES</h2>
                <div class="panel-group category-products" id="accordian">
                  <!--category-productsr-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Drill
                        </a>
                      </h4>
                    </div>
                    <div id="sportswear" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul>
                          <li><a href="#">BROKK 100HB</a></li>
                          <li><a href="#">BROKK 100HB</a></li>
                          <li><a href="#">BROKK 100HB</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Grinders
                        </a>
                      </h4>
                    </div>
                    <div id="mens" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul>
                          <li><a href="#">BROKK 100HB</a></li>
                          <li><a href="#">BROKK 100HB</a></li>
                          <li><a href="#">BROKK 100HB</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Hand tools
                        </a>
                      </h4>
                    </div>
                    <div id="womens" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul>
                          <li><a href="#">Hammer</a></li>
                          <li><a href="#">Hammer</a></li>
                          <li><a href="#">Hammer</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><a href="#">Saws</a></h4>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><a href="#">Vacuum</a></h4>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><a href="#">Households</a></h4>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><a href="#">Interiors</a></h4>
                    </div>
                  </div>
                </div>
                <!--/category-products-->
                <div class="brands_products">
                  <!--brands_products-->
                  <h2>Top Rated</h2>
                  <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#"> <span class="pull-right">(50)</span>Drill</a></li>
                      <li><a href="#"> <span class="pull-right">(56)</span>Nailer</a></li>
                      <li><a href="#"> <span class="pull-right">(27)</span>Hammer</a></li>
                      <li><a href="#"> <span class="pull-right">(32)</span>Hand Tools</a></li>
                      <li><a href="#"> <span class="pull-right">(5)</span>BROKK</a></li>
                      <li><a href="#"> <span class="pull-right">(9)</span>Drill</a></li>
                      <li><a href="#"> <span class="pull-right">(4)</span>Saws</a></li>
                    </ul>
                  </div>
                </div>
                <!--/brands_products-->
              </div>
            </div>
            <!--end of left slidebar-->
            <div class="col-sm-9 padding-right">
              <!--features_items-->
              <div class="features_items">
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product1.png" alt=""/>
                        <h2>$150</h2>
                        <a href="#" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$150</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product2.jpg" alt=""/>
                        <h2>$170</h2>
                        <a href="#" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$170</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product3.jpg" alt=""/>
                        <h2>$135</h2>
                        <a href="#" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$135</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product4.jpg" alt=""/>
                        <h2>$135</h2>
                        <a href="#" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$135</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                      <img src="assets/images/shop/new.png" class="new" alt=""/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product5.jpg" alt=""/>
                        <h2>$135</h2>
                        <a href="#" class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$135</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                      <img src="assets/images/shop/sale.png" class="new" alt=""/>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="assets/images/shop/product6.jpg" alt=""/>
                        <h2>$135</h2>
                        <a href="#" class="btn btn-default add-to-cart"><i
                          class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      <div class="product-overlay">
                        <div class="overlay-content">
                          <h2>$135</h2>
                          <a href="#" class="btn btn-default add-to-cart">
                          <i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end of features_items-->
              <!--recommended_items-->
              <div class="recommended_items">
                <h2 class="title text-center">recommended items</h2>
                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend1.jpg" alt=""/>
                              <h2>$135</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend2.jpg" alt=""/>
                              <h2>$170</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend3.jpg" alt=""/>
                              <h2>$135</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend1.jpg" alt=""/>
                              <h2>$135</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend2.jpg" alt=""/>
                              <h2>$135</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="product-image-wrapper">
                          <div class="single-products">
                            <div class="productinfo text-center">
                              <img src="assets/images/shop/recommend3.jpg" alt=""/>
                              <h2>$135</h2>
                              <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left recommended-item-control" href="#recommended-item-carousel"
                    data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="right recommended-item-control" href="#recommended-item-carousel"
                    data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
              <!--end of recommended_items-->
            </div>
          </div>
        </div>
      </section>
      <!--toper -->
      <div class="toper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="page-scroll marginbot-30">
                <a href="#body" id="totop" class="btn btn-circle">
                <i class="fa fa-angle-double-up animated"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End toper -->
@endsection      