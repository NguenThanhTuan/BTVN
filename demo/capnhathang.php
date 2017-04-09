<?php
	session_start();
	if (isset($_POST['submit'])) 
	{
		unset($_SESION['hang']);
		foreach ($_POST['qty'] as $key => $value) 
		{
			if(($value==0) and (is_numeric($value)))
			{
				unset($_SESION['hang'][$key]);
			}
			elseif (((int)$value>0) and (is_numeric((int)$value))) 
			{
				$_SESION['hang'][$key]=$value;
			}
		}
		header('Location:/index.php?action=4');
	}
?>
