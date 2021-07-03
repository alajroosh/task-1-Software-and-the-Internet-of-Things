<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: #555;
}

.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
</style>
</head>
<body>
<div class="content">
<table>
<tr>
<th>motore1</th>
<th>motore2</th>
<th>motore3</th>
<th>motore4</th>
<th>motore5</th>
<th>motore6</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "motore");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM motores";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>"
.$row["motore1"]."</td><td>"
.$row["motore2"]."</td><td>"
.$row["motore3"]."</td><td>" 
.$row["motore4"]."</td><td>" 
.$row["motore5"]."</td><td>"
.$row["motore6"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>

</body>
</html>