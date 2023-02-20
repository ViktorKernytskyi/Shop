@extends('layouts.main')

@section('content')


 
<section id="advertisement">
    <div class="container">
        <img src="{{ asset('images/shop/advertisement.jpg') }}" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

                </div>
            </div>
    @include('partials.sidebar')

{{--            <div class="col-sm-9 padding-right">--}}
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product12.jpg') }}" alt="" />
                                    <h2>UAH 56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product11.jpg') }}" alt="" />
                                    <h2>$5</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$5</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product10.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product9.jpg') }}" alt="" />
                                    <h2>$5</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="{{ asset('images/home/new.png') }}" class="new" alt="" />
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product8.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="{{ asset('images/home/sale.png') }}" class="new" alt="" />
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/shop/product7.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product6.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product5.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product4.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product3.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product2.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/product1.jpg') }}" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>
                </div><!--features_items-->
{{--            </div>--}}
        </div>
    </div>
</section>

{{--<footer id="footer"><!--Footer-->--}}
{{--    <div class="footer-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="companyinfo">--}}
{{--                        <h2><span>e</span>-shopper</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-7">--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{ asset('images/home/iframe1.png') }}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{ asset('images/home/iframe2.png') }}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{ asset('images/home/iframe3.png') }}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{ asset('images/home/iframe4.png') }}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="address">--}}
{{--                        <img src="{{ asset('images/home/map.png') }}" alt="" />--}}
{{--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="footer-widget">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Service</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="">Online Help</a></li>--}}
{{--                            <li><a href="">Contact Us</a></li>--}}
{{--                            <li><a href="">Order Status</a></li>--}}
{{--                            <li><a href="">Change Location</a></li>--}}
{{--                            <li><a href="">FAQ’s</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Quock Shop</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="">T-Shirt</a></li>--}}
{{--                            <li><a href="">Mens</a></li>--}}
{{--                            <li><a href="">Womens</a></li>--}}
{{--                            <li><a href="">Gift Cards</a></li>--}}
{{--                            <li><a href="">Shoes</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>Policies</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="">Terms of Use</a></li>--}}
{{--                            <li><a href="">Privecy Policy</a></li>--}}
{{--                            <li><a href="">Refund Policy</a></li>--}}
{{--                            <li><a href="">Billing System</a></li>--}}
{{--                            <li><a href="">Ticket System</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <ul class="nav nav-pills nav-stacked">--}}
{{--                            <li><a href="">Company Information</a></li>--}}
{{--                            <li><a href="">Careers</a></li>--}}
{{--                            <li><a href="">Store Location</a></li>--}}
{{--                            <li><a href="">Affillate Program</a></li>--}}
{{--                            <li><a href="">Copyright</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3 col-sm-offset-1">--}}
{{--                    <div class="single-widget">--}}
{{--                        <h2>About Shopper</h2>--}}
{{--                        <form action="#" class="searchform">--}}
{{--                            <input type="text" placeholder="Your email address" />--}}
{{--                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>--}}
{{--                            <p>Get the most recent updates from <br />our site and be updated your self...</p>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="footer-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>--}}
{{--                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</footer><!--/Footer-->--}}

{{--<script src="{{ asset('assets/js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/price-range.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}


{{--</body>--}}
{{--</html>--}}
@endsection
