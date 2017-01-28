<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Xã Hội, Tin Tức Xã Hội</title>
        <link href="css/m-style.css?v=<?=time()?>" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="js/m-script.js" type="text/javascript"></script>
    </head>

    <body>
    	<header>
    		<div class="logo"><img src="images/logo/logo-mobile.png" /></div>
    		<div class="site-name">tintuc.vn</div>
    		<i class="fa fa-bars icon-menu" aria-hidden="true"></i>
            <i class="fa fa-search icon-search" aria-hidden="true"></i>
    	</header>
        <div class="search hidden">
            <input type="text" name="">
            <button>Tìm kiếm</button>
        </div>
        <div class="menu hidden">
            <ul class="list-left">
                <li><a><i class="fa fa-clock-o" aria-hidden="true"></i> Tin 24h</a></li>
                <li><a><i class="fa fa-calendar-o" aria-hidden="true"></i> Sự kiện</a></li>
                <li><a><i class="fa fa-th-large" aria-hidden="true"></i> Tiện ích</a></li>
                <li><a><i class="fa fa-picture-o" aria-hidden="true"></i> Ảnh</a></li>
                <li><a><i class="fa fa-video-camera" aria-hidden="true"></i> Video</a></li>
                <li><a><i class="fa fa-file-text" aria-hidden="true"></i> Tin mới</a></li>
                <li><a><i class="fa fa-book" aria-hidden="true"></i> Tin nhanh</a></li>
            </ul>
            <ul class="list-left list2">
                <li><a href="m-category.php">Xã Hội</a></li>
                <li><a href="m-category.php">Thế Giới</a></li>
                <li><a href="m-category.php">Thể Thao</a></li>
                <li><a href="m-category.php">Giải Trí</a></li>
                <li><a href="m-category.php">Kinh Doanh</a></li>
                <li><a href="m-category.php">Giáo Dục</a></li>
                <li><a href="m-category.php">Công Nghệ</a></li>
                <li><a href="m-category.php">Thời Trang</a></li>
                <li><a href="m-category.php">Sức Khỏe</a></li>
                <li><a href="m-category.php">Khám Phá</a></li>
                <li><a href="m-category.php">Tâm Sự</a></li>
                <li><a href="m-category.php">Thư Giãn</a></li>
            </ul>
        </div>
    	<div class="today">
    		<div class="date">28/01/2017</div>
    		<div class="temperature"></div>
    	</div>

    	<div class="news-featured">
    		<a href="m-detail.php">
    			<img src="http://media.tintuc.vn/uploads/medias/2017/01/28/680x365_crop/ga-bb-baaabVqDaF.jpg" />
    			<div class="news-featured-title">Vì sao gà trống được 'tôn thờ' ở cả phương Đông và phương Tây?</div>
    		</a>
            <div>
                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</span>
                <span class="show-description"><i class="fa fa-chevron-down arrow" aria-hidden="true"></i></span>
                <div class="clear"></div>
            </div>
            <div class="description hidden">Con gà, đặc biệt là gà trống, là vật nuôi được thuần hóa từ rất lâu đời và luôn gắn bó với cuộc sống của...</div>
    	</div>

    	<div class="news-featured-level2">
    		<a>
                <div class="news-f-level2-title">Cúng dâng sao giải hạn đầu năm có phải mê tín dị đoan?</div>
    			<img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/cung-dang-sao-giai-han-dau-nam-co-phai-me-tin-di-doan-bb-baaacKZzqq.jpg">
    			<div class="news-featured-level2-title">Người Việt xưa tin rằng cúng dâng sao có thể giúp con người giải hạn khi tuổi của họ...</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
    		</a>
    	</div>
    	<div class="news-featured-level2">
    		<a>
                <div class="news-f-level2-title">Hình ảnh khác biệt của Sài Gòn giữa ngày thường và Tết</div>
    			<img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/hinh-anh-khac-biet-cua-sai-gon-giua-ngay-thuong-va-tet-bb-baaad3YS9f.jpg">
    			<div class="news-featured-level2-title">Mùng 1 Tết, giao thông nhiều tuyến đường quan trọng ở TP.HCM rất thông thoáng, trái...</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
    		</a>
    	</div>
    	<div class="news-featured-level2">
    		<a>
                <div class="news-f-level2-title">Cười ra nước mắt với những câu thoại đáng suy ngẫm trong Táo quân 2017</div>
    			<img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/20170127235050-ly-bb-baaacd6G12.jpg">
    			<div class="news-featured-level2-title">Táo quân 2017 đã nói khá nhiều tới vấn đề nổi cộm trong năm qua như việc bổ nhiệm...</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
    		</a>
    	</div>
    	<div class="news-featured-level2" style="border-bottom:0px">
    		<a>
                <div class="news-f-level2-title">Đốt pháo ngày Tết có phạm tội?</div>
    			<img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/phaododuong-bb-baaadEsy1m.jpg">
    			<div class="news-featured-level2-title">Đêm giao thừa năm ngoái tôi thấy báo chí đưa ở huyện Yên Lạc, Vĩnh Phúc xuất hiện...</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
    		</a>
    	</div>
        <div class="btn btn-default load-more read-more-hot">Xem tiếp <i class="fa fa-circle-o-notch" aria-hidden="true"></i></div>

        <div class="new-hot-news">
            <div class="hot-news active">TIN HOT</div>
            <div class="new-news">TIN MỚI</div>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/nga-xuat-xuong-hang-loat-chien-dau-co-vo-tien-khoang-hau-bb-baaadtB0bb.jpg">
                <div class="news-featured-level2-title">Nga xuất xưởng hàng loạt chiến đấu cơ 'vô tiền khoáng hậu'</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/trung-quoc-mua-tau-hoa-ten-lua-cua-ukraine-bb-baaabRtupb.jpg">
                <div class="news-featured-level2-title">Trung Quốc mua 'tàu hoả tên lửa' của Ukraine</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/tong-thong-donald-trump-bat-dau-khai-tu-f-35-bb-baaad7I4BR.jpg">
                <div class="news-featured-level2-title">Tổng thống Donald Trump bắt đầu khai tử F-35?</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/dau-xuan-xem-tong-quan-tinh-yeu-cua-ban-nam-2017-bb-baaadhkU3G.jpg">
                <div class="news-featured-level2-title">Xem tổng quan tình yêu của 12 cung hoàng đạo đầu xuân mới</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab" style="border-bottom:0px">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/27/100x100_crop/vo-bb-baaadaFqqS.jpg">
                <div class="news-featured-level2-title">Hốt hoảng vì khoản thưởng 'khủng' của vợ từ ông sếp già</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="btn btn-default load-more read-more-hot">Xem tiếp <i class="fa fa-circle-o-notch" aria-hidden="true"></i></div>

        <div class="category-title">Xã Hội <i class="fa fa-chevron-down arrow-category arrow-category1" aria-hidden="true"></i></div>
        <div class="sub-category sub-category1 hidden">
            <ul>
                <li><a href="m-sub-category.php">Thời Sự</a></li>
                <li><a href="m-sub-category.php">Đời Sống</a></li>
                <li><a href="m-sub-category.php">Giao Thông</a></li>
            </ul>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/16388989-795672023918294-838794666-ojpg-bb-baaacoso4e-bb-baaad1h6k8.jpg">
                <div class="news-featured-level2-title">Tin tức thời sự nổi bật nhất 24h qua (28/1)</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/dau-nam-di-chua-le-phat-nho-dung-pham-phai-nhung-sai-lam-nay-de-nam-moi-binh-an-bb-baaacEXoCn.jpg">
                <div class="news-featured-level2-title">Đầu năm đi chùa lễ Phật nhớ đừng phạm phải những sai lầm này để năm mới bình an</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab" style="border-bottom:0px">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/ha-noi-vang-lang-sang-mung-1-tet-bb-baaad5XDrO.jpg">
                <div class="news-featured-level2-title">Hà Nội vắng lặng sáng mùng 1 Tết</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="btn btn-default read-more">Xem thêm tin Xã Hội <i class="fa fa-arrow-circle-o-right arrow-readmore" aria-hidden="true"></i></div>

        <div class="category-title">Giải Trí <i class="fa fa-chevron-down arrow-category arrow-category2" aria-hidden="true"></i></div>
        <div class="sub-category sub-category2 hidden">
            <ul>
                <li><a href="m-sub-category.php">Thế Giới Sao</a></li>
                <li><a href="m-sub-category.php">Điện Ảnh</a></li>
                <li><a href="m-sub-category.php">Âm Nhạc</a></li>
            </ul>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/150x100_crop/nen-chuyen-lang-sao-28-bb-baaac9Bv0N.jpg">
                <div class="news-featured-level2-title">Chuyện làng sao 28/1: Táo quân 2017 bị cắt nhiều cảnh hay</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/09/150x100_crop/nen-ga-trong-nuoi-con-bb-baaac3yF2X.jpg">
                <div class="news-featured-level2-title">Chuyện 'gà trống nuôi con' đầy nghị lực và đáng trân trọng của các quý ông Vbiz</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab" style="border-bottom:0px">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/27/150x100_crop/nen-chuc-tet-bb-baaabYL9CO.jpg">
                <div class="news-featured-level2-title">Lời chúc Tết Đinh Dậu dí dỏm của dàn diễn viên truyền hình tuổi trẻ tài cao</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="btn btn-default read-more">Xem thêm tin Giải Trí <i class="fa fa-arrow-circle-o-right arrow-readmore" aria-hidden="true"></i></div>

        <div class="category-title">Thể Thao <i class="fa fa-chevron-down arrow-category arrow-category3" aria-hidden="true"></i></div>
        <div class="sub-category sub-category3 hidden">
            <ul>
                <li><a href="m-sub-category.php">Thế Giới</a></li>
                <li><a href="m-sub-category.php">Cup Châu Âu</a></li>
                <li><a href="m-sub-category.php">Bóng Đá Việt</a></li>
            </ul>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/20170107-092228-zing-1-bb-baaacJE3Y6.jpg">
                <div class="news-featured-level2-title">Tết giản dị của HLV vàng thể thao Việt Nam</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2017/01/28/100x100_crop/messi-to-chuc-hon-le-vao-ngay-dac-biet-bb-baaado6A8Z.jpg">
                <div class="news-featured-level2-title">Messi tổ chức hôn lễ vào ngày đặc biệt</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="news-featured-level2 new-hot-tab" style="border-bottom:0px">
            <a>
                <img src="http://media.tintuc.vn/uploads/medias/2016/12/29/100x100_crop/sao-tre-tuoi-ga-1-bb-baaacLuC95.jpg">
                <div class="news-featured-level2-title">Sao tuổi Gà nào sẽ khấy đảo làng bóng đá thế giới trong năm 2017?</div>
                <a class="post-category"><i class="fa fa-clock-o" aria-hidden="true"></i> 03/01/2017 07:32</a>
            </a>
        </div>
        <div class="btn btn-default read-more">Xem thêm tin Thể Thao <i class="fa fa-arrow-circle-o-right arrow-readmore" aria-hidden="true"></i></div>

        <footer>
            <div class="group-social">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="m-category.php">Xã Hội</a></li>
                <li><a href="m-category.php">Thế Giới</a></li>
                <li><a href="m-category.php">Thể Thao</a></li>
                <li><a href="m-category.php">Giải Trí</a></li>
                <li><a href="m-category.php">Kinh Doanh</a></li>
                <li><a href="m-category.php">Giáo Dục</a></li>
            </ul>
            <ul>
                <li><a href="m-category.php">Công Nghệ</a></li>
                <li><a href="m-category.php">Thời Trang</a></li>
                <li><a href="m-category.php">Sức Khỏe</a></li>
                <li><a href="m-category.php">Khám Phá</a></li>
                <li><a href="m-category.php">Tâm Sự</a></li>
                <li><a href="m-category.php">Thư Giãn</a></li>
            </ul>
            <div class="clear"></div>
            <div class="group-new">
                <span><i class="fa fa-clock-o" aria-hidden="true"></i><br>Tin 24h</span>
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i><br>Sự kiện</span>
                <span><i class="fa fa-th-large" aria-hidden="true"></i><br>Tiện ích</span>
                <span><i class="fa fa-picture-o" aria-hidden="true"></i><br>Ảnh</span>
                <span><i class="fa fa-video-camera" aria-hidden="true"></i><br>Video</span>
            </div>
        </footer>
    </body>
</html>