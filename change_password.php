<html>
 <head>
        <link rel="stylesheet" href="Style.css">
</head>
<body>

  <div class="ad">
  <div class="ad1">
    Books & Audiobook Panel 
  </div></div>
  <div class="all">
  <div class="dashbord">
  <div class="contant">
      <a href="admin_dash.php" class="vi">Dashbord</a>
    </div>
  <div class="contant">
      <a href="addaudiobook.php" class="vi">Add_AudioBook</a>
    </div>
    <div class="contant">
      <a href="addbook.php" class="vi">Add Book</a>
    </div>
    <div class="contant">
    <a href="change_password.php" class="vi">Change  password</a>
    </div>
    <div class="contant">
    <a href="contact_query.php" class="vi">Contact query</a>
    </div>
    <div class="contant">
    <a href="user.php" class="vi">User Record</a>
    </div>
    
    
    <a href="index.php" class="vi">
    <div class="contant">
      Log  Out</a>
    </div>
</a>
  </div>
  <div class="aaa">
  <center>
    <div class="container1111">
		<h2>Change Password</h2>
        <form method="post" action="#">
			<div class="form-group">
            Current Password
                <input type="password" id="password" name="oldp1" required placeholder="Enter Current Password :">
            </div>
            <div class="form-group">
            New Password
                <input type="password" id="password" name="np1" required placeholder="New Password :">
            </div>
            <div class="form-group">
            Confirm Password
                <input type="password" id="password" name="np2" required placeholder="Confirm Password :">
            </div>
           <center> <input type="submit" class="register-button" name="submit"></center>
        </form>
    </div>
</center>
</div>
</body>
</html>

<?php

 if(isset($_POST["submit"]))
 {
  $oldp=$_POST["oldp1"];
  $newp=$_POST["np1"];
  $conp=$_POST["np2"];

  if($newp!=$conp)
   {
	echo("<script>");
	echo'alert("new password and confirm password are not the same")';
	echo"</script>";
	exit;
   }
  
   $con=mysql_connect("localhost","root","");
   if($con==false) 
	   die("Error in connection...");
   mysql_select_db("library"); 
   $res = mysql_query("update admin set password='$newp' where  password='$oldp'");
	
   if($res==true)
   {
	  echo("<script>");
	  echo'alert("Password Changed successfully")';
	  echo"</script>";
	} 
  
  }
  ?>