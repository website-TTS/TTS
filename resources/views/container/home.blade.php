@extends('index')
@section('container')
    <div class="reponsive" > 
        <div class="Container">
            <a class="nav-reponsive-container-buy" href="./Shopping_Cart/Shopping_Cart.php">
                    <img class="nav-reponsive-container-buy__img" src="./common/img/square-shopping-bag-with-handle.png" alt="Số sản phẩm đã chọn mua">
                    <div class="nav-reponsive-container-buy__txt"><b class="js-buy"><?php //echo tongsl(); ?></b></div>
            </a>
            <!-- <a href="#" class="cd-top">Back To Top</a> -->
            <!-- Banner -->
            <div class="Banner">
                <div class="Banner-bg">
                    <div class="js-Carousel Carousel">
                    <div class="js-CarouselCtx Carousel-content">                       
                        <div class="js-carouselBtn Carousel-content__btn">
                            <img class="nav-reponsive-container-buy__img" src="./common/img/back.png" alt="next">
                        </div>
                        <div class="js-carouselBtn Carousel-content__btn Carousel-content__btn--right">
                            <img class="nav-reponsive-container-buy__img" src="./common/img/next.png" alt="next">
                        </div>
                        <div class="js-carouseList Carousel-content-list">
                            <div class="Carousel-content-list-item" id="Carousel_1">
                                <img src="./common/img/index (0).jpg" alt="#">
                            </div>
                            <div class="Carousel-content-list-item" id="Carousel_2">
                                <img src="./common/img/index (1).jpg" alt="#">
                            </div>
                            <div class="Carousel-content-list-item" id="Carousel_3">
                                <img src="./common/img/index (2).jpg" alt="#">
                            </div>
                            <div class="Carousel-content-list-item" id="Carousel_4">
                                <img src="./common/img/index (3).jpg" alt="#">
                            </div>
                            <div class="Carousel-content-list-item" id="Carousel_5">
                                <img src="./common/img/index (4).jpg" alt="#">
                            </div>
                            <div class="Carousel-content-list-item" id="Carousel_6">
                                <img src="./common/img/index (5).jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="Carousel-nav">
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='1'>
                            <p class="Carousel-nav-item__txt">1</p>
                        </div>
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='2'>
                            <p class="Carousel-nav-item__txt">2</p>
                        </div>
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='3'>
                            <p class="Carousel-nav-item__txt">3</p>
                        </div>
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='4'>
                            <p class="Carousel-nav-item__txt">4</p>
                        </div>
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='5'>
                            <p class="Carousel-nav-item__txt">5</p>
                        </div>
                        <div class="js-carouselNavItem Carousel-nav-item" data-index='6'>
                            <p class="Carousel-nav-item__txt">6</p>
                        </div>
                    </div>
                </div>
                <div class="Banner-content">
                    <a href="#" class="Banner-content__item">
                        <img src="./common/img/index (6).jpg">
                    </a>
                    <a href="#" class="Banner-content__item">
                        <img src="./common/img/index (8).jpg">
                    </a>
                </div>
                </div>
            </div>
            <!-- End banner -->
            <!-- Content -->
            <div class="content">
                <div class="content-info">
                    <div class="content-info-title"><b>Liên hệ với TTS</b></div>
                    <div class="content-info-border"></div>
                    <div class="content-marquee">
                        <marquee onmouseover="stop()" onmouseout="start()"> 
                            Gmail: laptop.TTS@gmail.com
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Hotline: 1900 9999 - (028) 66592222
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Địa chỉ: 37 Đường 3 tháng 2, Phường 12, Quận 10, Tp.HCM
                        </marquee>
                    </div>
                </div>
                <div class="content-sale">
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop DELL</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                                <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Phổ thông</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả ...</a>
                            </div>
                        </div>

                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/DELL/Inspiron_N5590G5/Inspiron_N5590G5_1.png">
                                <p><b>Laptop DELL N5590G5<br></b></p>
                                <p class="content-sale-list-item__price">Giá:44.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/DELL/Alienware_13R3_OLED/Alienware_13R3_OLED_1.jpg">
                                <p><b>Laptop DELL 13R3<br></b></p>
                                <p class="content-sale-list-item__price">Giá:33.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/DELL/G3-N3590/G3-N3590_1.png">
                                <p><b>Laptop DELL G3-N3590<br></b></p>
                                <p class="content-sale-list-item__price">Giá:32.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/DELL/Precision_7510/Precision_7510_3.jpg">
                                <p><b>Laptop DELL Precision 7510<br></b></p>
                                <p class="content-sale-list-item__price">Giá:23.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/DELL/XPS15/XPS15_1.png" >
                                <p><b>Laptop DELL XPS15<br></b></p>
                                <p class="content-sale-list-item__price">Giá:53.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>  
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop ACER</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                            </div>
                        </div>
                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/ACER/Aspire-E5476/Aspire-E5476_1.png">
                                <p><b>Laptop ACER Aspire-E5476<br></b></p>
                                <p class="content-sale-list-item__price">Giá:8.490.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ACER/Nitro-AN515/Nitro-AN515_1.png">
                                <p><b>Laptop ACER Nitro-AN515<br></b></p>
                                <p class="content-sale-list-item__price">Giá:17.090.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ACER/Swift-SF114/Swift1-SF114_1.png">
                                <p><b>Laptop ACER Swift SF114<br></b></p>
                                <p class="content-sale-list-item__price">Giá:8.490.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ACER/Aspire-5/Acer_Aspire_5_A514.jpg">
                                <p><b>Laptop ACER Aspire 5-A514<br></b></p>
                                <p class="content-sale-list-item__price">Giá:11.790.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ACER/Swift_3/Swift_3_SF315.jpg" >
                                <p><b>Laptop ACER Swift 3<br></b></p>
                                <p class="content-sale-list-item__price">Giá:11.490.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>      
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop ASUS</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                            </div>
                        </div>
                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/ASUS/Strix-G531/Strix-G531_1.png" >
                                <p><b>Laptop ASUS G531<br></b></p>
                                <p class="content-sale-list-item__price">Giá:29.490.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ASUS/TUF_FX505DT/TUF_FX505DT_1.png" >
                                <p><b>Laptop ASUS FX505DT<br></b></p>
                                <p class="content-sale-list-item__price">Giá:21.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ASUS/Vivobook-A412/Vivobook-A412_1.png" >
                                <p><b>Laptop ASUS Vivobook<br></b></p>
                                <p class="content-sale-list-item__price">Giá:12.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ASUS/Zenbook_UX333FA/Zenbook_UX333FA_1.png" >
                                <p><b>Laptop ASUS UX333FA<br></b></p>
                                <p class="content-sale-list-item__price">Giá:20.240.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/ASUS/Vivobook_S430FN/Vivobook_S430FN.jpg" >
                                <p><b>Laptop ASUS S430FN<br></b></p>
                                <p class="content-sale-list-item__price">Giá:18.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>      
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop HP</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                                <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                            </div>
                        </div>
                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/HP/HP_Spectre_X360/HP_Spectre_X360_1.jpg">
                                <p><b>Laptop HP Spectre X360<br></b></p>
                                <p class="content-sale-list-item__price">Giá:34.900.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/HP/HP_Zbook_15_G1/HP_Zbook_15_G1_1.jpg">
                                <p><b>Laptop HP Zbook 15-G1<br></b></p>
                                <p class="content-sale-list-item__price">Giá:11.290.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/HP/Pavilion-14/Pavilion-14_1.png">
                                <p><b>Laptop HP Pavilion 14<br></b></p>
                                <p class="content-sale-list-item__price">Giá:15.290.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/HP/Pavilion_Gaming_15/Pavilion_Gaming_15_1.jpg">
                                <p><b>Laptop HP Gaming 15<br></b></p>
                                <p class="content-sale-list-item__price">Giá:27.690.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/HP/Pavilion_15/Pavilion_13_CS055TX.jpg" >
                                <p><b>Laptop HP Pavilion 15<br></b></p>
                                <p class="content-sale-list-item__price">Giá:16.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>      
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop LENOVO</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Doanh Nhân</a>
                                <a href="#" class="content-sale-header-list__txt">Máy Trạm</a>
                                <a href="#" class="content-sale-header-list__txt">Gaming Phổ Thông</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                            </div>
                        </div>
                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/LENOVO/Ideapad_S340/Ideapad_S340_1.png" >
                                <p><b>Laptop LENOVO S340<br></b></p>
                                <p class="content-sale-list-item__price">Giá:11.690.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/LENOVO/Legion_Y540-15/Legion_Y540-15_1.png" >
                                <p><b>Laptop LENOVO Y540 15<br></b></p>
                                <p class="content-sale-list-item__price">Giá:23.999.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/LENOVO/Thinkpad_A485/Thinkpad_A485_1.jpg" >
                                <p><b>Laptop ThinkPad A485<br></b></p>
                                <p class="content-sale-list-item__price">Giá:31.259.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/LENOVO/Thinkpad_P70/Thinkpad_P70_1.jpg" >
                                <p><b>Laptop ThinkPad P70<br></b></p>
                                <p class="content-sale-list-item__price">Giá:30.500.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/LENOVO/Thinkpad_T430/Thinkpad_T430_1.jpg" >
                                <p><b>Laptop Thinkpad T430<br></b></p>
                                <p class="content-sale-list-item__price">Giá:4.900.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>      
                    <div class="content-sale-box">
                        <div class="content-sale-header">
                            <div class="content-sale-header-title">
                                <h3 class="content-sale-header-title__txt">Laptop MSI</h3>
                                <div class="content-sale-bg">
                                    <div class="content-sale-bg1"></div>
                                    <div class="content-sale-bg2"></div>
                                </div>
                            </div>
                            <div class="content-sale-header-list">
                                <a href="#" class="content-sale-header-list__txt">Gaming Cao Cấp</a>
                                <a href="#" class="content-sale-header-list__txt">Đồ Họa</a>
                                <a href="#" class="content-sale-header-list__txt">Xem tất cả...</a>
                            </div>
                        </div>
                        <div class="content-sale-list">
                            <div class="content-sale-list-item">
                                <img src="./common/img/MSI/GF63-9SC/GF63-9SC_1.png" a>
                                <p><b>Laptop MSI GF63-9SC<br></b></p>
                                <p class="content-sale-list-item__price">Giá:24.490.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/MSI/PS42-8MO/PS42-8MO_1.png" >
                                <p><b>Laptop MSI PS42-8MO<br></b></p>
                                <p class="content-sale-list-item__price">Giá:22.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/MSI/GL73/GL73_9TD.png" >
                                <p><b>Laptop MSI GL73-9TD<br></b></p>
                                <p class="content-sale-list-item__price">Giá:24.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/MSI/GS63/GS63_Stealth_8RE.png" >
                                <p><b>Laptop MSI GS63<br></b></p>
                                <p class="content-sale-list-item__price">Giá:34.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                            <div class="content-sale-list-item">
                                <img src="./common/img/MSI/GS65/MSI_GS65_8RE.png">
                                <p><b>Laptop MSI GS65-8RE<br></b></p>
                                <p class="content-sale-list-item__price">Giá:37.990.000 đ</p>
                                <br>
                                <a href="#" class="detail">Chi tiết</a>
                                <a href="./Shopping_Cart/Shopping_Cart.php" class="buy_now" name="add_Cart">Mua ngay</a>
                            </div>
                        </div>
                    </div>              
                </div>
                <div class="content-service">
                    <div class="content-service-bg">
                        <a href="#" class="content-service-content">
                            <img class="content-service-content__img" src="./common/img/shipped.png">
                            <p class="content-service-content__txt" ><b>GIAO HÀNG MIỄN PHÍ</b></p>
                        </a>
                    </div>
                    <div class="content-service-bg">
                        <a href="#" class="content-service-content">
                            <img class="content-service-content__img" src="./common/img/credit-cards-payment.png">
                            <p class="content-service-content__txt" ><b>THANH TOÁN LINH HOẠT</b></p>
                        </a>
                    </div>
                    <div class="content-service-bg">
                        <a href="#"  class="content-service-content">
                            <img class="content-service-content__img" src="./common/img/repairing-service.png">
                            <p class="content-service-content__txt" ><b>BẢO HÀNH TẠI NƠI SỮ DỤNG</b></p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End content -->
        </div>
    </div>
@endsection