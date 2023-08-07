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
      body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    /* background-color: #8c9eff; */
    background-repeat: no-repeat;
}



/* Icon progressbar */

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455a64;
    padding-left: 0;
    margin-top: 30px;
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0::before {
    font-family: FontAwesome;
    content: '\f10c';
    color: #fff;
}

#progressbar li::before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #c5cae9;
    border-radius: 50%;
    margin: auto;
    padding: 0;
}

/* Progressbar connector */
#progressbar li::after {
    content: '';
    width: 100%;
    height: 12px;
    background-color: #c5cae9;
    position: absolute;
    top: 16px;
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

#progressbar li.active::before,
#progressbar li.active::after {
    background-color: #00263a;
}

#progressbar li.active::before {
    font-family: FontAwesome;
    content: '\f00c';
}

/* .icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}*/

/* .icon-content {
    width: 20%;
}  */

/* @media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
} */
    </style>
  </head>
  <body>
    <div class="container px-1 px-md-4 py-5 mx-auto ">
      <div class="overflow-x-auto">
      <div class="text-center py-3"style="background-color: #00263a; color:white;">
        <h3 >Tracking Order No : 274678289</h3>
      </div>
      <div class="" style="border: 1px solid #00263a;">
        <div class="row d-flex justify-content-between px-5 py-5" >
          <div class="d-flex">
            <h5 style="color: #00263a;">
              ORDER
              <span class=" font-weight-bold" style="color: #00263a;">#YWSNWDAAW</span>
            </h5>
          </div>
          <div class="d-flex flex-column text-sm-right">
            <p class="mb-0" style="color: #00263a;">
              Expected Arrival : <span class="font-weight-bold">20 Feb 2023</span>
            </p>
            <p style="color: #00263a;">
              USPS <span class="font-weight-bold">2374723467163473124234</span>
            </p>
          </div>
        </div>
        <!-- Add class "active" to progress -->
        <div class="row d-flex justify-content-center ">
          <div class="col-12 ">
            <ul id="progressbar" class="text-center">
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="step0"></li>
              <li class="step0"></li>
            </ul>
            
          </div>
        </div>

         <div class="row justify-content-between px-4" style="color: #00263a;">
          <div class=" col-2 icon-content">
           <div class="py-2 text-center text-white" style="background-color: #00263a; font-size:24px;"> <i class="fa-solid fa-cart-shopping"></i></div>
              <p class="text-center">Order has been Processed</p>
          </div>
           <div class="col-2 icon-content">
           <div class="py-2 text-center text-white" style="background-color: #00263a; font-size:24px;"> <i class="fas fa-cog"></i></div>
              <p class="text-center">Order has been accepted by the factory</p>
          </div>
           <div class="col-2 icon-content">
           <div class="py-2 text-center text-white" style="background-color: #00263a; font-size:24px;"> <i class="fas fa-check-square"></i></div>
              <p class="text-center">Pieces are being handcrafted</p>
          </div>
           <div class="col-2 icon-content">
           <div class="py-2 text-center text-white" style="background-color: #00263a; font-size:24px;"><i class="fas fa-plane"></i></div>
              <p class="text-center">Order  has been shipped </p>
          </div>
           <div class="col-2 icon-content">
           <div class="py-2 text-center text-white" style="background-color: #00263a; font-size:24px;"><i class="fas fa-home"></i></div>
              <p class="text-center">Order has been delivered</p>
          </div>

        </div>

        <div class="row d-flex justify-content-between px-5 py-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
             Notify me when order is deliverd
            </label>
          </div>
          <button class="py-2 px-2 rounded" style="border: 1px solid #00263a; color:#00263a;">View Order Details</button>
        </div>
       
      </div>
    </div>
    </div>
  </body>
</html>