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
      <a href="admin_dash.php"class="vi">Dashbord</a>
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
    <a href="contact.php" class="vi">Contact query</a>
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
  <div class="view">
    <center>
    <h3>Book view Information</h3>
  </center>

  </div>
  <div class="viewtable">
   
<?php
$con=mysql_connect("localhost","root","");
   if($con==false)
   die("error in connection"); 
   mysql_select_db("library");
   $res1=mysql_query("select book.bname,user.name,view.view from book,view,user where book.bid=view.bid AND user.id=view.cid");
 echo("<br>");
   echo("<table border=1 width='100%' align='left'class='trow'>");
   echo("<tr class='adminrow'><th>Book Name  <th> User Name <th>Total View </tr>");
       while($row=mysql_fetch_array($res1))
      {
        echo("<tr class='hv'><td><br>$row[0]");
         echo("<td><br>$row[1]");
         echo("<td><br>$row[2]");
         
        echo("</tr>");
}
echo("</table>");
?>

