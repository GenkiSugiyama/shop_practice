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
	$tsuki = $_POST['tsuki'];

	$yasai[] = '';
	$yasai[] = 'ブロッコリー';
	$yasai[] = 'カリフラワー';
	$yasai[] = 'レタス';
	$yasai[] = 'みつば';
	$yasai[] = 'アスパラガス';
	$yasai[] = 'セロリ';
	$yasai[] = 'ナス';
	$yasai[] = 'ピーマン';
	$yasai[] = 'オクラ';
	$yasai[] = 'さつまいも';
	$yasai[] = '大根';
	$yasai[] = 'ほうれん草';

	if ( $tsuki >= 1 && $tsuki <= 12) {
	print $tsuki;
	print '月は';
	print $yasai[$tsuki];
	print 'が旬です。<br>';
	print '<input type="button" onclick="history.back()" value="戻る">';
  } else {
		print '正しい月を入力してください。<br>';
		print '<input type="button" onclick="history.back()" value="戻る">';
	}
	?>
</body>
</html>