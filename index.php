<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT-->
<div class="home__block02 uk-background-norepeat uk-light uk-position-relative uk-background-cover uk-background-center-center" data-src="images/ARTS1218.jpg" uk-img>
    <div class="uk-position-cover uk-overlay uk-overlay-primary"></div>
    <div class="uk-position-relative uk-position-z-index uk-section">
        <div class="uk-container uk-container-small">
            <div class="mb-20 mb-60-m">
                <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT</h2>
            </div>
            <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small uk-grid-62-m" uk-grid>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN <br> <span>LÀM VIỆC THỰC TẾ</span> <br> TỪ NĂM THỨ 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    CÓ CƠ HỘI <br> TRẢI NGHIỆM <br> <span>HỌC KỲ Ở NƯỚC NGOÀI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN <br> <span>HỌC TẬP BẰNG <br> TIẾNG ANH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN ĐƯỢC <br> <span>NHÀ <br> TUYỂN DỤNG <br> CHÀO ĐÓN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT-->

<!--ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC FPT NGAY-->
<?php require "template-parts/layouts/block01.php"; ?>
<!--/ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC FPT NGAY-->

<!--GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->
<div class="uk-section-small home__block01">
    <div class="uk-container">
        <div class="mb-20 mb-51-m">
            <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC</h2>
        </div>
        <div class="home__block01__box2" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
            <div uk-toggle="cls: uk-flex-nowrap; mode: media; media: (max-width: 959px)" class="uk-grid-small uk-grid-30-m uk-child-width-1-5@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'cls' => 'fz1',
                        'src' => 'images/box1/img1.png',
                        'title' => 'TOP 200',
                        'desc' => 'Troờng Đại học đào tạo
Quản trị Kinh doanhtốt nhất thế giới(Eduinversal xếp hạng)',
                    ),
                    array(
                        'cls' => 'fz2',
                        'src' => 'images/box1/img2.png',
                        'title' => 'CHẤT LƯỢNGGIÁO DỤC QUỐC GIA',
                        'desc' => 'Đạt kiểm định chất lượng
Đại học FPT đoợc tự chủ
trong mở ngành và
liên kết đào tạo',
                    ),
                    array(
                        'cls' => 'fz1',
                        'src' => 'images/box1/img3.png',
                        'title' => 'Sao Khuê',
                        'desc' => 'Nhiều năm liền đạt
giải thưởng Sao Khuê
uy tín cho đơn vị đào tạoCNTT hệ Chính quy xuất sắc',
                    ),
                    array(
                        'cls' => 'fz2',
                        'src' => 'images/box1/img4.png',
                        'title' => 'ASOCIOAward 2018',
                        'desc' => 'Troờng Đại học đào tạo
Công nghệ Thông tin
xuất sắc tại Châu Á',
                    ),
                    array(
                        'cls' => 'fz3',
                        'src' => 'images/box1/img5.png',
                        'title' => 'TOP 2',
                        'desc' => 'Troờng Đại học đào tạo
Quản trị Kinh doanhtốt nhất Việt Nam(Eduniversal xếp hạng
số 1 năm 2020)',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-flex uk-flex-column uk-text-center home__block01__box1">
                            <div class="mb-15">
                                <div class="home__block01__box1__img uk-flex uk-flex-center uk-flex-middle">
                                    <img class="uk-responsive-height uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center uk-flex-middle mb-10" style="min-height: 49px;">
                                <div class="home__block01__box1__title <?= $v['cls'] ?>"><?= $v['title'] ?></div>
                            </div>
                            <div class="uk-flex-1">
                                <span class="home__block01__box1__desc"><?= $v['desc'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->

<!--top50-->
<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .animation; delay: 300; repeat: false" class="uk-section uk-padding-remove-bottom uk-overflow-hidden uk-height-medium uk-background-norepeat uk-background-top-center" style="min-height: 442px" data-src="images/bg1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="" uk-grid>
            <div class="uk-width-expand">

            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-3-5 uk-width-1-1@m">
                        <img class="animation" src="images/Layer1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/top50-->

<?php require "template-parts/layouts/footer.php"; ?>