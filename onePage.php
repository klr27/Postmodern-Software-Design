<html>
<?php
  $sortOrder = $_POST["sortOrder"];
  if ($sortOrder == NULL) {
    $sortOrder = "rank";
  }
?>
<head>
  <link type="text/css" rel="stylesheet" href="Project01/index.css"/>
  <title>Top 100 Albums of All Time</title>
  <meta name="description" context="A list of the top 100 albums of all time, according to Rolling Stone."/>
</head>

<body>
<div id="header">
    <div>
      <h1>Top 100 Albums of All Time </h1>
    </div>
  </div>
      <form action="onePage.php" method="POST">
        Ordered by
        <select name="sortOrder">
          <option <? if ($sortOrder == "rank") { ?>selected = "selected"<? } ?>value="rank">Rank</option>
          <option <? if ($sortOrder == "year") { ?>selected = "selected"<? } ?>value="year">Year</option>
          <option <? if ($sortOrder == "title") { ?>selected = "selected"<? } ?>value="title">Title</option>
        <input type="submit" value="Sort!"/>
        </select>
      </form>

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

$sql = "SELECT * FROM albums ORDER BY " . $sortOrder . ";";
 
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n<td>" . $row["title"]. "</td>\n<td>" . $row["year"]. "</td>\n</tr>\n";
}
$conn->close();
?>

</table>
</body>
</html>



