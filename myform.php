<?php include("includes/header.php"); ?>
<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);    
?>

<div>
    <br>
    <br>
    <br>
        Your name is: <?php echo $_POST['name']; ?><br />
        Your e-mail: <?php echo $_POST['email']; ?><br />
        <br />
        Subject:<br />
        <?php echo $_POST['subject']; ?>
        <br />
        Message:<br />
        <?php echo $_POST['message']; ?>
</div>

<!--Code for "Contact Us" Footer-->
			<footer id="footer">
			
<?php include("includes/footer.php"); ?>
