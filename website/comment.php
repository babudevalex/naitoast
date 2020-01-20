<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-pdo-format.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<body>
<form action="edit_comment.php" method="post">
<textarea rows="4" cols="50" name="comment">
Enter text here...</textarea>
<input type="submit">
</form>
 
</body>
</html>
