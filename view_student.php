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
    <h3 id="heading">View student details</h3>
<?php
$sql="Select * from student";
$res = $mysqli->query($sql);
if($res->num_rows>0)
{
 echo "<table>
 <tr>
 <th>SNO</th>
 <th>NAME</th>
 <th>EMAIL</th>
 <th>DEPARTMENT</th>
 </tr>
 ";
 while($row=$res->fetch_assoc())
 {
     $i++;
     echo "<tr>";
     echo "<td>{$i}</td>";
     echo "<td>{$row["NAME"]}</td>";
     echo "<td>{$row["MAIL"]}</td>";
     echo "<td>{$row["DEP"]}</td>";
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "<p class='error'> No student record found </p>";
}
?>
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