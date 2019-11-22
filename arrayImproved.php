<html>
	<head>
		<style>
			.styling{
				color:blue;
				font-weight:bold;
			}
		</style>
	</head>
	<body>
		<?php
			$firstVar = "Hello World";
			echo $firstVar;
			echo "<h1 id='cats'>".$firstVar."</h1>";
			
			$testArray = array('test1','test2','test3','test4
			');
			echo "<ol>";
			foreach($testArray as $test){
				echo "<li class='styling'>".$test."</li>";
			}
			echo "</ol>";
			
		?>
	</body>
</html>
