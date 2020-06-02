<?php
/*
☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️
🔞The M4nifest0 (MCS) team
ر☠️ is a security team from the Black Hat hacker group
🏴‍☠️that has set up public sites👀
destroyed government sites🦠
and disclosed information around the 
world to enforce people's rights.💀💪
https://t.me/M4nifest0
*/
ob_start();

#define
define('API_KEY','TOKEN'); //TOKEN
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#met
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#variables
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$from_fname = $message->from->first_name;
$first = $update->callback_query->from->first_name;
$username = $update->callback_query->from->username;
$username2 = $update->message->from->username;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$forward_username = $update->message->forward_from_chat->username;
$reply = $message->reply_to_message->forward_from->id;
$reply_username = $message->reply_to_message->forward_from->username;
$from_id = $update->message->from->id;
$admin = "123";//Admin numeric ID
mkdir("data/$chat_id");
$rand = rand(0,21);
$Mehdi = $rand;
$rand2 = rand(0,12345);
$Yousefi = $rand2;
$admin = "1234";//Admin numeric ID 2
$my = file_get_contents("data/$chat_id/mem.txt");
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#functions
function SendMessage($chat_id,$text,$keyboard){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'reply_markup'=>$keyboard]);
}
function edit($chat_id,$meesage_id,$text,$reply_markup){
	bot('editMessageText',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'text'=>$text,
	'reply_markup'=>$reply_markup]);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#start
if($text == "/start"){
    		$user = file_get_contents('Member.txt');
	$members = explode("\n",$user);
	if(!in_array($chat_id,$members)){
		$add_user = file_get_contents('Member.txt');
		$add_user .= $chat_id."\n";
		file_put_contents('Member.txt',$add_user);
	}
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Hello dear user 😇

Welcome to the robot of receiving likes, followers and free views 😎💓

To receive the service, please select one of the following options 👇👇",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Get free likes ❤",'callback_data'=>"like"],['text'=>"Get free followers 👤",'callback_data'=>"folow"]],
	[['text'=>"Get a free view 👀",'callback_data'=>"view"]],
	[['text'=>"Robot charge 🎈",'callback_data'=>"sharj"],['text'=>"Guide 💬",'callback_data'=>"help"]],
  ],'resize_keyboard'=>true])
  ]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#like
if($data == "like"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Dear user 😉
In this section, you can use this package in two ways ✌

In the first part, you can get a chance of 10 to 100 thousand free likes only twice 😁✖

In the next section, you can receive 10 likes for free only once 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Receive as a chance 🚩",'callback_data'=>"shans"],['text'=>"Free 🚀10K",'callback_data'=>"free"]],
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#folow
if($data == "folow"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Dear user 😉
In this section, you can use this package in two ways ✌

In the first part, you can get a chance of 10 to 100 thousand free likes only twice 😁✖

In the next section, you can receive 10 likes for free only once 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Receive as a chance 🚩",'callback_data'=>"shans"],['text'=>"Free 🚀10K",'callback_data'=>"free"]],
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#view
if($data == "view"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Dear user 😉
In this section, you can use this package in two ways ✌

In the first part, you can get a chance of 10 to 100 thousand free likes only twice 😁✖

In the next section, you can receive 10 likes for free only once 😎✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Receive as a chance 🚩",'callback_data'=>"shans"],['text'=>"Free 🚀10K",'callback_data'=>"free"]],
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#sharj
if($data == "sharj"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Well dear friend  ❤

Charging all robot panels in general is as follows 👇👇

💥👉 $Yousefi",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#help
if($data == "help"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"With this robot, you can easily get followers, wallets, etc. for free. 😉❤

So what are you waiting for, try it now ",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#shans
if($data == "shans"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Dear user 😉

Our gift to you number 
💰👉 $hack4lx

To receive your package ✔

Select one to get the following buttons, but if you don't use this section, you don't have a chance. 😒✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Get✔",'callback_data'=>"dar"],['text'=>"FREE 🚀10K",'callback_data'=>"free"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#free
if($data == "free"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"You have successfully selected 10 k🚀 Free Download 
Select one to get the following buttons, but if you don't use this section, you don't have a chance. 😒✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Get✔",'callback_data'=>"dar"],['text'=>"Return",'callback_data'=>"free"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#dar
if($data == "dar"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Dear user  😎

To receive your package, send your Instagram information as follows👇

Example🌀:
User: hack4lx
Paa: hack4lx

If your information is incorrect, you will not receive any messages from the robot ✖",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"🔸 Return 🔸",'callback_data'=>"back"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#back
if($data == "back"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"What are you looking for 😐

Hello my friend | You want free follow | How to like | You also want to visit for free | So what are you waiting for? 😁😂

What do you want now ???",
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Get free likes ❤",'callback_data'=>"like"],['text'=>"Get free followers 👤",'callback_data'=>"folow"]],
	[['text'=>"Get a free view 👀",'callback_data'=>"view"]],
	[['text'=>"Robot charge 🎈",'callback_data'=>"sharj"],['text'=>"Guide 💬",'callback_data'=>"help"]],
  ],'resize_keyboard'=>true])
  ]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#text
if($text == "$text"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"$text",
]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
#panel
elseif($text == "/panel" and $from_id == $admin){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"Hi, welcome to the robot management panel. What can I do?/",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"آمار",'callback_data'=>"am"]],
	[['text'=>"Forward for everyone",'callback_data'=>"forr"],['text'=>"Send to everyone",'callback_data'=>"ersal"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
elseif($data == "am" and $chatid == $admin){
	$user = file_get_contents('Member.txt');
	$member = explode("\n",$user);
	$mem = count($member)-1;
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Robot statistics
	$mem",
	'pars_mode'=>'html',
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Return",'callback_data'=>"bac"]]
],'resize_keyboard'=>true])
]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
elseif($data == "ersal" and $chatid == $admin){
	save("data/$chatid/step.txt","sendall");
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Send your message in text format to make it available to everyone.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
elseif($step == "sendall"){
	save("data/$chat_id/step.txt","none");
		bot('SendMessage',[
		'chat_id'=>$admin,
		'text'=>"The message was successfully delivered to everyone.",
		'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
		$mem = fopen("Member.txt",'r');
		while(!feof($mem)){
			$memuser = fgets($mem);
			bot('SendMessage',[
			'chat_id'=>$memuser,
			'text'=>$text]);
	}
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
elseif($data == "forr" and $chatid == $admin){
	save("data/$chatid/command.txt","forr");
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Forward your message so I can send it to everyone.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
elseif($command == "forr"){
	save("data/$chat_id/command.txt","none");
	$forp = fopen("Member.txt",'r');
	while(!feof($forp)){
		$fakar = fgets($forp);
	bot('ForwardMessage',[
	'chat_id'=>$fakar,
	'from_chat_id'=>$admin,
	'$message_id'=>$message_id]);
	}
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"Your message has been sent to all users.",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"bac"]],
	],'resize_keyboard'=>true])
	]);
}
//====================☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️======================//
elseif($data == "bac" and $chatid == $admin){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"You return to the admin panel.
	
	
	Can i do something?",
	'pars_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"statistics",'callback_data'=>"am"]],
	[['text'=>"forward",'callback_data'=>"forr"],['text'=>"send",'callback_data'=>"SEND"]],
	],'resize_keyboard'=>true])
	]);
}
/*

☠️👊 𝕿𝖍𝖎𝖘 𝕴𝖘 𝕿𝖍𝖊 𝓜4𝓷𝓲𝓯𝓮𝓼𝓽0 𝕿𝖊𝖆𝖒™💪🏴‍☠️
🔞The M4nifest0 (MCS) team
ر☠️ is a security team from the Black Hat hacker group
🏴‍☠️that has set up public sites👀
destroyed government sites🦠
and disclosed information around the 
world to enforce people's rights.💀💪
https://t.me/M4nifest0
*/
?>