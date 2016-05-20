<?php
 if (!isset($_SESSION['email'])) {
header("location:http://".$_SERVER["SERVER_NAME"]."/final/");
}
if (isset($_GET['id'])) {

	$id=$_GET['id'];
$conn= new mysqli("localhost","root","","final");
$sql = "DELETE FROM commm WHERE id= '$id'";
$result = $conn->query($sql);
header("Location: http://".$_SERVER["SERVER_NAME"] . "/final/coment1.php");

}
?>
