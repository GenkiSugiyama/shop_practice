<?php 
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login']) == false) {
		print 'ログインできません。 <br>';
		print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
		exit();
	} else {
		print $_SESSION['staff_name'];
		print 'さんログイン中<br>';
		print '<br>';
	}
?>
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
	// 自作のsanitize関数を使うためにcommon.phpを読み込む
	require_once('../common/common.php');

	// staff_add.phpから受け取った値が入っている$_POSTを引数に指定
	$post = sanitize($_POST);
	// サニタイズされた値が入った連想配列$postからそれぞれの値を代入
  $staff_name = $post['name'];
  $staff_pass = $post['pass'];
  $staff_pass2 = $post['pass2'];

  if($staff_name == '') {
    print'スタッフ名が入力されていません。 <br>';
  } else {
    print'スタッフ名：';
    print $staff_name;
    print'<br>';
  }

  if($staff_pass == '') {
    print'パスワードが入力されていません。 <br>';
  }

  if($staff_pass != $staff_pass2) {
    print'パスワードが一致しません。 <br>';
  }

  if ($staff_name == '' || $staff_pass == '' || $staff_pass != $staff_pass2) {
    print'<form>';
    print'<input type="button" onclick="history.back()" value="戻る">';
    print'</form>';
  } else {
    $staff_pass = md5($staff_pass);
    print'<form method="post" action="staff_add_done.php">';
    print'<input type="hidden" name="name" value="'.$staff_name.'">';
    print'<input type="hidden" name="pass" value="'.$staff_pass.'">';
    print'<br>';
    print'<input type="button" onclick="history.back()" value="戻る">';
    print'<input type="submit" value="OK">';
    print'</form>';
  }
  ?>
</body>
</html>