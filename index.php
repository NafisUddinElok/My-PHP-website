<?php include("includes/header.php"); ?>

<h2> Home page </h2>
<p> Hello ! This is the homepage of our simple PHP website. </p>

<?php 
// Dynamic content : current time show korbe
echo "<p> Current time is: " . date("h:i A") . "</p>";
?>

<?php include("includes/footer.php"); ?>