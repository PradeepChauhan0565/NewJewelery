<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        .jumpcolorbody {
            position: relative;
        }

        .jumpcolor {
            position: absolute;
            /* background: linear-gradient(to top, #00263a 0%, #ccffff 100%); */
            background: linear-gradient(rgba(0, 0, 0, 0.6), #00263a);
            bottom: 0;
            left: 0;
            overflow: hidden;
            height: 0%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 1.5s;
        }

        .jumpcolorbody:hover .jumpcolor {
            height: 50%;
        }

        .showeffact {
            position: absolute;
            background: linear-gradient(rgba(0, 0, 0, 0.6), #00263a);
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
        }

        .neweffact {
            transition: 1s;
            height: 0px;
        }

        .efect:hover .neweffact {
            height: 100px;
        }
    </style>
</head>

<body>


    <div class="container my-5" style="color:#00263a">


        <div class="row g-4">


            <div class="col-lg-4">
                <div class="jumpcolorbody">
                    <img src="images/pressnew/ECOnomic times-10.jpg" alt="" style="width:100%; ">
                    <div class="jumpcolor px-2">
                        <div class="text-center">
                            <a href="https://economictimes.indiatimes.com">
                                <p class="text-white ">economictimes.indiatimes.com</p>
                            </a>
                            <a class=""
                                href="https://economictimes.indiatimes.com/industry/cons-products/fashion-/-cosmetics-/-jewellery/gem-jewellery-industry-seeks-abolition-of-import-duty-on-raw-material-for-lab-grown-diamonds-in-budget/articleshow/96828797.cms">
                                <h5 class="my-3 text-white">Gem, jewellery industry seeks abolition of import duty on
                                    raw material for lab-grown diamonds in Budget</h5>
                            </a>
                            <p style="font-size: 12px; color:white; ">Jan 11 2023</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="efect position-relative">
                    <img src="images/pressnew/ECOnomic times-10.jpg" alt="" style="width:100%; ">
                    <div class="showeffact ">
                        <div class="text-center">
                            <a href="https://economictimes.indiatimes.com">
                                <div class="text-white py-2" style="background-color: #00263a;">
                                    economictimes.indiatimes.com</div>
                            </a>
                            <div class="neweffact">
                                <p class="p-2 text-white">
                                    Gem, jewellery industry seeks abolition of import duty on raw material for lab-grown
                                    diamonds in Budget
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="border p-2">
                    <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="" style="width:100%;">
                    <h5 class="py-2">This nice Image</h5>
                    <p class="">Here are some of our latest collections that let you have a piece of wonder with
                        you!</p>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="border p-2">
                    <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="" style="width:100%;">
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="border p-2">
                    <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="" style="width:100%;">
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="border p-2">
                    <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="" style="width:100%;">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="footer_ham_small_container my-5" style="">
        <span class="footer_ham_small_copyright" style="">Copyright © {{ now()->year }} Web design GGB.</span>
    </div>
    <div class="footer_ham_small_container my-5" style="">
        <span class="footer_ham_small_copyright" style="">Copyright © {{ date('Y') }} Web design GGB.</span>
    </div>
    <a onclick="return confirm('Are you sure you want to unsubscribe?')" href="">hello</a>

    <button type="submit" class="btn btn-danger btn-sm"
        onclick="return confirm('are you sure you want to delete this post')">
        Delete
    </button>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr)">
        <div>dsjgnfg</div>
        <div>dsjgnfg</div>
        <div>dsjgnfg</div>
    </div>



    <div class="row">
        <div class="col-lg-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="Avatar"
                            style="width:100%;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="Avatar"
                            style="width:100%;height:300px;">
                    </div>
                </div>
            </div>
            <div>
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="Avatar"
                            style="width:100%;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <img src="images/T-HP-WhatIsNew-Desktop-GAL.webp" alt="Avatar"
                            style="width:100%;height:300px;">
                    </div>
                </div>
            </div>
            <div>
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
            </div>
        </div>
    </div>
    <style>
        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>
</body>

</html>
