<?php
include_once 'header.php'; 
?>

    <section class = "header">          
        <nav>
            <a href="index.php"><img src="images/output-onlinepngtools.png"></a>

           <div class="nav-links" id="navLinks">
              <i class="fa fa-bars" onclick="hideMenu()" ></i>  
        
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="applynow.php">APPLY NOW</a></li>
                  <li><a href="">COURSES</a>
                   <div class="submenu">
                      <ul>
                          <li><a href="intermediate.php">Intermediate</a></li>
                          <li><a href="undergrade.php">Degree</a></li>
                          <li><a href="postgrade.php">Post Graduate</a></li>
                      </ul> 
                   </div> 
                  </li>
                  <li><a href="jobs.php">JOBS</a></li>
                  <li><a href="Contact.php">CONTACT US</a></li>
             </ul>
         </div>
         <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        
</section>
    <section class = "body">          
          <div class="center">
             <h1>login</h1>
             <form action="includes/login.inc.php" method="post">

              <div class="txt_field">
                  <input type="text" name="username" required>
                  <span></span>
                  <label>username</label>
               </div>

               <div class="txt_field">
                 <input type="password" name="pass" required>
                 <span></span>
                 <label>password</label>
              </div>

            <div class="pass">Forgot password?</div>
            <input type="submit" name="submit" value="Login">
            <div class="signup">
            
            <!---------------error_messages ----------------->

            <?php
if(isset($_GET["error"])){
   
    if($_GET["error"] == "emptyinput"){
        echo "<p>Fill In all fields!</P>";
    }
    elseif($_GET["error"] == "wronglogin"){
        echo "<p>Wrong Login!</P>";
    }

}
?>


                Not a member,yet?<a href="signup.php">Signup</a>
            </div>
           </form>
          </div>
    </section>

    <section class="footer">
        <h4>FIND US</h4>
        <p>beyb2o katbin kalam ktir melaza2 fi ba3d fi akher kol website fa olt a3ml zayahom</p>
        <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>


</body>
</php>    