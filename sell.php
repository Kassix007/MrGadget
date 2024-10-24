<?php include('php/headertemp.php'); ?>
<!-- Main Contents -->  
     
<div class="sell-image-container">
      <div class="sell-image-overlay"><img src="images/slidepic2.jpg" alt="Sell With Us" style="width:100%; height: 300px;  opacity: 0.5;"></div>

       <div class="sell-image-text">Sell With Us</div>
     </div>

     <div class="sell-description-container">
        <h5>Mr Gadget is an online electronic Mauritius-based shop where you can buy and sell a variety of digital products and accessories at any time.</h5>
     </div>

     <div class="sell-parallax-container">

              <div class="space" style="height: 50px;"></div>

              <div class="sell-form-container">
        
                 <form class="sell-form" name="sellform" action="#" method="POST" onsubmit="return validateSellForm()">
                   <div class="space" style="height: 25px;"></div>
                   <h2 style="text-align: center; margin-bottom: 50px; color: #1A535C;">Fill in the form to collaborate with us</h2>

                <div class="sell-fname">
                    <h4>First Name</h4> 
                    <input type="text" name="fname" required /> 
                    
                </div>
                <div style="float: right;" class="sell-lname">
                    <h4>Last Name</h4> 
                    <input type="text" name="lname" required /> 
                    
                </div>
                <div class="space" style="height: 87px;"></div>
                <div id="sell-fname-msg" style="color: red;"></div>
                <div id="sell-lname-msg" style="color: red;"></div>

                <div class="sell-country">
                  <h4 style="display: block;float: left;">Country</h4>
                <input type="text" name="country" required/>
                <div id="sell-country-msg" style="color: red;"></div>
                </div>
                <div class="sell-city">
                  <h4 style="display: block;float: left;">City</h4>
                  <input type="text" name="city" required/>
                  <div id="sell-city-msg" style="color: red;"></div>
                </div>

                <div class="space" style="height: 87px;"></div>
                
                <h4>Email</h4> 
                <input type="email" name="email" placeholder="example@gmail.com" required />
                <div id="sell-email-msg" style="color: red;"></div> <br><br>
                <h4>Password</h4>
                <input type="password" name="pass" required/>
                <div id="sell-pass-msg" style="color: red;"></div>
                <h4>Confirm Password</h4>
                <input type="password" name="cpass" required/>
                <div id="sell-cpass-msg" style="color: red;"></div>

                <h4>Company Name</h4> 
                <input type="text" name="company" required /> 
                <div id="sell-company-msg" style="color: red;"></div>

                <label style="font-weight: bold; font-family: sans-serif;" for="category">Category</label>
                <select class="sell-category" name="category" id="category">
                  <option value="c1">Category 1</option>
                  <option value="c2">Category 2</option>
                  <option value="c3">Category 3</option>
                </select>
                    

                <label class="sell-policy">Read and Agree to <a href="privacypolicy.html">Privacy Policy</a>
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label><br>
                <input type="submit" value="Sign Up" />


                <div class="space" style="height: 50px;"></div>
               
              </form>

             </div> 

             <div class="space" style="height: 50px;"></div>

     </div>


  <!-- End Of Main Contents -->     
<?php include('php/footertemp.php'); ?>