
<html>

<?php
	include 'head.php';
?>
<body class="rankPage">
	<?php
		include 'pageSetup.php';
	?>

<?php
		include 'table1.php';
	?>

<?php
	$sql = "SELECT * FROM albums ORDER BY rank;";
?>

<?php
		include 'table2.php';
	?>
	
	<?php
		include 'footer.php';
	?>


