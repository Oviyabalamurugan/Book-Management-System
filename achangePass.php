<?php
session_start();
include "database.php";

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
    <h3 id="heading">Change password</h3>
<div id="center">
    <?php
    if(isset($_POST["submit"]))
    {
        $sql="SELECT * from admin WHERE APASS ='{$_POST["opass"]} and AID='{$_SESSION["AID"]}'";
     $res=$mysqli->query($sql);
     if(!empty($res) && $res->num_rows > 0)
     {
        $s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
        $mysqli->query($s);
        echo "<p class='success'>Password Changed Successfully</p>";
     }
     else{
         echo "<p class='error'>Invalid Password</p>";
     }
    }
    ?>
    <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label>Old Password</label>
    <input type ="password" name="opass" required>
    <label>New Password</label>
    <input type ="password" name="npass" required>
    <button type="submit" name="submit">Update Password</button>
</form>
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