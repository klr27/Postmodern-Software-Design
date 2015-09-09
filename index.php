<html>
<head>
  <link type="text/css" rel="stylesheet" href="/Project01/index.css"/>
  <title>Top 100 Albums of All Time</title>
  <meta name="description" context="A list of the top 100 albums of all time, according to Rolling Stone."/>
</head>
<body>
	
<div id="header">
    <div>
      <h1>Top 100 Albums of All Time </h1>
    </div>
  </div>

  <div class="selection">
      <ul>
        <li>Sort albums by:</li>
        <li> <a class="rank" href="/Project01/rank.php">Rank</a> </li>
        <li> <a class="title" href="/Project01/title.php">Title</a> </li>
        <li> <a class="year" href="/Project01/year.php">Year</a> </li>
      </ul>
  </div>

<?php
    include 'Project01/table1.php';
  ?>

<?php
  $sql = "SELECT * FROM albums ORDER BY rank;";
?>

<?php
    include 'Project01/table2.php';
  ?>
  


	<?php
		include 'Project01/footer.php';
	?>
