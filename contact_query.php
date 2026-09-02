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
<h4 align="center">All Contact Query</h4>
<?php
$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("library");
   $res1=mysql_query("select * from feedback");
 echo("<br>");
   echo("<table border=1 width='100%' align='left'class='trow'>");
   echo("<tr class='adminrow'><th>name  <th> Email id <th> msg </tr>");
       while($row=mysql_fetch_array($res1))
      {
        echo("<tr class='hv'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         
        echo("</tr>");
}
echo("</table>");
?>

