<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ((is_numeric($num1)) && (is_numeric($num2))) {
	$message = "掛け算結果:" . ($num1 * $num2);
} else {
	$message = "数字以外が含まれています。";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>計算結果表示テスト２テスト３</title>
</head>
<body>
<p>
<?php echo $message; ?>
</p>
</body>
</html>
