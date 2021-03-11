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
    <h3 id="heading">Upload  new books</h3>
<div id="center">
    <?php
    if(isset($_POST["submit"]))
    {
        $target_dir="upload/";
        $target_file=$target_dir . basename($_FILES["efile"]["name"]);
    if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
    {
$sql="insert into book(BTITLE,KEYWORDS,FILE) values('{$_POST["opass"]}','{$_POST["keys"]}','{$target_file}')";
$mysqli->query($sql);
echo "<p class='success'>book uploaded</p>";
    }
    else{
        echo "<p class='error'>Error in upload</p>";
    }
    }

    ?>
    <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    <label>Book title</label>
    <input type ="book name" name="opass" required>
    <label>Keyword</label>
    <textarea name="keys" required></textarea>
    <label>Upload File</label>
    <input type="file" name="efile" required >
    <button type="submit" name="submit">Upload book</button>
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