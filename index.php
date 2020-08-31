
<?php
include "includes/database.php";

?>

<html>
<head></head>

<title>gebarsten glas enterprise</title>


<body>
<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>

<h3>Simple contact manager</h3>

<table>
<tr>
  <th>Name</th>
  <th>Username</th>
  <th>Email</th>
</tr>

<?php 

//$getCustomers = mysqli_query($con,"SELECT * FROM customers_tbl WHERE id_fld < 5");
$getCustomers = mysqli_query($con,"SELECT * FROM customers_tbl");

while ($customers=mysqli_fetch_array($getCustomers)) {
	$id = $customers['id_fld'];

	$name = $customers['name_fld'];
	$username = $customers['username_fld'];
	$email = $customers['email_fld'];
	// $address = $customers['address'];
echo "<tr>";
echo "<td>".$name."</td><td>".$username."</td><td>".$email."</td><td><a href='delete.php?id=$id'>delete</a></td><td><a href='edit.php?id=$id'>edit</a></td>";
echo "</tr>";
}
?>

</table>
</body>

</html>