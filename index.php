<?php 
	class Media5 {
			public function __construct() {
				$ua = $_SERVER['HTTP_USER_AGENT'];
			}

			public function accept_ogg() {
				return(preg_match("(Chrome/12|Chrome/13|Chrome/14|Chrome/15|Chrome/16|Chrome/17|Chrome/18|Firefox/5|Firefox/6|Firefox/7|Firefox/8|Firefox/9|Opera/11.5|Opera/12)"i, $ua));
			}

			public function accept_mp3() {
				return(preg_match("(MSIE 9.|Chrome/12|Chrome/13|Chrome/14|Chrome/15|Chrome/16|Chrome/17|Chrome/18|Safari 5.0)"i, $ua));
			}

			

			public function player_audio($url_audio_mp3, $url_audio_ogg = NULL, $autoplay = FALSE, $preload = FALSE) {

			if($this->accept_ogg() AND $preload = TRUE AND $autoplay = TRUE) {
				echo '<audio src="'.$url_audio_ogg.'" controls preload autoplay></audio>';;
			}		
			elseif($this->accept_ogg() AND $preload = TRUE AND $autoplay = FALSE) {
				echo '<audio src="'.$url_audio_ogg.'" controls preload></audio>'
			}
			elseif($this->accept_ogg() AND $preload = FALSE AND $autoplay = TRUE) {
				echo '<audio src="'.$url_audio_ogg.'" controls autoplay></audio>';;
			}
			elseif($this->accept_ogg() AND $preload = FALSE AND $autoplay = FALSE) {
				echo '<audio src="'.$url_audio_ogg.'" controls></audio>'
			}
			
			if($this->accept_mp3() AND $preload = TRUE AND $autoplay = TRUE) {
				echo '<audio src="'.$url_audio_mp3.'" controls preload autoplay></audio>';;
			}		
			elseif($this->accept_mp3() AND $preload = TRUE AND $autoplay = FALSE) {
				echo '<audio src="'.$url_audio_mp3.'" controls preload></audio>'
			}
			elseif($this->accept_mp3() AND $preload = FALSE AND $autoplay = TRUE) {
				echo '<audio src="'.$url_audio_mp3.'" controls autoplay></audio>';;
			}
			elseif($this->accept_mp3() AND $preload = FALSE AND $autoplay = FALSE) {
				echo '<audio src="'.$url_audio_mp3.'" controls></audio>'
			}

			elseif($autoplay = TRUE AND $preload = TRUE) {
				echo '<audio controls preload autoplay>
					<source src="'.$url_audio_mp3.'">
					<source src="'.$url_audio_ogg.'">
					<object data="test.mp3">
						<param name="src" value="test.mp3">
						<param name="autoplay" value="true">
					</object>
				</audio>';
			}
			elseif($autoplay = TRUE AND $preload = FALSE) {
				echo '<audio controls autoplay>
					<source src="'.$url_audio_mp3.'">
					<source src="'.$url_audio_ogg.'">
					<object data="test.mp3">
						<param name="src" value="test.mp3">
						<param name="autoplay" value="true">
					</object>
				</audio>';
			}
			elseif($autoplay = FALSE AND $preload = TRUE) {
				echo '<audio controls preload>
					<source src="'.$url_audio_mp3.'">
					<source src="'.$url_audio_ogg.'">
					<object data="test.mp3">
						<param name="src" value="test.mp3">
						<param name="autoplay" value="false">
					</object>
				</audio>';
			}
			elseif($autoplay = FALSE AND $preload = FALSE) {
				echo '<audio controls>
					<source src="'.$url_audio_mp3.'">
					<source src="'.$url_audio_ogg.'">
					<object data="test.mp3">
						<param name="src" value="test.mp3">
						<param name="autoplay" value="false">
					</object>
				</audio>';
			}
			


	
		}

		public function player_video() {
			
			
		}
	}
 ?>
