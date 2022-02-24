<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section home__section">
    <div class="uk-container">
        <!--home__block01-->
        <div class="uk-section-xsmall home__block01">
            <ul class="home__block01__subnav uk-subnav uk-subnav-divider uk-flex-center" uk-margin>
                <li><a href="#">Sản phẩm bán chạy</a></li>
                <li><a href="#">Giảm giá theo ngày</a></li>
                <li class="uk-active"><a href="#">Khuyến mại sốc</a></li>
            </ul>
        </div>
        <!--/home__block01-->

        <!--home__blockSlider-->
        <div class="home__blockSlider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1021:382">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="images/1x/slide1.png" alt="" uk-cover>
                </li>
                <li>
                    <img src="images/1x/slide2.png" alt="" uk-cover>
                </li>
            </ul>

            <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center uk-position-small"></ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>
        <!--/home__blockSlider-->

        <!--home__block02-->
        <div class="home__block02 uk-section-xsmall">
            <div class="uk-grid-divider uk-grid-small uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                <div>
                    <div class="uk-flex-middle uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_ship.png" uk-img></div>
                        </div>
                        <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                            <div class="home__block02__txt1">Miễn phí giao hàng</div>
                            <div class="home__block02__txt2">cho đơn hàng từ 500k</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_uudai.png" uk-img></div>
                        </div>
                        <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                            <div class="home__block02__txt1">Nhận nhiều ưu đãi</div>
                            <div class="home__block02__txt2">Đăng ký thành viên</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_qua.png" uk-img></div>
                        </div>
                        <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                            <div class="home__block02__txt1">Giới thiệu nhận quà</div>
                            <div class="home__block02__txt2">Giới thiệu ngay</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex-middle uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block02__icon" data-src="images/1x/icon_hotro.png" uk-img></div>
                        </div>
                        <div class="uk-width-auto@m" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                            <div class="home__block02__txt1">Hỗ trợ trực tuyến</div>
                            <div class="home__block02__txt2">Từ 80AM - 11PM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/home__block02-->

        <div>
            <div class="home__item">
                <div class="home__blockBanner uk-overflow-auto">
                    <div class="uk-child-width-auto uk-flex-nowrap uk-child-width-1-3@m uk-grid-small home__blockBanner__grid" uk-grid>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner1.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner2.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner3.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__item">
                <div class="uk-margin">
                    <nav class="home__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-left">
                            <a href="" class="home__navbar__item home__navbar__title uk-navbar-item uk-logo uk-padding-remove">DANH MỤC SẢN PHẨM</a>
                        </div>

                        <div class="uk-navbar-right uk-visible@m">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"><a href="#">Ngành hàng nhà tắm</a></li>
                                <li><a href="#">Ngành hàng mỹ phẩm</a></li>
                                <li><a href="#">Ngành hàng nhà bếp</a></li>
                                <li><a href="#">Ngành hàng tẩy rửa</a></li>
                            </ul>
                        </div>
                    </nav>
                    <ul class="home__block01__subnav uk-margin-small-top uk-hidden@m uk-subnav uk-subnav-divider" uk-margin>
                        <li class="uk-active"><a href="#">Ngành hàng nhà tắm</a></li>
                        <li><a href="#">Ngành hàng mỹ phẩm</a></li>
                        <li><a href="#">Ngành hàng nhà bếp</a></li>
                        <li><a href="#">Ngành hàng tẩy rửa</a></li>
                    </ul>
                </div>
                <div class="uk-margin">

                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>