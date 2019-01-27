<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Заказ звонка</title>
	<meta http-equiv="Refresh" content="4; URL=https://www.site-uslugi.ru/">
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
</head>

<body>

	<?php 

$sendto   = "rrotatew@site-uslugi.ru"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usertext = $_POST['text']; // сохраняем в переменную данные полученные из поля c телефонным номером

// Формирование заголовка письма
$subject  = "Заказ звонка с сайта";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "Reply-To: ". strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='height:300px;font-family:Arial,sans-serif,Rasa;'>";
$msg .= "<h1 style='color:black;font-weight:bold;border-bottom:2px solid #000000;'>Заказ с сайта</h1>\r\n";
$msg .= "<p style='color:black;'><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Текст:</strong> ".$usertext."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	print('<script language=javascript>
    swal("Успешно!", "Заявка отправлена!", "success")
</script>');
} else {
	print('<script language=javascript>
    swal("Ошибка!", "Заявка не отправлена!", "error")
</script>');
}

?>

</body>

</html>
