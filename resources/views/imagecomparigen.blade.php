<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- ----------jquery------- --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container {
            position: relative;
            width: 100%;
            margin: 50px 0;

            .inner {
                position: relative;
                width: 100%;
                max-width: $maxWidth;
                margin: 0 auto;
                overflow: hidden;
                box-sizing: border-box;
                padding: 20px 30px;
                background-color: #EEE;
            }
        }

        .comparison-slider-wrapper {
            position: relative;
            width: 100%;
            margin: 20px 0;
            background-color: white;

            .comparison-slider {
                position: relative;
                width: 100%;
                margin: 0;
                border: 5px white solid;
                box-sizing: border-box;

                >img {
                    width: 100%;
                    height: auto;
                    display: block;
                }

                .overlay {
                    display: none;
                    position: absolute;
                    width: 250px;
                    bottom: 20px;
                    right: 20px;
                    background-color: rgba(0, 0, 0, 0.4);
                    padding: 10px;
                    box-sizing: border-box;
                    color: #DDD;
                    text-align: right;


                }

                .resize {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 50%;
                    overflow: hidden;

                    >img {
                        display: block;
                    }

                    .overlay {
                        right: auto;
                        left: 20px;
                        text-align: left;
                    }
                }

                .divider {
                    position: absolute;
                    width: 2px;
                    height: 100%;
                    background-color: rgba(256, 256, 256, 0.2);
                    left: 50%;
                    top: 0;
                    bottom: 0;
                    margin-left: -1px;
                    cursor: ew-resize;

                    &:before {
                        content: "";
                        position: absolute;
                        width: 20px;
                        height: 20px;
                        left: -9px;
                        top: 50%;
                        margin-top: -10px;
                        background-color: white;
                        transform: rotate(45deg);
                        transition: all 0.1s ease-in-out;
                    }

                    &:after {
                        content: "";
                        position: absolute;
                        width: 12px;
                        height: 12px;
                        left: -5px;
                        top: 50%;
                        margin-top: -6px;
                        background-color: rgb(240, 192, 192);
                        transform: rotate(45deg);
                        transition: all 0.1s ease-in-out;
                    }

                    &.draggable {
                        &:before {
                            width: 30px;
                            height: 30px;
                            left: -14px;
                            margin-top: -15px;
                        }

                        &:after {
                            width: 20px;
                            height: 20px;
                            left: -9px;
                            margin-top: -10px;
                            background-color: #555;
                        }
                    }
                }
            }


        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inner">

            <!-- COMPARISON SLIDER CODE START -->

            <div class="comparison-slider-wrapper">
                <!-- Comparison Slider - this div contain the slider with the individual images captions -->
                <div class="comparison-slider">
                    <div class="overlay">And I am the <strong>after</strong> image.</div>
                    <img src="images/User engagement.png" alt="marioPhoto 2">
                    <!-- Div containing the image layed out on top from the left -->
                    <div class="resize">
                        <div class="overlay">I am the <strong>before</strong> image.</div>
                        <img src="images/time and attention.jpg" alt="marioPhoto 1">
                    </div>
                    <!-- Divider where user will interact with the slider -->
                    <div class="divider"></div>
                </div>

            </div>

            <!-- COMPARISON SLIDER CODE END -->



        </div>
    </div>


    <script>
        $(document).ready(function() {

            // If the comparison slider is present on the page lets initialise it, this is good you will include this in the main js to prevent the code from running when not needed
            if ($(".comparison-slider")[0]) {
                let compSlider = $(".comparison-slider");

                //let's loop through the sliders and initialise each of them
                compSlider.each(function() {
                    let compSliderWidth = $(this).width() + "px";
                    $(this).find(".resize img").css({
                        width: compSliderWidth
                    });
                    drags($(this).find(".divider"), $(this).find(".resize"), $(this));
                });

                //if the user resizes the windows lets update our variables and resize our images
                $(window).on("resize", function() {
                    let compSliderWidth = compSlider.width() + "px";
                    compSlider.find(".resize img").css({
                        width: compSliderWidth
                    });
                });
            }
        });

        // This is where all the magic happens
        // This is a modified version of the pen from Ege Görgülü - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
        function drags(dragElement, resizeElement, container) {

            // This creates a variable that detects if the user is using touch input insted of the mouse.
            let touched = false;
            window.addEventListener('touchstart', function() {
                touched = true;
            });
            window.addEventListener('touchend', function() {
                touched = false;
            });

            // clicp the image and move the slider on interaction with the mouse or the touch input
            dragElement.on("mousedown touchstart", function(e) {

                //add classes to the emelents - good for css animations if you need it to
                dragElement.addClass("draggable");
                resizeElement.addClass("resizable");
                //create vars
                let startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
                let dragWidth = dragElement.outerWidth();
                let posX = dragElement.offset().left + dragWidth - startX;
                let containerOffset = container.offset().left;
                let containerWidth = container.outerWidth();
                let minLeft = containerOffset + 10;
                let maxLeft = containerOffset + containerWidth - dragWidth - 10;

                //add event listner on the divider emelent
                dragElement.parents().on("mousemove touchmove", function(e) {

                    // if the user is not using touch input let do preventDefault to prevent the user from slecting the images as he moves the silder arround.
                    if (touched === false) {
                        e.preventDefault();
                    }

                    let moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
                    let leftValue = moveX + posX - dragWidth;

                    // stop the divider from going over the limits of the container
                    if (leftValue < minLeft) {
                        leftValue = minLeft;
                    } else if (leftValue > maxLeft) {
                        leftValue = maxLeft;
                    }

                    let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth +
                        "%";

                    $(".draggable").css("left", widthValue).on("mouseup touchend touchcancel", function() {
                        $(this).removeClass("draggable");
                        resizeElement.removeClass("resizable");
                    });

                    $(".resizable").css("width", widthValue);

                }).on("mouseup touchend touchcancel", function() {
                    dragElement.removeClass("draggable");
                    resizeElement.removeClass("resizable");

                });

            }).on("mouseup touchend touchcancel", function(e) {
                // stop clicping the image and move the slider
                dragElement.removeClass("draggable");
                resizeElement.removeClass("resizable");

            });

        }
    </script>
</body>

</html>
