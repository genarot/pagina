<?php
echo '
<html>
<head>
    <script src="ajax.js"></script>
</head>
<body>';

include 'config.php';

echo '<form name="f" action="">';
//en esta parte solo sustraemos los distritos
$a = mysql_query("SELECT * FROM distritos");
?>
    <select name="distritos" id="" onchange="from(document.f.distritos.value,'barrios','prueba.php')">
<?php
	while($row = mysql_fetch_array($a))
    {
        $distri= $row['namedistrito'];
        $idd= $row['idd'];
        echo '<option value='.$idd.'>'.$distri.'</option>';
                     
    }
    echo '
    </select>
    	<div id="barrios">
     	</div>
</form>
</body>
</html>';
?>
