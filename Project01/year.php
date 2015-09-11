<?php
	include 'head.php';
?>
<body class="yearPage">
	<?php
		include 'pageSetup.php';
		$sql = "SELECT * FROM albums ORDER BY year;";
		include 'footer.php';
	?>