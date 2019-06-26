<?php
	if (!empty($_POST["id"])){
		if (!empty($_POST["url"])){
			$c=curl_init();
			curl_setopt($c,CURLOPT_URL,
				"http://ip-api.com/json/".$_SERVER["REMOTE_ADDR"]);
			curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
			$p=curl_exec($c);
			$o=json_decode($p,true);
			$s=fopen("trial.txt","a+");
			fwrite($s,
				$_POST["id"]." -> ".$_POST["url"]." | ".$o["city"]." - [".$o["query"]."]\n");
			fclose($s);
			echo "[*] register sukses.";
		}else{
			echo "[!] method disallowed.";
		}
	}else{
		echo "[!] method disallowed.";
	}
?>
