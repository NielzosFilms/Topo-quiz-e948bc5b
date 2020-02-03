<?php

$steden = [
    "Japan"=>"Tokyo",
    "Mexico"=>"Mexico City",
    "USA"=>"Washington D.C.",
    "India"=>"New Delhi",
    "Zuid-Korea"=>"Seoul",
    "China"=>"Peking",
    "Nigeria"=>"Abuja",
    "Argentina"=>"Buenos Aires",
    "Egypt"=>"Cairo",
    "UK"=>"London"
];
$goed = 0;

foreach($steden as $land=>$stad) {
    echo("Welke hoofdstad heeft ".$land.PHP_EOL);
    $antwoord = readline();
    if($antwoord == $stad){
        echo("Correct!".PHP_EOL);
        $goed++;
    }else{
        echo($antwoord." is fout, het goede antwoord is: ".$stad.PHP_EOL);
        echo("...".PHP_EOL);
    }
}
echo("Je hebt ".$goed." van de ".count($steden)." goed!");

?>