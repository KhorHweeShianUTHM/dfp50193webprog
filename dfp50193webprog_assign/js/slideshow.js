var slideIndex = 0; // variable declaration and initialization
showSlides(slideIndex); // call function

function plusSlides(n) { // plusSlides(n) function
  showSlides(slideIndex += n);
}

function currentSlide(n) { // currentSlides(n) function
  showSlides(slideIndex = n);
}

function showSlides(n) { // showSlides(n) function
  // variable declaration
  var i; 
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) { // for loop
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) { // for loop (dot)
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}