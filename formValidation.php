<?php
$yourname = htmlspecialchars($_POST['yourname']);
$email = htmlspecialchars($_POST['email']);
$likeit = htmlspecialchars($_POST['likeit']);
$comments = htmlspecialchars($_POST['comments']);
?>
<html>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
  Name:<input type="text" name="yourname"/><br>
  Email:<input type="email" name="email"/><br>
  Like:  <input type="radio" name="likeit"/>Yes
        <input type="radio" name="likeit"/> No<br>
  Comments: <input type="" name="comments"/><br>
        <input type="submit"/>
    <br>
</form>
Your name is: <?php echo $yourname; ?><br />
Your e-mail: <?php echo $email; ?><br />
<br />
Do you like this website? <?php echo $likeit; ?><br />
<br />
Comments:<br /><?php echo $comments; ?>

</body>
</html>