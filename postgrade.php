<?php
include_once 'header.php'; 
?>

    <section class = "subheader">
        <nav>
            <!------3aya a7ot sort el logo-------->
            <a href="index.php"><img src="images/output-onlinepngtools.png"></a>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-university" onclick="hideMenu()" ></i>  
            
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

                    <?php 
                      if(isset($_SESSION["userUid"])){
                          echo "<li><a href='includes/logout.inc.php' >Log Out</a></li>";
                      }
                      else{
                        echo "<li><a href='login.php' >Log In</a></li>";
                        echo "<li><a href='signup.php' >Sign up</a></li>";
                      }
                      ?>

                    <li><a href="jobs.php">JOBS</a></li>
                    <li><a href="Contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa fa-university" onclick="showMenu()"></i>
        </nav>
        <h1>POST GRADE</h1>
    </section>
    <section class="intermediate">
        <h1>START YOUR LEARNING EXPEINCE NOW</h1>
        <p>you can find your dreams come true here with us</p>
         <div class="row">
            <div class="intermediate-col">
                <h3>CODING</h3>
                <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
                <a href=""class="apply-btn">APPLY NOW</a>
        </div>
        <div class="intermediate-col">
            <h3>DESIGN</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
            <a href=""class="apply-btn">APPLY NOW</a>
        </div>
        <div class="intermediate-col">
            <h3>LAW</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
            <a href=""class="apply-btn">APPLY NOW</a>
        </div>
        <div class="intermediate-col">
            <h3>ECONOMICS</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
            <a href=""class="apply-btn">APPLY NOW</a>
        </div>
    </section>

   


</section>

<!-------------------------------footer----------------------------->
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