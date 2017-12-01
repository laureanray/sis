<div class="login-wrapper">
                <h1> Admin Login</h1>
                <?php include "db.php";
if(isset($_SESSION['username'])){
    header("Location: admin.php?page=status");
}
if(isset($_POST['submit'])){
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];
    // for protection
    $admin_username = mysqli_real_escape_string($connection, $admin_username);
    $admin_password = mysqli_real_escape_string($connection, $admin_password);

    $query = "SELECT * FROM administrators WHERE admin_username = '$admin_username'";
    $select_query = mysqli_query($connection, $query);

    if(!$select_query){
        die("Query Failed" . mysqli_error($connection));
    }

    // fetch the admin data if exist
    $return_count = mysqli_num_rows($select_query); 
    if($return_count == 0){
        echo("<div class='error-wrapper'><div class='error'><h4 class='err'> Username doesn't exist </h4></div></div>");
    }
    else{

        while($row = mysqli_fetch_array($select_query)){
            
                    $db_admin_id = $row['admin_id'];
                    $db_admin_username = $row['admin_username'];
                    $db_admin_password = $row['admin_password'];
                    $db_admin_fullname = $row['admin_fullname'];
            
                }
            
                //verify for the login
            if($admin_password == $db_admin_password){
                $_SESSION['username'] = $db_admin_username;
                $_SESSION['password'] = $db_admin_password;
                header("Location: admin.php?page=status");
            }
            else{
                echo "<div class='error-wrapper'><div class='error'><h4 class='err'> Incorrect Password </h4></div></div>";
            }
            

    }
  
}?>
                <form action="" method="POST" class="login">
                    <h3 class="label"> Username</h3>
                    <input class="normal-input-low" type="text" name="admin_username" required>
                    <h3 class="label" > Password</h3>
                    <input type="password" class="normal-input" name="admin_password" required>
                    <br>
                    <button name="submit"> Log In </button>
                </form>
            </div>