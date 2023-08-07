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

.track-btn{
        border: 2px solid #00263a;
        background-color: #00263a; 
        color:white;
        cursor:pointer;
      }
      .track-btn:hover{
        background-color: white;
        color:#00263a;
        
      }

    </style>
  </head>
  <body >
    <div class="container py-5 ">
    <div >
        <svg style="color:#00263a;" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="currentColor" d="M12 10L8 4.4L9.6 2h4.8L16 4.4L12 10m3.5-3.2l-1.2 1.7c2.2.9 3.7 3 3.7 5.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6c0-2.5 1.5-4.6 3.7-5.5L8.5 6.8C5.8 8.1 4 10.8 4 14a8 8 0 0 0 8 8a8 8 0 0 0 8-8c0-3.2-1.8-5.9-4.5-7.2Z"/></svg>
        <svg style="color:#00263a;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="currentColor"><path fill-rule="evenodd" d="M6.343 3.686A8.015 8.015 0 0 1 7.936 2.45a8.014 8.014 0 0 1 8.128 0a8.016 8.016 0 0 1 1.593 1.236L12 9.343L6.343 3.686ZM12 6.514L9.413 3.927a6.017 6.017 0 0 1 5.174 0L12 6.514Z" clip-rule="evenodd"/><path d="M2 12.658a9.98 9.98 0 0 1 3.692-7.76l1.423 1.424a8 8 0 1 0 9.77 0l1.423-1.424A9.98 9.98 0 0 1 22 12.658c0 5.522-4.477 10-10 10s-10-4.478-10-10Z"/></g></svg>
    </div>
        <div style="background-color:#f5f5f5;">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="p-5" style="background-color: #ffffff;"> 
                    <div class="text-center"><h3 style="color:#00263a;">Order Tracker</h3></div>
               <div class="my-5">
                    <div> <label for="" style="color:#00263a;">Email address</label></div>
                    <input class="w-100 px-4  py-2" type="email" placeholder="Email">
               </div>
                <div class="text-center mb-3">
                    <button class="py-2 px-4 track-btn">Ceck Order</button>
                </div>
                <div>
                    <p style="text-align:justify; color:#00263a;">IMPORTANT: Please note that this application will 
                        only provide tracking information for orders placed
                         beginning December 24, 2020.
                    </p>
                </div>
                </div>
            </div>
        </div>
        </div>
            <div class="row my-5">
                <div class="col-lg-3 mt-1" style="color:#00263a;"><h3>Reviews(9)</h3></div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12">
                                 <div class="d-flex my-3" style="color:#00263a;">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h6 style="color:#00263a;"> Best Jewelry </h6>
                                <span style="color:#00263a; opacity: 0.6;">1 March 2023</span>
                                <p style="text-align:justify; color:#00263a;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, libero 
                                    exercitationem cum, modi, possimus nemo obcaecati nihil reiciendis doloremque 
                                    aperiam dolores delectus non. At nulla nesciunt id fugiat officiis quae.

                                </p>
                                <hr>
                        </div>
                         <div class="col-12">
                                 <div class="d-flex my-3" style="color:#00263a;">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h6 style="color:#00263a;"> Best Jewelry </h6>
                                <span style="color:#00263a; opacity: 0.6;">1 March 2023</span>
                                <p style="text-align:justify; color:#00263a;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, libero 
                                    exercitationem cum, modi, possimus nemo obcaecati nihil reiciendis doloremque 
                                    aperiam dolores delectus non. At nulla nesciunt id fugiat officiis quae.

                                </p>
                                <hr>
                        </div>
                       
                    </div>
                </div>
             
            </div>
    </div>
  </body>
</html>