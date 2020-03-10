<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - your bot token received earlier */

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "1104541730:AAEoFUDBllkOmZXTrKCop2EwrKuqY2c744c";
$chat_id = "1062888063";



$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
   echo "Сообщение отправлено. Спасибо Вам, " . $name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='https://hunt2020.pw'>Вернуться на сайт.</a>";
} else {
  echo "Error";
}

?>
