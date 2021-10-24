<?php
	class xuatdate
	{
		function today($today)
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			echo "Hôm nay là " . date("Y/m/d") . "<br>";
			echo "Hôm nay là " . date("Y.m.d") . "<br>";
			echo "Hôm nay là " . date("d-m-Y") . "<br>";
		}	
	}
?>


