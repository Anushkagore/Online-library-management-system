    
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
    <div class="image-container"> 
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="#comedy">comedy</a></li>
        <li><a href="#Scientific">scientific</a></li>
        <li><a href="#Educational">Educational</a></li>
        <li><a href="#Programming">Programming</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div> 


 

<?php
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_select_db("library");

$res=mysql_query("select bname,bimg,bpdf,type,bid from book");
while($row=mysql_fetch_array($res))
{

?>
<div class="card">
<div class="photo">  
<div class="bname">
<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img><br>
<?php echo("Book Name :$row[0]"); echo("<br>Book Type :$row[3]");
    $bid=$row[4] ;
    ?>
   <a href="disp_pdf.php?id=<?php echo($bid); ?>"><br><button> View</button></a>
    
    </div>
</div>
</div>
<?php
}
?>  
</div>
<br><br><br><br><br><br><br><br> 

<section id="comedy">
    <!-- <br><br><br><br>  -->
     
    </div> 
    <body>
    <div class="image-container"> 
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="#comedy">comedy</a></li>
        <li><a href="#Scientific">scientific</a></li>
        <li><a href="#Educational">Educational</a></li>
        <li><a href="#Programming">Programming</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div> 

<h1>Comedy BOOK</h1>
<?php
$res=mysql_query("select bname,bimg,bpdf,type,bid from book where type='comedy'");
while($row=mysql_fetch_array($res))
{
?>
<div class="card">
<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img><br>
    <?php echo($row[0]); echo("<br>$row[3]");
    $bid=$row[4] ;
    ?>
   <a href="disp_pdf.php?id=<?php echo($bid); ?>">
   <br><br><br>
   <button> View</button></a>
    
    </div>

<?php
}
?>  
 <br><br><br><br><br><br><br><br> <br>
 <br><br>

<section id="Scientific">
<!-- <br><br><br><br>
  -->
    </div> 
    <body>
    <div class="image-container"> 
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="#comedy">comedy</a></li>
        <li><a href="#Scientific">scientific</a></li>
        <li><a href="#Educational">Educational</a></li>
        <li><a href="#Programming">Programming</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    <h1>Scientific BOOK</h1>
    </div> 

<!-- <h1>Scientific BOOK</h1> -->
<?php
$res=mysql_query("select bname,bimg,bpdf,type,bid from book where type='scientific'");
while($row=mysql_fetch_array($res))
{
?>
<div class="card">
<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img><br>
    <?php echo($row[0]); echo("<br>$row[3]");
    $bid=$row[4] ;
    ?>
   <a href="disp_pdf.php?id=<?php echo($bid); ?>"><button> View</button></a>
    
    </div>

<?php
}
?>

<!-- Edicutional book -->


<br><br><br><br><br><br><br><br> <br> <br>
<br><br> <br> <br>
<section id="Educational">
    </ul>
    <!-- <br><br><br> -->
    </div> 
<!-- <br><br><br><br> -->
<body>
    <div class="image-container"> 
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="#comedy">comedy</a></li>
        <li><a href="#Scientific">scientific</a></li>
        <li><a href="#Educational">Educational</a></li>
        <li><a href="#Programming">Programming</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul>
    <!-- <br><br><br> -->
    </div> 

<h1>Educational BOOK</h1>
<?php
$res=mysql_query("select bname,bimg,bpdf,type,bid from book where type='Educational'");
while($row=mysql_fetch_array($res))
{
?>
<div class="card">
<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img><br>
    <?php echo($row[0]); echo("<br>$row[3]");
    $bid=$row[4] ;
    ?>
   <a href="disp_pdf.php?id=<?php echo($bid); ?>"><button> View</button></a>
    
    </div>

<?php
}
?>


<br><br><br><br><br><br><br><br> <br> <br>
<br><br> <br> <br> <br> <br><br>
<section id="Programming">
    </ul>
    <!-- <br><br><br> -->
    </div> 
<!-- <br><br><br><br> -->
<body>
    <div class="image-container"> 
   <div>
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="#comedy">comedy</a></li>
        <li><a href="#Scientific">scientific</a></li>
        <li><a href="#Educational">Educational</a></li>
        <li><a href="#Programming">Programming</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul>
    <!-- <br><br><br> -->
    </div> 

<h1>Programming BOOK</h1>
<?php
$res=mysql_query("select bname,bimg,bpdf,type,bid from book where type='Programming'");
while($row=mysql_fetch_array($res))
{
?>
<div class="card">
<img class="album-image" src="img/<?php echo($row[1]); ?>" alt="Album 1"> </img><br>
    <?php echo($row[0]); echo("<br>$row[3]");
    $bid=$row[4] ;
    ?>
   <a href="disp_pdf.php?id=<?php echo($bid); ?>"><button> View</button></a>
    
    </div>

<?php
}
?>
</div>

</section>
<br><br><br><br><br><br><br><br> 
<br> <br><br> <br> <br><br><br>
<br><br><br>

   

    
    </body>
    </html>
        


   
 