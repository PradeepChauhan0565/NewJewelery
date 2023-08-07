<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  display: inline-block;
  cursor: pointer;
}

.bar1, .bar2, .bar3 {
  width: 30px;
  height: 4px;
  background-color: #333;
  margin: 7px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}
</style>
</head>
<body>

<p style="background-color: #00263a">Click on the Menu Icon to transform it to "X":</p>
<div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<img src="{{asset('https://img.freepik.com/premium-vector/3d-red-advertising-bestseller-sticker-3d-vector-product-advertising-sale-banner-badge_476325-96.jpg?w=740')}}" alt="">
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>

</body>
</html>
