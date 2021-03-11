<?php
session_start();
include "database.php";

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
    <h3 id="heading">New Book request</h3>
<div id="center">
    <?php
    if(isset($_POST["submit"]))
    {
        $sql="insert into request (ID,MES,LOGS) values({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
     $res=$mysqli->query($sql);
        echo "<p class='success'>Request send</p>";
     }
    
    ?>
    <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  
    <label>Message</label>
    <textarea required name="mess"></textarea>

    <button type="submit" name="submit">Send message</button>
</form>
</div>
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