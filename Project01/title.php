<?php include 'head.php';?>
<body class="titlePage">
<?php	
	include 'pageSetup.php';
	$sql = "SELECT * FROM albums ORDER BY title;";
	include 'footer.php';
?>