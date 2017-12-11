<?php
    $email_to 	=   '_s_p_@list.ru'; 			// Можно несколько, через запятую
    $email_from	=   'noreply@babolat.ru'; 			// E-mail отправителя, в духе no-reply@site.com

	function si_create_message($title, $data) {
		$time = date('d.m.Y в H:i');
		$message = "

						<table width='500' cellspacing='0' cellpadding='5' border='1' bordercolor='1' style='border:solid 1px #000;border-collapse:collapse;'>
							<caption align='center' bgcolor='#dededd' style='background:#dededd'>$title</caption>";
			foreach ($data as $key => $val) {
				if ($val != '')
					$message .= '<tr><td bgcolor="#efeeee" style="background:#efeeee">' . $key . ':</td><td>' . $val . '</td>';
			}
			$message .= "<tr><td bgcolor='#efeeee' style='background:#efeeee'>Дата:</td><td>$time</td></tr><tr><td bgcolor='#efeeee' style='background:#efeeee'>IP:</td><td>$_SERVER[REMOTE_ADDR]</td></tr></table>";
		return $message;
	};

    $phone    	=   $_POST['client_phone'];
	$clientname    	=   $_POST['client_name'];
	$town    	=   $_POST['client_town'];
	$store    	=   $_POST['client_store'];

	$picture = "";
    // Если поле выбора вложения не пустое - закачиваем его на сервер
    if (!empty($_FILES['client_image']['tmp_name']))
      {
        // Закачиваем файл
        $path = $_FILES['client_image']['name'];
        if (copy($_FILES['client_image']['tmp_name'], $path)) $picture = $path;
      }


	if (empty($phone) || empty($clientname)){
		die(json_encode(array('success' => 0, 'text' =>  'Заполните все поля')));
	}

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
				$mail_theme = 'Регистрация';
				$text = 'Регистрация';
				switch ($extra) {
					case 1 :
						$text .=  ' с основной формы';
						$code = 3;
					break;
					case 2 :
						$text .=  ' со всплывающей формы';
						$code = 4;
					break;
				}
			break;
		};

    if ($path) {
      $fp = fopen($path,"rb");
      if (!$fp)
      { print "Cannot open file";
        exit();
      }
      $file = fread($fp, filesize($path));
      fclose($fp);
    };

    $name = "image.jpg"; // в этой переменной надо сформировать имя файла (без всякого пути)
    $EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
    $boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.
    $headers    = "MIME-Version: 1.0;$EOL";
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";
    $headers   .= "From: ". $email_from . "$EOL";
    $headers   .= "Reply-To: \"$clientname\"$EOL";

    $multipart  = "--$boundary$EOL";
    $multipart .= "Content-Type: text/html; charset=utf-8$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом html-части
    $multipart .= chunk_split(base64_encode($html));

    $multipart .=  "$EOL--$boundary$EOL";
    $multipart .= "Content-Type: application/octet-stream; name=\"$name\"$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла
    $multipart .= chunk_split(base64_encode($file));

    $multipart .= "$EOL--$boundary--$EOL";

	$text = si_create_message($mail_theme, array(
		'Тема' => $text,
		'Имя' => $clientname,
		'Телефон' => $phone,
		'Город' => $town,
		'Название магазина' => $store,
		'Статистическая информация о заявке' => $_POST['si_engine'],
		'UTM-метки' => $_POST['si_utm']
	));

    if(mail($email_to, $mail_theme, $multipart, $headers)){

        echo json_encode(array('success' => 1, 'id' => $code));

    }else{

       echo json_encode(array('success' => 0, 'text' => $path.'Не удалось отправить сообщение'));

    }
?>