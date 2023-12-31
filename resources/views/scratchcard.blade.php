<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>

    <style>
.box, .content{width:400px;height:60px;}
.box{position:relative;overflow:hidden;margin:0 auto;}
.content{position: relative;overflow:hidden;text-align:center;background:#FFF;}
.mask{position:absolute;top:0;left:0;width:400px;height:60px;cursor: pointer;}
    </style>
</head>
<body>
    <div class="mx-auto my-10" style="width:90%;">
        <div class="grid grid-cols-4">
            <div>
                <img src="images/chill2.jpg" alt="">
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form name="BrowserSurvey" action="#">
  Browser: 
  Browser: <select name="browser" onchange="if($(this).val()=='customOption'){$(this).hide().prop('disabled',true);$('input[name=browser]').show().prop('disabled', false).focus();$(this).val(null);}">
    <option></option>
    <option value="customOption">[type a custom value]</option>
    <option>Chrome</option>
    <option>Firefox</option>
    <option>Internet Explorer</option>
    <option>Opera</option>
    <option>Safari</option></select><input name="browser" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=browser]').show().prop('disabled', false).focus();}">
  <input type="submit" value="Submit">
</form>


<!--
https://github.com/andreruffert/scratchie.js
-->

<div class="box">
<div class="content">
    <h1 class="py-4">Coupon code=3456789</h1>
</div>
<div class="mask"><canvas id="j-cvs"></canvas></div>
</div>
<div id="debug"></div>

<script>
    /*
author: kairyou
date: September 10, 2013
*/

var doc = document,
    cvs = doc.getElementById('j-cvs'), ctx,
config = {
    w: 400, h: 360
},
mouseDown = false;

var debug = function(msg){
    var obj = doc.getElementById('debug');
    obj.innerHTML += msg + '<br>';
}

function getLocalCoords(elem, ev) {
    var ox = 0, oy = 0;
    var first;
    var pageX, pageY;
    // currentTarget element.
    while (elem != null) {
        ox += elem.offsetLeft;
        oy += elem.offsetTop;
        elem = elem.offsetParent;
    }
    // fix,<=IE8
    if ("changedTouches" in ev) {
        first = ev.changedTouches[0];
        pageX = first.pageX;
        pageY = first.pageY;
    } else {
        pageX = ev.pageX;
        pageY = ev.pageY;
    }
    return { 'x': pageX - ox, 'y': pageY - oy };
}
function diffTransSize(cxt, threshold, callback){
    if (!'getImageData' in ctx) return; 
    threshold = threshold || 0.5;
    if (threshold >1 || threshold < 0) threshold = 1;
    var imageData = ctx.getImageData(0, 0, cvs.width, cvs.height),
        pix = imageData.data,
        pixLength = pix.length,
        pixelSize = pixLength*0.25;
    var i = 1, k, l=0;
    for (; i <= pixelSize; i++) { // 3, 7, 11 -> 4n-1
        if (0 === pix[4*i-1]) l++;
    };
    if (l>pixelSize * threshold) {
        callback.apply(ctx, [l]);
    };
}
function scratchLine(cvs, x, y, fresh) {
    ctx = cvs.getContext('2d');
    // sumsung Android 4.1.2, 4.2.2 default browser does not render, https://goo.gl/H5lwgo
    ctx.globalCompositeOperation = 'destination-out'; 

    ctx.lineWidth = 45;
    ctx.lineCap = ctx.lineJoin = 'round';
    ctx.strokeStyle = 'rgba(0,0,0,1)'; //'#000';
    if (fresh) {
        ctx.beginPath();
        // bug WebKit/Opera/IE9: +0.01
        ctx.moveTo(x+0.1, y);
    }
    ctx.lineTo(x, y);
    ctx.stroke();
    // fix sumsung bug
    var style = cvs.style; // cursor/lineHeight
    style.lineHeight = style.lineHeight == '1' ? '1.1' : '1';

    diffTransSize(ctx, 0.5, function() {
        document.getElementById('title').innerHTML ='50% complete';
    });
}
function setupCanvases() {
    cvs.width = config.w;
    cvs.height = config.h;
    var ctx = cvs.getContext("2d");
    // add mask
    ctx.fillStyle = '#00263a';
    ctx.fillRect(0, 0, cvs.width, cvs.height);
    // On mouse down
    var mousedown_handler = function(e) {
        var local = getLocalCoords(cvs, e);
        mouseDown = true;
        scratchLine(cvs, local.x, local.y, true);
        // debug('touchstart')
        if (e.cancelable) { e.preventDefault(); }
        return false;
    };
    // On mouse move
    var mousemove_handler = function(e) {
        // debug('touchmove')
        if (!mouseDown) { return true; }
        var local = getLocalCoords(cvs, e);
        // debug(local.x + ',' + local.y);
        scratchLine(cvs, local.x, local.y, false);

        if (e.cancelable) { e.preventDefault(); }
        return false;
    };
    // On mouseup
    var mouseup_handler = function(e) {
        // debug('touchend')
        if (mouseDown) {
            mouseDown = false;
            if (e.cancelable) { e.preventDefault(); }
            return false;
        }
        return true;
    };
    on(cvs, 'mousedown', mousedown_handler);
    on(cvs, 'touchstart', mousedown_handler);
    on(window, 'mousemove', mousemove_handler);
    on(window, 'touchmove', mousemove_handler);
    on(window, 'mouseup', mouseup_handler);
    on(window, 'touchend', mouseup_handler);
}
function on(E, N, FN){
    E.addEventListener ? E.addEventListener(N, FN, !1) : E.attachEvent('on' + N, FN);
}
setupCanvases();

</script>
</body>
</html>


