<?php
    //fungsi array shift
    $tims = ["agung","papau","oura","donkey"];
    array_unshift($tims,"eko","koyur");
    foreach($tims as $people){
        echo $people.'<br/>';
    }
?>