<?php include "includes/header.php";

?>  
                  

                 
                    <li > <a href="#" class="current-link"> Home </a></li>
                    <li><a class="login" href="login.php?type=student"> Students </a></li> 
                    <li> <a href="login.php?type=faculty"> Faculty </a></li>
                    <li><a href="login.php?type=administrator"> Admin </a></li> 
                        
                     
                </ul>
              
            </nav>
        </div>
    </header>
    <section id="main-body">

        <div class="container">
        <div class="left">
            <div class="announcement"></div>
            <h2> Announcement </h2>
        </div>
        <div class="right">
            <h2>Twitter Feed</h2>
            <a class="twitter-timeline" data-width="250" data-height="300" href="https://twitter.com/ThePUPOfficial?ref_src=twsrc%5Etfw">Tweets by ThePUPOfficial</a>
             <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
        </div>
        </div>

    </section>
    <footer>
            <div class="container">
                <div class="footer-wrapper">
                <img src="img/pup.png" alt="" class="branding-img">
                        <h1 class="branding-text"> PUP <span id="gray"> SIS </span> </h1>
                    <p class="copyright"> Polytechnic University of the Phiippines Student Information System &copy; 2017 All Rights Reserved</p>
                </div>
            </div>
        </footer>
    
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>


</html>