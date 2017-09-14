<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Refresh" content="4; url=">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Спасибо за Вашу заявку</title>
 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<?php 
 
$sendto   = "257681@mail.ru"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userinf = $_POST['text'];
// Формирование заголовка письма
$subject  = "Новая заявка на Реабилитация на дому";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Дополнительная информация:</strong> ".$userinf."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "
	</div>
	<div class="row reb">
		<div class="col-sm-12 text-center"><h1 class="dha"><br><br>Спасибо. Ваша заявка отправлена. Мы обязательно ответим Вам в ближайшее время. <br><br></div>
	</div>";
} else {
    echo "	</div>
	<div class="row reb">
		<div class="col-sm-12 text-center"><h1 class="dha"><br><br>Произошел сбой отправки. Извините. Мы уже рабоатаем над этим. Попробуйте оставить заявку позднее или обратитесь к нам по телефону: <strong>8 (915) 101 50 25</strong> <br><br></div>
	</div>";
}
 
?>
	<div class="row text-center">
	<div class="col-sm-2"></div><br><br><br><br><br>
	<div class="col-sm-8"></div>
	<div class="col-sm-2"></div>
	</div>
	<div class="hFooter"></div>
    </div>
	<div class="footer"></div>
</body>