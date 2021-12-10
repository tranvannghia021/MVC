<header id="header">
    <div class="grid wide " style="display: flex;justify-content: space-between;">
        <div class="header__logo">
            <a href=""><img src="public/img/logo.png" alt="logo"></a>
        </div>
        <div class="header__list">
            <ul>
                <li> <a href="./index">TRANG CHỦ</a>

                </li>
                <li><a href="./Home/product">SẢN PHẨM</a></li>

            </ul>
        </div>
        <div class="header__icon">
            <ul>
                <li><i class=" icon_search fas fa-search"></i>
                    <div class="subsearch">
                        <form action="">
                            <input type="search" class="input__search" name="" id="" placeholder="Search...">
                            <button type="submit" class="btn__search"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <li><i class="icon__cart fas fa-shopping-cart" onclick="window.location.href='./Home/cart'"></i>
                    <!-- <div class="subcart">

            </div> -->
                </li>
                <li><i class="icon__user fas fa-user"></i>
                    <div class="subuser">
                        <button type="submit" class="btn__login">ĐĂNG NHẬP</button>
                        <button type="submit" class="btn__register">ĐĂNG KÝ</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>