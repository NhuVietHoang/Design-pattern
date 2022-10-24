<?php 
class ConNguoi
{
    private static $name = 'amonymouse';

    public function setName($name)
    {
        self::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

//khởi tạo đối tượng con người
$chuBlog = new ConNguoi();
//set name cho đối tượng
$chuBlog->setName('Vũ Thanh Tài');
//in ra name của đối tượng
echo $chuBlog->getName();
//kết quả: Vũ Thanh Tài
//khởi tạo đối tượng Con người
$nguoixem = new ConNguoi();
//hiển thị ra tên người xem
echo $nguoixem->getName();
//Kết quả: Vũ Thanh Tài