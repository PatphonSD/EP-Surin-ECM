<? function gentoken($length)
	{
		$token = "";
		$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$chars_length = strlen($chars);
		for($i=0; $i < $length; $i++) $token.= $chars[rand()%$chars_length];
		return $token;
	}
	$code = gentoken(5);
?>