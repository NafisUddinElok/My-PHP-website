<?php include("includes/header.php"); ?>

<h2> About Page</h2>
<p> This website is built using PHP , HTML, and CSS. </p>

<?php 

$skills = ["PHP", "HTML", "CSS", "JavaScript"];

echo "<h3> Skills: </h3><ul>";
foreach($skills as $skill){
    echo "<li> $skill </li>";
}
echo "</ul>";
?>

<?php include ("includes/footer.php"); ?>