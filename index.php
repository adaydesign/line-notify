<?php
//https://kittinanx.blogspot.com/2017/01/line-notify-php.html

	require_once './vendor/autoload.php';

	$token = 'neIJC7cZ5AAtDKUOftlNMifpiMT3Xcd4ZhftBFB7AvO';
	$ln = new KS\Line\LineNotify($token);

	if(isset($_POST['send'])){
		$text = $_POST['text_input'];
		if(!$text){
			$text = 'ไม่มี ไม่มีหมูลิง แปลกใจจริงจริง หมูลิงไปไหน';
		}
		
		$ln->send($text);
		echo "send '<u>$text</u>' OK...";
	}
	

?>

<form action="" method="POST">
	<input type='text' name='text_input'>
	<button type='submit' name='send'>send</button>
</form>