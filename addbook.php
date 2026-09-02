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
<html>

<head>
    <title>Book Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h4 {
            text-align: center;
        }
         label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size:20px;
        }
        input[type="text"], input[type="file"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            height: 40px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Book Information Form</h4>
        <form action="#" method="post" enctype="multipart/form-data">
             <label >Book Name:</label>
            <input type="text" name="t1" id="bookName" required>

            <label>Book Image:</label>
            <input type="file" name="t2" id="bookImage" accept=".jpg, .jpeg, .png" required>

            <label> Book PDF:</label>
            <input type="file" name="t3" id="bookPdf" accept=".pdf" required />

            <label>Author:</label>
            <input type="text" name="t4" id="bookAuthor" required>

            <label for="bookType">Book Type:</label>
            <select name="s1" id="bookType" required>
                <option value="Fiction">comedy</option>
                <option value="Non-Fiction">Non-Fiction</option>
                <option value="Science Fiction">Science Fiction</option>
                <option value="Mystery">Mystery</option>
                <option value="Biography">Biography</option>
                <option value="Children">Children</option>
                <option value="Programing">Programing</option>
                <option value="Scientific">Scientific</option>
                <option value="Educational">Educational</option>
                
                <!-- Add more options as needed -->
            </select>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
    $folder="C:/wamp/www/library/demo/img/";
    move_uploaded_file($_FILES['t2']['tmp_name'],$folder.$_FILES['t2']["name"]);
   
    move_uploaded_file($_FILES['t3']['tmp_name'],$folder.$_FILES['t3']["name"]);
 
 
$bimg=$_FILES["t2"]["name"];    
$bname=$_POST["t1"];
$bpdf=$_FILES["t3"]["name"];
$btype=$_POST["s1"]; 
$author=$_POST["t4"];
$con=mysql_connect("localhost","root","");
  if($con==false)
die("error in connection");
mysql_select_db("library");
$id=mysql_query("select max(bid) from book");
$row=mysql_fetch_array($id);
$bid=$row[0]+1; 
$res=mysql_query("insert into book values($bid,'$bname','$bimg','$bpdf','$author','$btype')");
echo($res);
  if($res==true)
{
    echo("<script>");
    echo'alert("New book added successfully")';
    echo"</script>";
           
}
else
{ echo("<script>");
  echo'alert("unable to insert  book")';
  echo"</script>";
}
}
?>
