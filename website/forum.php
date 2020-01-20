<?php
require_once "db_connect.php";
$msg="SELECT * FROM `Comment_Section`;";
$result=mysqli_query($con,$msg);
 if (mysqli_num_rows($result)>0){
     echo "<table style='padding:10px'><tr><th>Comment</th></tr>";
	 while($row=mysqli_fetch_assoc($result)){
	      echo "<tr><td> ".$row["comment"]."</td>";
	       echo "<td> ".$row["commented_on"]."</td></tr>";
		 echo "<tr><td> ".$row["username"]."</td></tr>";
		
		 }echo "</table>";
		 }else{
			 echo "0 results";
		 }
		 ?>
		  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
       <link rel="stylesheet" href="w3.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
    </style>
</head>

</html>