<?php
session_start();
include "database.php";
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
    <h3 id="heading">Admin Login Here</h3>
<div id="center"> 
    <?php
       if(isset($_POST["submit"]))
       {
            $sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
            $res=$mysqli->query($sql);
            if($res->num_rows>0)
            {
                $row=$res->fetch_assoc();
                $_SESSION["AID"]=$row["AID"];
                $_SESSION["ANAME"]=$row["ANAME"];
                header("location:ahome.php");
            }
            else{
                echo "<p class='error'>Invalid user details</p>";
            }
        }
    ?>
<form action="alogin.php" method="post">
<label>Name</label>
<input type="text" name="aname" required>
<label>Password</label>
<input type="password" name="apass" required>
<button type ="submit" name="submit">Login Now</button>
</form></div>
</div>
<div id="navi">
    <?php
    include "sidebar.php"
    ?>
</div>
<div id="footer">
<p>Copyright &copy; book management 2020</p>
<div>
</div>
</body>
</html>