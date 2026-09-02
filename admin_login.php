    
<html>

<head>
    <link rel="stylesheet" href="Style.css">
</head>
    <title>Library Management System - Admin Login</title>
    
<body>
    <br><br><br>
    <center><h1>Library Management System </h1></center><br><br><br>
    <div class="container11">
        <h2>Admin Login</h2>
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
        
    </div>
</body>
</html>

<?php   
  if(isset($_POST["u1"]))
  {
    $p=$_POST["p1"];
 $u=$_POST["u1"]; 
 $con=mysql_connect("localhost","root","");
     if($con==false) 
         die("Error in connection...");
     mysql_select_db("library");
    
    $res=mysql_query("select * from admin where username='$u' AND password='$p'");
        if(mysql_fetch_array($res))
            {
              
            header('location:admin_dash.php');
              }
          else 
              {
            echo("<script>");
            echo'alert("Invalid User-ID Password")';
            echo"</script>";
                 }
 
                }             
               
      ?>
