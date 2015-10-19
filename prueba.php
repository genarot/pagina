<?php

include 'config.php';

//en esta parte solo sustraemos los distritos
$a = mysql_query("SELECT * FROM barrios WHERE idd=".$_GET['id']);
    ?>
    <select name="barrio">
    <?php
    while($row = mysql_fetch_array($a))
    {
        $distri= $row['namebarrio'];
        $idd= $row['idb'];
        echo '<option value='.$idd.'>'.$distri.'</option>';
                     
    }
    echo '</select>';
?>
