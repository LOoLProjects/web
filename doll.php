<?php
	if (!empty($_POST["user"]))
	{
		$f=fopen("trialconfirm.txt","r");
		$ff=fread($f,filesize("trial.txt"));
		$a=array();
		$v=array();
		foreach (explode("\n",$ff) as $fi=>$val)
		{
			if ($_POST["user"] ==$val)
			{
				array_push($v,$_POST["user"]);
			}else{
				array_push($a,$val);
			}
		}
		$fo=fopen("trialconfirm.txt","w");
		foreach ($a as $f){
			fwrite($fo,"$f\n");
		}
		fclose($fo);
		if (count($v) ==1){
			print_r("[*] ".$_POST["user"]." -> Dibanned!");
		}else{
			print_r("[!] Gagal Membanned,id salah");
		}
	}else{
		print_r("[!] method disallowed");
	}	
?>
