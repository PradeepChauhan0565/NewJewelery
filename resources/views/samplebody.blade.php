
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>


.animat
{
  display: flex;
align-items: center;
justify-content: center;

  height: 8px;
  width: 8px;
color: #fff;
font-size: 10px;
z-index: 10;
padding: 17px;
background: rgba(115, 45, 245, 0.3);
border-radius: 50%;
border:1px solid rgb(206, 182, 182);
cursor: pointer;
position: relative;
}
.animat:before
{
content: '';
position: absolute;
border:6px solid #250e62;;
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
    <div class="container" >
        <div class="row h-50  g-2" >
      
          <div  class="col-lg-3 text-center position-relative" title="Kama Ring">
              <img  src="images/kama_ring.jpg" alt="Kama Ring" style="width: 100%; height:100%; ">
              <a   href="{{asset('/single')}}"><button class="animat position-absolute " style="bottom:100px; left:80px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>
            </div>
          <div  class="col-lg-3 position-relative" title="Kama Earring">
              <img  src="images/kama_earring.jpg" alt="Kama Earring" style="width: 100%; height:100%; ">
              <a href="{{asset('/sample')}}"><button class="animat position-absolute " style="bottom:120px; left:80px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>

          </div>
          <div  class="col-lg-3 text-center position-relative" title="Kama Pendant">
              <img src="images/kama_pendent.jpg" alt="" style="width: 100%; height:100%; ">
              <a href="{{asset('/single')}}"><button class="animat position-absolute " style="top:80px; left:60px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>
              <a href="{{asset('/sample')}}"><button class="animat position-absolute"style="bottom:60px; left:140px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>


          </div>
          <div  class="col-lg-3 position-relative" title="Kama Necklace">
              <img src="images/kama_neclace.jpg" alt="" style="width: 100%; height:100%; ">
              <a href="{{asset('/sample')}}"><button class="animat position-absolute" style="bottom:50px; left:140px;"><i class="fa-solid fa-plus"></i></button></a>

          </div>

          
          {{-- <div class="col-lg-3 text-center" title="Kama Bangles">
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
        </div> --}}
      
        </div>


        
      </div>
 </div>



 <div class="container">
  <div class="heading">JavaScript Image Modal</div>
  <div class="images">
    <img src="https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="River" />
    <img src="https://images.unsplash.com/photo-1504700610630-ac6aba3536d3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Lake" />
    <img src="https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1100&q=80" alt="Mountains" />
    <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Hills" />
    <img src="https://images.unsplash.com/photo-1446329813274-7c9036bd9a1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Forest" />
  </div>
  <div class="modal">
    <span class="close"><i class="fas fa-times"></i></span>
    <div class="modalContent">
      <img src="" class="modalImg" />
      <span class="modalTxt"></span>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous" ></script>

 <script>
    const images = document.querySelectorAll(".images img");
const modal = document.querySelector(".modal");
const modalImg = document.querySelector(".modalImg");
const modalTxt = document.querySelector(".modalTxt");
const close = document.querySelector(".close");

images.forEach((image) => {
  image.addEventListener("click", () => {
    modalImg.src = image.src;
    modalTxt.innerHTML = image.alt;
    modal.classList.add("appear");

    close.addEventListener("click", () => {
      modal.classList.remove("appear");
    });
  });
});
    </script>








   </body>
</html>