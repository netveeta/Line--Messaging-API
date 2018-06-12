<?php
include 'headbot.php';
// Function Return message
function t1($tt1)
{
	$messages = [
		'type' => 'text',
		'text' => $tt1
		];
	return $messages;
}
$Accesstoken ='vIqVV9lNX5yNkf7r4nm+FFAesNeaypSuYC/OOW9LOiRptDrt0/ELtOJekuhmabamyn5ssrtDODisO/XE2wvauE7MTr1C0xIY84aHbRZRQDRtEojxs7UtkvssK7Y4eS4Xj/r+krB7u9ueoZVAjmOvMwdB04t89/1O/w1cDnyilFU=';
$Gid ='Cbba671d3c1043d9d231a951b25edc69b';
$StrGet = 'hello test';
//$StrGet = 'TEST';
//$messagesToken = t1($A_Token);
//$text = $StrGet;
//$PyGroupid =$_GET["Group_ID"];
//$text = "Test";
	 
//if (!is_null($text))
if (!is_null($StrGet)) {
//if (!empty($_POST)){
	//$text = "ได้รับ Mail จาก :".$return_path."\nหัวข้อ :".$subject."\nเนื่อหา".$plain;
	//$messages = t1($text);
	$messages = t1($StrGet);
	$url = 'https://api.line.me/v2/bot/message/push';
	$data = [
  		
		'to' => $Gid,//Cd301c62d855132ea1bcf698eb38532ed
		'messages' => [$messages]
		];
	$post = json_encode($data);
	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' .$Accesstoken);//$access_token
			
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);//$post
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);
	echo $result . "\r\n";	
	echo $StrGet;
}
echo "Echo Line Bot";
?>
