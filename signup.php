<?php
include_once 'header.php'; 
?>

    <section class = "header" style="min-height : 120vh;">          
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


    <section class = "body" >      

          <div class="center" style="margin-top: 8%; ">
             <h1>Sign Up</h1>
             <form action="includes/signup.inc.php" method="post">
             <div class="txt_field">
                  <input type="text" name="email" required>
                  <span></span>
                  <label>Email</label>
               </div>

               <div class="txt_field">
                  <input type="text" name="name" required>
                  <span></span>
                  <label>Name</label>
               </div>



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

              <div class="txt_field">
                 <input type="password" name="pass2" required>
                 <span></span>
                 <label>Repeat password</label>
              </div>



            <div class="pass">Forgot password?</div>
            <input type="submit" name="submit" value="Sign up">
            <div class="signup">


<!---------------error_messages ----------------->

            <?php
if(isset($_GET["error"])){
   
    if($_GET["error"] == "invaliduid"){
        echo "<p>Username invalid!</P>";
    }
    elseif($_GET["error"] == "invalidemail"){
        echo "<p>Email invalid! </P>";
    }
    elseif($_GET["error"] == "assworddonotmatch"){
        echo "<p>Passwords DON't match!</P>";
    }
    elseif($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong! Try again later!</P>";
    }
    elseif($_GET["error"] == "usernametaken"){
        echo "<p>Username already taken!</P>";
    }
    elseif($_GET["error"] == "none"){
        echo "<p>You have signed up! </P>";
    }

}
?>

               
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