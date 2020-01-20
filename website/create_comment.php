<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION["login_redirect"] = $_SERVER["PHP_SELF"];
    header("location:login-pdo-format.php");
    exit;
}

require_once "db_connect.php";
	   $username_role = $_SESSION["username"];
	   $com_add=$_POST['comment'];
if(isset($_POST['comment'])){
    $sql = "INSERT INTO `Comment_Section` (`id`, `username`, `comment`, `commented_on`) VALUES (NULL, '$username_role', '$com_add', current_timestamp()); ";
    if(mysqli_query($con,$sql)){
        echo "Awesome ".htmlspecialchars($username_role).","," Bio Updated";
    }else{
        echo "Error Updating Bio";
    }
}
 
?>