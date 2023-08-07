<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box{
        position: relative;
        width: 750px;
        height: 500px;
        background-color: rgb(243, 189, 189); */
        border-radius: 8px;
        overflow: hidden;
       /* margin: auto; */ 
    }
    .box::before{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
         width: 750px;
        height: 500px;
        /* inset: -10px 50px; */
        background: linear-gradient(0deg,transparent,#00263a,#00263a);
        /* transition: 1.5s; */
        animation: animate 6s linear infinite;
        transform-origin:bottom right;
    }

     .box::after{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
         width: 750px;
        height: 500px;
        /* inset: -10px 50px; */
        background: linear-gradient(0deg,transparent, #00263a,#00263a);
        /* transition: 1.5s; */
        animation: animate 6s linear infinite;
        transform-origin:bottom right;
        animation-delay: -3s;
    }
    /* .box:hover::before{
        inset: -20px 0px;
    } */
    @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    .wrapper{
    
        position: absolute;
        inset: 5px;
        background: #feebe4;
        border-radius: 8px;
        z-index: 10;
    }


		


    </style>
</head>
<body>
    <div class="container">
                <div class="box">
                  <div class="wrapper" > 
                    Frequently Asked Questions
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, id! Distinctio eum pariatur quibusdam molestiae ut incidunt excepturi consectetur totam odit, et veniam dignissimos debitis dolore nam? Explicabo, blanditiis quisquam?
                    </p>
                  </div>
                </div>
    </div>
</body>
</html>