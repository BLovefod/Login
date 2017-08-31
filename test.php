<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<!-- html kommentar her -->
<?php
	$a = filter_input(INPUT_GET,'start');
	$b = filter_input(INPUT_GET,'end');
	
	for ($i=$a; $i<=$b; $i++) {
		echo $i;
		
		if($i<$b){ // bla bla
			echo ', ';
		}
		
	}
?>

<hr>

<h1>Foreach array example</h1>

<table border="2">
	<tr><th>Navn</th></tr>

<?php
	$namelist = array('Manfred', 'Jesper', 'Morten');

	foreach($namelist as $nam){
		echo '<tr><td>'.$nam.'</td></tr>';
	}
?>
</table>	
<?php
		echo $namelist[1];

?>

<hr>

<?php
	
	echo 'Denne fil er: '.$_SERVER['PHP_SELF'];
	
	
	?>

</body>
</html>