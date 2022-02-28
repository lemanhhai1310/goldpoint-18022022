<?php $data["title"] = "Chi tiet sp"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="">
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
    </div>
</div>
<div class="danhmuc__section2 uk-section-xsmall uk-background-muted chitietsanpham__section">
    <div class="uk-container">
        <div class="uk-margin">
            <div class="uk-margin-small">
                <div class="uk-grid-5 uk-grid-10-m uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h1 class="uk-h1 danhmuc__title">BÀN CHẢI RĂNG NGƯỜI LỚN</h1>
                    </div>
                    <div class="uk-width-auto@m">
                        <ul class="uk-breadcrumb danhmuc__breadcrumb">
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Ngành hàng nhà tắm</a></li>
                            <li><span>Bàn chải đánh răng</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top">
                <div class="danhmuc__card1 uk-card uk-card-body uk-card-default">
                    <div class="uk-grid-divider uk-grid-match" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid-20" uk-grid>
                                <div class="uk-width-2-5@m">
                                    <div class="uk-margin">
                                        <div class="slider-for">
                                            <?php
                                            $data = array(
                                                'images/imgsp1.png',
                                                'images/imgsp2.png',
                                                'images/imgsp3.png',
                                                'images/imgsp4.png',
                                                'images/imgsp5.png',
                                                'images/imgsp6.png',
                                                'images/imgsp7.png',
                                                'images/imgsp8.png',
                                            );
                                            foreach ($data as $k => $v): ?>
                                                <div>
                                                    <div class="uk-cover-container">
                                                        <img src="<?= $v ?>" alt="" uk-cover>
                                                        <canvas width="570" height="515"></canvas>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <script>
                                            $('.slider-for').slick({
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                infinite: false,
                                                arrows: false,
                                                fade: true,
                                                asNavFor: '.slider-nav'
                                            });
                                        </script>
                                    </div>
                                    <div class="uk-margin-top">
                                        <div class="slider-nav">
                                            <?php
                                            $data = array(
                                                'images/imgsp1.png',
                                                'images/imgsp2.png',
                                                'images/imgsp3.png',
                                                'images/imgsp4.png',
                                                'images/imgsp5.png',
                                                'images/imgsp6.png',
                                                'images/imgsp7.png',
                                                'images/imgsp8.png',
                                            );
                                            foreach ($data as $k => $v): ?>
                                                <div class="slider-nav__item" uk-slideshow-item="<?= $k ?>">
                                                    <div class="uk-cover-container slider-nav__img">
                                                        <img src="<?= $v ?>" alt="" uk-cover>
                                                        <canvas width="80" height="90"></canvas>
                                                        <div class="uk-position-cover slider-nav__img__mask"></div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function(){

                                                $('.slider-nav').slick({
                                                    centerMode: false,
                                                    // infinite: false,
                                                    vertical: false,
                                                    asNavFor: '.slider-for',
                                                    focusOnSelect: true,
                                                    slidesToShow: 4,
                                                    slidesToScroll: 1,
                                                    customPaging: 50,
                                                    prevArrow: '<a href="" class="slider-nav__prevArrow slider-nav__icon uk-position-z-index uk-position-center-left" uk-icon="icon: chevron-left; ratio: 1.5;"></a>',
                                                    nextArrow: '<a href="" class="slider-nav__nextArrow slider-nav__icon uk-position-z-index uk-position-center-right" uk-icon="icon: chevron-right; ratio: 1.5;"></a>',
                                                    onBeforeChange: function() {
                                                        // let's do this after we init the banner slider
                                                        console.log('slider was initialized');
                                                    },
                                                    responsive: [
                                                        {
                                                            breakpoint: 1024,
                                                            settings: {
                                                                vertical: false,
                                                                slidesToShow: 4,
                                                                slidesToScroll: 1,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 960,
                                                            settings: {
                                                                vertical: false,
                                                                slidesToShow: 4,
                                                                slidesToScroll: 1,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 480,
                                                            settings: {
                                                                vertical: false,
                                                                slidesToShow: 4,
                                                                slidesToScroll: 1,
                                                            }
                                                        }
                                                        // You can unslick at a given breakpoint now by adding:
                                                        // settings: "unslick"
                                                        // instead of a settings object
                                                    ]
                                                })
                                                    .on('init', function(event, slick){
                                                        // let's do this after we init the banner slider
                                                        console.log('slider was initialized');
                                                    })
                                                    .on('beforeChange', function(event, slick, currentSlide, nextSlide){
                                                        // then let's do this before changing slides
                                                        console.log('before change');
                                                    })
                                                    .on('afterChange', function(event, slick, currentSlide, nextSlide){
                                                        // finally let's do this after changing slides
                                                        console.log('after change');
                                                    });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-margin-small">
                                        <h1 class="uk-h1 uk-margin-remove chitietsanpham__title">Bàn chải NAVI SUGOI</h1>
                                        <div class="home__card__boxRate">
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                        </div>
                                        <div class="line-clamp-4 danhmuc__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis commodo nisi, eu euismod justo. In hac habitasse platea dictumst. Nullam aliquam sapien non eros dapibus, quis eleifend urna cursus.</div>
                                    </div>
                                    <div class="uk-margin-small">
                                        <div class="uk-margin-small">
                                            <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                                                <div>
                                                    <div class="chitietsanpham__price chitietsanpham__price--new">35.000đ</div>
                                                </div>
                                                <div>
                                                    <del class="chitietsanpham__price chitietsanpham__price--old">50.000đ</del>
                                                </div>
                                                <div>
                                                    <span class="uk-label chitietsanpham__price--sale">giảm 30%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-margin-small-top">
                                            <ul class="uk-list chitietsanpham__list">
                                                <li>Tình trạng:	Còn hàng</li>
                                                <li>Mã sản phẩm:	JPS02</li>
                                                <li>Quy cách: 	24 cây/lốc; 12 lốc/thùng</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="uk-margin-small">
                                        <div class="chitietsanpham__label">Màu sắc:</div>
                                        <div class="uk-child-width-auto uk-grid-10" uk-grid>
                                            <div>
                                                <a href="" class="chitietsanpham__color uk-button uk-button-secondary" style="--color: #009444"><span>Xanh lá</span></a>
                                            </div>
                                            <div>
                                                <a href="" class="chitietsanpham__color uk-button uk-button-secondary" style="--color: #ED1C24"><span>Đỏ cờ</span></a>
                                            </div>
                                            <div>
                                                <a href="" class="chitietsanpham__color uk-button uk-button-secondary" style="--color: #1C75BC"><span>Xanh blue</span></a>
                                            </div>
                                            <div>
                                                <a href="" class="chitietsanpham__color uk-button uk-button-secondary" style="--color: #F15A29"><span>Da cam</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin-small">
                                        <div class="chitietsanpham__label">Vận chuyển</div>
                                        <div class="chitietsanpham__txt">Bạn hãy <a href="">nhập địa chỉ</a> nhận hàng để được dự báo thời gian & chi phí giao hàng chính xác nhất. Sau khi nhập sẽ xuất hiện ở đây.</div>
                                    </div>
                                    <div class="uk-margin-small">
                                        <div class="chitietsanpham__label">Mã ưu đãi</div>
                                        <div class="uk-child-width-auto uk-grid-10" uk-grid>
                                            <div>
                                                <span class="uk-label chitietsanpham__code">Giảm 10% thành viên</span>
                                            </div>
                                            <div>
                                                <span class="uk-label chitietsanpham__code">Giảm 30K giới thiệu thành viên</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin-small-top">
                                        <div class="chitietsanpham__label">Số lượng:</div>
                                        <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                            <div>
                                                <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <a href="" uk-icon="icon: minus-circle"></a>
                                                    </div>
                                                    <div>
                                                        <input class="uk-input uk-form-small uk-border-rounded uk-form-width-xsmall uk-text-center" type="text" placeholder="" value="1">
                                                    </div>
                                                    <div>
                                                        <a href="" uk-icon="icon: plus-circle"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="chitietsanpham__btn chitietsanpham__btn--addtocart uk-button uk-button-default"><span>Thêm vào giỏ hàng</span></a>
                                            </div>
                                            <div>
                                                <a href="" class="chitietsanpham__btn chitietsanpham__btn--buy uk-button uk-button-primary"><span>MUA NGAY</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-5@m">
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-child-width-1-1@m uk-child-width-1-2 uk-g-10 uk-grid-20-m uk-text-center" uk-grid>
                                    <div>
                                        <div class="uk-flex-middle uk-grid-10 uk-flex-center" uk-grid>
                                            <div class="uk-width-1-1">
                                                <div class="home__block02__icon uk-margin-auto" data-src="images/1x/icon_ship.png" uk-img></div>
                                            </div>
                                            <div class="uk-width-1-1" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                                                <div class="home__block02__txt1">Miễn phí giao hàng</div>
                                                <div class="home__block02__txt2">cho đơn hàng từ 500k</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-flex-middle uk-grid-10 uk-flex-center" uk-grid>
                                            <div class="uk-width-1-1">
                                                <div class="home__block02__icon uk-margin-auto" data-src="images/1x/icon_uudai.png" uk-img></div>
                                            </div>
                                            <div class="uk-width-1-1" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                                                <div class="home__block02__txt1">Nhận nhiều ưu đãi</div>
                                                <div class="home__block02__txt2">Đăng ký thành viên</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-flex-middle uk-grid-10 uk-flex-center" uk-grid>
                                            <div class="uk-width-1-1">
                                                <div class="home__block02__icon uk-margin-auto" data-src="images/1x/icon_qua.png" uk-img></div>
                                            </div>
                                            <div class="uk-width-1-1" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                                                <div class="home__block02__txt1">Giới thiệu nhận quà</div>
                                                <div class="home__block02__txt2">Giới thiệu ngay</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-flex-middle uk-grid-10 uk-flex-center" uk-grid>
                                            <div class="uk-width-1-1">
                                                <div class="home__block02__icon uk-margin-auto" data-src="images/1x/icon_hotro.png" uk-img></div>
                                            </div>
                                            <div class="uk-width-1-1" uk-toggle="cls: uk-width-expand; mode: media; media: (max-width: 959.8px)">
                                                <div class="home__block02__txt1">Hỗ trợ trực tuyến</div>
                                                <div class="home__block02__txt2">Từ 80AM - 11PM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin">
            <div class="danhmuc__card1 uk-card uk-card-body uk-card-default">
                <ul class="chitietsanpham__tab" uk-tab>
                    <li class="uk-active"><a href="#">MÔ TẢ SẢN PHẨM</a></li>
                    <li><a href="#">THÔNG TIN CHI TIẾT</a></li>
                    <li><a href="#">ĐÁNH GIÁ</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <li>
                        <article class="uk-article chitietsanpham__article">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis commodo nisi, eu euismod justo. In hac habitasse platea dictumst. Nullam aliquam sapien non eros dapibus, quis eleifend urna cursus. Fusce venenatis, erat sit amet finibus consectetur, mi eros fermentum ante, sed placerat nisl ex nec arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer porttitor pulvinar suscipit. Sed ipsum erat, convallis id maximus sit amet, commodo in lacus. Curabitur elementum suscipit urna sit amet lacinia. Morbi non nulla non justo interdum hendrerit. In hac habitasse platea dictumst.</p>
                            <p>Pellentesque commodo nunc cursus mauris efficitur congue.</p>
                            <p>Nunc sit amet nulla id elit scelerisque suscipit eu eu nunc.</p>
                            <p>Mauris tristique turpis in felis dignissim, nec aliquam magna viverra.</p>
                            <p>Donec rhoncus tellus eu tristique rutrum</p>
                            <p>Nunc nec justo quis quam ultricies congue.</p>
                            <p>Morbi quis lorem convallis, scelerisque dolor non, dignissim nisl.</p>
                            <p>In sed nunc eget urna ullamcorper eleifend.</p>
                            <p>Curabitur a sem tincidunt, congue purus sit amet, consectetur dolor.</p>
                            <p>Etiam egestas metus id ligula pulvinar, sed tempus enim aliquam.</p>
                        </article>
                    </li>
                    <li>Hello again!</li>
                    <li>Bazinga!</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-margin">
            <nav class="home__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <a href="" class="home__navbar__item home__navbar__title uk-navbar-item uk-logo uk-padding-remove">SẢN PHẨM TƯƠNG TỰ</a>
                </div>
            </nav>
        </div>
        <div class="uk-margin">
            <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-3 uk-grid-0-m uk-grid-match uk-flex-center" uk-grid>
                <?php for ($i=1;$i<=4;$i++): ?>
                    <div class="home__column">
                        <div class="home__card uk-border-rounded">
                            <div class="uk-cover-container home__card__img">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <canvas width="400" height="400"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                            <div class="uk-padding-small uk-text-center">
                                <div class="home__card__item">
                                    <div class="home__card__price home__card__price--new">40.000đ</div>
                                    <div class="home__card__price home__card__price--old"><del>50.000đ</del></div>
                                </div>
                                <div class="home__card__item">
                                    <h4 class="uk-h4 uk-margin-remove home__card__title"><a href="">Bàn chải NAVI SUGOI</a></h4>
                                </div>
                                <div class="home__card__item">
                                    <div class="uk-position-relative uk-text-center">
                                        <div class="home__card__boxRate" uk-toggle="cls: uk-position-center; mode: media; media: @m">
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                            <span class="home__card__boxRate__star uk-active"></span>
                                        </div>
                                        <a href="" class="home__card__addCart uk-border-rounded uk-button uk-button-primary"><span>Thêm vào giỏ hàng</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>