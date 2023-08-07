<html ng-app="ionicApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Ionic Accordion</title>
   
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<style>

.container {
  margin: 0 auto;
  width: 100%;
}

.accordion .accordion-item {
  border-bottom: 1px solid #e5e5e5;
}
.accordion .accordion-item button[aria-expanded=true] {
  border-bottom: 1px solid #03b5d2;
}
.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}
.accordion button:hover, .accordion button:focus {
  cursor: pointer;
  color: #03b5d2;
}
.accordion button:hover::after, .accordion button:focus::after {
  cursor: pointer;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}
.accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
}
.accordion button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}
.accordion button .icon::before {
  display: block;
  position: absolute;
  content: "";
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion button .icon::after {
  display: block;
  position: absolute;
  content: "";
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}
.accordion button[aria-expanded=true] {
  color: #03b5d2;
}
.accordion button[aria-expanded=true] .icon::after {
  width: 0;
}
.accordion button[aria-expanded=true] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}




        .shop h1{
            border:1px solid black;
            color: black;
            padding: 5px;
            width: 150px;
            font-size:25px;
            border-radius: 0 0 60px;
        }

.shape {
  width:110px;
  height: 28px;
  background-color: #00263a;
  position: relative;
  
}
.shape:before {
  content: '';
  width: 107px;
  height: 26px;
  background: #fff;
  color:#00263a;
  display: block;
  position: absolute;
  padding: 0px 7px;
  top: 1px;
  left: 1px;
}
.shape, .shape:before {
  -webkit-clip-path: polygon(0% 0%, 100% 0, 89% 51%, 100% 100%, 0% 100%);
  clip-path: polygon(0% 0%, 100% 0, 89% 51%, 100% 100%, 0% 100%);
}

</style>
  </head>

  <body style="padding: 50px;">

<div class="shape" >
  <span style="position: absolute;top:0px; left:8px;">Best Seller</span>
</div>
<br>

    <div class="shop">
                    <h1>SHOPING </h1>
                </div>

     <div class="container">
  <h2>Frequently Asked Questions</h2>
  <div class="accordion">
    <div class="accordion-item">
      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Accordion Title</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Your Content Goes Here...</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"> Accordion Title</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Your Content Goes Here...</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Accordion Title</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Your Content Goes Here...</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Accordion Title</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Your Content Goes Here...</p>
      </div>
    </div>
    <div class="accordion-item">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Accordion Title</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>Your Content Goes Here...</p>
      </div>
    </div>
  </div>
</div>



<div class="divs">
    <div ><img src="images/Aniversary ring.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/BANNER final  3.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/Art.png" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/blog3image2.jpg" alt="" style="width:200px; height:100px;"></div>
    <div ><img src="images/blog3image5.jpg" alt="" style="width:200px; height:100px;"></div>
   
</div> 
<br>
<br>
<br>
 <a id="next" style="cursor: pointer;">next</a> &nbsp; &nbsp;

<a id="prev" style="cursor: pointer;">prev</a>  

    <script>
      const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));









$(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });
    
    $("#next").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div:visible").next().show().prev().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:first").show();
        }
        return false;
    });

    $("#prev").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").prev().show().next().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:last").show();
        }
        return false;
    });
});

    </script>
  </body>
</html>