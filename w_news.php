//// name: webest news
/// link: t.me/webestnewsbot
//// API: 5851168804:AAEUUhcEuuzmx_d-iGCI8KxwhxHKDLvWBP8
<?
include('wb_n_clas.php');
$bot_api_key = '5851168804:AAEUUhcEuuzmx_d-iGCI8KxwhxHKDLvWBP8';
$bot_username = 'webest news';


попробуйте {
 // Создать объект API Telegram
     $telegram = новый  Longman \ TelegramBot \ Telegram ($bot_api_key, $bot_username);

 // Set webhook
    $result = $telegram->setWebhook($hook_url);
 if ($result->isOk()) { 
echo $result->getDescription();
 }
} catch (Longman \ TelegramBot \ Exception \ TelegramException  $ e) {
 // регистрировать ошибки telegram
    // echo $e->GetMessage();
$aut=new db ('mysql:host=localhost;dbname=tv','root','root');

print('<!DOCTYPE html><html> 
	<link rel="stylesheet" type="text/css" href="stul.css">
    
    <title>WEBEST NEWS</title>
    <head>
    </head>
<body>

</body>');


?>