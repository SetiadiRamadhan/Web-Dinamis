<?php
$Daerah = array(
		"Jawa Timur",
		"Jawa Tengah",
		"DIY"=>array(
				"Sleman"=>array(
						"Mlati"=>array("Sinduadi","Sendangadi","Tlogoadi"),
						"Ngaglik",
						"Godean"),
				"Kota Yogyakarta",
				"Bantul",
				"Gunung Kidul"),
		"Jawa Barat");
		
	//echo "<pre>";print_r ($Daerah);
	foreach ($Daerah["DIY"]["Sleman"]["Mlati"] as $val)
	{	
	echo "$val";
	echo "<br>";
	}
	
?>