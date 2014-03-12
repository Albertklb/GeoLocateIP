<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    include("assets/geoipcity.inc");
    include("assets/geoipregionvars.php");

    $ip = $_SERVER['REMOTE_ADDR'];

    $gi = geoip_open(realpath("assets/db/GeoLiteCity.dat"),GEOIP_STANDARD);

    $record = geoip_record_by_addr($gi,$_SERVER['REMOTE_ADDR']);
    //$record = geoip_record_by_addr($gi,'208.75.242.38');

    echo $record->country_name . "\n";
    echo $record->country_code . "\n";

    geoip_close($gi);
?>

    <?php $infos = json_decode(file_get_contents('http://api.hostip.info/get_json.php'), true); ?>
    <pre><?php print_r($infos); ?></pre>
</body>
</html>