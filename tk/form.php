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

		echo "Ola!, Um aluno se cadastrou! Segue os dados: ";
		echo "Seu nome $name e email $email"; 

		//Peço desculpas, mas nao tenho conhecimento em cURL. 


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