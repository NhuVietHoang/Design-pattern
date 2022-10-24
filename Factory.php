<?php
 
 interface SocicalNetworkLogin
 {
	 public function login();
 }
  
 class Facebook implements SocicalNetworkLogin
 {
	 public function login() { 
		echo "vào phây búc";
	  }
 }
  
 class Tiktok implements SocicalNetworkLogin
 {
	 public function login() { 
		echo "vào tiktok";
	  }
 }
 
class SocialNetwork
{
    public static function driver($type)
    {
        if ($type == 'facebook') {
            return new Facebook();
        } else if ($type == 'tiktok') {
            return new Tiktok();
        }
    }
}
 
// Sử dụng
 
$type ='facebook';
$netWork = SocialNetwork::driver($type); // $netWork là đối tượng của lớp Facebook
$netWork->login(); 
 
$type = 'tiktok';
$netWork = SocialNetwork::driver($type); // $netWork là đối tượng của lớp titok
$netWork->login(); 