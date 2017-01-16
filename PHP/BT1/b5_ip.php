<?php 
	print_r("Thông tin: ". "<pre>");
	print_r ("Địa chỉ IP:  ". $_SERVER['REMOTE_ADDR']. "<br>");
	print_r ("Document Root: ". $_SERVER['DOCUMENT_ROOT']. "<br>");
	print_r("Method: ". $_SERVER['REQUEST_METHOD']. "<br>");
	print_r("Self: ". $_SERVER['PHP_SELF']. "<br>");
	print_r("Protocol: ". $_SERVER['SERVER_PROTOCOL']. "<br>");
	print_r("Accept: ". $_SERVER['HTTP_ACCEPT']. "<br>");
	print_r("Accept-Encoding: ". $_SERVER['HTTP_ACCEPT_ENCODING']. "<br>");
	print_r("Accept-Languae: ". $_SERVER['HTTP_ACCEPT_LANGUAGE']. "<br>");
	print_r("Connection: ". $_SERVER['HTTP_CONNECTION']. "<br>");
	print_r("Host: ". $_SERVER['HTTP_HOST']. "<br>");
	print_r("User-Agent: ". $_SERVER['HTTP_USER_AGENT']. "<br>");
	print_r("Referer: ". $_SERVER['HTTP_REFERER']. "<br>");
?>