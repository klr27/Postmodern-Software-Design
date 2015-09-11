<?php
	include 'head.php';
?>
<body class="rankPage">
	<?php
		include 'pageSetup.php';
		$sql = "SELECT * FROM albums ORDER BY rank;";
		include 'footer.php';
	?>


