<?php 
    setcookie ("username", "NguyenThanhTuan",time() + 30);
    setcookie ("password", "dv");
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) 
    {
		echo "username: ". $_COOKIE['username']. "</br> password: " .$_COOKIE['password'];
	}
?>