
  function validateSignInForm() {
  var $email = document.signinform.email.value;
  var $pass = document.signinform.pass.value;
  var $result = true;
  if ($pass.length < 5) {
    
    document.getElementById('signin-pass-msg').innerHTML = "Password is too short";
    $result = false;
  } else{
    document.getElementById('signin-pass-msg').innerHTML = "";
  }


  return $result;

}



  function validateSignUpForm() {


  var $fname = document.signupform.fname.value;
  var $lname = document.signupform.lname.value;
  var $email = document.signupform.email.value;
  var $pass = document.signupform.pass.value;
  var $cpass = document.signupform.cpass.value;
  var $dob = document.signupform.dob.value;
  var $gender = document.signupform.gender.value;
  var $address = document.signupform.address.value;
  var $result = true;


  if ($fname.length < 3) {
    
    document.getElementById('signup-fname-msg').innerHTML = "First name is too short";
    $result = false;
  } else{
    document.getElementById('signup-fname-msg').innerHTML = "";
  }


  if ($lname.length < 3) {
    
    document.getElementById('signup-lname-msg').innerHTML = "Last name is too short";
    $result = false;
  } else{
    document.getElementById('signup-lname-msg').innerHTML = "";
  }


  if ($pass.length < 5) {
    
    document.getElementById('signup-pass-msg').innerHTML = "Password is too short";
    $result = false;
  } else{
    document.getElementById('signup-pass-msg').innerHTML = "";
  }



  return $result;

}

  function validateSellForm(){


  var $fname = document.sellform.fname.value;
  var $lname = document.sellform.lname.value;
  var $country = document.sellform.country.value;
  var $city = document.sellform.city.value;
  var $company = document.sellform.company.value;  
  var $email = document.sellform.email.value;
  var $pass = document.sellform.pass.value;
  var $cpass = document.sellform.cpass.value;
  var $result = true;


  if ($fname.length < 3) {
    
    document.getElementById('sell-fname-msg').innerHTML = "First name is too short";
    $result = false;
  } else{
    document.getElementById('sell-fname-msg').innerHTML = "";
  }



  if ($lname.length < 3) {
    
    document.getElementById('sell-lname-msg').innerHTML = "Last name is too short";
    $result = false;
  } else{
    document.getElementById('sell-lname-msg').innerHTML = "";
  }

    if ($country.length < 3) {
    
    document.getElementById('sell-country-msg').innerHTML = "Country Name is too short";
    $result = false;
  } else{
    document.getElementById('sell-country-msg').innerHTML = "";
  }

      if ($city.length < 3) {
    
    document.getElementById('sell-city-msg').innerHTML = "City Name is too short";
    $result = false;
  } else{
    document.getElementById('sell-city-msg').innerHTML = "";
  }


  if ($pass.length < 5) {
    
    document.getElementById('sell-pass-msg').innerHTML = "Password is too short";
    $result = false;
  } else{
    document.getElementById('sell-pass-msg').innerHTML = "";
  }

  return $result;


  }


function showCategory(){
  document.getElementById('category_sidebar').style.marginLeft = "0";
  document.getElementById('screen_overlay').style.display = "block";
  document.getElementById('product-table').style.width = "70%";
  document.getElementById('product-table').style.marginLeft = "27.5%";

}


function hideCategory(){
  document.getElementById('category_sidebar').style.marginLeft = "-25%";
  document.getElementById('screen_overlay').style.display = "none";
   document.getElementById('product-table').style.width = "90%";
  document.getElementById('product-table').style.marginLeft = "5%";
}



// List View
function listView() {
  var col = document.getElementsByClassName("product-content-col");
  var image = document.getElementsByClassName("product-content-image");
   var product = document.getElementsByClassName("product");
   var name = document.getElementsByClassName("product-name");
   var price = document.getElementsByClassName("product-price");
   var cartbtn = document.getElementsByClassName("product-cartbtn");
   var description = document.getElementsByClassName("product-description");
  for ( var i = 0; i < col.length; i++) {
    col[i].style.width = "98%";
    col[i].style.height = "300px";
    image[i].style.width ="40%";
    image[i].style.height ="100%";
    product[i].style.marginTop = "0.5%";
    product[i].style.width = "98%";
    product[i].style.marginLeft = "1%";
    name[i].style.width = "60%";
     name[i].style.marginTop = "1%";
    price[i].style.width = "60%";
    cartbtn[i].style.width = "20%";
    cartbtn[i].style.marginLeft = "20%";

    description[i].style.display = "block";


  }

    document.getElementById("viewButton1").classList.add("active");
    if (document.getElementById("viewButton2").classList.contains("active")) {
      document.getElementById("viewButton2").classList.remove("active");
    }



}

// Grid View
function gridView() {
  var col = document.getElementsByClassName("product-content-col");
  var image = document.getElementsByClassName("product-content-image");
   var product = document.getElementsByClassName("product");
   var name = document.getElementsByClassName("product-name");
   var price = document.getElementsByClassName("product-price");
   var cartbtn = document.getElementsByClassName("product-cartbtn");
   var description = document.getElementsByClassName("product-description");
  for (var i = 0; i < col.length; i++) {
    
    col[i].style.width = "32%";
     col[i].style.height = "400px";
     image[i].style.width ="100%";
    image[i].style.height ="60%";
    product[i].style.marginTop = "2%";
    product[i].style.width = "96%";
    product[i].style.marginLeft = "2%";

    name[i].style.width = "100%"
     name[i].style.marginTop = "5%";
    price[i].style.width = "100%";
    cartbtn[i].style.width = "100%";
    cartbtn[i].style.marginLeft = "0%";

    description[i].style.display = "none";
  }


  document.getElementById("viewButton2").classList.add("active");
      if (document.getElementById("viewButton1").classList.contains("active")) {
      document.getElementById("viewButton1").classList.remove("active");
    }


}



// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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


  function chdp(display) {

    document.getElementById('product-dropdown').style.display = display;
    document.getElementById('product-btn').style.transition = "all 2s";
}   


   function readMore(){
    
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("btnReadMore");

      if (dots.style.display === "none") 
      {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      }
      else 
      {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      } 
    }   

    function displayTerms(){

      var terms = document.getElementById("terms");
      terms.style.display = "inline";       
    }


    function display(area){

      var $displayArea = document.getElementById("display-container");

      // displaying selected content to the container
      $displayArea.innerHTML = document.getElementById(area).innerHTML;

      var $links = document.getElementsByClassName("links");


      // removing all active class from the link buttons
       for (var i = 0; i < $links.length; i++) {
          if ($links[i].classList.contains("active")) {
            $links[i].classList.remove("active");
          }
       }


       // add active class to the clicked link button
       if(area=='personalDetails'){
         $links[0].classList.add("active");
       }
       if(area=='purchases'){
         $links[1].classList.add("active");
       }       
       if(area=='billing'){
         $links[2].classList.add("active");
       }       
       if(area=='settings'){
         $links[3].classList.add("active");
       }    
    }
