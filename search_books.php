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
    <h3 id="heading">Search book</h3>
<div id="center">
    <?php
    if(isset($_POST["submit"]))
    {
       
    }
    
    ?>
    <form action ="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  
    <label>Enter book name or keyword</label>
    <textarea required name="name"></textarea>

    <button type="submit" name="submit">Search now</button>
</form>
</div>

<?php
$sql="SELECT * FROM book where BTITLE like '%{$_POST["name"]}%' or KEYWORDS like '%{$_POST["name"]}%'";
$res = $mysqli->query($sql);
if($res->num_rows>0)
{
 echo "<table>
 <tr>
 <th>SNO</th>
 <th>Book Name</th>
 <th>Keywords</th>
 <th>Location</th>
 </tr>
 ";
 while($row=$res->fetch_assoc())
 {
     $i++;
     echo "<tr>";
     echo "<td>{$i}</td>";
     echo "<td>{$row["BTITLE"]}</td>";
     echo "<td>{$row["KEYWORDS"]}</td>";
     echo "<td><a href ='{$row["FILE"]}' target='_blank'>View</a></td>";
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "<p class='error'> No books found </p>";
}

?>
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