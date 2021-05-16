<?php
$target = "https://nafidha.it/";
if(isset($_GET['channel'])) {
    switch ($_GET['channel']) {
        case "booking":
            $target = "https://airbnb.com/h/nafidha-touristapartment";
            break;
    }
}
header('Location: '.$target);
exit;
?>