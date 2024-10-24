<?php include('php/headertemp.php'); ?>

  <!-- Main Contents --> 
     
     <div class="page-content">

       <div class="signup-title">
          <h1>Welcome to Mr Gadget</h1>
       </div>
       <div class="signup-section">
       <ul>
       <li class="signup-container">

         <div class="signup-box">
           <div class="signup-logo-box">
              <span><i class="material-icons">how_to_reg</i></span>
           </div>

           <div class="signup-form-container">
            <h4 style="text-align: center; margin-bottom: 75px; margin-top: 0px;">Create your account by filling the form below</h4>
              <form class="signup-form" name="signupform" action="php/registration.php" onsubmit="return validateSignUpForm()" method="POST">

                <div class="signup-fname">
                    <h4>First Name</h4> 
                    <input type="text" name="fname" required /> 
                    <div id="signup-fname-msg" style="color: red;"></div>
                </div>
                <div class="signup-lname">
                    <h4>Last Name</h4> 
                    <input type="text" name="lname" required /> 
                    <div id="signup-lname-msg" style="color: red;"></div>
                </div>

                <div class="space" style="height: 87px;"></div>

                <h4>Email</h4> 
                <input type="email" name="email" placeholder="example@gmail.com" required /> 
                <div id="signup-email-msg" style="color: red;"></div>
                <h4>Password</h4>
                <input type="password" name="pass" required />
                <div id="signup-pass-msg" style="color: red;"></div>
                <h4>Confirm Password</h4>
                <input type="password" name="cpass" required />
                <div id="signup-cpass-msg" style="color: red;"></div>

                <div class="signup-dob">
                    <h4>Date Of Birth</h4>
                <input type="date" name="dob" required />
                <div id="signup-dob-msg" style="color: red;"></div>
                </div>
                <h4 style="display:block;width: 45%;float: right;">Gender</h4>
                <div style="float: left;margin-left: 10%" class="signup-gender">
                <input type="radio" id="male" name="gender" value="m" />
                <label for="male">Male</label>
                </div>
                <div style="float: right;" class="signup-gender">
                <input type="radio" id="female" name="gender" value="f" />
                <label for="female">Female</label><br> 
                </div>  
                <div id="signup-gender-msg" style="color: red;"></div>        

                <h4 style="display: block;float: left;">Address</h4>
                <input type="text" name="address" required />
                <div id="signup-address-msg" style="color: red;"></div>
               

                <label class="signup-policy">Read and Agree to <a href="privacypolicy.html">Privacy Policy</a>
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label><br>
                <input type="submit" value="Sign Up" />
                <a class="signin-link" href="signin.php">Already have an account? Sign In</a>
              </form>
              
           </div>
         </div> 

       </li> 

       <!--
       <li class="signup-separator"></li>
       <li class="signup-signin-container"></li>
     -->
      </ul>
      </div>

     </div>
     

  <!-- End Of Main Contents -->     
  <?php include('php/footertemp.php'); ?>