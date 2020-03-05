<?php
    date_default_timezone_get("Europe/Amsterdam");
    $month = date("n");

    if($month == 3){
        echo "Het is vandaag lente";
    }elseif($month >= 6 && $month <= 9){
        echo "Het is zomer";
    }
?>

