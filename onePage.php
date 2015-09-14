<html>
<head>
  <link type="text/css" rel="stylesheet" href="Project01/index.css"/>
  <title>Top 100 Albums of All Time</title>
  <meta name="description" context="A list of the top 100 albums of all time, according to Rolling Stone."/>
   <script>
  function replaceList() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200){
        document.getElementById("table").innerHTML  = xhr.responseText;
      }
    }
    xhr.open("POST", "http://kruppert.humanoriented.com/table.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    var sortOrder = document.getElementById("selector").value;
    //alert(sortOrder);
    xhr.send("sortOrder=" + sortOrder);
  }
  </script>
</head>

<body>
<div id="header">
    <div>
      <h1>Top 100 Albums of All Time </h1>
    </div>
  </div>
      <form action="onePage.php" method="POST">
        Ordered by
        <select id="selector" name="sortOrder">
          <option <? if ($sortOrder == "rank") { ?>selected = "selected"<? } ?>value="rank">Rank</option>
          <option <? if ($sortOrder == "year") { ?>selected = "selected"<? } ?>value="year">Year</option>
          <option <? if ($sortOrder == "title") { ?>selected = "selected"<? } ?>value="title">Title</option>
        </select>
        <input type="submit" onclick="replaceList(); return false;"/> 
      </form>
<div id="table">
</div>      
</body>
</html>



