<?php
	if (!empty($_POST["user"])){
		$f=fopen("trialconfirm.txt","a+");
		fwrite($f,$_POST["user"]."\n");
		fclose($f);
		echo "[+] success.";
	}else{
		echo "method disallowed.";
	}
?>