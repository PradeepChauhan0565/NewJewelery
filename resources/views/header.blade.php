<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

   <style>
       
/*----- mobile menu start -----*/

.mobile-header {
    padding: 10px 0;
}

.mobile-header-top {
    border-bottom: 1px solid #efefef;
}

.mobile-header-top .header-top-settings {
    float: none;
}

.mobile-logo {
    max-width: 140px;
    width: 100%;
}

.mobile-main-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.mobile-main-header .mobile-menu-toggler {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.mobile-main-header .mobile-menu-toggler .mini-cart-wrap {
    line-height: 1;
}

.mobile-main-header .mobile-menu-toggler .mini-cart-wrap a {
    font-size: 25px;
    line-height: 1;
    color: #222222;
    position: relative;
}

.mobile-main-header .mobile-menu-toggler .mini-cart-wrap a:hover {
    color: #06233d;
}
 
  /* .notification{font-size: 13px;
    color: #fff;
    width: 16px;
    height: 16px;
    line-height: 16px;
    border-radius: 50%;
    text-align: center;
    font-weight: 600;
    right: -4px;
    top: -4px;
    position: absolute;
    background-color: #000b5e;} */

.mobile-main-header .mobile-menu-toggler .mini-cart-wrap .notification {
    font-size: 13px;
    color: #fff;
    width: 16px;
    height: 16px;
    line-height: 16px;
    border-radius: 50%;
    text-align: center;
    font-weight: 600;
    right: -4px;
    top: -4px;
    position: absolute;
    background-color: #06233d;
}

.mobile-main-header .mobile-menu-toggler .mobile-menu-btn {
    margin-left: 25px;
}

.mobile-main-header .mobile-menu-toggler .mobile-menu-btn span {
    width: 25px;
    height: 2px;
    display: block;
    /* -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s; */
    background-color: #222222;
    -webkit-transform-origin: left;
    -ms-transform-origin: left;
    transform-origin: left;
}

.mobile-main-header .mobile-menu-toggler .mobile-menu-btn span:nth-child(2),
.mobile-main-header .mobile-menu-toggler .mobile-menu-btn span:nth-child(3) {
    margin-top: 5px;
}

.mobile-main-header .mobile-menu-toggler .mobile-menu-btn:hover span {
    background-color: #06233d;
}

.mobile-main-header .mobile-menu-toggler .mobile-menu-btn:hover span:nth-child(1),
.mobile-main-header .mobile-menu-toggler .mobile-menu-btn:hover span:nth-child(3) {
    width: 20px;
}

.mobile-navigation {
    overflow: hidden;
    max-height: 250px;
}

.mobile-navigation nav {
    height: 100%;
}

.mobile-menu {
    margin-top: 30px;
    height: 100%;
    overflow: auto;
    padding-right: 30px;
    margin-right: -30px;
}

@media only screen and (max-width: 479.98px) {
    .mobile-menu {
        margin-top: 15px;
    }
}

.mobile-menu li>a {
    font-size: 15px;
    color: #222222;
    text-transform: capitalize;
    line-height: 18px;
    position: relative;
    display: inline-block;
    padding: 10px 0;
}

.mobile-menu li>a:hover {
    color: #06233d;
}

.mobile-menu li ul li {
    border: none;
}

.mobile-menu li ul li a {
    font-size: 14px;
    text-transform: capitalize;
    padding: 10px 0 8px;
}

.mobile-menu li.menu-item-has-children {
    display: block;
    position: relative;
}

.mobile-menu li.menu-item-has-children .dropdown {
    padding-left: 15px;
}

.mobile-menu li.menu-item-has-children .menu-expand {
    line-height: 50;
    top: -5px;
    left: 95%;
    width: 30px;
    position: absolute;
    height: 50px;
    text-align: center;
    cursor: pointer;
}

.mobile-menu li.menu-item-has-children .menu-expand i {
    display: block;
    position: relative;
    width: 10px;
    margin-top: 25px;
    border-bottom: 1px solid #222222;
    -webkit-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
}

.mobile-menu li.menu-item-has-children .menu-expand i:before {
    top: 0;
    width: 100%;
    content: "";
    display: block;
    position: absolute;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
    border-bottom: 1px solid #222222;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
}

.mobile-menu li.menu-item-has-children.active>.menu-expand i:before {
    -webkit-transform: rotate(0);
    -ms-transform: rotate(0);
    transform: rotate(0);
}


/*----- mobile menu end -----*/

   </style>

</head>
<body>
        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="{{asset('/')}}">
                                    <img style="width: 120px" src="{{asset('public/assets/img/logo/KAMA ANIMATION-2.gif')}}"
                                        alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="{{asset('wish')}}" class="mr-5" style="margin-right: 7px">
                                        <img style="width: 35px" src="{{asset('public/assets/img/logo/header-wish.png')}}"alt="Brand Logo">
                                        <div class="notification">
                                           
                                            0
                        
                                        </div>
                                    </a>
                                    <a href="{{asset('cart')}}">
                                        <i class="pe-7s-shopbag pe-7s-shopbag-mobile"></i>
                                        <div class="notification">
                                            
                                            0
                                         
                                        </div>
                                    </a>
                                </div>
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        
        <aside class="off-canvas-wrapper" style="background-color:#06233d">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="pe-7s-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here...">
                            <button class="search-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                            
                                <li class="menu-item-has-children text-uppercase"><a class="text-uppercase"
                                        href="">ring</a>
                                    <ul class="megamenu dropdown">
                                      
                                    
                                        <li class="mega-title menu-item-has-children"><a
                                                href="">style</a>
                                            <ul class="dropdown">
                                            
                                                <li><a
                                                        href="">subcategory</a>
                                                </li>
                                         
                                            </ul>
                                        </li>
                                    
                                    </ul>
                                </li>
                          
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <div class="mobile-settings">
                        <ul class="nav">
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="product-details.html" class="dropdown-toggle" id="currency"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Currency
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu  " aria-labelledby="currency">
                                        <a class="elementid ">$ USD</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="product-details.html" class="dropdown-toggle" id="myaccount"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="myaccount">
                                        login
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                     
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li>
                                 hjf
                                </li>
                                <li>fgjgh
                                </li>
                                <li>
                                    ghmhg
                                </li>
                            </ul>
                        </div>
                      
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
       
    </header>
    <!-- end Header Area -->











       <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <!--<script src="{{asset('public" public/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>-->
    <!-- jQuery JS -->
    <script src="{{asset('public/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('public/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <!-- slick Slider JS -->
    <script src="{{asset('public/assets/js/plugins/slick.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{asset('public/assets/js/plugins/countdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('public/assets/js/plugins/nice-select.min.js')}}"></script>
    <!-- jquery UI JS -->
    <script src="{{asset('public/assets/js/plugins/jqueryui.min.js')}}"></script>
    <!-- Image zoom JS -->
    <script src="{{asset('public/assets/js/plugins/image-zoom.min.js')}}"></script>
    <!-- Images loaded JS -->
    <script src="{{asset('public/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <!-- mail-chimp active js -->
    <script src="{{asset('public/assets/js/plugins/ajaxchimp.js')}}"></script>
    <!-- contact form dynamic js -->
    <script src="{{asset('public/assets/js/plugins/ajax-mail.js')}}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="{{asset('public/assets/js/plugins/google-map.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    
    @stack('scripts')
   
    <script>
        var contact1=$('#whatsapp').val();
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?32484';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#4dc247",
          "ctaText":"",
          "borderRadius":"25",
          "marginLeft":"10",
          "marginBottom":"50",
          "marginRight":"50",
          "position":"left"
      },
      "brandSetting":{
          "brandName":"KAMA JEWELRY",
          "brandSubTitle":"Typically replies within a day",
          "brandImg":"http://kamajewelry.com/public/assets/img/logo.png",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"Hello, I have a question about",
          "backgroundColor":"#0a5f54",
          "ctaText":"Start Chat",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":contact1
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

    {{--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#myModal").modal('show');
      });
    </script>
    
    @if(!session()->has('popup'))
    <div id="myModal" class="modal fade bd-example-modal-lg w-full" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  style="background-color: #06233d;">
        <div class="modal-header">
            <button type="button" class="close absolute  text-white" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-7xl" role="document">
            <div class="modal-content" style="background-color: #06233d; border:none;">
               
                <div class="modal-body" style="background-color: #06233d;">
                    <div class="row">
                        <div class="col-lg-12" style=" text-align:center;">
                        
                        {{-- <div class="col-lg-6">
                            @php
                            echo $title1;
                            @endphp
                            <form class="newsletter-inner" action="{{route('newsletter')}}" method="POST">
                                @csrf
                                <input type="email" name="email" class="news-field" autocomplete="off"
                                    placeholder="Enter your email address">
                                <button class="news-btn">Subscribe</button>
                            </form>
                            @php
                            echo $title2;
                            @endphp

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @php
    session()->put('popup', 'accepted');
  
    @endphp

    <script>
        if(performance.navigation.type == 2){
   location.reload(true);
}
    </script>
<script>
    $(document).ready(function(){

        if(location.pathname=='/kamajewelry/')
        {
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".header-main-area").css("background-color", "#fff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
           document.getElementById('myImage').src="{{asset('public/assets/img/logo/anime.gif')}}"
           document.getElementById('myWish').src="{{asset('public/assets/img/logo/header-wish.png')}}"    

        $(".elementid").css("color","#06233d");
        $(".curreny-wrap").css("color","#06233d");
        $(".pe-7s-search").css("color","#06233d");
        $(".pe-7s-user").css("color","#06233d");
        $(".pe-7s-shopbag").css("color","#06233d");
        $(".text-change").css("color","#06233d");
        
        } else {
            
          $(".header-main-area").css("background-color", "transparent"); // if not, change it back to transparent
          document.getElementById('myImage').src="{{asset('public/assets/img/logo/transparent-logo-GIF.gif')}}"
          document.getElementById('myWish').src="{{asset('public/assets/img/logo/white-wish.png')}}"
          
         
           $(".elementid").css("color","#fff");
           $(".curreny-wrap").css("color","#fff");
           $(".pe-7s-search").css("color","#fff");
           $(".pe-7s-user").css("color","#fff");
           $(".pe-7s-shopbag").css("color","#fff");
           $(".pe-7s-shopbag-mobile").css("color","#06233d");
           $(".text-change").css("color","#fff");
           
        }
      });
    }else
    {
        $(".header-main-area").css({"background-color": "#fff", "border-bottom": "1px solid lightgray"}); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
           document.getElementById('myImage').src="{{asset('public/assets/img/logo/anime.gif')}}"
           document.getElementById('myWish').src="{{asset('public/assets/img/logo/header-wish.png')}}"    

        $(".elementid").css("color","#06233d");
        $(".curreny-wrap").css("color","#06233d");
        $(".pe-7s-search").css("color","#06233d");
        $(".pe-7s-user").css("color","#06233d");
        $(".pe-7s-shopbag").css("color","#06233d");
        $(".text-change").css("color","#06233d"); 
    }
    });
</script>
</body>
</html>