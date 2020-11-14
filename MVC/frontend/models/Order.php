<?php
require_once 'models/Model.php';
class Order extends Model {
  public $id;
  public $fullname;
  public $address;
  public $mobile;
  public $email;
  public $note;
  public $price_total;
  public $payment_status;

  //inserts vào bảng orders
  public function insert(){
      //tạo câu truy vấn insert dạng tham số
      $sql_insert = "INSERT INTO orders(fullname, address, mobile, email, note, price_total, payment_status) VALUES(:fullname, :address, :mobile, :email, :note, :price_total, :payment_status)";
      //thực thi truy vấn vừa tạo
      $obj_insert = $this->connection->prepare($sql_insert);
      //tạo mảng truyền giá trị cho các tham số trong câu truy vấn
      $arr_insert = [
        ':fullname' => $this->fullname,
        ':address' => $this->address,
        ':mobile' => $this->mobile,
        ':email' => $this->email,
        ':note' => $this->note,
        ':price_total' => $this->price_total,
        ':payment_status' => $this->payment_status
      ];
      //thưc thi đối tượng truy vấn
      //do cần trả về id của order vừa insert ,nên execute sẽ ko cần gán biến
      $obj_insert->execute($arr_insert);
      //xử lý để lấy ra id của chính order sau khi execute
      $order_id = $this->connection->lastInsertId();
      return $order_id;

  }
}