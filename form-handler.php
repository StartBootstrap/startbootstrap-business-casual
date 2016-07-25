<?php
// Emails form data to you and the person submitting the form and adds it to a database

// Test for db
$db = new mysqli("DB_HOST","DB_USER","DB_PASSWORD","DB_NAME");
$sql = "SELECT id FROM form_submissions";
$result = $db->query($sql);
if (empty($result)) {
	$sql = "CREATE TABLE `form_submissions` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`name` text COLLATE utf8_unicode_ci,
		`phone` text COLLATE utf8_unicode_ci,
		 `email` int(11) DEFAULT NULL,
		 `message` text COLLATE utf8_unicode_ci,
		 `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		 PRIMARY KEY (`id`)
		 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
		$result = $db->query($sql);
}
// Set your email below
$myemail = "ENTER_YOUR_EMAIL_HERE"; // Replace with your email

// Receive and sanitize input
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$message = mysqli_real_escape_string($db, $_POST['message']);

// write to db
$sql = "INSERT INTO form_submissions (name,phone,email,message) VALUES ('$name','$phone','$email','$message')";
$result = $db->query($sql);

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

?>
