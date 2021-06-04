
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
            <i class="fa fa-university" onclick="showMenu()"></i>
        </nav>
        <h1>Apply Now</h1>
      

    </section>
<!-------------------------------apply now----------------------------->

<div class="panic">
        <div class="progress-container">
         <div class="progress" id="progress"></div>
         <div class="circle active">1</div>
         <div class="circle active">2</i></div>
         <div class="circle active">3</i></div>
         <div class="circle active">4</i></div>
     </div>
    </div>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="Enter your name" required>
                <input type="email" placeholder="password" required>
                <input type="text" placeholder="confirm password" required>
            </form>
        </div>
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="National ID/Number" required>
                <input type="email" placeholder="Age" required>
            </form>
        </div> 
    </div>
</section>
 <div class="panic">

        <button class="btn2" id="prev" disabled>Prev</button>
        <button class="btn2" id="next">Next</button>

 </div>


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



 <script src="app.js"></script>

</body>
</php>