
<html>

<head>
    <link rel="stylesheet" href="Style.css">
</head>
    <title>Library Management System - User Login</title>
</head>
<body>
    <br><br><br>
    <center><h1>Library Management System </h1></center><br><br><br>
    <div class="container11">
        <h2>User Login</h2>
        <form id="login-form" action="#" method="POST">
            <div class="form-group1">
                <label for="email">User name:</label>
                <input type="text" id="email" name="u1" required>
            </div>
            <div class="form-group1">
                <label for="password">Password:</label>
                <input type="password" id="password" name="p1" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="register-link">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>
</body>
</html>



<?php     
session_start(); 
 if(isset($_POST["u1"]))
{
   $u=$_POST["u1"];
   $p=$_POST["p1"]; 
            setcookie("user",$u);

$con=mysql_connect("localhost","root","");
    if($con==false) 
        die("Error in connection.....");
    mysql_select_db("library");
   
$res=mysql_query("select * from user where username='$u' AND password='$p'");
    if($row=mysql_fetch_array($res))
            {
                $_SESSION['id16']=$row[0];
             header('location:found.php');
            }
         else 
            {
              echo("<script>");
              echo'alert("Invalid User-ID Password")';
              echo"</script>";
            }

}             
              
?>
