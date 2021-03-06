@extends('frontend')

@section('slider')
    <section id="slider-homepage">
        <div class="hero-slide slick-slide "
             style="background: rgb(0, 0, 0); width: 1903px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear;"
             id="slide-01" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option"
             aria-describedby="slick-slide00">
            <div class="container-fluid">
                <div class="row hero-content">
                    <div class="col-sm-6 text-center content-left">
                        <img src="/frontend/image/text1.png" alt="Bạn có đang âu lo về vấn đề sinh lý" class="img-first"
                             data-animation="fadeIn">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-4" data-animation="fadeInLeft" data-delay="0.5s"
                                 style="animation-delay: 0.5s;">
                                <img src="/frontend/image/hinh1.png" alt="">
                                <p class="text-center">Trên bảo <br> dưới không nghe</p>
                            </div>
                            <div class="col-sm-4 col-4" data-animation="fadeIn" data-delay="0.6s"
                                 style="animation-delay: 0.6s;">
                                <img src="/frontend/image/hinh2.png" alt="">
                                <p class="text-center">Chưa xung trận <br> súng đã cướp cò</p>
                            </div>
                            <div class="col-sm-4 col-4" data-animation="fadeInRight" data-delay="0.5s"
                                 style="animation-delay: 0.5s;">
                                <img src="/frontend/image/hinh3.png" alt="">
                                <p class="text-center">Suy giảm <br> ham muốn tình dục</p>
                            </div>
                        </div>
                    </div>
                    <img class="img-right" src="/frontend/image/man-sad.png" alt="" data-animation="fadeInRight"
                         data-delay="0s" style="animation-delay: 0s;">

                </div>
            </div>
        </div>
        <div class="hero-slide slick-slide"
             style="background: url('/frontend/image/bg.png'); width: 1903px; position: relative; left: -1903px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear;"
             id="slide-02" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option"
             aria-describedby="slick-slide01">
            <div class="container-fluid">
                <div class="row hero-content ">
                    <div class="col-sm-6 text-center content-left">
                        <h2 data-animation="fadeIn" data-delay="0.4s" class="" style="animation-delay: 0.4s;">Sự
                            thật là <span>90% Quý ông</span></h2>
                    </div>
                    <div class="clearfix content-color">
                        <div class="col-sm-6 text-center">
                            <p class="text-content" data-animation="fadeInUp" data-delay="0.5s"
                               style="animation-delay: 0.5s;">Cảm nhận rõ rệt <br>sự thay đổi chất lượng <br> “cuộc
                                yêu” <br>chỉ sau 7 ngày sử dụng</p>
                            <img src="/frontend/image/logo-nam-vuong-manh-luc.png" alt="Nam Vương Mãnh Lực" class="img-logo"
                                 data-animation="fadeInLeft" data-delay="0.5s" style="animation-delay: 0.5s;">
                        </div>
                    </div>
                    <img class="img-right" src="/frontend/image/reviewsp.png" data-animation="fadeInLeft" data-delay="0.5s"
                         style="animation-delay: 0.5s;">

                </div>
            </div>
        </div>
        <div class="hero-slide slick-slide "
             style="background: url('/frontend/image/bg1.png'); width: 1903px; position: relative; left: -3806px; top: 0px; z-index: 999; opacity: 1;"
             id="slide-03" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option"
             aria-describedby="slick-slide02">
            <div class="container-fluid">
                <div class="row hero-content">

                    <div class="col-sm-7 text-center content-left order-sm-2 order-md-2">
                        <img src="/frontend/image/logo2.png" alt="Nam Vương Mãnh Lực" data-animation="fadeInDown"
                             data-delay="0.3s" class="img-second" style="animation-delay: 0.3s;">
                        <img src="/frontend/image/slogan.png" alt=" Nâng tầm sung mãn" data-animation="fadeInUp"
                             data-delay="0.5s" class="img-third animated fadeInUp" style="animation-delay: 0.5s;">
                    </div>
                    <div class="col-sm-5 text-center order-sm-1 order-md-1">
                        <img class="img-first" src="/frontend/image/sp2.png" alt="Nam Vương Mãnh Lực"
                             data-animation="fadeInLeft" data-delay="0.2s" style="animation-delay: 0.2s;">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('content')
    <section id="chart" class="clearfix">
        <div class="container">
            <h3 class="text-center">
                <strong>Bạn có biết</strong>
                <br>Trên 40% đàn ông Việt đang
                <span>đối mặt</span> với các vấn đề do yếu sinh lý gây ra?
            </h3>
        </div>
    </section>
    <section id="digital-number">
        <div class="container">
            <div class="row">
                <div class="col">
                <span class="icon">
                    <img src="/frontend/image/hon-nhan-do-vo.png" alt="">
                </span>
                    <span class="text">43% hôn nhân đổ vỡ</span>
                    <p>Do thiếu SEX</p>
                </div>
                <div class="col">
                <span class="icon">
                    <img src="/frontend/image/nam-gioi-hiem-muon.png" alt="">
                </span>
                    <span class="text">55% trường hợp
                </span>
                    <p>Hiếm muộn là do nam giới
                    </p>
                </div>
                <div class="col">
                <span class="icon">
                    <img src="/frontend/image/vo-chong-hiem-muon.png" alt="">
                </span>
                    <span class="text">~ 1 triệu vợ chồng</span>
                    <p>Trong độ tuổi sinh sản khó có con</p>
                </div>
            </div>
        </div>
    </section>
    <section id="nguyennhan">
        <div class="container">
            <h2>Nguyên nhân yếu sinh lý
            </h2>
            <div class="content">
                <ul>
                    <li> Do lối sống và thói quen sinh hoạt thiếu khoa học.</li>
                    <li>Do tâm lý lo lắng, căng thẳng hay tình cảm nguội lạnh.</li>
                    <li>Do bệnh lý như viêm liệu đạo, viêm tinh hoàn, viêm tiền liệt tuyến...</li>
                    <li>Tuổi tác dần cao khiến nội tiết tố testosterol suy giảm.</li>
                    <li>Tác dụng phụ của việc sử dụng một số loại thuốc như huyết áp, tim mạch, tiểu đường ...</li>
                    <li>Thói quen lạm dụng thủ dâm.</li>
                </ul>
                <div class="cta">
                    <p class="title">Bạn cần tư vấn?</p>
                    <p>Hãy gọi cho chuyên gia của chúng tôi theo số điện thoại sau</p>
                    <p class="text-center">
                        <a href="tel:01669 943 882" class="btn btn-primary">
                            <span class="icon"></span> 01669 943 882</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="hauqua">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <h2 class="s-title">Hậu quả của bệnh yếu sinh lý</h2>
                    <ul>
                        <li>Yếu sinh lý làm hao tổn 30 - 50% thể lực, khiến sức lao động giảm sút.</li>
                        <li>Yếu sinh lý khiến phái mạnh rơi vào trạng thái khủng hoảng tinh thần nghiêm trọng.</li>
                        <li>Yếu sinh lý làm rạn nứt tình cảm vợ chồng.</li>
                        <li>Yếu sinh lý khởi nguồn cho liệt dương.</li>
                        <li>Yếu sinh lý gây rối loạn cương dương, rối loạn xuất tinh và suy giảm ham muốn, khoái cảm tình
                            dục.
                        </li>
                        <li>Yếu sinh lý tiềm ẩn nguy cơ vô sinh cao.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="sailam">
        <div class="container">
            <h3 class="s-title">Sai lầm khi sử dụng các biện pháp kích dục
            </h3>
            <div class="row">
                <div class="col-md-3 col-left">
                    <h2 class="strong-title">Thông tin bạn cần biết</h2>
                    <p class="text-justify">Được sản xuất dưới nhiều dạng khác nhau, khá tiện dụng, thuốc kích dục là một
                        trong những biện pháp cho hiệu quả tức thời được nhiều cánh mày râu lựa chọn, tuy nhiên, sản phẩm
                        này lại tiềm ẩn nhiều biến chứng vô cùng nguy hiểm.</p>
                </div>
                <div class="col-md-9 col-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media ">
                                <img class="mr-3 " src="/frontend/image/thuoc-kich-duc.png" alt="Thuốc kích dục">
                                <div class="media-body">
                                    <p>
                                        Không có bất kỳ loại thuốc kích dục nào được lưu hành hợp pháp trên thế giới.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media ">
                                <img class="mr-3 " src="/frontend/image/thuoc-nhap-lau.png" alt="Thuốc kích dục nhập lậu">
                                <div class="media-body">
                                    <p>
                                        Thuốc kích dục được rao bán là hàng lậu, không được kiểm nghiệm, hàm lượng độc tố
                                        rất cao.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media ">
                                <img class="mr-3 " src="/frontend/image/giam-chat-luong-tinh-trung.png"
                                     alt="Giảm chất lượng tinh trùng">
                                <div class="media-body">
                                    <p>
                                        Sử dụng thuốc kích dục lâu dài sẽ làm dương vật mất cảm giác, liệt dương, sơ hóa
                                        dương vật, giảm chất lượng tinh trùng, dẫn tới vô sinh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media ">
                                <img class="mr-3 " src="/frontend/image/thuoc-xit-keo-dai.png" alt="Thuốc xịt kéo dài">
                                <div class="media-body">
                                    <p>
                                        Các loại thuốc xịt, bao cao su kéo dài thời gian quan hệ chỉ mang tính tạm thời, tốn
                                        kém chi phí và có thể gây dị ứng cho cả nam và nữ.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-6 content">
                    <h2 class="text-center">Làm chủ cuộc yêu với<span>Nam Vương Mãnh Lực</span></h2>
                    <img src="/frontend/image/sp2.png" class="sanpham">
                </div>
                <div class="col-sm-5 col-6">
                    <img src="/frontend/image/man.png" alt="">
                </div>

            </div>

        </div>
    </section>
    <section id="nguongoc">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>Nguồn gốc của <span>Nam Vương Mãnh Lực</span></h2>
                    <div class="content text-justify">
                        <p> “Nam Vương Mãnh Lực - Sản phẩm của Đông Dược Cổ Truyền và Thuốc Dân Tộc Phúc Linh - là sự kết tinh từ những dược liệu quý hiếm, tinh hoa  của các dân tộc ở vùng cực Bắc Tây Nguyên, được các bậc tiền nhân truyền dạy “bí kíp” bào chế, cùng những kinh nghiệm được tích lũy qua nhiều thế hệ của người Gia Rai. Trong cổ thư của dân tộc này từng ghi chép lại việc Vua Mèo Vương Chí Sình vì mê mẩn thứ “thần dược sung sướng” của người Gia Rai, đã lặn lội trèo đèo lội suối băng rừng hàng trăm cây số để xin cho kỳ được công thức bào chế bí kíp duy trì tuổi thanh xuân sung mãn.</p>
                        <p>Trên nền tảng này, Đông Dược Cổ Truyền và Thuốc Dân Tộc Phúc Linh đã phát triển và hoàn thiện thành sản phẩm Nam Vương Mãnh Lực  - Giải pháp vàng cho đấng mày râu thời hiện đại. Giúp khắc phục triệt để các trường hợp rối loạn cương dương, dương vật không đủ cương, xuất tinh sớm, giảm ham muốn tình dục...Tăng cường nồng độ hoocmon nội sinh nam giới giúp cải thiện sinh lý nam, tăng xúc cảm và hưng phấn tình dục, kéo dài thời gian quan hệ....”
                        </p>

                        <p><a target="_blank" class="readmore"
                              href="{{'http://namvuongmanhluc.com/bai-viet/nam-vuong-manh-luc-bi-an-than-duoc-sung-suong-cua-nguoi-gia-rai-7'}}">Tìm
                                hiểu thêm</a></p>
                    </div>

                </div>
                {{--<div class="col-md-5">--}}

                    {{--<div class="embed-responsive embed-responsive-16by9">--}}
                        {{--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-qSLp44q2qQ"--}}
                                {{--frameborder="0"--}}
                                {{--allow="autoplay; encrypted-media" allowfullscreen=""></iframe>--}}
                    {{--</div>--}}
                    {{--<h4>Nam Vương Mãnh Lực - Bí ẩn phòng the của người Thái Đen</h4>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <section id="thanhphan">
        <div class="container">
            <h3>Thành phần <span>Nam Vương Mãnh Lực</span></h3>
            <div class="content">
                <p>Thành phần của bài thuốc: Lộc Nhung, Nhân Sâm, Dâm Dương Hoắc, Bạch Tật Lê, Câu Kỳ Tử, Ba Kích, Nhục Thung Dung, Trâu Cố, Bá Bệnh (hàm lượng cao 320mg), L-Arginin, Kẽm, Vitamin E,... và nhiều thảo dược quý hiếm
                    khác.
                </p>
            </div>
            <div class="row ">
                <div class="col">
                    <a href="#" data-toggle="modal" data-target=".modal-lg-thanh-phan">
                        <img src="/frontend/image/loc-nhung.png" alt="">
                        <p>Lộc Nhung</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#" data-toggle="modal" data-target=".modal-lg-thanh-phan">
                        <img src="/frontend/image/nhan-sam.png" alt="">
                        <p>Nhân Sâm</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#" data-toggle="modal" data-target=".modal-lg-thanh-phan">
                        <img src="/frontend/image/dam-duong-hoac.png" alt="">
                        <p>Dâm dương hoắc</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#" data-toggle="modal" data-target=".modal-lg-thanh-phan">
                        <img src="/frontend/image/nhuc-thung-dung.png" alt="">
                        <p>Nhục thung dung</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#" data-toggle="modal" data-target=".modal-lg-thanh-phan">
                        <img src="/frontend/image/ba-kich.png" alt="">
                        <p>Ba kích</p>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section id="congdung">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <h2>Công dụng <span>Nam Vương Mãnh Lực Cho Nam Giới</span></h2>
                    <ul>
                        <li>Bổ thận tráng dương, sinh tinh bổ huyết giúp tăng cường sinh lực nam giới.</li>
                        <li>Tăng cường nồng độ hoocmon nội sinh nam giới giúp cải thiện sinh lý nam, tăng xúc cảm và hưng phấn tình dục.</li>
                        <li>Điều trị tất cả các trường hợp rối loạn cương dương, dương vật không đủ cương, xuất tinh sớm.</li>
                        <li>Điều trị các trường hợp chất lượng tinh trùng kém, đau lưng, mỏi gối, ù tai, chóng mặt, mệt mỏi, di tinh, mộng tinh, tiểu rắt, hay đi tiểu đêm.</li>
                        <li>Giúp nam giới lấy lại sinh lực, hồi phục sức mạnh, sự trẻ trung, sung mãn, phong độ, sức chịu đựng và mang lại sức sống tràn trề.</li>
                        <li>Điều trị suy giảm chức năng sinh lý cho nam giới, vô sinh, hiếm muộn do tinh lạnh, tinh loãng, ngăn ngừa và chống lại những bất thường về tinh trùng.</li>
                        <li>Giúp bồi bổ sức khỏe, bổ thận tráng dương, tăng cường sinh lực, giảm căng thẳng mệt mỏi, tăng khả năng làm việc trí óc và chân tay.</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <img src="/frontend/image/couple.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <section id="uudiem">
        <div class="container-fluid">
            <h3 class="text-center">Ưu điểm vượt trội của sản phẩm</h3>
            <div class="row justify-content-center align-items-center">
                <div class=" col-md-4  first order-sm-2 order-md-1 order-2">
                    <div class="item item-1">
                        <img src="/frontend/image/bai-thuoc-dong-y.png" alt="">
                        <p>Kế thừa tinh hoa Y học cổ truyền, kết hợp với nghiên cứu khoa học bài bản, uy tín trên nền tảng Y
                            lý Đông, Tây y.</p>
                    </div>
                    <div class="item item-2">
                        <img src="/frontend/image/doi-ngu-y-bac-si.png" alt="">
                        <p>Được phát triển và hoàn thiện bởi đội ngũ chuyên gia hàng đầu.</p>
                    </div>
                    <div class="item item-3">
                        <img src="/frontend/image/the-trang-nguoi-viet.png" alt="">
                        <p>Phù hợp với thể trạng người Việt, an toàn, lành tính, hiệu quả lâu bền.</p>
                    </div>
                </div>
                <div class="col-md-4 second order-sm-1 order-md-2 order-1">
                    <div class="content-center">
                        <img src="/frontend/image/logo-nam-vuong-manh-luc.png" alt="">
                    </div>
                </div>
                <div class="col-md-4  third order-sm-3 order-md-3 order-3">
                    <div class="item item-4">
                        <img src="/frontend/image/thao-duoc-dong-y.png" alt="">
                        <p>100% thảo dược thiên nhiên sạch, chuẩn theo GACP-WHO, nhà máy sản xuất đạt chuẩn GMP-WHO.</p>
                    </div>
                    <div class="item item-5">
                        <img src="/frontend/image/tac-dung-nhanh-chong.png" alt="">
                        <p>Có tác dụng nhanh chóng, cảm nhận rõ rệt sau 7 đến 10 ngày sử dụng.</p>
                    </div>
                    <div class="item item-6">
                        <img src="/frontend/image/dang-vien-hoan.png" alt="">
                        <p>Sản phẩm bào chế dưới dạng viên hoàn cứng tiện dụng, không phải đun sắc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="quyenloi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 text-center">
                    <img src="/frontend/image/sp2.png" alt="">
                    <!-- <img src="images/logo-manh-luc-truong-xuan-red.png" alt=""> -->
                </div>
                <div class="col-sm-7">
                    <h3>Quyền lợi khách hàng</h3>
                    <ul>
                        <li>Đội ngũ chuyên gia nam khoa hàng đầu, giàu kinh nghiệm trực tiếp thăm khám.</li>
                        <li>Bác sĩ đầu ngành nhiệt tình hỗ trợ trong suốt quá trình điều trị.</li>
                        <li>Tư vấn viên tâm lý, tinh tế, hoạt động 24/24.</li>
                        <li>Cam kết bảo mật thông tin khách hàng.</li>
                        <li>Sản phẩm chính hãng, uy tín, nguồn gốc rõ ràng với giá tốt nhất.</li>
                        <li>Giao hàng siêu tốc, kín đáo. Hình thức thanh toán linh hoạt.</li>
                        <li>Mạng lưới phân phối sản phẩm rộng khắp trên cả nước.</li>
                        <li>Cơ hội nhận Voucher giảm giá khi khám chữa bệnh trong hệ thống phòng khám trực thuộc công ty.
                        </li>

                    </ul>
                    <p class="strong">Đừng ngần ngại, vì chúng tôi cam kết bảo mật tuyệt đối thông tin khách hàng. Đặt mua
                        ngay để được giảm giá 10%</p>
                    <p class="">
                        <a href="#" class="btn" title="">Đặt mua ngay</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="chuyengia">
        <div class="container">
            <h3 class="text-center">Chuyên gia đánh giá</h3>
            <div class="row first">
                <div class="col-sm-5 text-center">
                    <img src="/frontend/image/bac-si-nguyen-thi-tuyet-lan.png" alt="">
                    <p><strong>TS.BS. Phạm Hưng Củng – Nguyên Vụ trưởng Vụ Y học Cổ truyền Bộ Y Tế</strong></p>
                </div>
                <div class="col-sm-7 content">
                    <p>“Là một bác sĩ y học cổ truyền, tôi đặc biệt đánh giá cao TPBVSK Nam Vương Mãnh Lực. Sản phẩm là một công thức độc đáo, giúp giải quyết tận gốc vấn đề của nam giới tuổi trung niên như: Cải thiện thể lực toàn diện, giúp tăng cường sức khỏe toàn thân, bổ thận tráng dương từ Lộc Nhung và Nhân sâm; hồi phục khả năng sản xuất testosterone nội sinh của cơ thể từ Trâu Cổ, Nhục Thung Dung,Dâm Dương Hoắc kết hợp với kẽm, L-Arginin; làm chậm quá trình mãn dục nam. Sản phẩm là giải pháp hàng đầu cho nam giới tuổi trung niên để có một thể lực dồi dào, sinh lý vững mạnh.”
                    </p>
                </div>
            </div>
            <div class="row second">
                <div class="col-sm-5 order-md-2 text-center">
                    <img src="/frontend/image/bacsi-le-huu-tuan.png" alt="">
                    <p><strong>PGS. TS. Nguyễn Thượng Dong - Nguyên viện trưởng Viện Dược liệu Trung Ương</strong></p>
                </div>
                <div class="col-sm-7 order-md-1 content">
                    <p>"Nam Vương Mãnh Lực được Hội đồng khoa học đánh giá có tác dụng tốt với những người suy giảm testosterol, giảm ham muốn tình dục, dương vật ít cương cứng, rối loạn xuất tinh, hiếm muộn... Theo quan niệm của Đông y, các thành phần của Nam Vương Mãnh Lực hiệu quả trong bổ thận tráng dương, ích tủy sinh tinh, bồi bổ nguyên khí. Do vậy, tăng cao được sinh lực, khoái cảm tình dục, vun vén hạnh phúc gia đình. Sản phẩm này được ví như “thần dược sung sướng”, Thập toàn Đại bổ, không chỉ cải thiện bản lĩnh đàn ông, giữ hạnh phúc gia đình, mà còn tăng cường sức khỏe, sức lao động, sản xuất và kéo dài được tuổi thọ của con người, nâng cao chất lượng cuộc sống"
                    </p>
                </div>
            </div>
            <div class="row first">
                <div class="col-sm-5 text-center">
                    <img src="/frontend/image/bacsi-ngo-van-trai.png" alt="">
                    <p><strong>Cử nhân. Ngô Văn Trại - Chuyên gia phân loại thực vật Viện Dược liệu Trung Ương</strong></p>
                </div>
                <div class="col-sm-7 content">
                    <p>“Ba Kích với hàm lượng cao có trong Nam Vương Mãnh Lực: Giúp cơ thể kích thích sản sinh testosteron ( hoocmon nam ) tự nhiên, làm tăng khả năng cương dương lâu hơn, tăng khả năng ham muốn tình dục của người đàn ông, chậm quá trình xuất tinh, làm chậm quá trình mãn dục, chất lượng tinh trùng tốt hơn.”
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="loikhuyen">
                    <h3>Lời khuyên từ bác sĩ</h3>
                    <ul>
                        <li>Nên kết hợp song song với Nam Vương Mãnh Lực thang (ngâm rượu) để nâng cao thể trạng và hỗ trợ
                            quá trình điều trị hiệu quả hơn.
                        </li>
                        <li>Thực hiện lối sống khoa học, với chế độ ăn và luyện tập thể thao hợp lý. Hạn chế sử dụng các
                            chất kích thích như: rượu, bia, thuốc lá …
                        </li>

                        <li>Giữ tinh thần lạc quan, thư thái, tránh stress, căng thẳng làm ảnh hưởng đến ham muốn và cảm
                            xúc.
                        </li>
                        <li>Không tự ý chữa bệnh, tuyệt đối không tìm đến thuốc kích dục để lấy lại phong độ một cách tạm
                            thời.
                        </li>
                        <li>Thực hiện đúng liệu trình của bác sĩ trong điều trị yếu sinh lý, xuất tinh sớm.</li>
                        <li>Tâm sự với bạn đời để tìm được sự cảm thông, đồng hành trong quá trình điều trị.</li>
                    </ul>
                    <p style="font-size: 12px;">Lưu ý (*): hiệu quả điều trị phụ thuộc vào tình trạng bệnh, khả năng đáp ứng
                        và hấp thu thuốc của mỗi bệnh nhân.</p>
                </div>
                <div class="col-md-6" id="guicauhoi">
                    <h3>Gửi câu hỏi cho bác sĩ</h3>
                    <div class="form-question">
                        <div class="alert alert-success" id="alert-question" style="display: none">Gửi thành công! Chúng tôi sẽ sớm liên hệ với bạn.</div>
                        <div class="alert alert-danger" id="alert-question-danger" style="display: none"></div>
                        <form class="send-data" method="POST" action="{{ url('question') }}">
                            <div class="form-row">
                                <div class="col">
                                    <input name="name" type="text" class="form-control" placeholder="Họ tên"
                                           required="required">
                                </div>
                                <div class="col">
                                    <input name="phone" type="text" class="form-control" placeholder="Số điện thoại"
                                           required="required">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                <textarea name="content" placeholder="Nội dung câu hỏi" rows="8" class="form-control"
                                          required="required"></textarea>
                                </div>
                            </div>
                            <p class="text-right">
                                <button type="submit" class="btn btn-submit">Gửi câu hỏi</button>
                            </p>
                        </form>
                        <div class="result-form"></div>
                    </div>
                </div>
            </div>
            <h4 class="text-center">Hơn 80.000 quý ông đã lấy lại đỉnh cao phong độ, nâng tầm sung mãn với Nam Vương Mãnh Lực. <br>
                Còn bạn thì sao? Đừng trì hoãn thêm nữa vì hạnh phúc không đợi bạn.
            </h4>

        </div>
    </section>
    <section id="khachhang">
        <div class="container">
            <h3 class="s-title">Cảm nhận khách hàng</h3>
            <div class="content-container">
                <div id="carouselCustomer" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item text-center">
                            <img class="d-block" src="/frontend/image/phan-trung-kien.png">
                            <p class="text-center">
                                Tôi kết hôn đến nay được 2 năm, nhưng cuộc sống vợ chồng lại nhuốm màu u ám vì tôi luôn mặc
                                cảm khi thường xuyên gặp tình trạng “chưa đến chợ đã rơi hết tiền”. Sau khi tìm hiểu và sử
                                dụng bài thuốc Nam Vương Mãnh Lực, đến nay, vợ chồng tôi đã tìm sự hòa hợp và đồng điệu
                                trong chuyện "gối chăn", đời sống tinh thần và sức khỏe được cải thiện rất nhiều.
                            </p>
                            <p class="name"><strong>Anh Phan Trung Kiên (34 tuổi, Nghệ An)</strong></p>

                        </div>
                        <div class="carousel-item text-center">
                            <img class="d-block" src="/frontend/image/do-khanh-an.png">
                            <p class="text-center">
                                Trước đây, khi chưa có bạn gái, tôi thường xuyên thủ dâm, khiến cơ thể mất cân bằng và gặp
                                phải vấn đề xuất tinh sớm. Biết đến Nam Vương Mãnh Lực trong một chương trình truyền hình
                                về sức khỏe, tôi đã đến trung tâm khám và kiên trì dùng thuốc theo chỉ định của bác sĩ. Hiệu
                                quả ngoài sự mong đợi, tôi đã lấy lại bản lĩnh đàn ông chỉ sau đúng 1 liệu trình điều trị.
                            </p>
                            <p class="name"><strong>Anh Đỗ Khánh An (27 tuổi, Ninh Bình)</strong></p>
                        </div>
                        <div class="carousel-item text-center active">
                            <img class="d-block" src="/frontend/image/anh-nguyen-van-thinh.png">
                            <p class="text-center">
                                Qua tuổi 45, tôi bắt đầu cảm thấy mệt mỏi với chuyện chăn gối, tần suất làm “chuyện ấy” giảm
                                hẳn, nhiều khi còn tìm cách tránh né vợ vì chả có ham muốn gì cả. May mắn được người bạn
                                giới thiệu sản phẩm Nam Vương Mãnh Lực, tôi sử dụng thử và chỉ khoảng 20 ngày đã lấy lại
                                phong độ, tự tin như xưa. Từ đó tôi cũng giới thiệu cho rất nhiều anh em chiến hữu dùng sản
                                phẩm này.
                            </p>
                            <p class="name"><strong>Anh Nguyễn Văn Thịnh (45 tuổi, Hà Nội)</strong></p>

                        </div>
                        <img src="/frontend/image/logo-nam-vuong-manh-luc.png" class="logo">

                    </div>
                    <a class="carousel-control-prev" href="#carouselCustomer"
                       role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCustomer"
                       role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="order">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img src="/frontend/image/sp2.png" alt="" class="img-plus">
                    <img src="/frontend/image/manh-luc-truong-xuan-pho-thong.png" alt="" class="img-pt">
                </div>
                <div class="col-sm-7">
                    <h3>Đặt mua sản phẩm Nam Vương Mãnh Lực</h3>
                    <div class="alert alert-success" id="alert-question-order" style="display: none">Đặt hàng thành công! Chúng tôi sẽ sớm liên hệ với bạn.</div>
                    <div class="alert alert-danger" id="alert-question-danger-order" style="display: none"></div>
                    <form class="order-form" method="POST" action="{{ url('question') }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Họ tên</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Tên của bạn"
                                       name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Điện thoại</label>
                                <input type="text" class="form-control" id="inputPhone" placeholder="Số điện thoại của bạn"
                                       name="phone" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Địa chỉ</label>
                                <input type="text" class="form-control" id="inputAddress"
                                       placeholder="Nhập địa chỉ giao nhận thuốc" name="content" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputmedical">Sản phẩm</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inputmedical" id="inputmedical1"
                                           value="Nam Vương Mãnh Lực Plus" checked="" data-attr="plus">
                                    <label class="form-check-label" for="inputmedical1">
                                        Nam Vương Mãnh Lực PLus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inputmedical" id="inputmedical2"
                                           value="Nam Vương Mãnh Lực phổ thông" data-attr="pt">
                                    <label class="form-check-label" for="inputmedical2">
                                        Nam Vương Mãnh Lực phổ thông
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Đặt mua ngay</button>
                        <p>
                            <small>Đừng ngần ngại, vì chúng tôi cam kết bảo mật tuyệt đối thông tin khách hàng</small>
                        </p>
                    </form>
                    <div class="result-form success"></div>
                </div>
            </div>

        </div>
    </section>
    <section id="baochi">
        <div class="container">
            <h4 class="text-center">Báo chí nói về chúng tôi</h4>
            <div class="row justify-content-center">
                <div class=" col-sm-3">
                    <a href="javascript:;"
                       target="_blank" title="">
                        <img src="/frontend/image/bao-vietnamnet.png" alt="">
                    </a>
                    <h3 class="post-title">
                        <a href="javascript:;"
                           title="" target="_blank">Nam Vương Mãnh Lực - Bí ẩn phòng the của người Thái đen</a>
                    </h3>
                </div>
                <div class=" col-sm-3">
                    <a href="javascript:;"
                       target="_blank">
                        <img src="/frontend/image/bao-24h.png" alt="">
                    </a>
                    <h3 class="post-title">
                        <a href="javascript:;"
                           title="" target="_blank">Tìm về “cội nguồn” bí truyền chữa yếu sinh lý miền sơn cước của người
                            Thái đen</a>
                    </h3>
                </div>
                <div class="col-sm-3">
                    <a href="javascript:;"
                       title="" target="_blank">
                        <img src="/frontend/image/bao-tien-phong.png" alt="">
                    </a>
                    <h3 class="post-title"><a
                                href="javascript:;"
                                title="" target="_blank">
                        </a><a href="javascript:;"
                               title="" target="_blank"> Nam Vương Mãnh Lực - Cứu cánh cho đàn ông suy giảm sinh lý</a>
                    </h3>


                </div>
                <div class="col-sm-3">
                    <a href="javascript:;"
                       target="_blank">
                        <img src="/frontend/image/bao-doi-song-phap-luat.png" alt="">
                    </a>
                    <h3 class="post-title"><a
                                href="javascript:;"
                                target="_blank">
                        </a><a href="javascript:;"
                               target="_blank">Nam Vương Mãnh Lực - Hành trình nghiên cứu và phát triển giải pháp cải
                            thiện
                            chức năng sinh lý phái mạnh</a>
                    </h3>


                </div>
            </div>
        </div>
    </section>
    <section id="feedback">
        <div class="container">
            <h3 class="text-center section-title">Ý kiến độc giả</h3>
            <div class="wrap-comment">
                <!-- <p>
        <button type="button" id="btn-show-comment" class="btn btn-primary btn-show-comment" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="collapseExample">Hiển thị bình luận</button>
    </p> -->
                <div id="comments" class="comments-area clearfix  ">
                    <div class="fb-comments" data-href="http://spcn.local/" data-width="100%" data-numposts="20"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        jQuery(document).ready(function () {
            $(window).scroll(function () {
                var slider_homepage_height = $('#slider-homepage').height();
                if ($(window).scrollTop() >= slider_homepage_height) {
                    $('#slider-homepage').addClass('hide-transition');
                    $('.navbar').addClass('fixed-header');
                }
                else {
                    $('.navbar').removeClass('fixed-header');
                    $('#slider-homepage').removeClass('hide-transition');
                }
            });
        });
    </script>
@endsection

