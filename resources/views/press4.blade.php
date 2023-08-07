<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <style>
    .img-hover img {
    -webkit-transition: all .3s ease; /* Safari and Chrome */
  	-moz-transition: all .3s ease; /* Firefox */
  	-o-transition: all .3s ease; /* IE 9 */
  	-ms-transition: all .3s ease; /* Opera */
  	transition: all .3s ease;
  	position:relative;
}
.img-hover img:hover {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform:translateZ(0) scale(1.10); /* Safari and Chrome */
    -moz-transform:scale(1.10); /* Firefox */
    -ms-transform:scale(1.10); /* IE 9 */
    -o-transform:translatZ(0) scale(1.10); /* Opera */
    transform:translatZ(0) scale(1.10);
}
  
  
.grayscale {
  -webkit-filter: brightness(1.10) grayscale(100%) ;
  -moz-filter: brightness(1.10) grayscale(100%) ;
  filter: brightness(1.10) grayscale(100%); 
}
.inner{
    position: relative;
   
}


.tcolor{
     /* top: 50%;
    transform: translateY(-50%); */
 
    opacity: 0;
    position: absolute;
    color: white;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    transition: opacity 500ms ease;
    -webkit-transition: opacity 500ms ease;
    -moz-transition: opacity 500ms ease;
    -o-transition: opacity 500ms ease;
    cursor: pointer;
   
}
.tcolor:hover{
    opacity: 1;
}
.jumpbody{
     position: relative;
   
}
.jump{
   position: absolute;
   bottom:0px;
   /* z-index: -1; */
   left: 50%;
   transform: translateX(-50%);
   
   transition: 1.5s;
   
}
.jumpbody:hover .jump{
/* z-index: 1; */
    bottom: 50%;
   
}
.jumpcolorbody{position: relative;}
.jumpcolor{
    position: absolute;
   /* background: linear-gradient(to top, #00263a 0%, #ccffff 100%); */
   background: linear-gradient(rgba(0,0,0,0.6),#00263a );
    bottom:0;
    left: 0;
    overflow: hidden;
    height: 0%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1.5s;
}
.jumpcolorbody:hover .jumpcolor{
    height: 100%;
}
 </style>
</head>
<body>

<div class="row">
    <div class="col-6">
        <div class="inner">
        <img src="images/platinum jewelry-thumblin.jpg" alt="" style="width:100%; ">

       <div class="tcolor">
         <div class="">
           <div class="text-center"> <h5>Name</h5></div>
           <div class="text-center"> <p>Hi iam hiro</p></div>
           <div class="text-center"> <button>View More</button></div>
            
        </div>
       </div>
    </div>
    </div>
     <div class="col-6">
        <div class="jumpbody">
        <img src="images/platinum jewelry-thumblin.jpg" alt="" style="width:100%; ">

       <div class="jump">
         <div class="">
           {{-- <div class="text-center text-white"> <h5>Name</h5></div>
           <div class="text-center text-white"> <p>Hi iam hiro</p></div> --}}
           <div class="text-center"> <button>View More</button></div>
            
        </div>
       </div>
    </div>
    </div>
    <div class="col-6">
        <div class="jumpcolorbody">
        <img src="images/platinum jewelry-thumblin.jpg" alt="" style="width:100%; ">

       <div class="jumpcolor">
         <div class="">
           <div class="text-center text-white"> <h5>Name</h5></div>
           <div class="text-center text-white"> <p>Hi iam hiro</p></div>
           <div class="text-center"> <button>View More</button></div>
            
        </div>
       </div>
    </div>
    </div>
</div>
    

   













    <div class="container my-5" style="color:#00263a">

           
            <div class="row justify-content-md-center justify-content-lg-center ">
                <div class="col-lg-7 text-center mb-2"><h1 style="font-size:36px"> Press</h1></div>
                
            </div>
            

        <div class="row mb-5 ">
                <div class="col-12 text-center">
                        <p style=" color:#00263a;">
                           The latest news, articles, interviews, reviews and exclusive exhibition insight from the world of Kama Jewelry.
                        </p>
                        
                </div>
        </div>

        {{-- style="border: 1px solid red;" --}}
            <div class="row  mb-5 g-4">
                <div class="col-lg-4 " >
                    <div class=" p-2">
                        <a class="" href="https://retailjewellerindia.com/design-graduates-gets-a-new-platform-to-exhibit-their-skills/quote-colin-shah-27-06-rev/">
                       <img src="images/dcc.jpg" alt="United" style="width:100%;">
                       <div class=" p-2" style="background-color: #00263a; color:white;height:180px;">
                         <p>Retail jeweller india</p>
                           <h5 class="my-3">“We’re Putting Our Most Innovative Foot Forward This IIJS’: Colin Shah</h5> 
                           <div style="text-align: right;">
                            <p style="font-size: 12px; ">22/02/2023</p>
                           </div>
                       </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-2" >
                        <a class="" href="https://retailjewellerindia.com/jewellery-exporters-seek-permission-to-start-diamond-bourse-sez-in-mumbai/colin-shah-2/">
                       <img src="images/1-01.jpg" alt="United" style="width:100%; height:auto;">
                        <div class=" p-2" style="background-color: #00263a; color:white; height:180px;">
                         <p>Retail jeweller india</p>
                           <h5 class="my-3">Retail jeweller india</h5> 
                           <p style="font-size: 12px;">22/02/2023</p>
                       </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-2">
                        <a class="" href="https://www.unitedwaymumbai.org/tmm-fundraiser-9115">
                       <img src="images/press/United Way SS nedw1.png" alt="United" style="width:100%; height:200px;">
                       <div class=" p-2" style="background-color: #00263a; color:white;  height:180px;">
                         <p>Retail jeweller india</p>
                           <h5 class="my-3">I support Shrimad Rajchandra Love and Care. Shrimad Rajchandra Love and Care (SRLC) and underserved sections o</h5> 
                           <p style="font-size: 12px;">22/02/2023</p>
                       </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://economictimes.indiatimes.com/industry/cons-products/fashion-/-cosmetics-/-jewellery/gem-jewellery-industry-seeks-abolition-of-import-duty-on-raw-material-for-lab-grown-diamonds-in-budget/articleshow/96828797.cms">
                       <img src="images/press/Economic Times SS1.png" alt="United" style="width:100%; ">
                       
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://gjepc.org/solitaire/were-putting-our-most-innovative-foot-forward-this-iijs-colin-shah/">
                       <img src="images/press/GJEPC India SS1.jpg" alt="United" style="width:100%; ">
                       
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://retail.economictimes.indiatimes.com/news/apparel-fashion/jewellery/gold-as-an-investment-option-demand-down-15-in-10-days/96043727">
                       <img src="images/press/et-retail SS1.png" alt="United" style="width:100%; ">
                      
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://retailjewellerindia.com/retail-jeweller-talks-to-colin-shah-chairman-gjepc/">
                       <img src="images/press/The Retail Jeweller SS1.1.png" alt="United" style="width:100%; ">
                       <div class=" p-2">
                            Head line
                       </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.moneycontrol.com/news/business/economy/current-growth-in-exports-will-continue-if-more-ftas-are-signed-gjepc-chairman-colin-shah-8994251.html">
                       <img src="images/press/Money control SS1.png" alt="United" style="width:100%; ">
                       
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://retailjewellerworld.com/indian-diamond-industry-bids-adieu-to-retiring-marketing-guru-stephen-lussier-at-a-grand-function-in-mumbai/">
                       <img src="images/press/TRJ-World-2020-Rev-1 SS1.png" alt="United" style="width:100%; ">
                       
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://lifestyle.livemint.com/fashion/trends/why-the-indian-luxury-market-is-growing-during-a-pandemic-111644310180000.html">
                       <img src="images/press/Mint lounge SS1.png" alt="United" style="width:100%; ">
                     
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.magzter.com/ja/stories/Business/The-Retail-Jeweller/INTERVIEW-COLIN-SHAH">
                       <img src="images/press/Magzter1.png" alt="United" style="width:100%; ">
                      
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.naturaldiamonds.com/in/industry-news/colin-shah-the-man-who-scripted-his-success-story/">
                       <img src="images/press/Natural Diamond council SS1.png" alt="United" style="width:100%; ">
                       
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.jckonline.com/editorial-article/colin-shah-chairman-gjepc/">
                       <img src="images/press/JCK SS1.png" alt="United" style="width:100%; ">
                      
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.rough-polished.com/en/exclusive/113000.html">
                       <img src="images/press/rough polished SS1.png" alt="United" style="width:100%; ">
                      
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class=" p-4">
                        <a class="" href="https://www.heerazhaveraat.com/heera/index.php/pages/info/Colin-Shah">
                       <img src="images/press/Heera Zhavahrat SS1.png" alt="United" style="width:100%; ">
                      
                    </a>
                    </div>
                </div>
               
              
            </div>
            


            

        
       

    </div>

</body>
</html>