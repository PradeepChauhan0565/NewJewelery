
.rating{
poition:absolute;
top:50%;
left:50%;
transform:translate(-50%, -50%) rotateY(180deg);
display:flex;
}
.rating input{
display:none;
}
.rating lable{
display:block;
cursor:pointer;
width:50px;
bockground:green;
}
.rating lable:before{
content:'\f005';
font-family:fontAwesome;
position:relative;
display:block;
font-size:50px;
color:gray;
}
.rating lable:after{
content:'\f005';
font-family:fontAwesome;
position:absolute;
display:block;
font-size:50px;
color:#00263a;
top:0;
opacity:0;
transition:0.5s;
text-shadow:0 2px 5px rgba(0,0,0,0.5);
}
.rating lable:hover:after,
.rating lable:hover ~ lable:after,
.rating input:checked ~ lable:after{
opacity:1;
}



<div class="d-flex rating mt-2 mb-3">
                                         <input type="radio" name="star1"><lable fore="star1"></lable>
                                         <input type="radio" name="star2"><lable fore="star2"></lable>
                                         <input type="radio" name="star3"><lable fore="star3"></lable>
                                         <input type="radio" name="star4"><lable fore="star4"></lable>
                                         <input type="radio" name="star5"><lable fore="star5"></lable>
                                       
                                     </div>