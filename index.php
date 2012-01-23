<?php 
	class PlayerAudio5 {
		
			public function player($url_audio_mp3, $url_audio_ogg = NULL, $autoplay = FALSE, $preload = TRUE) {
			echo'
			<audio controls preload>
   				<source src="'.$url_audio_mp3.'"></source>
		 		<source src="'.$url_audio_ogg.'"></source>
		 		
		 		<!-- Version pour les navigateurs ne prenant pas en compte <audio></audio> -->
		 		<object type="application/x-shockwave-flash" data="dewplayer/dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer"> <param name="wmode" value="transparent" /><param name="movie" value="dewplayer.swf" /> <param name="flashvars" value="mp3='.$url_audio_mp3.'&amp;showtime=1" /> 
		 		</object>
			</audio>';

		}
	}
 ?>
