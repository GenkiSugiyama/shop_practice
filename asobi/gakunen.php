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
	$gakunen = $_POST['gakunen'];

	switch($gakunen) {
		case '1':
			$kousha = 'あなたの校舎は南校舎です。';
			$bukatsu = '部活動にはスポーツ系と文化系が有ります。';
			$mokuhyou = 'まずは学校に慣れましょう。';
		break;
		case '2':
			$kousha = 'あなたの校舎は西校舎です。';
			$bukatsu = '学園祭目指して全力で取り組みましょう。';
			$mokuhyou = '今しかできないことを見つけよう。';
		break;
		case '3':
			$kousha = 'あなたの校舎は東校舎です。';
			$bukatsu = '受験に就職に忙しくなります。後輩へ譲っていきましょう。';
			$mokuhyou = '将来への道を作ろう。';
		break;
		default:
			$kousha = 'あなたの校舎は3年生と同じです。';
			$bukatsu = '部活動は有りません。';
			$mokuhyou = '早く卒業しましょう。';
		break;
	}

	print '校舎 '.$kousha.'<br>';
	print '部活 '.$bukatsu.'<br>';
	print '目標 '.$mokuhyou.'<br>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	?>
</body>
</html>