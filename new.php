<?php

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
    <h3 id="heading">new user registration</h3>
<div id="center">
    <?php
    if(isset($_POST["submit"]))
    {
        
$sql="insert into student(NAME,PASS,MAIL,DEP) values('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
$mysqli->query($sql);
echo "<p class='success'>user registration success</p>";
    }

    ?>
    <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
    <label>name</label>
    <input type ="text" name="name" required>
    <label>Password</label>
    <input type="password" name="pass" required>
    <label>Email ID</label>
    <input type="email" name="mail" required>
    <select name="dep">
        <option value"BCA">BCA</option>
        <option value"CSE">CSE</option>
        <option value"BSC">BSC</option>
        <option value"OTHER">OTHERS</option>
</select>
    <button type="submit" name="submit">Register now</button>
</form>
</div>
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