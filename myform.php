<!--Include navigation menu-->
<?php include("includes/header.php"); ?>

<!-- Code for form submission -->
<?php
//Check for SQL Injection
$name = check_input($_POST['name'],"Enter your name!");
$email = check_input($_POST['email']);
$subject = check_input($_POST['subject']);
$message = check_input($_POST['message']);
$phone = check_input($_POST['phone']);

if (preg_match("/\D/",$phone))
{
    die("Please enter numbers only for Phone #");
}

$recipient = "lorinda.peoples@yahoo.com";

//Email Message
$email_from = $email;
$email_subject = "Website Contact: ".$subject;
$email_body = $name." filled out the contact form on www.stokesandglass.com.\n".
                "\nHere is the message:\n\n".$message.
                "\n\nFrom: ".$name."\nEmail: ".$email_from.
                "\nPhone Number: ".$phone.
                "\n--End of Message--";


$headers ="From: lstokes@gator4025.hostgator.com"."\r\n". 
    "Reply-To: ".$email_from."\r\n";

//Send Email
mail($recipient, $email_subject, $email_body, $headers);
?>

<html>
<!--Message to display on the redirected site after submit-->
    <body>
        Your message was successfully sent!<br />
        Thank you for contacting us! <br />
        <a href="http://www.stokesandglass.com">Back to Site</a><br />
        <br />Email Contents: <br />
        Your name: <?php echo $_POST['name']; ?><br />
        Your e-mail: <?php echo $_POST['email']; ?><br />
        Your phone: <?php echo $_POST['phone']; ?><br />
        <br />
        Subject:<br />
        <?php echo $_POST['subject']; ?>
        <br />
        Message:<br />
        <?php echo $_POST['message']; ?>
    </body>
</html>



<?php
//function to check for SQL injection
function check_input($data,$problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }return $data;
}
?>
<!--Code for "Contact Us" Footer-->
			<footer id="footer">
			
<?php include("includes/footer.php"); ?>
