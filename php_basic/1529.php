<!DOCTYPE html>
<?php
$sitename = "kevin site";
?>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php
			echo $sitename;
			?>
	</title>
</head>

<body>
	<h1>moveTalk</h1>
	<?php 
		echo "ninhao<br>";
		// know php
		/**
		 * woshizhushi
		 */
		$name = 'kevin';
		 echo 'ninhao'. $name;
		 
		?>
	<?php
		$style = 'color:blue;font-size:23px;';
		?>
	<div style="color: red;">
		<?php
			echo $sitename;
			?>
	</div>
	<div style="<?php echo $style ?>">123456</div>
</body>

</html>