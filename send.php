<?php
    $email_to 	=   '_s_p_@list.ru'; 			// Можно несколько, через запятую
    $email_from	=   'noreply@babolat.ru'; 			// E-mail отправителя, в духе no-reply@site.com

	function si_create_message($title, $data) {
		$time = date('d.m.Y в H:i');
		$message = "
			<!doctype html>
				<html>
					<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<title>$title</title>
						<style>
							div, p, span, strong, b, em, i, a, li, td {
								-webkit-text-size-adjust: none;
							}
							td{vertical-align:middle}
						</style>
					</head>
					<body>
						<table width='500' cellspacing='0' cellpadding='5' border='1' bordercolor='1' style='border:solid 1px #000;border-collapse:collapse;'>
							<caption align='center' bgcolor='#dededd' style='background:#dededd'>$title</caption>";
			foreach ($data as $key => $val) {
				if ($val != '')
					$message .= '<tr><td bgcolor="#efeeee" style="background:#efeeee">' . $key . ':</td><td>' . $val . '</td>';
			}
			$message .= "<tr><td bgcolor='#efeeee' style='background:#efeeee'>Дата:</td><td>$time</td></tr><tr><td bgcolor='#efeeee' style='background:#efeeee'>IP:</td><td>$_SERVER[REMOTE_ADDR]</td></tr></table></body></html>";
		return $message;
	};
	$picture = "";

    $phone    	=   $_POST['client_phone'];
	$name    	=   $_POST['client_name'];
	$town    	=   $_POST['client_town'];
	$store    	=   $_POST['client_store'];

	// Если поле выбора вложения не пустое - закачиваем его на сервер
	if (!empty($_FILES['client_image']['tmp_name']))
	{
	  // Закачиваем файл
	  $path = $_FILES['client_image']['name'];
	  if (copy($_FILES['client_image']['tmp_name'], $path)) $picture = $path;
	}

	if ($path) {
      $fp = fopen($path,"rb");
      if (!$fp)
      { print "Cannot open file";
        exit();
      }
      $picture = fread($fp, filesize($path));
      fclose($fp);
    }

	if (empty($phone) || empty($name) || empty($town) || empty($store) || empty($path))
		die(json_encode(array('success' => 0, 'text' =>  'Заполните все поля')));


    $filename = "image.jpg";
    $EOL = "\r\n";

	$type = intval($_POST['send_type']);
	$extra = intval($_POST['send_extra']);

	$text = '';
	$code = 0;
		switch ($type) {
			case 1:
				$mail_theme = 'Заявка';
				$text .= 'Заявка,';
				switch ($extra) {
					case 1 :
						$text .= ' на обратный звонок';
						$code = 1;
					break;
					case 2 :
						$text .= ' на заказ обратного звонка';
						$code = 2;
					break;
				}
			break;
			case 2:
				$mail_theme = 'Заявка';
				$text = 'Заявка';
				switch ($extra) {
					case 1 :
						$text .=  ' с блока "Регистрация ООО ЭКОНОМ 3990 РУБ"';
						$code = 3;
					break;
					case 2 :
						$text .=  ' с блока "Регистрация ООО СТАНДАРТ 6990 РУБ"';
						$code = 4;
					break;
				}
			break;
		}
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $email_from . "\r\n";
    $headers .= "Reply-To: $name\r\n";
	$text = si_create_message($mail_theme, array(
		'Тема' => $text,
		'Имя' => $name,
		'Телефон' => $phone,
		'Город' => $town,
		'Название магазина' => $store,
		'Фото' => $file,
		'Фото2 ' => $path,
		'Статистическая информация о заявке' => $_POST['si_engine'],
		'UTM-метки' => $_POST['si_utm']
	));

    if(mail($email_to, $mail_theme, $text, $headers)){

        echo json_encode(array('success' => 1, 'id' => $code));

    }else{

       echo json_encode(array('success' => 0, 'text' => 'Не удалось отправить сообщение'));

    }
?>