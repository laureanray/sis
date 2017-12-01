
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Administrator</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
                <h1 class="branding-text"> PUP <span id="gray"> SIS </span> <div id="small"> admin</div> </h1>
            </div>
            <nav class="nav-main" >
                <ul>
                    <li>
                     
                        <a href="index.php"> Home </a>
                        <a class="login" href="login.php?type=student"> Students </a>
                      
                        <a href="login.php?type=faculty"> Faculty </a>
                        <a class="current-link" href="admin.php?page=status"> Admin </a>
                        
                        <a href="#"> FAQ </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="admin">
        <div class="admin-nav">
            <div class="container">
                <nav>
                    <ul>
                    <?php session_start(); 
                            if(!isset($_SESSION['username'])){
                            echo "eraera";
                            header("Location: login.php?type=administrator");
                            }
                            if(isset($_GET['logout'])){
                            $_SESSION['username'] = null;
                            $_SESSION['password'] = null;
                            header("Location: index.php");  
                            }
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];


                           

                            switch($page){
                            case 'status':
                                        echo "  <li>
                                        <a href='admin.php?page=status' class='selected'>Status</a>
                                    </li>
                                    <li>
                                        <a href='admin.php?page=addstud'>Add Student</a>
                                    </li>
                                    <li>
                                        <a href'admin.php?page=remove'>Remove Student</a>
                                    </li>
                                    <li>
                                        <a href='admin.php?page=update'>Update</a>
                                    </li>   
                                    <li>
                                        <a href='admin.php?page=server'>Server</a>
                                    </li>
                                    <li>
                                        <a href='admin.php?logout=true'>Log Out</a>
                                    </li>";
                                        break;
                            case 'addstud':
                                    echo "  <li>
                                    <a href='admin.php?page=status' >Status</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=addstud' class='selected'>Add Student</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=remove'>Remove Student</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=update'>Update</a>
                                    </li>   
                                    <li>
                                    <a href='admin.php?page=server'>Server</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?logout=true'>Log Out</a>
                                    </li>";
                                    break;
                             case 'remove':
                                    echo "  <li>
                                    <a href='admin.php?page=status' >Status</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=addstud'>Add Student</a>
                                    </li>
                                    <li>
                                    <a href'admin.php?page=remove' class='selected'>Remove Student</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=update'>Update</a>
                                    </li>   
                                    <li>
                                    <a href='admin.php?page=server'>Server</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?logout=true'>Log Out</a>
                                    </li>";
                                    break;
                            case 'update':
                                    echo "  <li>
                                    <a href='admin.php?page=status' >Status</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=addstud'>Add Student</a>
                                    </li>
                                    <li>
                                    <a href'admin.php?page=remove'>Remove Student</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=update' class='selected'>Update</a>
                                    </li>   
                                    <li>
                                    <a href='admin.php?page=server'>Server</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?logout=true'>Log Out</a>
                                    </li>";
                                    break;
                                case 'server':
                                    echo "  <li>
                                    <a href='admin.php?page=status' >Status</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=addstud'>Add Student</a>
                                    </li>
                                    <li>
                                    <a href'admin.php?page=remove'>Remove Student</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?page=update'>Update</a>
                                    </li>   
                                    <li>
                                    <a href='admin.php?page=server' class='selected'>Server</a>
                                    </li>
                                    <li>
                                    <a href='admin.php?logout=true'>Log Out</a>
                                    </li>";
                                    break;
                                default:
                                die("Error");

                            }
                            }
                            else{
                                die("awd");
                            }
                           
                            ?>
                      
                       
                        <li>
                                <form action="search.php" method="post">
                                        <input type="text" placeholder="Search">
                                    </form>
                        </li>
                        
                      
                            
                       
                    </ul>
                </nav>
            </div>
        </div>
        <div class="admin-dashboard">
            <div class="status-wrapper">
                <div class="status"></div>
            </div>
            <div class="add-student-wrapper">
                <div class="container">
                <div class="add-student">
                    <form class="addform" action="" method="post">
                      
                           <h4 class="label-form"> Personal Information </h5>
                            <div class="separator-maroon"></div>
                            <h5 class="label-form-small"> Name </h5>
                        <input class="short" type="text" placeholder="Last Name">
                        <input class="short" type="text" placeholder="First Name" >
                        <input class="short"type="text" placeholder="Middle Name" >
                        <input class="shorter" type="text" placeholder="Suffix"> <br>
                        <select class="select-long" name="bday_month" id="1">
                            <option value="January"> January </option>
                            <option value="February"> February </option>
                            <option value="March"> March </option>
                            <option value="April"> April </option>
                            <option value="May"> May </option>
                            <option value="June"> June </option>
                            <option value="July"> July </option>
                            <option value="August"> August </option>
                            <option value="September"> September </option>
                            <option value="October"> October </option>
                            <option value="November"> November </option>
                            <option value="December"> December </option>
                        </select>
                        <h5 class="label-form-small"> Date of Birth </h5>
                        <input class="normal-input-short" type="text" name="bday_day" required />
                        <select class="select-short" name="bday_year" id="bday_year" required >
                                
                                <option value="2003" id="options">2003</option>
                                <option value="2002" id="options">2002</option>
                                <option value="2001" id="options">2001</option>
                                <option value="2000" id="options">2000</option>
                                <option value="1999" id="options">1999</option>
                                <option value="1998" id="options">1998</option>
                                <option value="1997" id="options">1997</option>
                                <option value="1996" id="options">1996</option>
                                <option value="1995" id="options">1995</option>
                                <option value="1994" id="options">1994</option>
                                <option value="1993" id="options">1993</option>
                                <option value="1992" id="options">1992</option>
                                <option value="1991" id="options">1991</option>
                                <option value="1990" id="options">1990</option>						
                                <option value="1989" id="options">1989</option>
                                <option value="1988" id="options">1988</option>
                            </select>
                            <h5 class="label-form-small"> Place of Birth </h5>
                            <input class="long" type="text" placeholder="Place of birth">
                            <h5 class="label-form-small"> Age </h5>
                            <input class="long" type="text" placeholder="Age">
                            <h5 class="label-form-small"> Gender </h5>
                            <input type="radio" name="sex" value="male" required > Male  <input type="radio" name="sex" value="male" required > Female
                            <h5 class="label-form-small"> Nationality </h5>
                            <input type="radio" name="sex" value="male" required > Filipino  <input type="radio" name="sex" value="male" required > Others    
                            <h5 class="label-form-small"> Residential Address </h5>

                            (Residential) Region   
                             <select class="select-short" name="residential_region"  id="selectorRegion" required >   
                             <option value="ncr" id="ncr">NCR</option>
                                <option value="car" id="car">CAR</option>                    
                                <option value="region1" id="region1">REGION I (Ilocos Region)</option>
                                <option value="region2" id="region2">REGION II (Cagayan Valley)</option>
                                <option value="region3" id="region3">REGION III</option>
                                <option value="region4a" id="region4a">REGION IV-A</option>
                                <option value="region4b" id="region4b">REGION IV-B</option>
                                <option value="region5" id="region5">REGION V</option>
                                <option value="region6" id="region6">REGION VI</option>
                                <option value="region7" id="region7">REGION VII</option>
                                <option value="region8" id="region8">REGION VIII</option>
                                <option value="region9" id="region9">REGION IX</option>
                                <option value="region10" id="region10">REGION X</option>
                                <option value="region11" id="region11">REGION XI</option>
                                <option value="region12" id="region12">REGION XII</option>
                                <option value="region13" id="region13">REGION XIII</option>						
                              
                                <option value="armm" id="armm">ARMM</option>
                        </select>


                        <select class="select-short" name="residential_region" id="reg1" required >
                                <option value="2003" id="options">Ilocos Norte</option>
                                <option value="2002" id="options">Ilocus Sur</option>
                                <option value="2001" id="options">La Union</option>
                                <option value="2000" id="options">Panagasinan</option>
                        </select>

                        <select class="select-short" name="residential_region" id="reg2" required >
                                <option value="2003" id="options">Batanes</option>
                                <option value="2002" id="options">Cagayan</option>
                                <option value="2001" id="options">Isabela</option>
                                <option value="2000" id="options">Nueva Vizcaya</option>
                                <option value="2000" id="options">Quirino</option>
                        </select>

                        <select class="select-short" name="residential_region" id="reg3" required >
                                <option value="2003" id="options">Aurora</option>
                                <option value="2002" id="options">Bataan</option>
                                <option value="2001" id="options">Bulacan</option>
                                <option value="2000" id="options">Nueva Ecija</option>
                                <option value="2000" id="options">Pampanga</option>
                                <option value="2000" id="options">Tarlac</option>
                                <option value="2000" id="options">Zambales</option>
                        </select>
                        
                        <select class="select-short" name="residential_region" id="reg4a" required >
                                <option value="2003" id="options">Batangas</option>
                                <option value="2002" id="options">Cavite</option>
                                <option value="2001" id="options">Laguna</option>
                                <option value="2000" id="options">Quezon</option>
                                <option value="2000" id="options">Rizal</option>
                        </select>

                        <select class="select-short" name="residential_region" id="reg4b" required >
                                <option value="2003" id="options">Marinduque</option>
                                <option value="2002" id="options">Occidental Mindoro</option>
                                <option value="2001" id="options">Oriental Mindoro</option>
                                <option value="2000" id="options">Palawan</option>
                                <option value="2000" id="options">Romblon</option>
                        </select>
                        
                        <select class="select-short" name="residential_region" id="reg5" required >
                                <option value="2003" id="options">Albay</option>
                                <option value="2002" id="options">Camarines Norte</option>
                                <option value="2001" id="options">Camarines Sur</option>
                                <option value="2000" id="options">Catanduanes</option>
                                <option value="2000" id="options">Masbate</option>
                                <option value="2000" id="options">Sorsogon</option>
                        </select>

                        <select class="select-short" name="residential_region" id="reg6" required >
                                <option value="2003" id="options">Aklan</option>
                                <option value="2002" id="options">Antique</option>
                                <option value="2001" id="options">Capiz</option>
                                <option value="2000" id="options">Guimaras</option>
                                <option value="2000" id="options">Iloilo</option>
                        </select>



                       


                         
                           </div>
                         

                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
            <div class="container">
                <div class="footer-wrapper">
                        <h1 class="branding-text"> PUP <span id="gray"> SIS </span> <div id="small"> admin</div> </h1>
                    <p class="copyright"> Polytechnic University of the Phiippines Student Information System &copy; 2017 All Rights Reserved</p>
                </div>
            </div>
        </footer>
    
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>


</html>