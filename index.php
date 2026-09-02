<html>
<head>
    <link rel="stylesheet" href="Style.css">
</head>
<title>Library Management System</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
   }
</style>
</head>
<body>
<div>
<div class="navbar">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#login">Login</a></li>
    <li><a href="#contact">Contact us</a></li>
  </ul>
</div>
</div><br><br>
<img src="img/img3.jpeg" width="100%" height="97%">
</div>
<br><br><br><br>

<!-- ABOUT.PHP -->
 <section id="about">
<br><br><br><br>
<div class="container2">
        <h2>About Library Management System</h2>
        <div class="about-image">
            <img src="img/img4.jpg" alt="Library Image">
        </div>
        <div class="about-content">
            <p>
                Welcome to the Library Management System! Our mission is to provide an efficient and user-friendly platform for managing library resources and facilitating the borrowing and return of books by library patrons.
            </p>
            <p>
                With our system, you can easily search for books, check their availability, reserve books, and track your borrowing history. We aim to make your library experience as convenient as possible.
            </p>
            <p>
                Our dedicated team of librarians and developers is committed to improving and enhancing the library system to meet the needs of our users. Thank you for choosing us as your library management solution.
            </p>
        </div>
    </div>
        </section> 

        <!-- login.php -->
        
<section id="login">
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<div class="container21">
<div class="info-section">
            <h3>User Login:</h3>
            <img src="img/userlogin.jpeg"  class="admin-image">
          
            <a href="userlogin.php" class="login-button">User Login</a>
        </div>
        <div class="info-section">
            <h3>Admin Login:</h3>
            <img src="img/adminlogin.jpeg" alt="Admin Login Image" class="admin-image">
            <a href="admin_login.php" class="login-button">Admin Login</a>
        </div>

       
    </div>
    <br><br><br><br>
</section>  
    <br><br><br><br><br>
    
    <br><br><br><br><br>
    <br><br><br><br><br>
    
    
     <!-- Contact.php -->
    
     <br><br><br><br><br>
    <br><br><br><br><br>
     <section id="contact">
    <title>Contact Us</title>
    
    <br><br><br><br><br>
    <h1>Contact Us</h1>
</head>
<body>
    <div class="contact">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <div class="label1">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="label1">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="label1">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="label1">
                <input type="submit" value="Submit">
            </div>
        </form>
        
    </div>
    
</body>
<br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
</html>


    <?php
   if(isset($_POST["submit"]))
   {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $msg=$_POST["message"];
     $con=mysql_connect("localhost","root","");
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
    
    }
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br>
    <footer>
        <!-- Include footer content if necessary -->
    </footer>
</body>
</html>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <p>&copy; Your Library Name. All rights reserved.</p>
                <p>Contact: info@library.com | Phone:406-7890</p>
            </div>
            <!-- <div class="footer-right">
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="catalog.html">Catalog</a></li>
                    <li><a href="account.html">My Account</a></li>
                    <li><a href="help.html">Help &amp; Support</a></li>
                </ul> -->
                <div class="footer-social">
                    <a href="#"><img src="img/facebook.jpg" width="20%"></a>
                    <!-- <a href="#"><img src="twitter-icon.png" "Twitter"></a> -->
                    <a href="#"><img src="img/insta.jpg" width="20%">      <alt="instagram">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>