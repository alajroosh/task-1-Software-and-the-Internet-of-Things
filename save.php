<?php
$vol1=$_POST['vol1'];
$vol2=$_POST['vol2'];
$vol3=$_POST['vol3'];
$vol4=$_POST['vol4'];
$vol5=$_POST['vol5'];
$vol6=$_POST['vol6'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$conn = new mysqli('localhost','root','','motore');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("UPDATE motores SET motore1=?,motore2=?,motore3=?,motore4=?,motore5=?,motore6=?");
	$stmt->bind_param("iiiiii", $vol1, $vol2, $vol3, $vol4, $vol5, $vol6);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
 