<?php
$con=mysqli_connect('localhost','id11092613_rcycoke','Geos3456','id11092613_rcycoke_caeliusers');
 if(!$con){
	 die('could not connect: '.mysqli_error());
	 }
if(isset($_POST['btn_delete'])){
    $username = $_POST['username_delete'];
    $sql = mysqli_query($con,"DELETE FROM users WHERE username='$username'");

    if($sql){
        echo "Deleted";
    }
}
?>