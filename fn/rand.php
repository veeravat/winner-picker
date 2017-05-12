<?php


function getNumber($max){
    $file = file_get_contents("randed.json");
    $randed = json_decode($file,TRUE);
    if(count($randed) == $max ){
        return 'All number has been picked';
    }else{
        $numbers = range(1, $max);
        shuffle($numbers);
        if (in_array($numbers[0], $randed)) {
            return getNumber($max);
        }else{
            array_push($randed,$numbers[0]);
            $count = count($randed);
            $randed = json_encode($randed);
            $file = fopen("randed.json", "w") or die("Unable to open file!");
            fwrite($file, $randed);
            fclose($file);
            return '{"result":"'.$numbers[0].'","total":"'.$count.'"}';
        }
    }
}


echo getNumber(120);
?>
