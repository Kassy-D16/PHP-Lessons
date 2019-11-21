<html>
	<head>
		<style>
			
		</style>
	</head>
	<body>
		<form action="runGet.php" method="get">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit" value="Get">
 		</form>
		<form action="runPost.php" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit" value="Post">
 		</form>
		<?php
			$firstVar = "Hello World";
			echo $firstVar;
			echo "<h1 id='cats'>".$firstVar."</h1>";
		?>
	</body>
</html>
