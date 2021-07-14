<!-- gallery page-->
@extends('layouts.gal')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  


</head>
<body>
  <br>
 
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://images.unsplash.com/photo-1546393009-ef37dc6dfd35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80" style="width:100%">
  <div class="text">Cupcake is love!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://images.unsplash.com/photo-1567022405855-fc2ce6befe33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" style="width:100%">
  <div class="text">Heart is where the cupcake is!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://images.unsplash.com/photo-1455731657401-43502b7c1ab9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width:100%">
  <div class="text">Live the sweet life!</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<!-- Gallery Body -->


<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1559989399-26708d80dca5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjIxfHxjaG9jb2xhdGUlMjBjdXBjYWtlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
    <img src="https://images.unsplash.com/photo-1559989399-26708d80dca5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjIxfHxjaG9jb2xhdGUlMjBjdXBjYWtlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Cupcakes</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1574281288303-1db1f0c78fb0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGNob2NvbGF0ZSUyMGN1cGNha2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
    <img src="https://images.unsplash.com/photo-1574281288303-1db1f0c78fb0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGNob2NvbGF0ZSUyMGN1cGNha2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Choco Cupcake</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1587668178538-c07606344e4f?ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
    <img src="https://images.unsplash.com/photo-1587668178538-c07606344e4f?ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Vanilla Cupcake</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1599785209770-3ea3cd883c37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=333&q=80">
    <img src="https://images.unsplash.com/photo-1599785209770-3ea3cd883c37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=333&q=80" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Strawberry Cupcake</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1611463979370-4eca78c4df91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
    <img src="https://images.unsplash.com/photo-1611463979370-4eca78c4df91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc"> Oreo Cupcake</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1558420724-303173478825?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80">
    <img src="https://images.unsplash.com/photo-1558420724-303173478825?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Vanilla Topping</div>
</div>
<div class="gallery">
  <a target="_blank" href="https://images.unsplash.com/photo-1584894781998-6b11134ed209?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80">
    <img src="https://images.unsplash.com/photo-1584894781998-6b11134ed209?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Honey Cupcake</div>
</div>









<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
@endsection