<?php include('php/headertemp.php'); ?>
<!-- page content -->
<!-- Main Contents -->   
<div class="page-content">
   
  
   <div class="contact-container">

     <div class="contact-title">
       <h1>Get In Touch With Us</h1>
     </div>
     
     <div class="contact-row">
      <li class="contact-info-container">
          <span><i class="material-icons">info</i></span>
          <article id="storeinfo" style="text-align: center; margin-top: 50px;">			
              <h1 class="contact-head">Store information</h1>
              <h3 class="contact-head3" style="margin-top: 50px;">Call Us </h3>
              
              <p>Telephone:    6273757 </p>
              <p>Phone number: 57945433 </p>
              <h3 class="contact-head3">Email us</h3>
              <a href="mailto:kishanlall.kassinathdoss@umail.uom.ac.mu">Kishanlall Kassinathdoss</a></br>
              <a href="mailto:sarvesh.gungoo1@umail.uom.ac.mu">Sarvesh Gungoo</a>
          </article>
      </li>


     <li class="contact-box">
       <div class="contact-logo-box">
          <span><i class="material-icons">phone</i></span>
       </div>
       <div class="contact-form-container">
          <form class="contact-form" name="contactform" action="contact.php" method="POST">
              <!--
              <h4>First Name</h4>
                <input type="text" name="fname" placeholder="Your First Name" required />	
              <h4>Last Name</h4>
                <input type="text" name="lname" placeholder="Your Last Name" required />	
              <-->
              <h4>Please fill in the form below</h4>
              <div class="contact-fname">
                <h4>First Name</h4> 
                <input type="text" id="fname" required /> 
                <div id="contact-fname-msg" style="color: red;"></div>
              </div>
              <div class="contact-lname">
                <h4>Last Name</h4>
                <input type="text" id="lname" required /> 
                <div id="contact-lname-msg" style="color: red;"></div>
              </div>
              
              <div style="display:block;width:100%;height:100px;"></div>
            
              <h4>Email</h4> 
                <input type="email" id="email" placeholder="example@gmail.com" required /> 
              <h4>Subject</h4>
              <select id="subject">
                  <option value="Customer Service">Customer Service</option>
                  <option value="After Sales/Repair">After Sales/Repair</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Other">Other</option>
              </select></br>
              <h4>Message</h4>
          
            <textarea class="contact-textarea" id="message" required placeholder="Write your message" resizeable></textarea></br>
            <div id="contact-txtarea-msg" style="color: red;"></div>
              <input type="submit" value="Submit" onclick="return validateContactForm()"/>
          </form>
       </div>
     </li> 
     
     </div>

   </div> 


 </div>

    
<!--End Of Page-content-->
<?php include('php/footertemp.php'); ?>