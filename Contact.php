<?php
include_once 'header.php'; 
?>

    <section class = "subheader">
        <nav>
            <a href="index.php"><img src="images/output-onlinepngtools.png"></a>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-university" onclick="hideMenu()" ></i>  
            
                <ul>
                    <li><a href="index.php">HOME</a></li>
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
                    <?php 
                      if(isset($_SESSION["userUid"])){
                          echo "<li><a href='includes/logout.inc.php' >Log Out</a></li>";
                      }
                      else{
                        echo "<li><a href='login.php' >Log In</a></li>";
                        echo "<li><a href='signup.php' >Sign up</a></li>";
                      }
                      ?>
                </ul>
            </div>
            <i class="fa fa-university" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
      

    </section>
<!-------------------------------Contact us content----------------------------->
<section class="location"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.1760565618624!2d31.603787315116953!3d30.11777528185573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581dea54fc683b%3A0xfb58c4d6f97e0173!2sThe%20British%20University%20in%20Egypt!5e0!3m2!1sen!2seg!4v1621847533598!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>  
                <span>
                    <h5>Address-goes-in-here</h5>
                    <p>Rest of the address</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>  
                <span>
                    <h5>+2 010*******9</h5>
                    <p>Saturday to Thursday, 9AM to 4PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>  
                <span>
                    <h5>Admin@bue.edu.eg</h5>
                    <p>Email us</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="formHandler.php" method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your e-mail" required>
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn blue-btn">Send message</button>
            </form>




        </div>


    </div>
</section>


<!-------------------------------footer----------------------------->
<section class="footer">
    <h4>ABOUT US</h4>
    <p>beyb2o katbin kalam ktir melaza2 fi ba3d fi akher kol website fa olt a3ml zayahom</p>
    <div class="icon">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
</section>

<!---------------- JavaScript for toggle menu---------------------->

    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right="0";
        }

        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>

</body>
</php>