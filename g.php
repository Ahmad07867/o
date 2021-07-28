 <?php
ob_start();
$API_KEY = "1161119328:AAGaGx3pyaZ3SHL4UQZDT3ywgeHzbvjVvTg";
$sudo = 1165017371;
$admin = "1165017371";
$bot_id       = 1161119328;

define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$Alsh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
$Alsh = file_get_contents($url);
return json_decode($Alsh);}
//••┉┉┉┉┉┉┉┉┉┉┉┉┉••//
$SAIEDZip14 = "alimuhammad2.ml/";
$sting = file_get_contents("sting.txt");
$band = file_get_contents("band.txt");
$start0 = file_get_contents("start1.txt") ;
$yhya5 = file_get_contents("yhya2.txt");
$knat1 = file_get_contents("knat1.txt");
$yhya0 = file_get_contents("yhya0.txt");
$yhya1= file_get_contents("yhya1.txt");
$yhya6 = file_get_contents("yhya3.txt");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
$message_id = $update->message->message_id;
$user          = $update->message->from->username;
$from_user = $message->from->username;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$id   = $message->from->id; 
$_user = $message->from->username; 
$user = "[$_user]";
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$first_name = $message->from->first_name;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;
$yhya = file_get_contents("yhya.txt");
$yhya2 = explode("\n",file_get_contents("yhya4.txt"));
$yhya3 = count($yhya2);
if ($message && !in_array($from_id, $yhya2)) {
    file_put_contents("yhya4.txt", $from_id."\n",FILE_APPEND);
    $yhya3 = count($yhya3);
  }
 $Alsh = "1076555728:AAHhSBtRbv1aJXNV4iI8Y28eYKko_IpeYNY"; #توكن البوت
$ali = "@THTSS"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ $ali ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- بعد الاشتراك اضغط { /start }",

]);return false;}
//------------------//
$Alsh = "1076555728:AAHhSBtRbv1aJXNV4iI8Y28eYKko_IpeYNY"; #توكن البوت
$ali = "@TH1BS"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ $ali ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- بعد الاشتراك اضغط { /start }",

]);return false;}else{if($text == '/start'){
	bot('sendMessage',['chat_id'=>$chat_id,
'text'=>$start0]);
	}} 


if ($text == "/start" or $text == "/start1" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
اهلا بك عزيزي ❤️
في بوت تخمين معرفات ✔️ 
يوجد لدينا قسمين  🌀
_____________________
قسم اول تخمين من خمسة حروف ✔️
اضغط 
-/ok5
_____________________
قسم ثاني تخمين من ستة  حروف ✔️
اضغط 
-/ok6
_____________________
للمزيد عنا خدماتنا 👇👇
اضغط 
/ob
 
",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"جديدنا ✔️❤️",'url'=>"http://t.me/thtss"]],
            ]
        ])
        ]);
}
if($data=="ok1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اهلا بك عزيزي ❤️
في بوت تخمين معرفات ✔️ 
يوجد لدينا قسمين  🌀
_____________________
قسم اول تخمين من خمسة حروف ✔️
اضغط 
-/ok5
_____________________
قسم ثاني تخمين من ستة حروف ✔️
اضغط 
-/ok6
_____________________
 قسم تخمين معرف مميز ✔️
 اضغط 
 -/M6
 _____________________

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
            [['text'=>"جديدنا ✔️❤️",'url'=>"http://t.me/thtss"]],
]])]);}

$code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,5);
$code2 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,5);
$code3 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,5);
$code4 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,5);
$code5 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,5);
$code6 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,5);
$code7 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,5);
$code8 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,5);
$code9 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,5);
$code10 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,5);
if ($text == "/ok5" or $text == "ok5" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        
 ليك تخمين مع ارقام 👇👇
 ______________________
 1 : @$code   🌀
 2 : @$code2 🌀
 3 : @$code3 🌀
 4 : @$code4 🌀
 5 : @$code5 🌀
 ______________________
 ليك تخمين بدون ارقام  👇👇
 ______________________
 1 : @$code6   🌀
 2 : @$code7   🌀
 3 : @$code8   🌀
 4 : @$code9   🌀
 5 : @$code10 🌀
 ______________________
 المطور @ALNASR_12 🤤
 
",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                    [['text'=>"جديدنا ✔️❤️",'url'=>"http://t.me/thtss"]],
            ]
        ])
        ]);
}
$code4 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,6);
$code42 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,6);
$code43 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,6);
$code44 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,6);
$code45 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,6);
$code46 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,6);
$code47 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,6);
$code48 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,6);
$code49 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,6);
$code410 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,6);
if ($text == "/ok6" or $text == "ok6" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        
 ليك تخمين مع ارقام 👇👇
 ______________________
 1 : @$code4   🌀
 2 : @$code42 🌀
 3 : @$code43 🌀
 4 : @$code44 🌀
 5 : @$code45 🌀
 ______________________
 ليك تخمين بدون ارقام  👇👇
 ______________________
 1 : @$code46   🌀
 2 : @$code47   🌀
 3 : @$code48   🌀
 4 : @$code49   🌀
 5 : @$code410 🌀
 ______________________
 المطور @ALNASR_12 🤤
",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                    [['text'=>"جديدنا ✔️❤️",'url'=>"http://t.me/thtss"]],
            ]
        ])
        ]);
}
$code5 = substr(str_shuffle('AASSDDFFGGHHJJKKLLWWXX12345689807'),1,6);
$code52 = substr(str_shuffle('AASSDDFFGGHHJJKKLLWWXX12345689807'),1,6);
$code53 = substr(str_shuffle('AASSDDFFGGHHJJKKLLWWXX12345689807'),1,6);
$code54 = substr(str_shuffle('AASSDDFFGGHHJJKKLLWWXX12345689807'),1,6);
$code55 = substr(str_shuffle('AASSDDFFGGHHJJKKLLWWXX12345689807'),1,6);
$code56 = substr(str_shuffle('W2Y_V1W'),1,5);
$code57 = substr(str_shuffle('J2S_I1L'),1,5);
$code58 = substr(str_shuffle('O0Q_O0D'),1,5);
$code59 = substr(str_shuffle('A2O_F1K'),1,5);
$code510 = substr(str_shuffle('GC0_MN1'),1,5);
if ($text == "/M5" or $text == "M5" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        
 تخمين مع ارقام 👇👇
 ______________________
 1 : @$code5   🌀
 2 : @$code52 🌀
 3 : @$code53 🌀
 4 : @$code54 🌀
 5 : @$code55 🌀
 ______________________
 ليك تخمين بدون ارقام  👇👇
 ______________________
 1 : @$code56   🌀
 2 : @$code57   🌀
 3 : @$code58   🌀
 4 : @$code59   🌀
 5 : @$code510 🌀
 ______________________
 المطور @ALNASR_12 🤤
",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                    [['text'=>"جديدنا ✔️❤️",'url'=>"http://t.me/thtss"]],
            ]
        ])
        ]);
}
if($message->reply_to_message->forward_from->id and $id == $admin){
    bot('sendmessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text
    ]);
}
if($message->voice){
    bot('sendvoice',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'voice'=>$message->voice->file_id,
    ]);
}
if($message->photo){
    bot('sendphoto',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'photo'=>$message->photo->file_id,
    ]);
}
if($message->document){
    bot('senddocument',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'document'=>$message->document->file_id,
    ]);
}
if($message->Sticker){
    bot('sendSticker',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'Sticker'=>$message->Sticker->file_id,
    ]);
}
if($message->video){
    bot('sendvideo',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'video'=>$message->video->file_id,
    ]);
}
if($message->audio){
    bot('sendaudio',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'audio'=>$message->audio->file_id,
    ]);
}

if($text == '/admin' and $from_id == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
👥 أهلاً بك عزيزي $name .

◾️ انت المطور الاساسي للبوت. 
◽️ يمكنك التحكم بجميع الاوامر الاسفل 
◾ ️لمعرفة احصائيات البوت ارسل /co
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
", 
'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[[
['text'=>"⌛️¦ اذاعه خاص"],['text'=>"🖇¦ اذاعه عام توجيه"]
],
[
['text'=>"⚫️¦ اذاعه خاص توجيه"], ['text'=>"📤¦ اذاعه عام"]
], 
[
['text'=>"عدد المشتركين 📊"],['text'=>"📮 الاحصائيات"]
], 
[
['text'=>"تفعيل الدخول ☑️"],['text'=>"تعطيل الدخول ❎"]
], 
[
['text'=>"نشر رسالة 📝"],['text'=>"نص الترحيب 🙋🏻‍♂️"]
], 
[
['text'=>"تفعيل التوجيه 🔄✔️"], ['text'=>"تعطيل التوجيه 🔄❌"]
], 
[
['text'=>"/start"],['text'=>"نسخة إحتياطية 🗂️"]
], 
[
['text'=>"✅ تفعيل البوت"], ['text'=>"❎ تعطيل البوت "]
],
], 
])
]);} 
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

$t =$message->chat->title; 
 
$baageel = file_get_contents("baageel.txt");
if($text == "✅ تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}

if($text == "❎ تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"⚠️┊#المعذرة
⚙┊يوجد صيانه في البوت",
 ]);return false;
}



if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type != "private" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}

if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "/co" || $text == "📮 الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 

▪️¦ عدد المجموعات المفعله : $MoHaMMedd 
📮¦ عدد المشتركين في البوت : $MOhaMMed",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
]);
}
}
if($text == "عدد المشتركين 📊" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" 
	عدد مشتركين البوت هو $yhya3
	", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[

], 
], 
'resize_keyboard'=>true
]) 
]);} 
 
if($text =="تفعيل الدخول ☑️" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔔¦تم تفعيل تنبيه للدخول بنجاح ✔️
",      'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[

], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("yhya2.txt","yhya");
} 
if($text =="/start" and $yhya5 == "yhya" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
أهلاً بك عزيزي المطور
◾️ انت المطور الاساسي للبوت. 
◽️ هناك عضو دخل الى قائمة البوت 
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••
┇الاسمـ :  ◄﴿ $name  ﴾
┇المعرفـ : ◄﴿ @$user ﴾ 
┇الايديـ : ◄﴿ $from_id  ﴾
┇عدد المشترڪين ◄﴿ $MOhaMMed }-
┇عدد المجموعات المفعله ◄﴿ $MoHaMMedd }-
╮─ـ═ـ═─═──╭
┤⏰ـ $date $aa  ﴾◄  
┘─ـ═ـ═─══─╰
√
" 
]);} 
if($text =="تعطيل الدخول ❎" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔕¦تم تعطيل ❎ تنبيه الدخول بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("yhya2.txt");
} 
	if($text =="نشر رسالة 📝" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🗨️¦أرسل رسالتك ليتم إرسالها إلى $yhya3
", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("sting.txt","yhya3");
} 
		if($text !=="إلغاء ❌" and $sting == "yhya3" and $from_id == $admin) {
			bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
💬¦تم إرسال رسالتك 📬 هي
{~  $text  ~} 
		", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
for($i=0;$i<count($yhya2); $i++){
bot('sendMessage', [
'chat_id'=>$yhya2[$i],
'text'=>"$text"
]);
}
unlink("sting.txt") ;
} 
if($text =="تفعيل التوجيه 🔄✔️" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔄¦تم تفعيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("yhya3.txt","yhya");
} 
if($text  and $yhya6 == "yhya" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
{~ $text ~} 
$name ➡️ اسم المرسل
@$username ➡ معرف المرسل
[$from_id](tg://user?id=$from_id) ➡ ايدي المرسل
",'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
} 
	if($text == "تعطيل التوجيه 🔄❌" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔒¦تم تعطيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[

], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("yhya3.txt");
} 
if ($text =="نص الترحيب 🙋🏻‍♂️" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔰¦ أرسل نص الترحيب 🙋🏻‍♂️
"
]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start1.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏻‍♂️¦تم حفط نص الترحيب هو 
{$text} 
 ", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) ]);}

$SAIEDZip14 = "http://aliknde.cf/زخرفة_2020/";
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "نسخة إحتياطية 🗂️" and $from_id == $admin){

$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('', "Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$SAIEDZip14/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
]);
unlink("Backup-$SAIEDZip13.zip");
}
/*نسخة احتياطية 🗂️*/


echo "welcm to bot yhya nesb";
 
