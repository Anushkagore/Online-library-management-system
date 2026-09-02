<html>
<head>
    <title>Library Feedback</title>
    <link rel="stylesheet" href="Style.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}
ul.navbar111{
            position: relative;
            list-style-type: none;
            margin: 0;
            padding-left: 150px;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent black background */
            text-align:left; /* Align text to the right */
        }

        /* Style the list items (navigation links) */
        ul.navbar111 li {
            display: inline-block; /* Display list items as inline-block to make them appear on the same line */
             padding-right:100px;
        }

        /* Style the navigation links */
        ul.navbar111 li a {
            font-size:20px;
            font-weight:bold;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the color of the links on hover */
        ul.navbar111 li a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Transparent white background on hover */
        }





    </style>
<body>
    <div class="navbar111">   
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="ebook.php">Book</a></li>
        <li><a href="audio.php">Audiobook</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div>
    <div class="feedback">
        <h1>Library Feedback</h1>
        <form action="#" method="post">
             Name:
            <input type="text" id="name" name="t1" required>

            Your Email:
            <input type="email" id="email" name="t2" required>

           Feedback:
            <textarea id="feedback" name="message" required></textarea>

            <input type="submit" value="Submit Feedback" name="submit">
        </form>
    </div>
</body>
</html>
 <?php
    if(isset($_POST["submit"]))
    {
     $name=$_POST["t1"];
     $email=$_POST["t2"];
     $msg=$_POST["message"];
      $con=mysql_connect("localhost","root"," ");
      if($con==false) 
          die("Error in connection...");
      mysql_select_db("library"); 
    
     $res=mysql_query("insert into feedback values('$name','$email','$msg')");
      if($res==true)
      {
       echo("<script>");
       echo'alert("Feedback Send successfully")';
       echo"</script>";
       } 
    
    } ?>