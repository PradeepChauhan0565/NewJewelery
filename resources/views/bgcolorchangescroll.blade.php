<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #newcolor {
            transition: background 1.5s ease;
            position: fixed;
            z-index: 999;
            padding: 100px 0;
        }
    </style>
</head>

<body>


    <div id="newcolor">
        Hello World
    </div>



    <script>
        var bod = document.getElementById("newcolor");
        window.onscroll = function(event) {
            var scroll = window.pageYOffset;
            if (scroll > 200) {
                bod.style.backgroundColor = 'purple';
            } else {
                bod.style.backgroundColor = 'white';
            }
        }
    </script>
</body>

</html>
