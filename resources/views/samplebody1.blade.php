<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <style>
  
.animat
{
  display: flex;
align-items: center;
justify-content: center;

  height: 8px;
  width: 8px;
color: #fff;
font-size: 18px;
z-index: 10;
padding: 17px;
background: rgba(17, 5, 39, 0.3);
border-radius: 50%;
cursor: pointer;
position: relative;
}
.animat:before
{
content: '';
position: absolute;
border:5px solid #250e62;;
border-radius: 50%;
top: 0px;
left: 0px;
right: 0px;
bottom: 0px;
animation: animate 1.5s linear infinite;
opacity: 0;
}
.animat:after
{
content: '';
position: absolute;
border:8px solid rgb(10, 6, 55);
border-radius: 50%;
top: 0px;
left: 0px;
right: 0px;
bottom: 0px;
animation: animated 1.5s linear infinite;
opacity: 0;
animation-delay: .6s;
}
@keyframes animate
{
0%
{
transform: scale(.5);
}
50%
{
opacity: 1;
}
100%
{
transform: scale(1);
}
}
@keyframes animated
{
0%
{
transform: scale(.3);
}
50%
{
opacity: 1;
}
100%
{
transform: scale(0.5);
}
}
      /* animation */
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins";
} */
/* body {
  display: flex;
  justify-content: center;
  min-height: 100vh;
  align-items: center;
  background-color: #091921;
} */
.heading {
  color: #fff;
  text-align: center;
  font-size: 2em;
  margin: 2em 0;
}
.images {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1em;
  margin: 0 1em;
}
.images img {
  width: 100%;
  cursor: pointer;
  transition: 0.3s all ease;
}
.images img:hover {
  transform: scale(0.9);
}
.modal {
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
  z-index: 1;
  overflow: auto;
  opacity: 0;
  pointer-events: none;
}
.modalContent {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.modalImg {
  width: 80%;
  max-width: 700px;
}
.modalTxt {
  margin-top: 1em;
}
.close {
  position: absolute;
  top: 1em;
  right: 1.5em;
  font-size: 1.5em;
  cursor: pointer;
}
.modal.appear {
  opacity: 1;
  pointer-events: all;
}
.modal.appear .modalImg,
.modal.appear .modalTxt {
  animation: zoom 0.3s linear;
}
@keyframes zoom {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}
        </style>

</head>
<body>
    <div class="py-5" style="background-color: gray">
    <div class="container-1" >
        <div class="row h-50  g-2" >
      
          <div  class="col-lg-3 text-center position-relative" title="Kama Ring">
              <img  src="images/kama_ring.jpg" alt="Kama Ring" style="width: 100%; height:100%; ">
              <a href="{{asset('/single')}}"><button class="animat position-absolute top-60 left-28" title="See Details">+</button></a>
            </div>
          <div  class="col-lg-3 position-relative" title="Kama Earring">
              <img  src="images/kama_earring.jpg" alt="Kama Earring" style="width: 100%; height:100%; ">
              <a href="{{asset('/sample')}}"><button class="animat position-absolute top-50 left-20" title="See Details">+</button></a>

          </div>
          <div  class="col-lg-3 text-center position-relative" title="Kama Pendant">
              <img src="images/kama_pendent.jpg" alt="" style="width: 100%; height:100%; ">
              <a href="{{asset('/single')}}"><button class="animat position-absolute top-20 left-20" title="See Details">+</button></a>
              <a href="{{asset('/sample')}}"><button class="animat position-absolute top-60 left-40" title="See Details">+</button></a>


          </div>
          <div  class="col-lg-3 position-relative" title="Kama Necklace">
              <img src="images/kama_neclace.jpg" alt="" style="width: 100%; height:100%; ">
              <a href="{{asset('/sample')}}"><button class="animat position-absolute top-60 left-28">+</button></a>

          </div>

          
          <div class="col-lg-3 text-center" title="Kama Bangles">
            <img id="myImg"  src="images/kama_bangle.jpg" alt="" style="width: 100%; height:100%; ">
        </div>
        <div class="col-lg-3" title="Kama Bracelet">
            <img   src="images/Diamond Studs.jpg" alt="" style="width: 100%; height:100%; ">
        </div>
        <div class="col-lg-3 text-center">
            <img src="images/Diamond Studs.jpg" alt="" style="width: 100%; height:100%; ">
        </div>
        <div class="col-lg-3">
           <button> <img   src="images/Diamond Studs.jpg" alt="" style="width: 100%; height:100%; "></button>
        </div>
      
        </div>


        
      </div>
 </div> 
</body>
</html>