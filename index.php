<?php 
	$communes = file_get_contents("communes.json");
    $comms = json_decode($communes,true);
 	
    $somme_commune = 0;
    $somme_fokontany = 0;

 	foreach ($comms as $value_commes) {
 		echo "Commune : ".$value_commes['name'];
 		echo '
 				<table border="2">
 					<thead>
 						<tr>
 							<th>ID</th>
 							<th>name</th>
 						</tr>
 					</thead>
 				<tbody>
 			';
 		$somme_commune = count($comms)." Communes";
 		$somme_fokontany += count($value_commes['fokontany']);

 		foreach ($value_commes['fokontany'] as $value_fokontany) {
 			echo '
 					<tr>
 						<td>'.$value_fokontany["_id"].'</td>
 						<td>'.$value_fokontany["name"].'</td>
 					</tr>
 				';
 		}
 		echo '
 					</tbody>
 				</table>
 				<hr>
 			';
 		echo $somme_fokontany." Fokontany";

 	}

        
?>