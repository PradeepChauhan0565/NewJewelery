<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>

      .blog-btn{
        border: 2px solid #00263a;
        background-color: #00263a; 
        color:white;
        cursor:pointer;
      }
      .blog-btn:hover{
        background-color: white;
        color:#00263a;
        
      }
    </style>

</head>
<body>




<div class="container" style="color:#00263a">
        <div class="row  g-5 mt-4">
            <div class="col-lg-4 col-md-12 mb-5">
                    <div class="rounded">
                    <img class="rounded" src="images/Aniversary ring.jpg" alt="" style="width:100%;">
                    </div>
            </div>
            <div class="col-lg-8 col-md-12 mb-5" style="color:#00263a">
                    <h1 class="pb-2">Fun fact about Diamonds!</h1>
                   <p>
                    Diamonds hold more value per milligram than any other traded element in the world – 
                    unlike other valuables and commodities. The value of a diamond is inherent and stable. 
                    On average, diamond prices have increased by more than 14 % per annum for over 50 years. 
                    Currency fluctuations, bank crises and stock market variations make no difference!....
                  
                </p>
                 <a href="{{asset('fun_fact')}}"><button class="px-4 py-2 my-2 blog-btn" >Read more</button></a>

                   

            </div>
       
        </div>
            
        <div class="row  g-5">
            
            <div class="col-lg-8 col-md-12 mb-5">
                    <h1 class="py-2">How to pick the right diamond Necklace</h1>
                   <p>
                     A diamond necklace is part of the jewelry essentials that every woman must own. It is one
                      of the go-to accessories to dress up any outfit.  It is a beautiful investment that you 
                      can wear countless times 
                     and it will never fail to accentuate your neckline and enhance your over all look....
                   </p>
                     <a href="{{asset('right_diamond_necklace')}}"><button class="px-4 py-2 my-2 blog-btn" >Read more</button></a>

            </div>
            <div class="col-lg-4 col-md-12 mb-5">
                    <div class="rounded">
                    <img class="rounded" src="images/necklace.jpg" alt="" style="width:100%;">
                    </div>
            </div>
       
        </div>

        <div class="row  g-5">
            <div class="col-lg-4 col-md-12 mb-5">
                    <div class="rounded">
                    <img class="rounded" src="images/pendant.jpg" alt="" style="width:100%;">
                    </div>
            </div>
            <div class="col-lg-8 col-md-12 mb-5">
                    <h1 class="py-2">The ultimate guide to pick the right diamond Pendant</h1>
                   <p>
                     Jewelry is transformative in every sense. It not only uplifts your look but also your confidence too, 
                     especially when you see everyone else in the room eyeing your sparkling bauble....
                   </p>
                     <a href="{{asset('right_diamond_pendant')}}"><button class="px-4 py-2 my-2 blog-btn" >Read more</button></a>

            </div>
       
        </div>

       <div class="row  g-5">
            
            <div class="col-lg-8 col-md-12 mb-5">
                    <h1 class="py-2">How to select the right bangle or bracelet </h1>
                   <p>
                     Bangles are one of the oldest accessories that have been discovered in ruins of ancient
                      Mayan, Russian, Viking, South Asian, Roman, Greek and African civilizations....
                   </p>
                     <a href="{{asset('right_bangle_bracelet')}}"><button class="px-4 py-2 my-2 blog-btn" >Read more</button></a>

            </div>
            <div class="col-lg-4 col-md-12 mb-5">
                    <div class="rounded">
                    <img class="rounded" src="images/educationthumb4.jpg" alt="" style="width:100%;">
                    </div>
            </div>
       
        </div>

</div>
</body>
</html>