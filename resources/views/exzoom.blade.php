<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>jQuery exzoom: Product Carousel Example</title>
        {{-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>
        <script src="{{asset('https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('../src/jquery.exzoom.js')}}"></script>
        <link href="{{asset('../src/jquery.exzoom.css')}}" rel="stylesheet" type="text/css" />
        <style>
            

            #exzoom {
                width: 500px;
                /*height: 400px;*/
            }

            .container {
                margin: 150px auto;
                max-width: 960px;
            }

            .hidden {
                display: none;
            }

            .btnfornext {
                position: relative;
            }

            .nextbtn {
                position: absolute;
                top: 200px;
                right: -10px;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        
        <div class="container">
            <h1>jQuery exzoom: Product Carousel Example</h1>
            <div class="exzoom hidden" id="exzoom">
                <div class="exzoom_img_box btnfornext">
                    <ul class='exzoom_img_ul d-flex'>
                        <li class=""><img src="{{asset('https://picsum.photos/270/270/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/320/320/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/600/600/?random')}}" /></li>
                        {{-- <li class="btnfornext"><img src="{{asset('https://picsum.photos/500/500/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/700/700/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/310/310/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/410/410/?random')}}" /></li>
                        <li class="btnfornext"><img src="{{asset('https://picsum.photos/400/400/?random')}}" /></li> --}}

                    </ul>
                    <span class="nextbtn exzoom_next_btn"> > </span>
                </div>
                <div class="exzoom_nav"></div>
                <p class="exzoom_btn">
                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                        < </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                </p>
            </div>
        </div>

        <script type="text/javascript">

            $('.container').imagesLoaded(function () {
                $("#exzoom").exzoom({
                    autoPlay: false,
                });
                $("#exzoom").removeClass('hidden')
            });

        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>



             <button class="btn btn-success btn-lg submit" type="submit">
<span class="btn-txt">SUBMIT</span>
<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>                 
 </button>


 <script>

    $(document).ready(function () {
        $("#clientform").submit(function () {
          $(".spinner-border").removeClass("d-none");
          $(".submit").attr("disabled", true);
          $(".btn-txt").text("Processing ...");
        });
        });
 </script>
    </body>

</html>