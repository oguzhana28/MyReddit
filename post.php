<?php
  // maak een verbinding met MySQL
  $connection = mysql_connect('localhost', 'root','usbw');
	
  // geef aan welke database we willen gebruiken
  mysql_select_db('myreddit');
?>
<html>
<head>
  <title>helden</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<a href="index.php"><img src="logo.png" style=height="200px" width="100px"></a>
<p>HOME</p>
<a class="formulier" href="formulier.php"><img src="menuknop.png" style height="150px" width="100px"></a>
<p>formulier</p>
<div class="center">
<h1> reddit</h1>
<ul>
</ul>
<center>
<table>

   <tr>
	<th>title</th>
	<th>date</th>
	<th></th>
	<th>bron</th>
	</tr>
  <?php
  // maak een query om alle spellen op te vragen
  $query = "select * from myreddit";
  	
  $id = $_GET['id'];
     $result = mysql_query( "SELECT * FROM myreddit WHERE id=" . $id);
  // loop door alle rijen heen
while ($row = mysql_fetch_assoc ($result))
{
  // haal gegevens die we nodig hebben uit de rij
  $myreddit_id = $row["id"];
  $myreddit_title = $row["title"];
  $myreddit_Date = $row["Date"];
    $myreddit_url = $row["url"];
	$myreddit_summary = $row["summary"];
	$myreddit_author = $row["author"];
	
	
  // maak een lijst item aan op de pagina
  echo "

	<tr>
		<td></td>
		<td>$myreddit_Date</td>
	</tr>
		
	<tr>
		<th COLSPAN=3>$myreddit_title</td>
		<td><a href=" . $row["url"] . ">website</a></td>
	</tr>

	<tr>
		<td COLSPAN=3>$myreddit_summary</td>
		<td>$myreddit_author</td>
	</tr>

	";
}

?>

</table></center>
  
</body></div>
</html>
