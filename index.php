<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->
<div class="uk-section-small home__block01">
    <div class="uk-container">
        <div class="mb-20 mb-51-m">
            <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC</h2>
        </div>
        <div class="uk-grid-small uk-grid-30-m uk-child-width-1-5@m uk-grid-match" uk-grid>
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
<!--/GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->

<?php require "template-parts/layouts/footer.php"; ?>