<?php
$ar = array("Array", "SQL", "PHP", "JAVA", "Android", "Networking", "Data
Science", "AJAX", "JDBC", "Programming");
$s = $_GET['s'];
if (strlen($s) > 0) {
    $search = " ";
    for ($i = 0; $i < count($ar); $i++) {
        if (strtolower($s) == strtolower(substr($ar[$i], 0, strlen($s)))) {
            if ($search == " ")
                $search = $ar[$i];
            else
                $search = $search . " , " . $Sar[$i];
        }
    }
    if ($search == " ") echo "No Suggestions Found....";
    else
        echo $search;
}
// print_r($_GET);
?>