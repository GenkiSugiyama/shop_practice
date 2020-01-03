<?php
// 自作関数を管理するためのファイルを作成しそこに自作関数を記述していく
// 実際に使用する場合は使用するファイルで「require_once(pass_to_functionfile)」で関数が記述されているファイルを読み込み使用する

function gengo($seireki) {
	if (1868 <= $seireki && $seireki <= 1911) {
		$gengo = '明治';
	}

	if (1912 <= $seireki && $seireki <= 1925) {
		$gengo = '大正';
	}

	if (1926 <= $seireki && $seireki <= 1988) {
		$gengo = '昭和';
	}

	if (1989 <= $seireki) {
		$gengo = '平成';
	}

	return($gengo);
}


?>