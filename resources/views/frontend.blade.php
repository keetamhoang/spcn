<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '191351954844707');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=191351954844707&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/favicon.ico" rel="shortcut icon"
          type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="/frontend/css_/css.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css_/slick.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css_/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css_/animate.css">

    <title>Nam Vương Mãnh Lực - Nâng Tầm Sung Mãn</title>

    <!-- This site is optimized with the Yoast SEO plugin v7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="Kết tinh từ thảo dược quý, giúp tăng cường khả năng sinh lý, khắc phục xuất tinh sớm, cải thiện chất lượng cuộc yêu.">
    <link rel="canonical" href="http://namvuongmanhluc.com/">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nam Vương Mãnh Lực - Nâng Tầm Sung Mãn">
    <meta property="og:description"
          content="Kết tinh từ thảo dược quý, giúp tăng cường khả năng sinh lý, khắc phục xuất tinh sớm, cải thiện chất lượng cuộc yêu.">
    <meta property="og:url" content="http://www.namvuongmanhluc.com/">
    <meta property="og:site_name" content="Nam Vương Mãnh Lực">
    <meta property="og:image" content="http://namvuongmanhluc.com/banner.jpg"/>
    <meta name="twitter:description"
          content="Kết tinh từ thảo dược quý, giúp tăng cường khả năng sinh lý, khắc phục xuất tinh sớm, cải thiện chất lượng cuộc yêu.">
    <meta name="twitter:title" content="Nam Vương Mãnh Lực - Nâng Tầm Sung Mãn">

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="mltx-style-css" href="/frontend/css_/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="mltx-style-css" href="/css/new.css" type="text/css" media="all">

    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="/frontend/js_/js.js"></script>
    <link rel="stylesheet" id="mltx-style-css" href="/css/style.css" type="text/css" media="all">
    @yield('style')
</head>
<body class="home page-template page-template-template-pages page-template-homepage page-template-template-pageshomepage-php page page-id-4">
<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 0px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/Nam-V%C6%B0%C6%A1ng-M%C3%A3nh-L%E1%BB%B1c-474590932959964/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a href="https://m.me/keemusicbank" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@yield('slider')

<div class="scroll-animation">
    <div class="mouse">
        <div class="wheel"></div>
    </div>
    <div class="arrows">
        <span class="first"></span>
        <span class="second"></span>
        <span class="third"></span>
    </div>
</div>

@include('frontend.header')

@yield('content')

@include('frontend.footer')

<a href="{{ url('#') }}" id="btn-top"></a>
<!-- Large modal -->
<div class="modal fade modal-lg-thanh-phan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thành phần bài thuốc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="clearfix">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3"
                             src="/frontend/image/loc-nhung.png"
                             alt="Sâm Cau">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Lộc nhung</h5>
                            <p>Có tác dụng sinh tinh, cải thiện chất lượng tinh trùng, bổ dương giúp cường dương và tăng cường sinh lực.
                            </p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3"
                             src="/frontend/image/nhan-sam.png"
                             alt="Nấm tỏa dương">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Nhân sâm</h5>
                            <p>Là vị thuốc quý giúp bồi bổ cơ thể, tăng cường sinh lực và tạo sự dẻo dai của cơ thể.
                            </p>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3"
                             src="/frontend/image/dam-duong-hoac.png"
                             alt="Dâm dương hoắc">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Dâm dương hoắc</h5>
                            <p> Có tác dụng bổ thận tráng dương, khu phong trừ thấp, bổ âm dương, trị chứng liệt dương,
                                vô sinh, tiểu buốt, gân cơ co rút, liệt nửa người, lưng gối không còn sức, phong thấp
                                đau nhức, tay chân tê dại, tăng cường chức năng miễn dịch của cơ thể và tác dụng song
                                phương điều tiết.
                            </p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3"
                             src="/frontend/image/nhuc-thung-dung.png"
                             alt="Nhục thung dung">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Nhục thung dung</h5>
                            <p>Có tác dụng ôn thận tráng dương, trị thận dương hư, di tinh, liệt dương, trị vô sinh do
                                suy giảm sinh lý, đau lưng mỏi gối, tiểu đêm, tay chân lạnh. Ngoài ra, nó còn tác dụng
                                như một loại hormon sinh dục, kích thích và điều tiết hoạt động của tuyến thượng thận,
                                khắc phục suy giảm chức năng tuyến thượng thận.
                            </p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3"
                             src="/frontend/image/ba-kich.png"
                             alt="Ba kích">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Ba kích</h5>
                            <p>Có tác dụng bổ thận tráng dương, ích tuỷ sinh tinh, cường gân cốt, tăng cường khả năng
                                cương dương, kéo dài thời gian quan hệ. Chủ trị yếu sinh lý, xuất tinh sớm, rối loạn
                                cương dương, mộng tinh, di tinh. Ngoài ra, còn giúp khỏe xương và cơ bắp, chống lão hóa,
                                mệt mỏi, tăng cường hệ miễn dịch, tốt cho hệ tiết niệu, giúp ổn định đường huyết và
                                huyết áp.

                            </p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div id="cta-right" data-toggle="modal" data-target="#RegisterModal" class="displayContent">
    <div class="inner">
        <h4>Đăng ký tư vấn</h4>
        <p>Hotline 01669 943 882</p>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{--<img src="/frontend/image/logo-nam-vuong-manh-luc.png"--}}
                     {{--alt="">--}}
                <h3 style="color: #fbea9d;">Gửi yêu cầu tư vấn</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" id="alert-question-popup" style="display: none">Đăng ký thành công! Chúng tôi sẽ sớm liên hệ với bạn.</div>
                <div class="alert alert-danger" id="alert-question-danger-popup" style="display: none"></div>
                <form method="POST" id="popup-question" action="{{ url('question') }}" class="modal-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ tên" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <input name="phone" required="required" type="text" class="form-control"
                               placeholder="Số điện thoại">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<input type="email" name="email" class="form-control" placeholder="Email">--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <textarea name="content" class="form-control" placeholder="Nội dung cần tư vấn"
                                  rows="3"></textarea>
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-second">Hoàn thành</button>
                    </p>
                </form>
                <div class="result-form"></div>
            </div>
            <p class="chungtoi">Chúng tôi sẽ gọi cho bạn!</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script
src = "/frontend/js_/slick.min.js"
type = "text/javascript"
charset = "utf-8" ></script>
<script type="text/javascript" charset="utf-8" async="" defer="">
    jQuery(document).ready(function ($) {
        $('#slider-homepage').on('init', function (e, slick) {
            var $firstAnimatingElements = $('div.hero-slide:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        $('#slider-homepage').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            fade: true,
            cssEase: 'linear',
            adaptiveHeight: true

        });
        $('#slider-homepage').on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('div.hero-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    });
</script>
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function ($) {

        $('[name=inputmedical]').on('change', function (event) {
            var product_select = $('[name=inputmedical]:checked').attr('data-attr');
            if (product_select == 'plus') {
                $('#order .img-pt').hide();
                $('#order .img-plus').show();

            }
            if (product_select == 'pt') {
                $('#order .img-plus').hide();
                $('#order .img-pt').show();
            }
        });
    });
</script>
@yield('script')
<script>
    jQuery(document).ready(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 700) {
                $('#cta-right').addClass('displayContent');
            }
            else {
                $('#cta-right').removeClass('displayContent');
            }
            if ($(window).scrollTop() >= 5000) {
                $('#cta-right').removeClass('displayContent');
            }

        });

        $('.navbar-nav a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 80
                    }, 2000);
                    return false;
                }
            }
        });
        $('#quyenloi .btn').on('click', function () {
            var order = $('#order');
            $('html,body').animate({
                scrollTop: order.offset().top - 80
            }, 2000);
            return false;
        })

        function postContactToGoogle(container, message) {
            var fullname = jQuery(container).find('input[name="txtname"]').val();
            var numberphone = jQuery(container).find('input[name="txtphone"]').val();
            var email = jQuery(container).find('input[name="txtemail"]').val();
            var content = jQuery(container).find('textarea[name="content"]').val();
            var data_url = window.location.href;
            if ((fullname !== "")) {
                jQuery.ajax({
                    url: "https://docs.google.com/forms/d/e/1FAIpQLSeNnw7gxhjPH2pj_w8JfJDheT0T0_v7vyEN2ihjgXRFnERNzA/formResponse",
                    data: {
                        "entry.145564090": fullname,
                        "entry.263985871": numberphone,
                        "entry.495378652": email,
                        "entry.1508719615": content,
                        "entry.876596193": data_url
                    },
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function () {
                            jQuery(container).next('.result-form').append('<p class="text-center success">' + message + '</p>')
                            jQuery(container).closest('form').find("input[type=text], textarea").val("");
                            jQuery(container).find('button').attr('disabled', 'disabled')
                            setTimeout(function () {
                                jQuery(container).next('.result-form').empty()
                            }, 5000);
                        },
                        200: function () {

                            jQuery(container).next('.result-form').append('<p class="text-center success">' + message + '</p>')
                            jQuery(container).closest('form').find("input[type=text], textarea").val("");
                            jQuery(container).find('button').attr('disabled', 'disabled')
                            setTimeout(function () {
                                jQuery(container).next('.result-form').empty()
                            }, 5000);
                        }
                    }
                });
            }
            else {
                alert('Kiểm tra lại các thông vừa nhập')
            }
        }

        function postOrderToGoogle(container, message) {
            var fullname = jQuery(container).find('input[name="txtname"]').val();
            var numberphone = jQuery(container).find('input[name="txtphone"]').val();
            var address = jQuery(container).find('input[name="txtaddress"]').val();
            var product = jQuery(container).find('[name="inputmedical"]:checked').val();
            var data_url = window.location.href;
            if ((fullname !== "")) {
                jQuery.ajax({
                    url: "https://docs.google.com/forms/d/e/1FAIpQLSelZldIA5WlLpULMHaMHSLJfgYsnsV1i0A570WUPrgrROh1Mw/formResponse",
                    data: {
                        "entry.266773132": fullname,
                        "entry.300973748": numberphone,
                        "entry.695711975": address,
                        "entry.490338738": product,
                        "entry.652013914": data_url
                    },
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function () {
                            jQuery(container).next('.result-form').append('<p class="text-center success">' + message + '</p>')
                            jQuery(container).closest('form').find("input[type=text]").val("");
                            jQuery(container).find('button').attr('disabled', 'disabled')
                            setTimeout(function () {
                                jQuery(container).next('.result-form').empty()
                            }, 5000);
                        },
                        200: function () {

                            jQuery(container).next('.result-form').append('<p class="text-center success">' + message + '</p>')
                            jQuery(container).closest('form').find("input[type=text]").val("");
                            jQuery(container).find('button').attr('disabled', 'disabled')
                            setTimeout(function () {
                                jQuery(container).next('.result-form').empty()
                            }, 5000);
                        }
                    }
                });
            }
            else {
                alert('Kiểm tra lại các thông vừa nhập')
            }
        }

        $('.order-form').on('submit', function (event) {
//            var container = $(this);
//            postOrderToGoogle(container, 'Đặt mua thuốc thành công')
//            return false;
            event.preventDefault();

            var form = $(this).serialize();

            $.ajax({
                type: 'post',
                data: form,
                url: '{{ url('question') }}',
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        $('#alert-question-order').show();
                        $('#alert-question-danger-order').hide();
                        $('input[name="name"]').val('');
                        $('input[name="phone"]').val('');
                        $('input[name="email"]').val('');
                        $('textarea[name="content"]').val('');
                        $('input[name="content"]').val('');
                    } else {
                        $('#alert-question-danger-order').html(response.message);
                        $('#alert-question-danger-order').show();
                        $('#alert-question-order').hide();
                    }
                }
            });
        });
//        $('.send-data').on('submit', function (event) {
//            var container = $(this);
//            postContactToGoogle(container, 'Gửi thành công! Chúng tôi sẽ sớm liên hệ với bạn.')
//            return false;
//        });
//        $('.modal-form').on('submit', function (event) {
//            var container = $(this);
//            postContactToGoogle(container, 'Gửi thành công! Chúng tôi sẽ sớm liên hệ với bạn.')
//            return false;
//        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function ($) {
        $('.send-data').on('submit', function (event) {
            event.preventDefault();

            var form = $(this).serialize();

            $.ajax({
                type: 'post',
                data: form,
                url: '{{ url('question') }}',
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        $('#alert-question').show();
                        $('#alert-question-danger').hide();
                        $('input[name="name"]').val('');
                        $('input[name="phone"]').val('');
                        $('input[name="email"]').val('');
                        $('textarea[name="content"]').val('');
                    } else {
                        $('#alert-question-danger').html(response.message);
                        $('#alert-question-danger').show();
                        $('#alert-question').hide();
                    }
                }
            });
        });

        $('#popup-question').on('submit', function (event) {
            event.preventDefault();

            var form = $(this).serialize();

            $.ajax({
                type: 'post',
                data: form,
                url: '{{ url('question') }}',
                dataType: 'json',
                success: function (response) {
                    if (response.status == 1) {
                        $('#alert-question-popup').show();
                        $('#alert-question-danger-popup').hide();
                        $('input[name="name"]').val('');
                        $('input[name="phone"]').val('');
                        $('input[name="email"]').val('');
                        $('textarea[name="content"]').val('');
                    } else {
                        $('#alert-question-danger-popup').html(response.message);
                        $('#alert-question-danger-popup').show();
                        $('#alert-question-popup').hide();
                    }
                }
            });
        });

        $('#show-modal-livechat').on('click', function (event) {
            event.preventDefault();
            $('#show-modal-livechat').removeClass('display-block');
            $(this).addClass('display-none');
            $('#livechat').addClass('show');
            return false;
        });
        $('#livechat .live-header').on('click', function (event) {
            $(this).parent().removeClass('show');
            $('#show-modal-livechat').addClass('display-block');
            $('#show-modal-livechat').removeClass('display-none');
            return false;
        });
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function () {
        @if (Request::getHost() != 'spcn.local')
        var time1 = setTimeout(showPopup, 4000);

        function showPopup() {
            $('#show-modal-livechat').click();
            var audio = new Audio('{{ '/chat.mp3' }}');
            audio.play();

            setTimeout(function () {
                $('#RegisterModal').modal('show');
            }, 4000);
        }
        @endif

    });
</script>

<a id="show-modal-livechat" href="#" title="" class="d-none d-md-block d-sm-block">
    <img src="/frontend/image/icon-messenger.png" alt="">
</a>
<a id="chat-facebook-mobile" href="https://m.me/namvuongmanhluc" target="_blank" title=""
   class="d-block d-md-none d-sm-none">
    <img src="/frontend/image/chat.png" alt="">
</a>

<div id="livechat" class="" style="z-index: 3;">
    <div class="live-header">Chat cùng chuyên gia (zalo 01669 943 882) <span class="angle-down"></span></div>
    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/namvuongmanhluc"
         data-tabs="messages" data-width="300" data-height="320" data-small-header="true"
         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" fb-xfbml-state="rendered"
         fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1049155198431013&amp;container_width=300&amp;height=320&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnamvuongmanhluc&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=messages&amp;width=300">
        <span style="vertical-align: bottom; width: 300px; height: 320px;">
           </span></div>
</div>
<script async="async" type="text/javascript"
        src="/frontend/js_/form.js"></script>


</body>
</html>