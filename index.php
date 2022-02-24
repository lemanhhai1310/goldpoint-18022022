<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-section-xsmall home__block01">
            <ul class="home__block01__subnav uk-subnav uk-subnav-divider uk-flex-center" uk-margin>
                <li><a href="#">Sản phẩm bán chạy</a></li>
                <li><a href="#">Giảm giá theo ngày</a></li>
                <li class="uk-active"><a href="#">Khuyến mại sốc</a></li>
            </ul>
        </div>
        <div class="home__blockSlider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1021:382">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="images/1x/slide1.png" alt="" uk-cover>
                </li>
                <li>
                    <img src="images/1x/slide2.png" alt="" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
        <div class="uk-section-xsmall">
            <div class="uk-grid-divider uk-grid-small uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                <div>
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_ship.png" uk-img></div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block02__txt1">Miễn phí giao hàng</div>
                            <div class="home__block02__txt2">cho đơn hàng từ 500k</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_uudai.png" uk-img></div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block02__txt1">Nhận nhiều ưu đãi</div>
                            <div class="home__block02__txt2">Đăng ký thành viên</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_qua.png" uk-img></div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block02__txt1">Giới thiệu nhận quà</div>
                            <div class="home__block02__txt2">Giới thiệu ngay</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_hotro.png" uk-img></div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block02__txt1">Hỗ trợ trực tuyến</div>
                            <div class="home__block02__txt2">Từ 80AM - 11PM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>