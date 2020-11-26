<?php 
	$communes = file_get_contents("communes.json");
    $comms = json_decode($communes,true);
    $commune_length = count($comms);

    $f = [];


    for ($i=0; $i < $commune_length ; $i++) { 
        foreach ($comms[$i]['fokontany'] as $fokontany) {
            $name = $fokontany['name'];
            if (array_key_exists($name, $f)) {
                ++$f[$name];
            }else{
                $f[$name]=1;
            }
        }
    }
    print_r(array_search(max($f), $f, true));
?>