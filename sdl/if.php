<?php
    $num = 2;

    if ($num == 1) {
        echo "$num. Open the file";
    } elseif ($num == 2) {
        echo "$num. Close the file";
    } elseif ($num == 3) {
        echo "$num. Save the file";
    } elseif ($num == 4) {
        echo "$num. Logout";
    } elseif ($num == 5) {
        echo "$num. Choose an option";
    }

    echo "<br>";

    switch ($num) {
        case 1:
            echo "$num. Open the file";
            break;
        case 2:
            echo "$num. Close the file";
            break;
        case 3:
            echo "$num. Save the file";
            break;
        case 4:
            echo "$num. Logout";
            break;
        case 5:
            echo "$num. Choose an option";
            break;
        default:
            break;
    }

    echo "<br>";
?>