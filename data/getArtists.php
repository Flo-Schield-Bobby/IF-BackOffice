<?php

print <<<END
<table>
	<tr>
								<th>Nom</th>
								<th>Genre</th>
								<th>Scène</th>
								<th>Jour</th>
								<th>Heure</th>
							</tr>
END;

include('connection.php');

$getArtistsQuery = sprintf("SELECT nom, genre, jour, scene, debut FROM artists ORDER BY nom");
$getArtistsResult = mysql_query($getArtistsQuery);

while($artistRow = mysql_fetch_assoc($getArtistsResult)){
	echo "<tr>";
	echo "<td width=\"100\">".$artistRow['nom']."</td>";
	echo "<td>".$artistRow['genre']."</td>";
	echo "<td>".$artistRow['scene']."</td>";
	echo "<td>".$artistRow['jour']."</td>";
	echo "<td>".$artistRow['debut']."</td>";
	echo "<td><button type=\"button\" class=\"btn btn-primary\">Plus</button></td>";
	echo "</tr>";
}

echo "</table>";

?>
