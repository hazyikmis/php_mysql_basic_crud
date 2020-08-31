
<?php 
include "includes/database.php";
?>

<html>
<head></head>

<title>gebarsten glas enterprise || Edit contact</title>

<body>


<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>



<body>

	<h4>Edit Contact</h4>

	<?php
if (isset($_POST['save'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];

$query ="UPDATE customers_tbl SET name_fld='$name',username_fld='$username',email_fld='$email' WHERE id_fld=$id";

	if ($con->query($query)) {
		echo "contact successfully updated";
	}else{
		echo "an error occured".$con->error;
	}
}

?>

<?php
$id = $_REQUEST['id'];
$getCustomers = mysqli_query($con,"SELECT * FROM customers_tbl WHERE id_fld=$id");

while ($customers=mysqli_fetch_array($getCustomers)) {

	$name = $customers['name_fld'];
	$username = $customers['username_fld'];
	$email = $customers['email_fld'];

?>


<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="text" name="name" placeholder="Full name" value="<?php echo $name; ?>">
<br>
<input type="text" name="username" placeholder="Your username" value="<?php echo $username;?>">
<br>
<input type="text" name="email" placeholder="Your email" value="<?php echo $email;?>">
<br>
<input type="submit" name="save" value="save" >
</form>


<?php
}
?>

</table>
</body>

</html>