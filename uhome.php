<?php
session_start();
include "database.php";
function countRecord($sql,$mysqli)
{
$res=$mysqli->query($sql);
return $res->num_rows;
}

if(!isset( $_SESSION["ID"]))
{
 header("location:ulogin.php");
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
    <h3 id="heading"> Welcome <?php echo $_SESSION["NAME"];?></h3>

</div>
<div id="navi">
    <?php
    include "usersidebar.php"
    ?>
</div>
<div id="footer">
<p>Copyright &copy; book management 2020</p>
<div>
</div>
</body>
</html>