
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
        .star_rating{
            user-select: none;
        }
.star{
    font-size: 3rem;
    color: #00263a;
    background-color: unset;
    border: none
}
.star:hover{
    cursor: pointer;
}
    </style>
</head>

<body>
    <div class="container">
<div class="mt-5">
            <button style="background-color:#00263a; color:white; padding:8px 10px;" id="reviewbtn"> <i class="fa-solid fa-pen "></i>&nbsp; &nbsp;Write A Review</button>
                 <hr>
                 <div class="row reviewform" >
                     <div class="col-lg-6 my-2">
                        <form action="">
                            <div class="text-center"><h5 class="my-2">WRITE A REVIEW</h5></div>
                                <lable >Score</lable>
                                     <div class="d-flex star_rating mt-2 mb-3">
                                         <div class="star">&#9734;</div>
                                         <div class="star">&#9734;</div>
                                         <div class="star">&#9734;</div>
                                         <div class="star">&#9734;</div>
                                         <div class="star">&#9734;</div>
                                       
                                     </div>
                                     <lable>Title </lable><br>
                                     <input class="mt-2 mb-3 py-1 px-2 w-100" type="text" ><br>
                                     <lable>Review </lable><br>
                                     <textarea class="mt-2 mb-3 py-1 px-2 w-100" name="" id="" cols="30" rows="4"></textarea>
                                    <lable>   Image </lable>
                                        <input class="mt-2 mb-3 py-1 px-4 w-100" type="file" style="border:1px solid #00263a;">
                                    <lable>   Use your name </lable>
                                        <input class="mt-2 mb-3 py-1 px-4 w-100" type="text" >
                                    <lable>   Email </lable>
                                        <input class="mt-2 mb-4 py-1 px-2 w-100" type="text" >
                                        
                                <div class="text-center mb-4">
                                    <button style="background-color:#00263a; color:white; padding:8px 20px;">POST</button>
                                </div>
                        </form>
                     </div>
                 </div>
            </div>
        </div>

        
           <script>
            const allStars=document.querySelectorAll('.star');
            allStars.forEach((star,i) => {
                star.onclick=function(){
                    let current_star_level=i+1;
                    allStars.forEach((star, j)=>{
                        if(current_star_level>=j+1){
                            star.innerHTML='&#9733';
                        }
                        else{
                            star.innerHTML='&#9734';
                        }
                    })
                }
            });
            </script>
            </body>
            </html>