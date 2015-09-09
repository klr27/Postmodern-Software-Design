<html>
<?php
	include 'Project01/head.php';
?>
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

$sql = "SELECT * FROM albums ORDER BY rank;";

<?php
    include 'Project01/table2.php';
  ?>
  


	<?php
		include 'Project01/footer.php';
	?>
