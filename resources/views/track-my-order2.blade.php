<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 4.3.1 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- FontAwesome 4.7.0 CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

    <style>

/* Icon progressbar */

#progressbar {
    color: #455a64;
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0::before {
    content: '\f10c';
    color: #00263a;
}



/* Progressbar connector */
#progressbar li::after {
    content: '';
    width: 100%;
    height: 8px;
    background-color: #c5cae9;
    position: absolute;
    top:5px;
    left: 0;
    z-index: -1;
}

#progressbar li:last-child::after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2)::after,
#progressbar li:nth-child(3)::after,#progressbar li:nth-child(4)::after {
    left: -50%;
}

#progressbar li:first-child::after {
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: 50%;
}

/* Color number of the step and the connect tor before it */

#progressbar li.active::before,span.active,
#progressbar li.active::after {
    background-color: #00263a;
    color: #fff;
}

.icon {
    background-color: #c5cae9;
    color:#00263a;
}


    </style>
  </head>
  <body>
    <div class="container px-1 px-md-4 py-5 mx-auto ">
      <div class="" style="overflow-x: auto;">
      <div class="my-2 mx-auto"style="width:1060px;" >
      <div class="text-center py-3"style="background-color: #00263a; color:white;">
        <h3 >Tracking Order No : N/A</h3>
      </div>
      <div class="" style="border: 1px solid #00263a;">
        <div class="row d-flex justify-content-between px-5 py-4" >
          <div class="d-flex">
            <p style="color: #00263a;">
              <strong>Shipped Via : </strong>&nbsp; UPS Ground
            </p>
          </div>


          <div class="d-flex flex-column text-sm-right">
            <p class="mb-0" style="color: #00263a;">
             <strong> Expected Date :</strong> &nbsp; 28 Feb 2023
            </p>
          </div>
        </div>
        <!-- Add class "active" to progress -->
        <div class="row d-flex justify-content-center my-5">
          <div class="col-12 ">
            <ul id="progressbar" class="text-center">
              <li class="active step0 position-relative">
                <span class="position-absolute active icon" style="font-size:28px;  width:75px; height:75px; line-height:75px; border-radius:50%; bottom:-26px; left: 70px; border:1px solid gray;
                "><i class="fa-solid fa-cart-shopping "></i></span>
              </li>
              <li class="active step0 position-relative">
                <span class="position-absolute active icon" style="font-size:28px; width:75px; height:75px; line-height:75px; border-radius:50%; bottom:-26px; left: 70px; border:1px solid gray;
                "><i class="fas fa-cog"></i></span>
              </li>
               
              <li class="step0 position-relative">
                <span class="position-absolute icon" style="font-size:28px; width:75px; height:75px; line-height:75px; border-radius:50%; bottom:-26px; left: 70px; border:1px solid gray;
                "><i class="fas fa-plane"></i></span>
              </li>
              <li class="step0 position-relative">
                <span class="position-absolute icon" style="font-size:28px; width:75px; height:75px; line-height:75px; border-radius:50%; bottom:-26px; left: 70px; border:1px solid gray;
                "><i class="fa-solid fa-house-chimney"></i></span>
              </li>
            </ul>
            
          </div>
        </div>

        <div class="row justify-content-center px-4 mb-4" style="color: #00263a;">
          <div class=" col-3">
    
              <p class="text-center ">Order has been Placed</p>
          </div>
           <div class="col-3">
           
              <p class="text-center">Order is being Made</p>
          </div>
           <div class="col-3">

              <p class="text-center">Order has been shipped </p>
          </div>
           <div class="col-3">
           
              <p class="text-center">Order has been delivered</p>
          </div>

        </div> 

        <div class="row d-flex justify-content-between px-5 py-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Notify me when order is delivered
            </label>
          </div>
          <button class="py-2 px-2 rounded" style="border: 1px solid #00263a; color:#00263a;">View Order Details</button>
        </div>
          </div>
      </div>
    </div>
    </div>


   
  </body>
</html>