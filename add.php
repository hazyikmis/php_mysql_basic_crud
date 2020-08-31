
<?php
include "includes/database.php";

?>

<html>
<head></head>

<title>gebarsten glas enterprise || Add contact</title>

<body>


<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>

<h3>Add Conact</h3>

<?php
if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	// $address = $_POST['address'];

$query ="INSERT INTO customers_tbl (name_fld, username_fld, email_fld) VALUES ('$name','$username','$email')";

	if ($con->query($query)) {
		echo "contact successfully added";
	}else{
		echo "an error occured";
	}
}


?>



<form action="" method="post">
<input type="text" name="name" placeholder="Full name">
<br>
<input type="text" name="username" placeholder=" Your username">
<br>
<input type="text" name="email" placeholder="Your email">
<br>
<input type="submit" name="save" value="save" >
</form>


</table>
</body>

</html>