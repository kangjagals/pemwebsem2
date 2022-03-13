<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];echo '<ol>';
    foreach($buah as $j =>$z) {
        echo '<li>'.$j.' - ' . $z .'</li>';
    }
    echo '</ol>';
    sort($buah);
    echo '<hr/>';
    echo '<ol>';

    foreach($buah as $j =>$z){
        echo '<li>'.$j.' - ' . $z .'</li>';
    }
    echo '</ol>';
?>
</body>
</html>