<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Dados coletados</title>
</head>


<body>
	<?php 

		$name = $_POST['name'];
		$email = $_POST['email'];
		$_POST['notification'] = (isset($_POST['notification'])) ?$_POST['notification']:null; //verificar se o usuario nao enviara sem valor

		echo "\nOla!, Um aluno se cadastrou! Segue os dados: ";
		echo "\nSeu nome $name \n";
		echo "email $email \n";
		
		$socket = fsockopen('udp://pool.ntp.br', 123, $err_no, $err_str, 1);


		if ($socket)
		{
   			if (fwrite($socket, chr(bindec('00'.sprintf('%03d', decbin(3)).'011')).str_repeat(chr(0x0), 39).pack('N', time()).pack("N", 0)))
    		{
        	stream_set_timeout($socket, 1);
        	$unpack0 = unpack("N12", fread($socket, 48));
        	echo date('d-m-Y H:i:s', $unpack0[7]);
   		 }

    	fclose($socket);
		} 
	


		/*$url="https://hooks.slack.com/services/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";


		$ch = curl_init($url);
		curl_exec($ch);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);

		var_dump($ch); */
 	?>

</body>
</html>
