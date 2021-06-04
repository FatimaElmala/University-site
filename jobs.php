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
                    <?php 
                      if(isset($_SESSION["userUid"])){
                          echo "<li><a href='includes/logout.inc.php' >Log Out</a></li>";
                      }
                      else{
                        echo "<li><a href='login.php' >Log In</a></li>";
                        echo "<li><a href='signup.php' >Sign up</a></li>";
                      }
                      ?>



                    <li><a href="Contact.php">CONTACT US</a></li>


                </ul>
            </div>
            <i class="fa fa-university" onclick="showMenu()"></i>
        </nav>
        <h1>Jobs</h1>
      

    </section>
<!-------------------------------Contact us content----------------------------->
<section>
    <div class="kalam">
        <h1>Job Discription</h1>
        <p>Your typical week would include Collaborating with engineers and product managers throughout our organization to understand the problems we want to solve, exploring how we can solve them, and what our users have said about the problems and solutions so far
            Discussing and collaboratively solving engineering problems with engineering collaborators in GitHub Issues and PRs, Slack, or Zoom
            Opening a Pull Request to implement the next most important task, or fix the most critical bug and resolving suggestions in your code reviews
            Responding to issues and review requests from other teams in our organization
            Reviewing your teammates’ Pull Requests and providing helpful feedback
            Share your experiences and opinions in our cycle meeting where we celebrate successes and strive to push our limits even further
            Working with your team leader in your one-on-one meetings to grow your team and career
        </p>
    </div>
</section>


<section class="contact-us">
    <h1>To Apply for this job</h1>
    <div class="row">
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="Enter your name" required>
                <input type="email" placeholder="Enter your e-mail" required>
                <input type="number" placeholder="Enter your phone number" required>
                <input type="file" placeholder="enter your cv" required>
                <textarea rows="8" placeholder="what will you add to our team" required></textarea>
                <button type="submit" class="hero-btn blue-btn">Send</button>
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