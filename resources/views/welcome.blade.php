@extends('front-page.layouts.main')
@section('content')
    <div class="block-main container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="{{asset('front-page/images/blocks/1.jpg')}}" class="img-responsive" alt=""/>
                    <div class="bs-text-down text-center hvr-outline-out">
                        Menswear<span>Intimates Fall/Winter 2015</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="{{asset('front-page/images/blocks/2.jpg')}}" class="img-responsive" alt=""/>
                    <div class="bs-text-center text-center">
                        Accesories<span>Get a new look with Smile Collection</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="{{asset('front-page/images/blocks/3.jpg')}}" class="img-responsive" alt=""/>
                    <div class="bs-text-down text-center">
                        Womenswear<span>Smile Collection new arrivals</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- FEATURED PRODUCTS -->
    <div class="featured-products">
        <div class="container">
            <div class="row">
                <h5 class="heading"><span>Featured Products</span></h5>
                <ul class="filter" data-option-key="filter">
                    <li><a class="selected" href="#filter" data-option-value="*">All</a></li>
                    <li><a href="#" data-option-value=".accessories">Accesories</a></li>
                    <li><a href="#" data-option-value=".clothing">Clothing</a></li>
                    <li><a href="#" data-option-value=".handbags">Handbags</a></li>
                    <li><a href="#" data-option-value=".shoes">Shoes</a></li>
                </ul>
                <div id="isotope" class="isotope">
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <div class="badge new">New</div>
                                <img src="{{asset('front-page/images/products/fashion/1.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="red"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/2.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <div class="badge offer">-50%</div>
                                <img src="{{asset('front-page/images/products/fashion/10.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price"><small class="cutprice">$200.00</small> $99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item accessories shoes">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/3.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="liteblue"></a>
                                    <a href="#" class="cream"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/9.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="red"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item accessories shoes">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/2.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/17.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price"><small class="cutprice">$200.00</small> $99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item accessories handbags">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/5.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="liteblue"></a>
                                    <a href="#" class="cream"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/3.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="red"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/14.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price"><small class="cutprice">$200.00</small> $99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item accessories handbags">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/6.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item clothing">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/6.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="liteblue"></a>
                                    <a href="#" class="cream"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POLICY -->
    <div class="policy-item parallax-bg1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="pi-wrap text-center">
                        <i class="fa fa-plane"></i>
                        <h4>Free shipping<span>Free shipping on all UK order</span></h4>
                        <p>Nulla ac nisi egestas metus aliquet euismod. Sed pulvinar lorem at pretium.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="pi-wrap text-center">
                        <i class="fa fa-money"></i>
                        <h4>Money Guarantee<span>30 days money back guarantee !</span></h4>
                        <p>Curabitur ornare urna enim, et lacinia purus tristique eulla eget feugiat diam.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="pi-wrap text-center">
                        <i class="fa fa-clock-o"></i>
                        <h4>Store Hours<span>Open: 9:00AM - Close: 21:00PM</span></h4>
                        <p>Etiam egestas purus eget sagittis lacinia. Morbi vel elit nec eros iaculis.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="pi-wrap text-center">
                        <i class="fa fa-life-ring"></i>
                        <h4>Support 24/7<span>We support online 24 hours a day</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit integer congue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG -->
    <div class="home-blog">
        <div class="container">
            <h5 class="heading space40"><span>Latest from our blog</span></h5>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <article class="home-post text-center">
                        <div class="post-thumb">
                            <a href="./blog-single.html">
                                <img src="{{asset('front-page/images/blog/1/1.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-link"></div>
                            </a>
                        </div>
                        <div class="post-excerpt">
                            <h4><a href="./blog-single.html">A Beautiful & Creative design</a></h4>
                            <div class="hp-meta">
                                <span><i class="fa fa-edit"></i> September 25, 1989</span>
                                <span><i class="fa fa-comment-o"></i> <a href="#">2037 Comments</a></span>
                            </div>
                            <p>Fusce id viverra leo, quis sollicitudin risus. Sed maximus dictum semper. Sed laoreet euismod dui [..]</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-4">
                    <article class="home-post text-center">
                        <div class="post-thumb">
                            <a href="./blog-single.html">
                                <img src="{{asset('front-page/images/blog/1/2.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-link"></div>
                            </a>
                        </div>
                        <div class="post-excerpt">
                            <h4><a href="./blog-single.html">A Beautiful & Creative design</a></h4>
                            <div class="hp-meta">
                                <span><i class="fa fa-edit"></i> September 25, 1989</span>
                                <span><i class="fa fa-comment-o"></i> <a href="#">2037 Comments</a></span>
                            </div>
                            <p>Fusce id viverra leo, quis sollicitudin risus. Sed maximus dictum semper. Sed laoreet euismod dui [..]</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-4">
                    <article class="home-post text-center">
                        <div class="post-thumb">
                            <a href="./blog-single.html">
                                <img src="{{asset('front-page/images/blog/1/3.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-link"></div>
                            </a>
                        </div>
                        <div class="post-excerpt">
                            <h4><a href="./blog-single.html">A Beautiful & Creative design</a></h4>
                            <div class="hp-meta">
                                <span><i class="fa fa-edit"></i> September 25, 1989</span>
                                <span><i class="fa fa-comment-o"></i> <a href="#">2037 Comments</a></span>
                            </div>
                            <p>Fusce id viverra leo, quis sollicitudin risus. Sed maximus dictum semper. Sed laoreet euismod dui [..]</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- NEW ARRIVALS -->
    <div class="product-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h5 class="heading2 space40"><span>New Arrivals</span></h5>
                    <div class="product-carousel">
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/4.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="litebrown"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="red"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/11.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="black"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/5.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="black"></a>
                                        <a href="#" class="cream"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/12.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="litebrown"></a>
                                        <a href="#" class="red"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/6.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="cream"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="brown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h5 class="heading2 space40"><span>Random Products</span></h5>
                    <div class="product-carousel2">
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/5.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="brown"></a>
                                        <a href="#" class="white"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/accessories/15.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="red"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/8.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="black"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="red"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/18.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="black"></a>
                                        <a href="#" class="liteblue"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc-wrap">
                            <div class="product-item">
                                <div class="item-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/10.jpg')}}" class="img-responsive" alt=""/>
                                    <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                    <div class="product-overlay">
                                        <a href="#" class="addcart fa fa-shopping-cart"></a>
                                        <a href="#" class="compare fa fa-signal"></a>
                                        <a href="#" class="likeitem fa fa-heart-o"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="product-price">$99.00 <em>- Pre order</em></span>
                                    <div class="item-colors">
                                        <a href="#" class="black"></a>
                                        <a href="#" class="darkgrey"></a>
                                        <a href="#" class="litebrown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space30 clearfix"></div>

    <!-- TESTIMONIAL -->
    <div class="testimonial parallax-bg2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="quote-carousel">
                        <div>
                            <img src="{{asset('front-page/images/quote/1.png')}}" class="img-responsive" alt=""/>
                            <div class="quote-info">
                                <h4>Smile Nguyen</h4>
                                <cite>Themeforest</cite>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis odio in faucibus posuere. In eu scelerisque lorem. Mauris lusto in lacus accumsan interdum.Nam mattis sollicitudin vestibulum"</p>
                            </div>
                        </div>
                        <div>
                            <img src="{{asset('front-page/images/quote/2.png')}}" class="img-responsive" alt=""/>
                            <div class="quote-info">
                                <h4>Smile Nguyen</h4>
                                <cite>Themeforest</cite>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis odio in faucibus posuere. In eu scelerisque lorem. Mauris lusto in lacus accumsan interdum.Nam mattis sollicitudin vestibulum"</p>
                            </div>
                        </div>
                        <div>
                            <img src="{{asset('front-page/images/quote/3.png')}}" class="img-responsive" alt=""/>
                            <div class="quote-info">
                                <h4>Smile Nguyen</h4>
                                <cite>Themeforest</cite>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis odio in faucibus posuere. In eu scelerisque lorem. Mauris lusto in lacus accumsan interdum.Nam mattis sollicitudin vestibulum"</p>
                            </div>
                        </div>
                        <div>
                            <img src="{{asset('front-page/images/quote/3.png')}}" class="img-responsive" alt=""/>
                            <div class="quote-info">
                                <h4>Smile Nguyen</h4>
                                <cite>Themeforest</cite>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis odio in faucibus posuere. In eu scelerisque lorem. Mauris lusto in lacus accumsan interdum.Nam mattis sollicitudin vestibulum"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LATEST PRODUCTS -->
    <div class="container padding40">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="heading space40"><span>Latest Products</span></h5>
                <div class="product-carousel3">
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/5.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/15.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="red"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/8.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="red"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/18.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="liteblue"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/fashion/10.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="black"></a>
                                    <a href="#" class="darkgrey"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc-wrap">
                        <div class="product-item">
                            <div class="item-thumb">
                                <img src="{{asset('front-page/images/products/accessories/5.jpg')}}" class="img-responsive" alt=""/>
                                <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                <div class="product-overlay">
                                    <a href="#" class="addcart fa fa-shopping-cart"></a>
                                    <a href="#" class="compare fa fa-signal"></a>
                                    <a href="#" class="likeitem fa fa-heart-o"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                <span class="product-price">$99.00 <em>- Pre order</em></span>
                                <div class="item-colors">
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="white"></a>
                                    <a href="#" class="litebrown"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space10 clearfix"></div>

    <!-- CLIENTS -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="clients-carousel">
                        <div><a href="#"><img src="{{asset('front-page/images/clients/1.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/2.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/3.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/4.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/5.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/6.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/1.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/2.png')}}" class="img-responsive" alt=""/></a></div>
                        <div><a href="#"><img src="{{asset('front-page/images/clients/3.png')}}" class="img-responsive" alt=""/></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER WIDGETS -->
    <div class="f-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h6>Best Seller</h6>
                    <div class="f-widget-content">
                        <ul>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/1.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/9.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/7.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>Best Offer</h6>
                    <div class="f-widget-content">
                        <ul>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/4.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/10.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/8.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>Recent Products</h6>
                    <div class="f-widget-content">
                        <ul>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/accessories/1.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/10.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/accessories/11.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>Top Rated</h6>
                    <div class="f-widget-content">
                        <ul>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/2.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <div class="ratings">
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                    </div>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/fashion/18.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <div class="ratings">
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                    </div>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="fw-thumb">
                                    <img src="{{asset('front-page/images/products/accessories/13.jpg')}}" alt=""/>
                                </div>
                                <div class="fw-info">
                                    <h4><a href="./single-product.html">Product fashion</a></h4>
                                    <div class="ratings">
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                        <span class="act fa fa-star"></span>
                                    </div>
                                    <span class="fw-price">$ 99.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
