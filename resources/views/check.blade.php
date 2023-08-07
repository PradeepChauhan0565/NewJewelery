<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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









body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2>Image Modal</h2>
<p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
<p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>


            <div  class="col-lg-3 text-center position-relative" title="Kama Ring">
              <img id="myImg" src="images/kama_ring.jpg" alt="Kama Ring" style="width: 100%; height:100%; ">
              <a   href="{{asset('/single')}}"><button class="animat position-absolute " style="bottom:100px; left:80px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>
            </div>
            <div  class="col-lg-3 text-center position-relative" title="Kama Ring">
              <img id="myImg" src="images/kama_ring.jpg" alt="Kama Ring" style="width: 100%; height:100%; ">
              <a   href="{{asset('/single')}}"><button class="animat position-absolute " style="bottom:100px; left:80px;" title="See Details"><i class="fa-solid fa-plus"></i></button></a>
            </div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</body>
</html>
