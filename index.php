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

			if($this->is_ie9() OR $this->is_chrome12() OR $this->$this->$this->$this->$this->is_chrome13() OR $this->$this->$this->$this->is_chrome14() OR $this->$this->$this->is_chrome15() OR $this->$this->is_chrome16() OR $this->is_safari5()) {
				
				echo '<audio src="'.$url_audio_mp3.'" controls preload></audio>';;


			}
			
			


	
		}

		public function player_video() {
			
			
		}
	}
 ?>
