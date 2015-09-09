<html>
<?php
	include 'head.php';
?>
<body class="yearPage">
	<?php
		include 'pageSetup.php';
	?>
<?php
		include 'table1.php';
	?>

<?php
	$sql = "SELECT * FROM albums ORDER BY year;";
?>

<?php
		include 'table2.php';
	?>

	<?php
		include 'footer.php';
	?>