<?php
include('php/headertemp.php');
?>
<!--Page-content-->
<script>
      window.addEventListener("load",function() {
       showSlides(slideIndex);
       myTimer = setInterval(function(){plusSlides(1)}, 4000);
      })
</script>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);
  </script>
   <ul class="header-search">
  <form action="products.html">
       <input type="text" placeholder="Search Here.." name="search" style="width:90%;">
       <button type="submit"><i class="material-icons" style="color: #1A535C;">search</i></button>
  </form>
          </ul>
     <div style="margin-top: 100px;" class="page-content">
       <!-- SlideShow -->   
      <!-- Slideshow container -->
<div class="slideshow-container" style="width:80%;margin-left:10%;padding-bottom:-25%;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images/slidepic1.jpg">
    <div class="slider-overlay"></div>
  </div>

  <div class="mySlides fade">
    <img src="images/slidepic2.jpg">
  </div>

  <div class="mySlides fade">
    <img src="images/slidepic3.jpg">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div id="slide-dots" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
       <!--End of SlideShow -->  

       
       <div class="banner">


        <!--Flash Sales Banner -->  

         <div class="banner-1">
           <div class="banner-1-title-container">
  <div class="banner-1-title"><h1>Flash Sales</h1></div>
  <div class="banner-1-viewbutton"><a href="">View More</a></div>
           </div>
           <div class="flashsales-content">
  <div class="flashsales-item"> 
    <div class="flashsales-image">
      <img src="images/slidepic1.jpg">
    </div>
  </div>  
  <div class="flashsales-item"> 
    <div class="flashsales-image">
      <img src="images/slidepic2.jpg">
    </div>
  </div>  
  <div class="flashsales-item"> 
    <div class="flashsales-image">
      <img src="images/slidepic3.jpg">
    </div>
  </div>  
  <div class="flashsales-item"> 
    <div class="flashsales-image">
      <img src="images/slidepic1.jpg">
    </div>
  </div>  
           </div>
         </div>

        <!--End of Flash Sales Banner -->


        <!--Featured Items Banner -->

          <div class="banner-1">
           <div class="banner-1-title-container">
  <div class="banner-1-title"><h1>Featured Items</h1></div>
  <div class="banner-1-viewbutton"><a href="">View More</a></div>
           </div>
           <div class="featured-content">
  <div class="featured-item"> 
    <div class="featured-image">
      <img src="images/slidepic3.jpg">
    </div>
  </div>  
  <div class="featured-item"> 
    <div class="featured-image">
      <img src="images/slidepic1.jpg">
    </div>
  </div>  
  <div class="featured-item"> 
    <div class="featured-image">
      <img src="images/slidepic2.jpg">
    </div>
  </div>  
  <div class="featured-item"> 
    <div class="featured-image">
      <img src="images/slidepic3.jpg">
    </div>
  </div>  
           </div>
         </div>


           
        <!--End of Featured Items Banner --> 


        <!--Popular Items Banner --> 

         <div class="banner-1">
           <div class="banner-1-title-container">
  <div class="banner-1-title"><h1>Popular Electronics</h1></div>
  <div class="banner-1-viewbutton"><a href="">View More</a></div>
           </div>
           <div class="popular-content">
  <div class="popular-item"> 
    <div class="popular-image">
      
      <img src="images/slidepic2.jpg">
    </div>
  </div>  
  <div class="popular-item"> 
    <div class="popular-image">
      
      <img src="images/slidepic3.jpg">
    </div>
  </div>  
  <div class="popular-item"> 
    <div class="popular-image">
      
      <img src="images/slidepic2.jpg">
    </div>
  </div>  
  <div class="popular-item"> 
    <div class="popular-image">
      
      <img src="images/slidepic1.jpg">
    </div>
  </div>  
           </div>
         </div>

        <!--End of Popular Items Banner --> 


       </div>
     	  
     </div>

  <!-- End Of Main Contents -->     
<!--End Of Page-content-->
<?php 
include('php/footertemp.php');
?>