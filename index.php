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
             <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
    </section>


    <section class="index"> 

        <div class="text-box">
            <h1>Welcome to Monsters University</h1>
            <p>Dream BIG never let anyone tell you You're not SCARY cause every dream begins somehow</p>
            
            
            
        </div>   

    </section>
<!------------------courses----------------------------------------->
<section class="course">
    <h2> Courses We Offer</h2>
    <p>Depending on how much money you have We can offer you diffrent level of courses</p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
        </div>
        <div class="course-col">
            <h3>Post Graduate</h3>
            <p>msh 3arfa akteb eh hna awy fa hasebha kda l 7ad ma akhalas el tutorial</p>
        </div>
    </div>

</section>
<!-------------campus---------------->
<section class="fac">
    <h2>Our Facilities</h2>
    <p>Let us give you a Virtual Tour around PIXAR's best campus and probably the best campus ever</p>
    <div class="row">
        <div class="fac-col">
            <img src="images/library.jpg">
            <h3>Library</h3>
            <p>it is rare to see someone actually studing there but you can</p>
        </div>
        <div class="fac-col">
            <img src="images/pixar-monsters-university-football.jpg">
            <h3>Play Ground</h3>
            <p>Unlike the library you can make friends here!</p>
        </div>
        <div class="fac-col">
            <img src="images/foodcourt.png">
            <h3>Tastey and Healthy Food</h3>
            <p>we have invested on our food court more that we've spent on giving you a proper education, Bon Apetite </p>
        </div>
    </div>

</section>
<!----------------feedback---------------------------------------->
<section class="feedback">
    <h1>What our students said about us</h1>
    <p>They are paid actors</p>
    <div class="row">
        <div class="feedback-col">
            <img src="images/f361e30b86fee7661463bf331de5b1b1.jpg">
            <div>
                <p>I dont know what's worse spending 3 years in this dump or still having to go there for two more years</p>
                <h3>Unknown</h3>
            </div>
        </div>
        <div class="feedback-col">
            <img src="images/f361e30b86fee7661463bf331de5b1b1.jpg">
            <div>
                <p>I mean it is not that bad, i only had to go for 3 semesters then everything got shut down cause Covid</p>
                <h3>Unknown 2</h3>
            </div>
        </div>
    </div>
</section>
<!---------------------------enroll--------------------------------->
<section class="enroll">
    <h1>To start your miserable journey<h1></h1>
    <a href="applynow.php"class="hero-btn">APPLY NOW</a>

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