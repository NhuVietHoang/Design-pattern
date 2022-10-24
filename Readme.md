# DESIGN PATTERN 
* Người thực hiện :Nhữ Việt Hoàng.
Design pattern là các giải pháp tổng thể đã được tối ưu hóa, được tái sử dụng cho các vấn đề phổ biến trong thiết kế phần mềm mà chúng ta thường gặp phải hàng ngày. Đây là tập các giải pháp đã được suy nghĩ, đã giải quyết trong tình huống cụ thể.

## Singleton pattern.
* là mẫu design pattern được sử dụng để đảm bảo rằng mỗi class chỉ có được 1 instance duy nhất và mọi tương tác đều thông qua thể hiện này và mọi tương tác đều thông qua instance này

* Bài toán: khi xây dựng 1 website bằng php và mysql ,chúng ta tạo ra 1 class Database để để quản lý kết nối 
```php
	class Database
{
    private $instance = null;
    public $connection;
 
    private function __construct()
    {
        $host = '';
        $username = '';
        $password = '';
        $database = '';
        $this->connection = new mysqli($host, $username, $password, $database);
    }
 
    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new Database();
        }
         
        return static::$instance;
    }
}


```
-  hàm __contruct ở dạng private nên không thể new ở ngoài class để khởi tạo đối tượng.
-  getInstance là 1 phương thức static nó kiểm tra thuộc tính $instance đã được khởi tạo hay chưa, nếu chưa thì sẽ khởi tạo , nếu rồi thì sẽ trả về kết quả của lần khởi tạo đó.Điều này se giúp việc khởi tạo đối tượng chỉ xảy 1 lần duy nhất dù có gọi đến hàm getInstace.

* Vậy khi nào thì dùng singleton design pattern : là khi muốn 1 class chỉ tạo ra 1 đối tượng xuyên suốt toàn bộ dự án.

## Factory design pattern
* là mẫu design pattern giúp giải quyết tạo ra các đối tượng sản phẩm mà không cần chỉ định các lớp cụ thể của chúng
* Bài toán: xây dựng hệ thống có login bằng facebook , tiktok
```php
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
		echo "vào tóp tóp";
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


```