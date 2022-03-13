<?php
    //fungsi array shift
    $tims = ["stephen","jack","gray","joni"];
    array_shift($tims);
    foreach($tims as $people){
        echo $people.'<br/>';
    }
?>