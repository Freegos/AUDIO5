<?php 
	class PlayerAudio5 {
		
			public function player($url_video_mp3, $url_video_ogg = NULL, $autoplay = FALSE, $preload = TRUE) {
			echo $url_video_mp3;
			echo $url_video_ogg;

			echo'
			<audio controls preload>
   				<source src="'.$url_video_mp3.'"></source>
		 		<source src="'.$url_video_ogg.'"></source>
			</audio>';

		}
	}
 ?>
