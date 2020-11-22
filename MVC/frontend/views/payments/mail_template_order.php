<div class="wrap">
    <h2>Cảm ơn bạn đã đặt hàng,
    <h4>Thông tin người mua hàng</h4>
    <table border="1" cellpadding="8" cellspacing="0">
        <tbody>
        <tr>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
        <tr>
            <td><?php echo $info_customer['fullname']; ?></td>
            <td><?php echo $info_customer['mobile']; ?></td>
            <td><?php echo $info_customer['email']; ?></td>
            <td><?php echo $info_customer['address']; ?></td>
        </tr>
        </tbody>
</div>