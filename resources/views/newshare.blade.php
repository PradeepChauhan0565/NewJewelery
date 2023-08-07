<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #share-container span {
            display: block;
            margin: 3rem auto;
            font-size: 50px;
            padding: 1rem;
            margin: 1rem;
        }

        #share-buttons i {
            font-size: 100px;
            margin: 20px;
        }

        .facebook {
            color: #3b5998;
        }

        .twitter {
            color: #55acee;
        }

        .linkedin {
            color: #0077b5;
        }

        .reddit {
            color: #cb2027;
        }

        .whatsapp {
            color: #25D366;
        }

        .telegram {
            color: #229ED9;
        }

        .facebook,
        .twitter,
        .linkedin,
        .reddit,
        .whatsapp,
        .telegram {
            opacity: 0.6;
        }

        .facebook:hover,
        .twitter:hover,
        .linkedin:hover,
        .reddit:hover,
        .whatsapp:hover,
        .telegram:hover {
            opacity: 0.9;
        }
    </style>

</head>

<body>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div id="share-buttons">

        <!-- facebook -->
        <a class="facebook" target="blank"><i class="fab fa-facebook"></i></a>

        <!-- twitter -->
        <a class="twitter" target="blank"><i class="fab fa-twitter"></i></a>

        <!-- linkedin -->
        <a class="linkedin" target="blank"><i class="fab fa-linkedin"></i></a>

        <!-- reddit -->
        <a class="reddit" target="blank"><i class="fab fa-reddit"></i></a>

        <!-- whatsapp-->
        <a class="whatsapp" target="blank"><i class="fab fa-whatsapp"></i></a>

        <!-- telegram-->
        <a class="telegram" target="blank"><i class="fab fa-telegram"></i></a>
        <a class="pinterest" target="blank"><i class="fab fa-pinterest"></i></a>

    </div>

    <script>
        const link = encodeURI(window.location.href);
        const msg = encodeURIComponent('Hey, I found this blog');
        const title = encodeURIComponent('10 points to incorporate in your 2023 social media strategy');

        const fb = document.querySelector('.facebook');
        fb.href = `https://www.facebook.com/share.php?u=${link}`;

        const twitter = document.querySelector('.twitter');
        twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}&hashtags=javascript,programming`;

        const linkedIn = document.querySelector('.linkedin');
        linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

        const reddit = document.querySelector('.reddit');
        reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

        const whatsapp = document.querySelector('.whatsapp');
        whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

        const telegram = document.querySelector('.telegram');
        telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;
        const pinterest = document.querySelector('.pinterest');
        pinterest.href = `https://www.pinterest.com/pin/create/button/?url=${link}&text=${msg}`;
    </script>
</body>

</html>
