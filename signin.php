<?php include('php/headertemp.php'); ?>
<!--page-content-->
<div class="page-content">
    <div class="signin-container">
        <div class="signin-title">
            <h1>Let's get started now!</h1>
            <h4>or <a href="signup.php">create an account</a> if not registered yet</h4>
       </div>
       <div class="signin-box">
         <div class="signin-logo-box">
            <span><i class="material-icons">lock</i></span>
         </div>
         <div class="signin-form-container">
              <div class="login-error">
                    <?php
                    if (isset($_GET['auth']))
                    {
                      $auth = $_GET['auth'];
                      if ($auth == 0)
                      {
                          echo "<h6 style='color:red;'>The account sign-in was incorrect or your account is disabled temporarily.</h6>";
                      }
                    }
                      
                    ?>  
              </div>
            <form class="signin-form" name="signinform" action="php/validation.php" onsubmit="return validateSignInForm()" method="POST">
              <h4>Email</h4> 
              <input type="email" name="email" placeholder="example@gmail.com" required /> 
              <h4>Password</h4>
              <input type="password" name="pass" required/>
              <div id="signin-pass-msg" style="color: red;"></div>
              <label class="container">Remember Me
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <a class="forgot-pass" href="">Forgot Password?</a>
              <input type="submit" value="Login" />
            </form>
         </div>
       </div> 
     </div> 
   </div>
<!--End of page content-->
<?php include('php/footertemp.php'); ?>