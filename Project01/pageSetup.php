<div id="header">
		<div>
			<h1>Top 100 Albums of All Time </h1>
		</div>
	</div>

	<div class="selection">
			<ul>
				<li>Sort albums by:</li>
				<li> <a class="rank" href="rank.php">Rank</a> </li>
				<li> <a class="title" href="title.php">Title</a> </li>
				<li> <a class="year" href="year.php">Year</a> </li>
			</ul>
	</div>

	 <div id="list">
 <table>
  <thead>
    <tr>
    	<td>Rank</td>
      <td>Title</td>
      <td>Year</td>
 </tr>
  </thead>
<?php
$servername = "crcp3320db.humanoriented.com";
$username = "crcp3320";
$password = "Crcp3320";
$dbname = "crcp3320";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
