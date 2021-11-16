<?php

$keyboard[0]['capacity'] = 215;          
$keyboard[0]['speed'] = "950 kmh";
$keyboard[0]['weight'] = "41,145kg";      
$keyboard[0]['wingspan'] = "35.8 m";

$keyboard[1]['capacity'] = 4;          
$keyboard[1]['speed'] = "230 km/h";
$keyboard[1]['weight'] = "757 kg";
$keyboard[1]['wingspan'] = "11 m";

$keyboard[2]['capacity'] = 2;          
$keyboard[2]['weight'] = "57 kg";
$keyboard[2]['wingspan'] = "18 m";

$keyboard[3]['capacity'] = 1;            
$keyboard[3]['speed'] = "870 km/h";
$keyboard[3]['weight'] = 	"3.800 kg";
$keyboard[3]['wingspan'] = "12,51 m";

$keyboard[4]['capacity'] = 475;         
$keyboard[4]['speed'] = "850 km/h";
$keyboard[4]['weight'] = 	"640 000 kg";
$keyboard[4]['wingspan'] = "88 m";

$keyboard[5]['capacity'] = 19;		   
$keyboard[5]['speed'] = "388 km/h";
$keyboard[5]['weight'] = 	"6400 kg";
$keyboard[5]['wingspan'] = "14,424 m";



$people[0]['firstname'] = "John";
$people[0]['lastname'] = "Slechta";
$people[0]['age'] = "36";
$people[0]['hoursflown'] = "1500";
$people[0]['medicalcondition'] = "perfect";
$people[0]['keyboard'] = $keyboard[1];

$people[1]['firstname'] = "Brian";
$people[1]['lastname'] = "Fletcher";
$people[1]['age'] = "48";
$people[1]['hoursflown'] = "3500";
$people[1]['medicalcondition'] = "glasess";
$people[1]['keyboard'] = $keyboard[2];


$people[2]['firstname'] = "Conor";
$people[2]['lastname'] = "Mcdonald";
$people[2]['age'] = "55";
$people[2]['hoursflown'] = "6680";
$people[2]['medicalcondition'] = "perfect";
$people[2]['keyboard'] = $keyboard[3];

$people[3]['firstname'] = "Paul";
$people[3]['lastname'] = "Donald";
$people[3]['age'] = "28";
$people[3]['hoursflown'] = "400";
$people[3]['medicalcondition'] = "overweight";
$people[3]['keyboard'] = $keyboard[4];

$people[4]['firstname'] = "Jake";
$people[4]['lastname'] = "Mcdonald";
$people[4]['age'] = "60";
$people[4]['hoursflown'] = "8000";
$people[4]['medicalcondition'] = "high_heart_presure";
$people[4]['keyboard'] = $keyboard[5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $people[$i]['firstname'] . " " . $people[$i]['keyboard']['capacity'] . " " . $people[$i]['keyboard']['speed'] . " " . $people[$i]['keyboard']['weight'] . " " . $people[$i]['keyboard']['wingspan'];
    ?> <br>
    <?php
}
?>
</body>
</html>