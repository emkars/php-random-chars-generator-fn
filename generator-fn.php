<?php

// varsayılanda 10 karakter ile oluşturacaktır

function random($charCount = 10)  {
	$char="abcdefghijklmnoprstuwvyzqx1234567890";
	$s = "";
	for ($k=1;$k<=$charCount;$k++) {
		$h=substr($char,mt_rand(0,strlen($char)-1),1);
		$s.=$h;
	}
	return $s;
}
