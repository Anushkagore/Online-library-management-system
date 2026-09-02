
<html>
<!-- <head>
     <title>PDF Viewer</title> 
</head> -->
<body>
    <?php
    session_start();
    $bid=$_GET['id'];
     $con=mysql_connect("localhost","root","");
     if($con==false)
     die("error in connection");
     mysql_select_db("library");
     $cid=$_SESSION['$id16'];
     $res=mysql_query("select bpdf from book where bid=$bid");
     $row=mysql_fetch_array($res);
     $id33=$row[0];
     $res11=mysql_query("select * from view where bid='$bid' and cid='$cid'");
     $cnt=mysql_num_rows($res11);
     if($cnt==0)
     {
        $res12=mysql_query("insert into view values('$bid','1','$cid')");
     }
     else{
        $res11=mysql_query("select * from view where bid='$bid'");
        if($row=mysql_fetch_array($res11))
        {
            $view=$row[1]+1;
        }
        $res12=mysql_query("update view set view='$view' where cid='$cid' and bid='$bid' ");
     }
     ?>
     <a href="ebook.php"><button>Back</button></a>
    <h1>PDF Viewer</h1>
    <iframe src="img/<?php echo($id33); ?>" width="100%" height="3000px"></iframe>
</body>
</html>
