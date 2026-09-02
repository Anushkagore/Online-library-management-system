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
    Dashboard
    
<!-- </div> -->
<?php
  echo"<div class='all1'>";
  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("library");
   ?>
  
<!-- <div class="dash">
  <div class="element">
    All Users 
   <?php
 $res=mysql_query("select * from user ");
 $c=mysql_num_rows($res);
 echo("$c");
 ?>
  </div>

</div> -->

  <?php
  echo"<div class='all1'>";
  $con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("library");
  
      // TOTAL USERS QUERY
   $res=mysql_query("select * from user");
     $row=mysql_num_rows($res);
     echo"<div class='rowbox'>";
     echo"<a href='user.php' >";
     echo"<div class='tb'>";
     echo'<img src="img/img11.jpeg" class="r2">';
    echo"$row";
    echo"<br>Total Users </div>";
    echo"</a>";
    echo"</div>";

    // TOTAL VIEWS QUERY
    echo"<a href='view.php' >";
    $res11=mysql_query("select sum(view) from view");
     if($row=mysql_fetch_array($res11))
    echo"<div class='tb'>";
    echo'<img src="img/img12.jpeg" class="r2">';
    echo"$row[0]";
    echo"<br>Total View </div>";
    echo"</a>";
    echo"</div>";

    // TOTAL FEEDBACK QUERY

    $res=mysql_query("select * from feedback");
     $row=mysql_num_rows($res);
     echo"<div class='rowbox'>";
     echo"<a href='feedback1.php'>";
     echo"<div class='tb'>";
     echo'<img src="img/img13.jpeg" class="r2">';
    echo"$row";
    echo"<br>feedback </div>";
    echo"</a>";
    echo"</div>";

    // TOTAL BOOKS QUERY
    
   $res=mysql_query("select * from book");
   $row=mysql_num_rows($res);
   echo"<div class='rowbox'>";
   echo"<a href='addbook1.php' >";
   echo"<div class='tb'>";
   echo'<img src="img/img14.jpeg" class="r2">';
   echo"$row";
   echo"<br>Total books </div>";
   echo"</a>";
   echo"</div>";

  // TOTAL AUDIOBOOK QUERY

  $res=mysql_query("select * from audiobook");
  $row=mysql_num_rows($res);
  echo"<div class='rowbox'>";
  echo"<a href='audiobook1.php' >";
  echo"<div class='tb'>";
  echo'<img src="img/img15.jpeg" class="r2">';
  echo"$row";
  echo"<br>Total  Audio Books </div>";
  echo"</a>";
  echo"</div>";

 // TOTAL CONTACT QUERY   

 $res=mysql_query("select * from feedback");
 $row=mysql_num_rows($res);
 echo"<div class='rowbox'>";
 echo"<a href='contact_query.php' >";
 echo"<div class='tb'>";
 echo'<img src="img/img14.jpeg" class="r2">';
 echo"$row";
 echo"<br>All  contact </div>";
 echo"</a>";
 echo"</div>";

   ?>
  
   
     































