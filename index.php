<?php
/*LIDÉÉÉÉÉÉ */
$people[0]['firstname'] = "Zuzka";
$people[0]['lastname'] = "Sahulková";
$people[0]['years'] = 19;
$people[0]['weight'] = 60;
$people[0]['height'] = 170;

$people[1]['firstname'] = "Jaroslav";
$people[1]['lastname'] = "Kašák";
$people[1]['years'] = 18;
$people[1]['weight'] = 90;
$people[1]['height'] = 168;

$people[2]['firstname'] = "Martin";
$people[2]['lastname'] = "Hruška";
$people[2]['years'] = 17;
$people[2]['weight'] = 70;
$people[2]['height'] = 176;

$people[3]['firstname'] = "Nicolas Jan";
$people[3]['lastname'] = "Sefzig";
$people[3]['years'] = 17;
$people[3]['weight'] = 75;
$people[3]['height'] = 195;

$people[4]['firstname'] = "Ondřej";
$people[4]['lastname'] = "Čábelka";
$people[4]['years'] = 17;
$people[4]['weight'] = 75;
$people[4]['height'] = 188;


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
for ($i=0; $i < count($people); $i++)?>
<h2><?= $people[$i]['firstname']['lastname']; ?></h2>
<p><strong>Informace:</strong><?= $people[$i]['years']['weight']['height']; ?></p>
}

?>
</body>
</html>