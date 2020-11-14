<?php
//nhsung các file
require_once 'configs/PHPMailer/src/PHPMailer.php';
require_once 'configs/PHPMailer/src/SMTP.php';
require_once 'configs/PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';

class PaymentController extends Controller {
  public function index() {
      //xử lý submit form, khi user click thanh toán
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
      if(isset($_POST['submit'])){
          //gán biến trung gian cho dễ thao tác
          $fullname = $_POST['fullname'];
          $address = $_POST['address'];
          $mobile = $_POST['mobile'];
          $email = $_POST['email'];
          $note = $_POST['note'];
          $method = $_POST['method'];
          //validate form : 3 trường fullname, address mobile và email
          //ko dk để trống + email phải đúng dịnh dạng
          if(empty($fullname) || empty($address) || empty($mobile) || empty($email)){
              $this->error = 'fullname hoặc address hoạc email hoặc email ko được để trống';
          }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
              $this->error = 'email ko đúng dịnh dạng';
          }
          //xử lý luuw thông tin đơn hàng chỉ khi ko có lỗi xảy ra
          if(empty($this->error)){
              //lưu thông tin đơn hàng vào bảng orders trước
              $order_model = new Order();
              //gán các giá trị của đơn hàng cho thuộc tính tương ứng của model
              $order_model->fullname = $fullname;
              $order_model->mobile = $mobile;
              $order_model->address = $address;
              $order_model->email = $email;
              $order_model->note = $note;
              //xử lý cho trường payment_status : trjang thái thanh toán
              //đơn hàng, mặc dịnh khi mới đặt hàng thì sẽ = 0
              //bên backend sẽ cần có chức năng update lại trang thái thanh toán
              $order_model->payment_status = 0;
              //xử lsy cho trường pricw_total : tổng giá trị đơn hàng
              //bằng cách lặp mảng giỏ hàng , cộng dồn thành tiền
              $price_total = 0;
              foreach ($_SESSION['cart'] AS $product_id => $cart){
                  $price_total += $cart['price'] * $cart['quantity'];
              }
              $order_model->price_total = $price_total;
              // bình thường khi insert vào bảng thì trả về boolean, tuy
              //nhiên với trường hợp này sẽ cần trả về id của chính đơn hàng
              //vừa insert , vì còn phải lưu vào bảng order_details
              $order_id = $order_model->insert();
              //var_dump($order_id);
              //sau bước tri=ên lấy dk order_id , tiếp theo sẽ lưu tiếp vào bảng
              //order_details - bảng này mô tả dơn hàng có các sản phẩm nào
              //số luwojgn tương ứng là bao nhiêu
              $order_detail_model = new OrderDetail();
              //lặp giỏ hàng ddeed lưu các thông tin vè product_id và quantity vào bảng order_details
              foreach ($_SESSION['cart'] AS $product_id => $cart){
                    $order_detail_model->order_id = $order_id;
                    $order_detail_model->product_id = $product_id;
                    $order_detail_model->quantity = $cart['quantity'];
                    $is_insert = $order_detail_model->insert();
              }

              //gửi mail cho khách hàng
             // $body = $this->render('views/payments/mail_template_order');
             // $this->sendMail($email,$body);
              //kiểm tra phương thức thanh toán user muốn là gì, dựa vào key method
              //nếu là thanh toán trực truyến thì chuyển hướng tới trang ngân lượng
              if($method == 0){
                  $_SESSION['payment_info']=[
                      'price_total' => $price_total,
                      'fullname' => $fullname,
                      'email' => $email,
                      'mobile' => $mobile
                  ];
                  header("Location: index.php?controller=payment&action=online");
                  exit();
              }else{
                  header("Location: index.php?controller=payment&action=thank");
                  exit();
              }
          }
      }

    //Lấy nội dung view payment
    $this->content =
        $this->render('views/payments/index.php');
    //Gọi layout để hiển thị nội dung view vừa lấy đc
    require_once 'views/layouts/main.php';
  }
    //phương thức gửi mail
    public function sendMail($email,$body)
    {
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    //$mail->setFrom('from@example.com', 'Mailer');
    // Add a recipient
    $mail->addAddress($email);               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
 //   $mail->addCC('cc@example.com');
 //   $mail->addBCC('bcc@example.com');

    // Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }

    //hiển thị trang thanh toán ngân lượng
    public function online()
    {
        $this->content = $this->render('configs/nganluong/index.php');
        echo $this->content;
    }
}