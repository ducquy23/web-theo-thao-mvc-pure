<?php get_header('');
// show_array($cart)
?>
<style>
    .footer {
        margin-top: 100px;
    }
</style>
<div class="header-bottom">
    <p class="header-bottom__home">
        <a href="?role=client&mod=home" class="header-bottom__link">Trang chủ / </a>
        Giỏ hàng
    </p>
</div>
<div class="main-cart">
    <div class="main-cart__heading">
        <h2 class="main-cart__title">GIỎ HÀNG CỦA BẠN</h2>
        <p class="main-cart__status">Có 1 sản phẩm trong giỏ hàng</p>
    </div>
    <?php if (isset($cart)) { ?>
        <form action="" method="post">
            <div class="main-cart__table">
                <table>
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart['buy'] as $values) : ?>
                            <tr>
                                <td style="display: flex;">
                                    <img src="/public/uploads/<?php echo $values['thumbnail'] ?>" alt="" class="main-cart__img">
                                    <h3 class="main-cart__name"><?php echo $values['title'] ?></h3>
                                </td>
                                <td class="main-cart__price"><?php echo number_format($values['price']) ?><sup><u>đ</u></sup></td>
                                <td><input type="number" min="1" max="30" name="quantity[<?php echo $values['id']?>]" value="<?php echo $values['quantity'] ?>"></td>
                                <td class="main-cart__price"><?php echo number_format($values['sub_total']) ?><sup><u>đ</u></sup></td>
                                <td><a href="?role=client&mod=cart&action=delete&id=<?php echo $values['id'] ?>"><i class='bx bx-message-square-x' style="color: red;"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="cart__update">
                <input type="submit" id="update_cart" name="btn_update" class="btn-update" value="Cập nhật giỏ hàng">
            </div>
        </form>
    <?php } else { ?>
        <?php echo "Giỏ hàng đang trống" ?>
    <?php  } ?>
    <div class="main-cart__info">
        <div class="main-cart__note">
            <h3>GHI CHÚ ĐƠN HÀNG</h3>
            <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
        </div>
        <div class="main-cart__info-product">
            <div class="main-cart__order">Thông tin đơn hàng</div>
            <div class="main-cart__total">Tổng tiền : <span class="main-cart__total-price"><?php echo number_format($total) ?><sup><u>đ</u></sup></span></div>
            <div class="main-cart__content">
                Phí vận chuyển sẽ được tính ở trang thanh toán.<br>
                Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
            </div>
            <a href="?role=client&mod=cart&action=pay">
                <button class="main-cart__pay">
                    THANH TOÁN
                </button>
            </a>
            <p class="main-cart__continute"><a href="?role=client&mode=home" class="main-cart__link"><i class='bx bx-arrow-back'></i>Tiếp tục mua hàng</a></p>
        </div>
    </div>
</div>
<?php get_footer('') ?>