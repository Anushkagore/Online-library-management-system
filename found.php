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
      .image-container  img{
            width:100%;
           height: 100%;
            position: absolute;
        }
         /* Style the text on top of the image */
         .image-text1{
            font-size:30px;
            position: relative;
            color: white;
            padding: 10px;
        }
        .image-text1 div{
            font-weight: bold;
            font-size:50px;
            padding-bottom: 15px;
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
</head>

<body>
    <!-- <div class="navbar111"> -->
<div class="image-container">
   <img src="img/found.jpg"></img> 
    <ul class="navbar111">
        <li><a href="found.php">Home</a></li>
        <li><a href="ebook.php">Book</a></li>
        <li><a href="audio.php">Audiobook</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div>
    <div class="image-text1">
    <br><br><br><br>  
    <div>Welcome to the Audio Book Library</div>
        <p>Discover a world of stories with our wide selection of Book & Audio Books.<br><br><br><br><br><br><br><br><br><br><br><br></p>
        </div>
    </div>
    </div>
    
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br> -->

     <!-- Audiobook --> 

    <!-- <title>Audiobook Library</title> -->
    <!-- <div class="navbar">
<div class="image-container">
   <img src="img/found.jpg"style="z-index:0" alt="" width="100%" height="87%"></img>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="#ebook">Ebook</a></li>
        <li><a href="#audio">Podcast</a></li>
        <li><a href="#feedback">Feedback</a></li>
        <li><a href="index.php">Log Out</a></li>
    </ul><br><br><br>
    </div>
    <div class="image-text"> -->
    <!-- <section id="audio">
        <br><br><br><br><br><br><br><br>
        
        <h2>Featured Audiobooks</h2>
        <ul>
            <li>
                <a href="music\Aarambh song.mp3" class="audiobook-link">
                     <img src="it.jpg" alt="Audiobook 1 Cover">
                    Audiobook 1
                </a>
            </li>
            <li>
                <a href="book2.mp3" class="audiobook-link">
                    <img src="book2.jpg" alt="Audiobook 2 Cover">
                    Audiobook 2
                </a>
            </li>
            <li>
                <a href="book3.mp3" class="audiobook-link">
                    <img src="book3.jpg" alt="Audiobook 3 Cover">
                    Audiobook 3
                </a>
            </li>
        </ul>
    </div>
     </section>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br> -->

    <!-- feedback.php -->
    <!-- <section id="feedback">
    <br><br><br><br> -->
    <!-- <title>Library Management System Feedback</title> -->
    <!-- <div class="container22">
        <h1>Library Management System Feedback</h1>
        <form id="feedbackForm" action="submit_feedback.php" method="post">
            Name
            <input type="text" id="name" name="name" placeholder="Your name">

            Email
            <input type="email" id="email" name="email" placeholder="Your email">

            Feedback:
            <textarea id="feedback" name="feedback" rows="4" placeholder="Your feedback" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    </section> -->
 
    <!-- <section>4
        <h2>Categories</h2>
        <ul>
            <li><a href="mystery.html">Mystery</a></li>
            <li><a href="fantasy.html">Fantasy</a></li>
            <li><a href="sci-fi.html">Science Fiction</a></li>
        </ul>
    </section> -->
    <br><br><br><br><br>
    <!-- <h1>Latest Audio Book</h1> 
    <div class="card">
        <img class="album-image" src="img/audioimg1.jpg" alt="Album 1">
        <audio controls>
            <source src="music\Aarambh song.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>

    <div class="card">
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
    </div>
  -->
</body>
</html>


