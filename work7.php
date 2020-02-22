<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>work7test1test2test3</title>
</head>
<body>
<?php
for ($i = 1; $i <= 500; $i++) {
	echo $i;
	if ($i % 3 == 0 || preg_match('/3/', $i)) {
		echo '３で割れる';
	}
	echo '<br>';
}
?>
</body>
</html>
