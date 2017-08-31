
<?php
	$fn = basename($_SERVER['PHP_SELF']);

// if ($fn == 'p1.php'){ echo 'class="active"'; } 
?>


<nav> 
	<ul>
		<li<?= ($fn == 'p1.php')?' class="active"':'' ?>><a href="p1.php">Page 1</a></li>
		<li<?= ($fn == 'p2.php')?' class="active"':'' ?>><a href="p2.php">Page 2</a></li>		
	</ul>
</nav>
