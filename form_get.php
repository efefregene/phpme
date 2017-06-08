<!DOCTYPE html>
<html>
<head>
	<title>GET Form</title>
</head>
<body>
	<?php
		echo "Hello ".$_GET["2ndname"]."!<br>";
		$arr = str_split($_GET["2ndnumber"]);
		for($i = 0; $i<count($arr); $i++){
			if ($arr[$i] % 2 == 0){
				$arr[$i] = "x";
			}
		}
		$number = implode("",$arr);
		echo "$number";
	?>
</body>
</html>