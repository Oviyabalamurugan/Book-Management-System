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
    <h3 id="heading">View Request details</h3>
<?php
$sql="SELECT STUDENT.NAME,request.MES,request.LOGS from STUDENT inner join request on STUDENT.ID=request.ID";


$res = $mysqli->query($sql);
if(!empty($res) && $res->num_rows > 0)
{
 echo "<table>
 <tr>
 <th>SNO</th>
 <th>NAME</th>
 <th>MES</th>
 <th>LOGS</th>
 </tr>
 ";
 while($row=$res->fetch_assoc())
 {
     $i++;
     echo "<tr>";
     echo "<td>{$i}</td>";
     echo "<td>{$row["NAME"]}</td>";
     echo "<td>{$row["MES"]}</td>";
     echo "<td>{$row["LOGS"]}</td>";
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "<p class='error'> No request found </p>";
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