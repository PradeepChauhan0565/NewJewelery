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
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #00263a;
}
.nav-link {
    color: #00263a;
}
   
</style> 

</head>
<body>
    <div class="container my-5" style="color:#00263a">

           
            <div class="row justify-content-md-center justify-content-lg-center ">
                <div class="col-lg-7 text-center mb-2"><h1 style="font-size:36px"> Rewards & Referral Program</h1></div>
                
            </div>
           

           
    

        <div class="row  mb-4">
                <div class="col-12">
                        <p style="text-align:justify; color:#00263a;">
                          <a href="https://kamajewelry.com/register"> Register</a> with us and get access to EXCLUSIVE REWARDS
                            and EXCITING OFFERS and get ready to have a trendy collection in your wardrobe.
                        </p>
                        
                </div>
        </div>

         {{-- <div class="row  mb-4">
                <div class="col-12">
                    <h4 class="mb-3">
                       Type of Rewards
                    </h4>
                       <div class="px-4">
                            <h6 class="mb-3" style="text-align:justify; color:#00263a;">
                            Sign Up – 10% off
                            </h6>
                            <h6 class="mb-3" style="text-align:justify; color:#00263a;">
                            Refer a friend – 10% Off
                            </h6>
                            <h6 class="mb-3" style="text-align:justify; color:#00263a;">
                            Gift Card
                            </h6>
                       </div>
                        
                </div>
        </div>
      --}}
        


        <div class="row">
            <div class="d-flex align-items-start">
                    <div class="col-3 d-flex align-items-start nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                        <h2 class="mb-4" style="border-bottom:1px solid #00263a;"> Rewards</h2>
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Sign Up Reward </button>
                        <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Refer a friend</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Gift Card </button>
                    </div>
                        <div class="col-9 tab-content px-5" id="v-pills-tabContent" style="border-left:1px solid #00263a;">
                            
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                    
                                      <div class=" mb-4">
                                        <h2 class="pb-2" style="border-bottom:1px solid #00263a;"> 
                                            Sign Up Reward 
                                            </h2>
                                      </div> 
                                    <p style=" text-align:justify; color:#00263a;">
                                          Sign up and receive 10% off your first order. Additionally, stay updated about our latest collections,
                                           designs and offers! We welcome you wholeheartedly to our Kama Family.  
                                    </p>
                            </div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                    
                                
                                    <div class=" mb-4">
                                        <h2 class="pb-2" style="border-bottom:1px solid #00263a;">Refer a friend</h2>
                                      </div> 
                                    <p style=" text-align:justify; color:#00263a;">
                                        
                                         Hey,<br>
                                                Welcome to our Kama family. Let's share the happiness!<br>
                                        Refer your friends or family, and you both will get: 
                                    </p>
                                    <div class="px-4">
                                            <div class="d-flex">
                                             <div style=" color:#00263a;">&#10148;</div>
                                            <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                    $20 off on your order of $200 or more 
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                             <div style=" color:#00263a;">&#10148;</div>
                                            <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                $50 off on your order of $500 or more 
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                             <div style=" color:#00263a;">&#10148;</div>
                                            <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                $100 off on your order of $1000 or more 
                                            </p>
                                        </div>
                                    </div>

                                    <h4 class="mb-4">Terms & Conditions</h4>
                                     <div class="px-4">
                                        <div class="d-flex">
                                        <div>1 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                             You must be a registered user on our website.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div>2 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                             There is no limit to referring, you can refer as many as friends you want.
                                        </p>
                                    </div>
                                      <div class="d-flex">
                                        <div>3 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                            Your referral must be a new buyer who has never purchased from Kama Jewelry.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div>4 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                            If you have 2 discount codes, you can avail only 1 at a time.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <div>5 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                             This offer will not get combined with any other on-going offer/sale.
                                        </p>
                                    </div>
                                     <div class="d-flex">
                                        <div>6 .</div>
                                        <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                            This offer will not get clubbed with your gift card. (if any received) 
                                        </p>
                                    </div>
                                     </div>

                                </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                        
                                        <div class=" mb-4">
                                            <h2 class="pb-2" style="border-bottom:1px solid #00263a;">Gift Card </h2>
                                        </div> 
                                        <p style=" text-align:justify; color:#00263a;">
                          
                                               Not able to decide what to buy for your loved ones? 
                                               Give them a Gift Card and let them choose for themselves! 
                                        </p>
                                         <h4 class="mb-3">Terms & Conditions</h4>
                                     <div class="px-4">
                                                <div class="d-flex">
                                                <div>1 .</div>
                                                <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                    This gift card will be valid for 3 months from the date of purchase.
                                                </p>
                                            </div>
                                            
                                            <div class="d-flex">
                                                <div>2 .</div>
                                                <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                    This gift card can only be used for a purchase value higher than that of the gift card.
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <div>3 .</div>
                                                <p style="margin-left:10px; text-align:justify; color:#00263a;">
                                                    This gift card coupon is not transferable. 
                                                </p>
                                            </div>
                                     </div>


                            </div>
                           
                        </div>
            </div>
        </div>














       

   
        
     
     
    
        






    </div>

</body>
</html>