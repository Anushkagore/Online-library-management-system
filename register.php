<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container1">
        <h1>Library Registration Form</h1>
        <form  method="post" action="register.php">
            Full Name:
            <input type="text" id="full_name" name="t1" required>
            
            Address:
            <textarea id="address" name="t2" required></textarea>
            
            Phone:
            <input type="text" id="phone" name="t3" required>
            
            Username:
            <input type="text" id="username" name="u1" required>
            
            Email:
            <input type="email" id="email" name="t4" required>
            
            Password:
            <input type="password" id="password" name="p1" required>
        
           
            <input type="submit" value="Register" name="submit">
            <a href="userlogin.php">back</a>
        </form>
    </div>
    
</body>


</html>
<?php
   if(isset($_POST["submit"]))
   {
    $name=$_POST["t1"];
    $addr=$_POST["t2"];
    $email=$_POST["t4"];
    $pno=$_POST["t3"];
    $u=$_POST["u1"];
    $p=$_POST["p1"];
     $con=mysql_connect("localhost","root","");
     if($con==false) 
         die("Error in connection...");
     mysql_select_db("library"); 
    $r=mysql_query("select max(id) from user");
    if($row=mysql_fetch_array($r))
    {
       $id1=$row[0]+1;
    }
    $res=mysql_query("insert into user values('$id1','$name','$addr','$pno','$email','$u','$p')");
     if($res==true)
     {
      echo("<script>");
      echo'alert("Account created successfully")';
      echo"</script>";
      } 
    
    }
?>
