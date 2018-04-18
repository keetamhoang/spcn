<!-- Site Header -->
<header class="site-header ht-depth-1 fix-top">
    <nav class="ht-navbar">
        <div class="container">
            <div class="pull-left">
                <div class="clearfix">
                    <span id="sideNavToggleBtn" class="sidenav-toggle-btn button-collapse" data-activates="slide-out"><i class="fa fa-bars"></i></span>
                    <h1 class="site-logo"><a href="{{ url('/') }}">Caba</a></h1>
                    <ul class="main-nav-menu list-unstyled">
                        <li class="active"><a href="#"><i class="fa fa-th-large icon-left"></i>Danh mục</a>
                            <ul class="list-unstyled has-2-cols">
                                <li><a href="#">Ẩm thực & Nhà hàng</a></li>
                                <li><a href="#">Spa & Làm đẹp</a></li>
                                <li><a href="#">Gia dụng - Nội thất</a></li>
                                <li><a href="#">Thời trang Nữ</a></li>
                                <li><a href="#">Thời trang Nam</a></li>
                                <li><a href="#">Phụ kiện & Mỹ phẩm</a></li>
                                <li><a href="#">Điện tử & Công nghệ</a></li>
                                <li><a href="#">Thực phẩm</a></li>
                                <li><a href="#">Mẹ & Bé</a></li>
                                <li><a href="#">Đào tạo & Giải trí</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-money icon-left"></i>Cask Back</a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag icon-left"></i>Shop Online</a></li>
                        <li><a href="#"><i class="fa fa-user-circle-o icon-left"></i>Vip Member</a></li>
                        <li><a href="#">Thêm<i class="fa fa-angle-down icon-right"></i></a>
                            <ul class="list-unstyled ht-pull-right">
                                <li><a href="#">Boney M. - Rasputin</a></li>
                                <li><a href="#">Discoteka 80 Moscow</a></li>
                                <li><a href="#">Daddy Cool</a></li>
                                <li><a href="#">Về Cabasa</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pull-right">
                <div class="clearfix">
                    <ul class="user-nav-menu list-unstyled">
                        <li class="search-toggle">
                            <div class="dropdown">
                                <button class="" data-toggle="dropdown"><i class="fa fa-search"></i></button>
                                <div class="dropdown-menu pa-0 pull-right">
                                    <form action="#" class="form-inner-dropdown">
                                        <div class="stop-propagation-content pa-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Từ khoá tìm kiếm">
                                                <span class="input-group-btn">
                              <button class="btn ht-btn-orange" type="button"><i class="fa fa-search fz-13"></i></button>
                            </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="saved-items"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Sản phẩm đã lưu"><i class="fa fa-heart"></i></a></li>
                        @if (auth('caba')->check())
                            <li class="user-menu">
                                <div class="dropdown">
                                    <button class="" data-toggle="dropdown">
                                        <span class="user-avatar"><img src="{{ auth('caba')->user()->avatar }}" alt="{{ auth('caba')->user()->username }}"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        @if (auth('admin')->check())
                                            <li><a href="{{ url('admin') }}">Quản trị admin</a></li>
                                        @endif
                                        <li><a href="{{ url('thong-tin-ca-nhan') }}">Thông tin cá nhân</a></li>
                                        {{--<li><a href="#">Tổng tiền Cashback</a></li>--}}
                                        <li class="divider"></li>
                                        <li><a href="{{ url('logout') }}">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="sign-in-menu ">
                                <div class="dropdown">
                                    <button class="btn ht-btn-orange btn-sm" data-toggle="dropdown"><i class="fa fa-user"></i><span>Đăng nhập</span></button>
                                    <div class="dropdown-menu pa-0 pull-right">
                                        <div class="stop-propagation-content pa-16">
                                            <div class="user-sign-in-section">
                                                <h3 class="ht-title text-uppercase has-bdb">Đăng nhập với mạng xã hội</h3>
                                                {{--<form action="" class="user-sign-in-form on-header">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="sr-only">Tên đăng nhập</label>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Tên đăng nhập">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="sr-only">Mật khẩu</label>--}}
                                                        {{--<input type="password" class="form-control" placeholder="Mật khẩu">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<div class="clearfix">--}}
                                                            {{--<div class="pull-left">--}}
                                                                {{--<div class="checkbox mt-0 mb-0"><label><input type="checkbox" checked value="">Nhớ tài khoản</label></div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="pull-right">--}}
                                                                {{--<div class="cant-sign-in"><a href="#" class="h-ltc">Quên mật khẩu</a></div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<button class="btn ht-btn-orange btn-block">Đăng nhập</button>--}}
                                                    {{--<div class="new-account-reg color-grey-700">Chưa có tài khoản? <a href="#" class="h-ltc fw-500">Đăng ký mới</a></div>--}}
                                                {{--</form>--}}
                                                <div class="user-sign-in-social" style="border-top: none; padding-top: 5px;">
                                                    {{--<div class="social-instruction">.. hoặc đăng nhập với mạng xã hội</div>--}}
                                                    <div class="social-btn-wrap">
                                                        <a href="{{ url('login-social/redirect?type=1') }}" class="btn ht-btn-facebook btn-block"><i class="fa fa-facebook fz-13 social-icon"></i>Đăng nhập với Facebook</a>
                                                        <a href="#" class="btn ht-btn-google btn-block"><i class="fa fa-google fz-13 social-icon"></i>Đăng nhập với Google</a>
                                                    </div>
                                                </div>
                                                <div class="terms-n-policy-agreement">
                                                    By signing up or signing in, I acknowledge and agree to Caba's <a href="#" class="h-ltc">Terms of Use</a> and <a href="#" class="h-ltc">Privacy Policy</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
<!-- END Site Header -->