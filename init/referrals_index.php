<?php
	
    if (isset($_POST["submit"])) {
	$name = $_POST['sendingusername']; 
    $email = $_POST['newuseremail']; 
    $from = 'halalyon@gmail.com';

    if (!$_POST["sendingusername"]){
        $errName = 'Please enter your name!';
    }
    if (!$_POST["newuseremail"] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email!';
    }
    }
?>