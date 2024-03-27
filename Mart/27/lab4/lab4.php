<?php
$uname = "Aqil";
$password = "1881";
$entered_uname = "Aqil";
$entered_password = "1881";
$bnum = 1;
do {
	if ($bnum < 4) {
		if ($entered_uname == $uname && $entered_password == $password) {
			echo "Sisteme daxil olundu";
			break;
		} else {
			echo "$bnum";
			echo "Şifrə vəya istifadəçi adı səhvdir!<br>";
			$bnum++;
		}
	} else {
		echo "Hesab bloklandi!";
		break;
	}
}
while ($bnum <= 4);
?>