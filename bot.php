<?php
$content= file_get_contents("php://input");
define("API_KEY","301178619:AAGXeirbohMzKfn9mg2FgatgLgGDJgtI6t4");
$pictures = [
    [
        "file"=>"file.png",
        "caption"=>"This is a butiful photo file.png",
        "text"=>"You will recive a wonderfull photo"
    ],
    [
        "file"=>"test.jpg",
        "caption"=>"An imaginary photo from test.jpg",
        "text"=>"You will get this beautifull photo ASAP"
    ]
];
$random_image = $pictures[rand(0,count($pictures)-1)];
sendMessage([
    "text"=>$random_image["text"],
    "chat_id"=>$update->message->chat->id,
    "reply_to_message_id"=>$update->message->message_id
]);
$bot_id = "Status is OK";
echo $bot_id;
function sendMessage($datas){
    $url = "https://panel.botsaz.com/api/bot/sendMessage";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    $datas["api_key"]=API_KEY;
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return json_decode($server_output);
}

?>
