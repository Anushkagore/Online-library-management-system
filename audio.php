
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <title>Navigation Bar</title>
    <style>
        *{
            padding: 0;
            margin:0;
        }
      
    
        /* Add some basic styles to the navigation bar */
        ul.navbar111{
            position: relative;
            list-style-type: none;
            margin: 0;
            padding-left: 150px;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent black background */
            text-align:left; /* Align text to the right */
            width:100%;
            height:10%;
        }

        /* Style the list items (navigation links) */
        ul.navbar111 li {
            display: inline-block; /* Display list items as inline-block to make them appear on the same line */
             padding-right:100px;
             margin-top:-0.2%;
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
img{
  width: 900px;
  height:500px  ;
  aspect-ratio: 3/2;
  object-fit: contain;
}
.bname{

    font-weight:bold;
    color:black;
    text-align: center;
    text-decoration: none;

}




    </style>
</head>
    <body>
    <!-- <div class="image-container"> -->
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="ebook.php">Book</a></li>
        <li><a href="audio.php">AudioBook</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div>
 <h1>Latest Audio Book</h1> 
 

<?php
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_select_db("library");

$res=mysql_query("select bname,bimg,baudio,type from audiobook");
while($row=mysql_fetch_array($res))
{

?>
<div class="card">
<div class="photo">  
<div class="bname"> <?php echo($row[0]); ?>

<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img>
<audio controls>
            <source src="music/<?php echo($row[2]); ?>" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
</div>
    </div>
</div>

<?php
}
?>  
</div>


   

    <!-- <div class="card">
        <img class="album-image" src="img/audioimg1.jpg" alt="Album 2">
        <audio controls>
            <source src="album2.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

    </div>

    <div class="card">
        <img class="album-image" src="img/audioimg1.jpg" alt="Album 3">
        <audio controls>
            <source src="album3.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div> -->
    </body>
    </html>
        


   
 