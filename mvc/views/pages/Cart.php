<div id="cart" style="margin-top: 50px;height:70vh">
    <div class="row grid wide">
        <div class="col l-8 m-12 c-12">
            <div class="row" style="border-bottom:1px solid #ccc;margin-top:30px;">
                <div class="col l-6 m-6 c-6">SẢN PHẨM</div>
                <div class="col l-2 m-2 c-2">GIÁ</div>
                <div class="col l-2 m-2 c-2">SỐ LƯỢNG</div>
                <div class="col l-2 m-2 c-2">TẠM TÍNH</div>
            </div>
            <div class="row" style="align-items: center;">
                <div class="col l-6 m-6 c-6 cart__img-cart">
                    <button><i class="far fa-times-circle"></i></button>
                    <img src="public/img/san-pham.jpg" alt="">
                    <p>Sát nách bé trai trắng mẫu 1</p>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
                <div class="col l-2 m-2 c-2">
                    <form action="" class="cart__form-quantity">
                        <input onclick="" type='button' value='-' />
                        <input id='1' min='1' name='quantity' type='text' value='1' />
                        <input onclick="" type='button' value='+' />
                    </form>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
            </div>
            <div class="row" style="align-items: center;">
                <div class="col l-6 m-6 c-6 cart__img-cart">
                    <button><i class="far fa-times-circle"></i></button>
                    <img src="public/img/san-pham.jpg" alt="">
                    <p>Sát nách bé trai trắng mẫu 1</p>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
                <div class="col l-2 m-2 c-2">
                    <form action="" class="cart__form-quantity">
                        <input onclick="" type='button' value='-' />
                        <input id='1' min='1' name='quantity' type='text' value='1' />
                        <input onclick="cong(1)" type='button' value='+' />
                    </form>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
            </div>
            <div class="row" style="align-items: center;">
                <div class="col l-6 m-6 c-6 cart__img-cart">
                    <button><i class="far fa-times-circle"></i></button>
                    <img src="public/img/san-pham.jpg" alt="">
                    <p>Sát nách bé trai trắng mẫu 1</p>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
                <div class="col l-2 m-2 c-2">
                    <form action="" class="cart__form-quantity">
                        <input onclick="" type='button' value='-' />
                        <input id='1' min='1' name='quantity' type='text' value='1' />
                        <input onclick="" type='button' value='+' />
                    </form>
                </div>
                <div class="col l-2 m-2 c-2">90.000</div>
            </div>

            <div class="row">
                <div class="col l-6 m-6 c-6"><button class="come-back" onclick="window.location.href='./index.php'">
                        <i class="fas fa-long-arrow-alt-left"></i>
                        Tiếp Tục Xem Sản Phẩm
                    </button></div>
                <div class="col l-6 m-6 c-6"><button class="reload" onclick="window.location.href='./Home/cart'">
                        Cập Nhập Giỏ Hàng
                    </button></div>

            </div>
        </div>
        <div class="col l-4 m-12 c-12" style="margin-top:30px;">
            <div class="cart-end">
                <h1>CỘNG GIỎ HÀNG</h1>
                <div class="cart__tamtinh">Tạm Tính
                    <p>185.000<span>đ</span></p>

                </div>
                <div class="cart__tamtinh">Tổng
                    <p>185.000<span>đ</span></p>

                </div>
                <button class="thanhtoan_end">TIẾN HÀNH THANH TOÁN</button>
                <h1><i class="fas fa-tag"></i> Phiếu ưu đãi</h1>
                <form action="" class="cart__form">
                    <input type="text" name="" id="" placeholder="Mã ưu đãi">
                    <button class="form">ÁP DỤNG</button>
                </form>
            </div>
        </div>
    </div>
</div>