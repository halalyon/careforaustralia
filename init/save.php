<?php
	include('config.php'); //Includes configuration files
	$name = $_POST['sendingusername']; //Gets name if applicable
    $email = $_POST['newuseremail']; //Gets email from form
	//Database Connection
	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	$db = mysql_select_db(DATABASE);
	$query = mysql_query("INSERT INTO referrals VALUES ('', '$name', '$email')"); //Inserts email into database
	// if(isset($refer)){
	// 	$query = mysql_query("INSERT INTO referrals VALUES ('', '$refer','$id'"); //Add reference to id
	// }
?>
<h2>Here's your referral link:</h2>
<?php
$extract = mysql_query("SELECT * FROM users WHERE email='$email'") or die(mysql_error());
while($row = mysql_fetch_assoc($extract))
{
	$id = $row['id'];
}
?>
<a href="<?php echo URL.'?refer='.$id; ?>"><?php echo URL.'?refer='.$id; ?></a>