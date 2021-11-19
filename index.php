<?php

$keyboard[0]['brand'] = "Razer";
$keyboard[0]['type'] = "Mechanická";
$keyboard[0]['color'] = "Černá";
$keyboard[0]['label'] = "BlackWidow V3";

$keyboard[1]['brand'] = "Logitech";
$keyboard[1]['type'] = "Mechanická";
$keyboard[1]['color'] = "Černá";
$keyboard[1]['label'] = "G915 Lightspeed";

$keyboard[2]['brand'] = "Cherry";
$keyboard[2]['type'] = "Mechanická";
$keyboard[2]['color'] = "Růžová";
$keyboard[2]['label'] = "MX Board 8.0";

$keyboard[3]['brand'] = "StealSeries";
$keyboard[3]['type'] = "Mechanická";
$keyboard[3]['color'] = "Černá";
$keyboard[3]['label'] = "Apex Pro TKL";

$keyboard[4]['brand'] = "Asus";
$keyboard[4]['type'] = "Mechanická";
$keyboard[4]['color'] = "Šedá";
$keyboard[4]['label'] = "ROG Claymore";

$keyboard[5]['brand'] = "Roccat";
$keyboard[5]['type'] = "Mechanická";
$keyboard[5]['color'] = "Bílá";
$keyboard[5]['label'] = "Vulcan 122 AIMO";

$people[0]['firstname'] = "Prokop";
$people[0]['lastname'] = "Zeď";
$people[0]['years'] = 14;
$people[0]['weight'] = 60;
$people[0]['height'] = 170;
$people[0]['keyboard'] = $keyboard[3];

$people[1]['firstname'] = "Jaroslav";
$people[1]['lastname'] = "Melichar";
$people[1]['years'] = 16;
$people[1]['weight'] = 75;
$people[1]['height'] = 187;
$people[1]['keyboard'] = $keyboard[2];

$people[2]['firstname'] = "Naco";
$people[2]['lastname'] = "Chata";
$people[2]['years'] = 22;
$people[2]['weight'] = 90;
$people[2]['height'] = 210;
$people[2]['keyboard'] = $keyboard[0];

$people[3]['firstname'] = "Tomáš";
$people[3]['lastname'] = "Jedno";
$people[3]['years'] = 55;
$people[3]['weight'] = 105;
$people[3]['height'] = 177;
$people[3]['keyboard'] = $keyboard[5];

$people[4]['firstname'] = "Andreas";
$people[4]['lastname'] = "Rupp";
$people[4]['years'] = 15;
$people[4]['weight'] = 150;
$people[4]['height'] = 170;
$people[4]['keyboard'] = $keyboard[4];

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
    echo $people[$i]['firstname'] . " " . $people[$i]['keyboard']['brand'] . " " . $people[$i]['keyboard']['type'] . " " . $people[$i]['keyboard']['color'] . " " . $people[$i]['keyboard']['label'];
    ?> <br>
    <?php
}
?>
</body>
</html>