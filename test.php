<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AUDIO5</title>
</head>
<body>
	<?php 
		require("index.php");

		$url_audio_mp3 = "test.mp3";
		$url_audio_ogg = "test.ogg";

		$player = new PlayerAudio5;
		$player->player_audio($url_audio_mp3, $url_audio_ogg, FALSE, TRUE);
		
	
	 ?>

</body>
</html>