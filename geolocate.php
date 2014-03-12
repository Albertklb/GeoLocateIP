<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php $infos = json_decode(file_get_contents('http://api.hostip.info/get_json.php'), true); ?>
    <pre><?php print_r($infos); ?></pre>
</body>
</html>