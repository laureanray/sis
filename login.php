<?php include "includes/header.php";

if(isset($_GET['type'])){
    $type = $_GET['type'];
    switch($type){
        case 'administrator':
        echo "<li><a href='./index.php'> Home </a></li>
        <li>  <a href='login.php?type=student'> Students </a> </li>
        <li> <a href='login.php?type=faculty'> Faculty </a> </li>
        <li> <a class='current-link' href='login.php?type=administrator'> Admin </a> </li>
          <li>  <a href='#'> FAQ </a> </li> ";
        break;
    
        case 'faculty':
        echo "<li> <a href='./index.php'> Home </a> </li>
        <li> <a href='login.php?type=student'> Students </a> </li>
        <li> <a class='current-link' href='login.php?type=faculty'> Faculty </a> </li>
        <li> <a href='login.php?type=administrator'> Admin </a> </li>
        <li>  <a href='#'> FAQ </a> </li> ";
        break;
    
        case 'student':
        echo " <li> <a href='./index.php'> Home </a> </li>
        <li> <a class='current-link' href='login.php?type=student'> Students </a> </li>
        <li> <a href='login.php?type=faculty'> Faculty </a> </li>
        <li> <a href='login.php?type=administrator'> Admin </a> </li>
        <li>  <a href='#'> FAQ </a> </li> ";
        break;
    
        default:
        die();


}}
else{
    header("Location: index.php");
}


    
    

?>
                        
                    
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="main-body">

        <div class="container">
            <?php
    
            switch($type){
                case 'administrator':
                include "includes/admin.php";
                break;

                case 'student':
                include "includes/student.php";
                break;

                case 'faculty':
                include "includes/faculty.php";
                break;
            

                default:
                die();

            }
            ?>
        </div>

    </section>
    <footer>
            <div class="container">
                <div class="footer-wrapper">
                        <h1 class="branding-text"> PUP <span id="gray"> SIS </span> </h1>
                    <p class="copyright"> Polytechnic University of the Phiippines Student Information System &copy; 2017 All Rights Reserved</p>
                </div>
            </div>
        </footer>
    
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>


</html>