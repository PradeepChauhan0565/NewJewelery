<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentddd @yield('title')</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
   


    <style>
      .snow_wrap{
        height:100vh;
        width:100%;
        background:url(images/banner.jpg);
        background-size:cover;
        position: relative;
        background-position:center bottom;
        overflow: hidden;        
      }
      .snow, .snow:after, .snow:before{
        content: '';
          position: absolute;
          top:-650px;
          left:0;
          right:0;
          bottom:0;
          background-image:
          radial-gradient(10px 10px at 100px 50px, #fff, transparent),
          radial-gradient(6px 6px at 200px 100px, #fff, transparent),
          radial-gradient(3px 3px at 300px 250px, #fff, transparent),
          radial-gradient(4px 4px at 400px 50px, #fff, transparent),
          radial-gradient(6px 6px at 500px 100px, #fff, transparent),
          radial-gradient(3px 3px at 600px 250px, #fff, transparent),
          radial-gradient(4px 4px at 700px 350px, #fff, transparent),
          radial-gradient(6px 6px at 500px 450px, #fff, transparent),
          radial-gradient(4px 4px at 50px 550px, #fff, transparent),
          radial-gradient(6px 6px at 150px 650px, #fff, transparent),
          radial-gradient(3px 3px at 350px 750px, #fff, transparent);
          background-size: 650px 650px;
          animation: snowAnim 3s linear;
           animation-iteration-count: infinite;
      }

      .snow:after{
        margin-left:-250px;
        opacity: 0.5;
        filter:blur(2px);
        animation-direction:reverse;
        animation-duration: 6s;
      }
      .snow:before{
        margin-left: -350px;
        opacity: 0.7;
        filter:blur(1px);
        
        animation-direction:reverse;
        animation-duration: 9s;
      }

      @keyframes snowAnim{
        form{
        transform: translateY(0);
      }
      to{
        transform: translateY(650px);

      }
    }
  .modalimg{
      background-image: url("images/popupimg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-origin: content-box;
     
    }


     .cookanimation{animation:moveToleft 1s ease-in-out;
                animation-delay: 20ms;
             }
 
             @keyframes moveToleft{
                 0%{
                     transform: translateX(-600px);
                 }
                 100%{
                     transform: translateX(0px);
                 }
             }
             


             .pop-btn{
        border: 2px solid #00263a;
        background-color: #00263a; 
        color:white;
        cursor:pointer;
      }
      .pop-btn:hover{
        background-color: white;
        color:#00263a;
        
      }





/* ------------left popup modal css-------- */
      .right .modal-dialog,
.left .modal-dialog {
  transition: transform .25s ease-out;
  position: fixed;
  margin: auto;
  height: 100%;
}
.modal.right .modal-content,
.modal.left .modal-content {
  overflow-y: auto;
  border-radius: 0;
  border: none;
  height: 100%;
}
.right .modal-dialog {
  transform: translateX(50px);
  right: 0;
}
.left .modal-dialog {
  transform: translateX(-50px);
  left: 0;
}








/* ------------cookies css-------- */

p {
  margin: 15px 0;
  line-height: 2;
}

.wrapper {
  padding: 32px;
}

.cookie-container {
  position: fixed;
  bottom: -100%;
  left: 0;
  right: 0;
  background: #00263a;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}

.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #fff;
  border: 0;
  color: #00263a;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}







  .css-paqnyd::before {
    bottom: -40px;
    left: 50%;
    border: solid transparent;
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(27, 250, 7, 0);
    border-bottom-color: #00263a;
    border-width: 40px;
    margin-left: -40px;
}

  .css-paqnyd::after {
    top: 20px;
    left: 50%;
    border: solid transparent;
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(27, 250, 7, 0);
    border-bottom-color: #00263a;
    border-width: 40px;
    margin-left: -40px;
    transform: rotateY(180deg);
}

    </style>
</head>
<body>

 
 @section('title', '| Your Luxury Jewelry Store | Evolving Since 1996')

<!-- HTML to write -->
<a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a>

<!-- Generated markup by the plugin -->
<div class="tooltip bs-tooltip-top" role="tooltip">
  <div class="arrow"></div>
  <div class="tooltip-inner">
    Some tooltip text!
  </div>
</div>

    <div class="container">
  <h3>Popover Example</h3>
    <a href="#" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Click me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<div class="container">
  <h3>Popover Example</h3>
  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
</div>

 <!-- Drawer Style Left Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leftModal">
            Drawer Style Left Modal
        </button>        
        <div class="modal left" id="leftModal" tabindex="-1" aria-labelledby="leftModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm w-100">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="leftModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalimg">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Sign up and receive 10% off your first order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-white">Sign up and receive 10% off your first order</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  subscribe
</button>

{{-- 
<div class="modal fade rounded" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content  " >
                           <div class="" style="background-color: rgba(233, 223, 223, 0.8);">
                            <button  type="button" class="close  d-flex justify-content-end p-3 " data-dismiss="modal" aria-label="Close" >
                                <span aria-hidden="true" style=" color:#00263a; font-size:34px;">&times;</span>
                            </button>
                        </div>
          <div style="background-color: rgba(233, 223, 223, 0.8);">
              
                <div class="modal-body d-flex justify-content-center align-items-center py-5 " style=" color:#00263a;">

                      <div class="text-center px-2">
                       
                          <img src="images/kama-logo-blue.png" alt="" style="width: 260px;">
                          <h2 class="px-5 my-5">Sign up and receive 10% off your first order</h2>
                          <form action="">
                               <div class="d-flex justify-content-center">
                                  <div class="col-7 ">
                                     <input class="px-3 py-1 my-2 w-100" type="text" placeholder="Email" style=" color:#00263a;">
                                     <button class=" py-1 my-4 w-100" style=" color:#00263a; border:none;">Continue</button>
                                  </div>
                               </div>
                                
                          </form>
                      </div>
                </div>
          </div>

    
    </div>
  </div>
</div> --}}

{{-- 
<div class="cookanimation position-fixed bottom-0 left-0"  style="z-index: 999;">
    <div class="row">
  <div class="col-md-8 col-lg-5" style=" background: linear-gradient(rgba(0,0,0,0.2),#00263a );">
      <div class="p-4">
           <h4 style="color:#fff;">Our cookies</h4>
        <p style="text-align: justify; color:white;">
        We'd like to set analytics cookies to help us improve our website by collecting
         and reporting information on how you use it. 
        For more detailed information about the cookies we use, see our Cookie policy.
        </p>

        <button style="background-color: #00263a; color:#fff;">Accept Cookies</button>
      </div>
  </div>
</div>
</div> --}}




      <div>
        <div class="snow_wrap">
                      <div class="snow">

                  </div>
        </div>
      </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-md-new">Large modal</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-md-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <img src="images/popupimg.jpg" alt="" style="width: 100%;">
            </div>
            <div class="col-6  d-flex justify-content-center align-items-center position-relative" style=" color:#00263a;">
                
                <div class="">
                  
           
                  <div>
                      <div  class="text-center my-4 "><h1 >Sign up and receive 10% off on your first order</h1></div>
                          <form action="">
                               <div class="d-flex justify-content-center">
                                  <div class="col-9 ">
                                     <input class="px-3 py-1 my-2 w-100" type="text" placeholder="Email address " style=" color:#00263a;">
                                     <button class="pop-btn py-1 my-4 w-100">Continue</button>
                                  </div>
                               </div>
                                
                          </form>
                  </div>
                </div>
                 <div class="position-absolute " style="top:0; right:0;">
                    <button type="button" class="close px-4 py-2" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="d-flex justify-content-end ">
        <button type="button" class="close px-3 py-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <img src="images/popupimg.jpg" alt="" style="width: 100%;">
            </div>
            <div class="col-6  d-flex justify-content-center align-items-center" style=" color:#00263a;">
                  <div>
                      <div  class="text-center my-4 px-2"><h2 >Sign up and receive 10% off your first order</h2></div>
                          <form action="">
                               <div class="d-flex justify-content-center">
                                  <div class="col-8 ">
                                     <input class="px-3 py-1 my-2 w-100" type="text" placeholder="Email address " style=" color:#00263a;">
                                     <button class="pop-btn py-1 my-4 w-100">Continue</button>
                                  </div>
                               </div>
                                
                          </form>
                  </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>  --}}


<!-- 
<div class="row">
    <div class="col-4">
        
<div class="">
  <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a><br>
  <button class="btn btn-primary my-3" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button><br>
  <button class="btn btn-primary my-3" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</div>
    </div>
    <div class="col-8">
    
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
</div>
    </div>
</div>    

    -->




<div class="container">
        <div class="row justify-content-center " style="padding-top: 200px; ">
            <div class="col col-lg-7 text-center " >
                <div class="p-4" style="border:2px solid #00263a;">
                        <!-- <img class="mb-4 " src="images/kama-logo-blue.png" alt="" style="width: 310px;"> -->
                    <div>
                      <img class="rounded" src="images/THANK YOU final.jpg" alt="" style="width:100%;">
                    </div>
                      <div style="color:#00263a;">
                            <h2 class="my-4">Welcome to Kama Family</h2>
                            <P class="my-4">Thank you for making our day by signing up to receive our emails. We hope you enjoy
                              opening them as much as we enjoy making them.
                            </P>
                            <p class="my-4">
                              Now, you'll always be in the know about new arrivals , trending and best selling products.
                              Plus you'll  be the frist to know about exclusive promotions and offers.
                            </p>
                                            <p class="my-4">
                              In the meantime, be sure to check out our website to see whats new an browse
                              bestsellers loved by other members like you! 
                            </p>

                                  <div style="border-top:2px solid #00263a; border-bottom:2px solid #00263a;padding-top: 8px;padding-bottom: 8px;">
                             <a href=""><img src="images/SHOP NOW.png" alt=""></a>
                                          </div>
                            <h3 class="mt-3">Stay Tuned with Us!</h3>
                            
                  

                                <div  style="color:#00263a; display:flex; justify-content:center;align-items:center;margin-top:15px; margin-bottom:15px;">
                                    <a href=""><img src="images/1.png" alt="" style="width: 60px;"></a>
                                    <a href=""><img src="images/2.png" alt=""style="width: 60px; "></a>
                                    <a href=""><img src="images/3.png" alt=""style="width: 60px; "></a>
                                    <a href=""><img src="images/4.png" alt=""style="width: 60px;"></a>
              
                                </div>

                                  <p class="my-2" style="font-size:12px;"> &nbsp;
                                      If you want to unsubscribe to our newsletter click here <button  style="border:none; color:#00263a;"><u>Unsubscribe</u></button>.
                                    </p>
                                   
                            </div>
                                <h5 class="my-4">Kama Jewelry, @2023</h5>
                                
                                  
                                       
                                    
                               
                      </div>
              
              </div>

          
          </div>

</div>

<div class="position-relative mb-5" style="background-color: #00263a;">
  <span class="css-paqnyd">
       hello
  </span>
 

</div>



 <div class="cookie-container">
      <h4 style="font-size: 24px; text-align:justify">Our cookies</h4>
      <p>
        We use cookies to make your experience of our websites better. By using and further navigating 
        this website you accept this detailed information about the use of cookies on this website.
      </p>

      <button class="cookie-btn">
        Accept
      </button>
    </div>

<script>
 const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

</script>
</body>
</html>