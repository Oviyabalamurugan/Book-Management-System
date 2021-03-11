<?php
session_start();
include "database.php";
function countRecord($sql,$mysqli)
{
$res=$mysqli->query($sql);
return $res->num_rows;
}

if(!isset( $_SESSION["AID"]))
{
 header("location:alogin.php");
}
?>


<!DOTYPE HTML>
<html>
<head>
<title>BOOK MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type ="text/css" href="css/style.css">
</head>
<body>
<div id="container">
<div id="header">
<h1>BOOK MANAGEMENT SYSTEM</h1>
</div>
<div id="wrapper">
    <h3 id="heading">Welcome Admin</h3>
<div id="center"> 
<ul class="record">
<li>Total students: <?php echo countRecord("select * from student",$mysqli); ?></li>
<li>Total Books   : <?php echo countRecord("select * from book",$mysqli); ?></li>
<li>Total Request : <?php echo countRecord("select * from request",$mysqli); ?></li>
<li>Total Comments: <?php echo countRecord("select * from comment",$mysqli); ?></li>
</ul>

    </div>
</div>
<div id="navi">
    <?php
    include "adminsidebar.php"
    ?>
</div>
<div id="footer">
<p>Copyright &copy; book management 2020</p>
<div>
</div>
</body>
</html>