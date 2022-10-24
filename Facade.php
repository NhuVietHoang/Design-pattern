<?php 
class Facebook {
	function share($status, $url) {
	  echo ('Facebook:' . $status . ' from:' . $url);
	}
  }
  
  // Class share gì đó lên Google+.
  class Google {
	function share($url) {
	  echo ('Shared on Google+:' . $url);
	}
  }
  
  // Class tweet lên Twitter
  class Twitter {
	function tweet($url, $title) {
	  echo ('Tweet url:' . $url . ' title:' . $title);
	}
  }
class ShareFacade {
	protected $facebook;    
	protected $googleplus;   
	protected $twitter;    
  
	// Các đối tượng được truyền vào phương thức khởi tạo  
	function __construct($facebookObj,$googleObj,$twitterObj) {
	  $this->facebook= $facebookObj;
	  $this->google= $googleObj;
	  $this->twitter= $twitterObj;
	}  
  
	// Phương thức này thực hiện tất cả các yêu cầu chia sẻ lên mạng xã hội
	function share($url,$title,$status) {
	  $this->facebook->share($status, $url);
	  $this->googleplus->share($url);
	  $this->twitter->tweet($url, $title);
	}
}
// Tạo đối tượng
$facebookObj = new Facebook();
$googleplusObj   = new Google();
$twitterObj  = new twitter();

// Truyền các đối tượng này cho ShareFacade
$shareObj = new ShareFacade($facebookObj, $googleplusObj, $twitterObj);

// Gọi một phương thức để chia sẻ tất cả lên mạng xã hội
$shareObj->share('VNPGroup.com', 'Dok123', 'TTS DOK123');