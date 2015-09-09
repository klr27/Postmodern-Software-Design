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
