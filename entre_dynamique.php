<?php 
	$communes = file_get_contents("communes.json");
    $comms = json_decode($communes,true);
    if (isset($_POST['submit'])) {
    	echo $_POST['mot'];

    }
    $index = "";
    foreach ($comms as $value_commes) {
    $count = 0;
    	foreach ($value_commes['fokontany'] as $value_fokontany) {
    			$fokontany_name = $value_fokontany["name"];
            // echo $fokontany_name."<br>";

    			$actuel = substr_count(strtolower($fokontany_name), 'a');
        //     	if ($actuel>$count) {
    				// $index = $fokontany_name;
        //     	}
        //         $count = $actuel;
            var_dump($actuel);
        }
    		// echo $index."<br>";
    }        
            // var_dump($actuel);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mampiseho ny fokontany</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="mot" maxlength="1">
		<input type="submit" name="submit" value="Valider">
	</form>
</body>
</html>