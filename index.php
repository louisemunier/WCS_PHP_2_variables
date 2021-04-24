<?php

$filmName = 'Indiana Jones and the Last Crusade';
$isSaw = false;
$releaseyear = '1989';
$score = 8.1;
$isSaw = $isSaw ? 'Oui' : 'Non';

?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <title>Variables</title>
</head>

<body>
    <ul>
        <li><?php echo $filmName; ?></li>
        <li><?php echo $isSaw; ?></li>
        <li><?php echo $releaseyear; ?></li>
        <li><?php echo $score; ?></li>
    </ul>
</body>



