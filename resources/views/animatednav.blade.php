<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navbar Menu Hover Effect</title>
    <style>
     
nav{
	position: relative;
	margin: 270px auto 0;
	width: 100%;
	height: 50px;
	background: #34495e;
	border-radius: 5px;
	font-size: 0;
	box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
}
nav a{
	font-size: 15px;
	text-transform: uppercase;
	color: white;
	text-decoration: none;
	line-height: 50px;
	position: relative;
	z-index: 1;
	display: inline-block;
	text-align: center;
}
nav .animation{
	position: absolute;
	height: 100%;
	/* height: 5px; */
	top: 0;
	/* bottom: 0; */
	z-index: 0;
	background: #a3f736;
  border-bottom: 5px solid rgb(255, 72, 0);
	border-radius: 5px;
	transition: all .5s ease 0s;
}
nav a:nth-child(1){
	width: 100px;
}
nav .start-home, a:nth-child(1):hover~.animation{
	width: 100px;
	left: 0;
}
nav a:nth-child(2){
	width: 110px;
}
nav a:nth-child(2):hover~.animation{
	width: 110px;
	left: 100px;
}
nav a:nth-child(3){
	width: 100px;
}
nav a:nth-child(3):hover~.animation{
	width: 100px;
	left: 210px;
}
nav a:nth-child(4){
	width: 160px;
}
nav a:nth-child(4):hover~.animation{
	width: 160px;
	left: 310px;
}
nav a:nth-child(5){
	width: 160px;
}
nav a:nth-child(5):hover~.animation{
	width: 160px;
	left: 470px;
}
nav a:nth-child(6){
	width: 120px;
}
nav a:nth-child(6){
	width: 120px;
}
nav a:nth-child(6):hover~.animation{
	width: 120px;
	left: 630px;
}

    .star img{
        width:50px;
        animation: stars 7s linear infinite;
    }
.star
{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    bottom: -50px;
}
@keyframes stars{
    0%{
        transform: translateY();
        opacity: 0;
    }
    25%{
      
        opacity: 1;
    }
    70%{
      
        opacity: 1;
    }
    100%{
        transform: translateY(-80vh);
        opacity: 0;
    }
}
.star img:nth-child(1){
    animation-delay: 1s;
}
.star img:nth-child(2){
    animation-delay: 3s;
}
.star img:nth-child(3.5){
    animation-delay: 2.5s;
}
.star img:nth-child(4){
    animation-delay: 3.5s;
}
.star img:nth-child(5){
    animation-delay: 2s;
}
.star img:nth-child(6){
    animation-delay: 4.5s;
}
.star img:nth-child(7){
    animation-delay: 1s;
}

.star img:nth-child(8){
    animation-delay: 4.5s;
}

.star img:nth-child(8){
    animation-delay: 2s;
}

.star img:nth-child(10){
    animation-delay: 3s;
}



    .circle {
  height: 24px;
  width: 24px;
  border-radius: 24px;
  background-color: black;
  position: fixed; 
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 99999999; /* so that it stays on top of all other elements */
}

    </style>
  </head>
  <body>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Blog</a>
      <a href="#">Portfolio</a>
      <a href="#">Contact</a>
      <a href="#">Services</a>
      <div class="animation start-home"></div>
    </nav>

  </body>


  <div class="star">
    <img src="images/dd.png" alt="">
    <img src="images/bd.png" alt="">
    <img src="images/dd.png" alt="">
    <img src="images/bd.png" alt="">
    <img src="images/dd.png" alt="">
    <img src="images/dd.png" alt="">
    <img src="images/bd.png" alt="">
    <img src="images/dd.png" alt="">
    <img src="images/dd.png" alt="">
    <img src="images/bd.png" alt="">
  </div>






  

  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>



    <script>const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#ffb56b",
  "#fdaf69",
  "#f89d63",
  "#f59761",
  "#ef865e",
  "#ec805d",
  "#e36e5c",
  "#df685c",
  "#d5585c",
  "#d1525c",
  "#c5415d",
  "#c03b5d",
  "#b22c5e",
  "#ac265e",
  "#9c155f",
  "#950f5f",
  "#830060",
  "#7c0060",
  "#680060",
  "#60005f",
  "#48005f",
  "#3d005e"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();
</script>
</html>
