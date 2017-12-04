<?php include "includes/header.php";

if(isset($_GET['type'])){
    $type = $_GET['type'];
    switch($type){
        case 'administrator':
        echo "<ul><li><a href='./index.php'> Home </a></li>
        <li>  <a href='login.php?type=student'> Students </a> </li>
        <li> <a href='login.php?type=faculty'> Faculty </a> </li>
        <li> <a class='current-link' href='login.php?type=administrator'> Admin </a> </li>
          <li>  <a href='#'> FAQ </a> </li> ";
        break;
    
        case 'faculty':
        echo "<ul><li> <a href='./index.php'> Home </a> </li>
        <li> <a href='login.php?type=student'> Students </a> </li>
        <li> <a class='current-link' href='login.php?type=faculty'> Faculty </a> </li>
        <li> <a href='login.php?type=administrator'> Admin </a> </li>
        <li>  <a href='#'> FAQ </a> </li> ";
        break;
    
        case 'student':
        echo "<ul> <li> <a href='./index.php'> Home </a> </li>
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
                        
                    
                        <div class="img-wrapper"> <img class="lg-passive" src="img/pup-lg.png" alt="">   </div>
                </ul>
            </nav>
        </div>
    </header>
    <section id="main-body" class="mbody">

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
            <br>
            <p class="copyright"> pup-sis-wannabe &copy; 2017 All Rights Reserved</p>
            <p class="copyright"> Laurean Ray S. Bahala</p> <br>
            <p class="copyright"> HTML5, CSS3, Jquery and PHP </p>
        </div>
    </div>
</footer>
    
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>


</html>