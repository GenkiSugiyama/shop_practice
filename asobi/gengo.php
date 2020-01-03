<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ろくまる農園</title>
</head>
<body>
	<?php

	require_once('../common/common.php');

	$seireki = $_POST['seireki'];

	$wareki = gengo($seireki);
	print $wareki;
	print '<input type="button" onclick="history.back()" value="戻る">';
	?>
</body>
</html>