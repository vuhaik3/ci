<div id='special_content' class='view_cart'>
  <p class='total'>Bạn đã chọn <span><?php echo $this->cart->total_items(); ?></span> sản phẩm gồm có:</p>
  <table border='1'>
  <tr>
    <th>STT</th>
    <th>Tên SP</th>
    <th>Số Lượng</th>
    <th>Đơn Giá</th>
    <th>Thành Tiền</th>
  </tr>
  <?php
  $stt = 0;
  $class = 0;
  foreach($cart_items as $cart_item){
  $stt++;
  $class = ($class+1)%2;
  ?>
      <tr class='<?php echo 'tr_'.$class; ?>'>
        <td><?php echo $stt; ?></td>
        <td><?php echo $cart_item['name']; ?></td>
        <td><?php echo $cart_item['qty']; ?></td>
        <td><?php echo $cart_item['price']; ?> USD</td>
        <td><?php echo $cart_item['subtotal']; ?> USD</td>
      </tr>
  <?php
  }
?>
    <tr class="total_price">
      <td colspan="5">Tổng số tiền: <span><?php echo $this->cart->format_number($this->cart->total()); ?></span> USD</td>
    </tr>
</table>
</div>