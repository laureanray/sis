<?php include "includes/header.php";

if(isset($_GET['type'])){
    $type = $_GET['type'];
    switch($type){
        case 'administrator':
        echo "<a href='./index.php'> Home </a>
        <a href='login.php?type=student'> Students </a>
        <a href='login.php?type=faculty'> Faculty </a>
        <a class='current-link' href='login.php?type=administrator'> Admin </a>";
        break;
    
        case 'faculty':
        echo "<a href='./index.php'> Home </a>
        <a href='login.php?type=student'> Students </a>
        <a class='current-link' href='login.php?type=faculty'> Faculty </a>
        <a href='login.php?type=administrator'> Admin </a>";
        break;
    
        case 'student':
        echo "<a href='./index.php'> Home </a>
        <a class='current-link' href='login.php?type=student'> Students </a>
        <a href='login.php?type=faculty'> Faculty </a>
        <a href='login.php?type=administrator'> Admin </a>";
        break;
    
        default:
        die();


}}
else{
    header("Location: index.php");
}


    
    

?>
                        
                        <a href="#"> FAQ </a>
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