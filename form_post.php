<!DOCTYPE html>
<html>
<head>
	<title>Post Form</title>
</head>
<body>
	<?php
		echo "Hello ".$_POST["1stname"]."!<br>";
		$arr = str_split($_POST["1stnumber"]);
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