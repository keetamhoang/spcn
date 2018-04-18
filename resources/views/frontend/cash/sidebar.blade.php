<div class="col-xs-12 col-md-3">
    <div class="ht-sidebar">
        <div class="single-sidebar ht-depth-1">
            <div class="user-profile text-center">
                <div class="avatar-circle"><img src="{{ auth('caba')->user()->avatar }}" alt=""></div>
                <div class="user-title">{{ auth('caba')->user()->username }}</div>
                <div class="join-date">Ngày tham gia: {{ \Carbon\Carbon::parse(auth('caba')->user()->created_at)->format('d/m/Y') }}</div>
                <div class="mt-8">
                    <a href="#" class="btn ht-btn-default btn-sm"><i class="fa fa-pencil mr-8 fz-12"></i>Chỉnh sửa thông tin</a>
                </div>
            </div>
            <div class="user-cash-amount text-center mt-24">
                <h3 class="ht-title">Số tiền đang có</h3>
                <div class="cash-amount">{{ $account->cash }} đ</div>
                <div class="cash-action mt-12">
                    <a href="#" class="btn ht-btn ht-btn-default">Xem lịch sử</a>
                    <a href="#" class="btn ht-btn ht-btn-blue">Rút tiền</a>
                </div>
            </div>
        </div>
        <div class="single-sidebar ht-depth-1 pa-0">
            <div class="sidebar-nav">
                <ul class="list-unstyled">
                    <li><a href="{{ url('don-hang-cua-ban') }}"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Đơn mua</a></li>
                    <li><a href="{{ url('san-pham-cua-ban') }}"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Sản phẩm của bạn</a></li>
                    <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Thông báo</a>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Cập nhật đơn hàng</a></li>
                            <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Khuyến mãi</a></li>
                            <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Hoạt động</a></li>
                            <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Cập nhật ví</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('xu-cua-toi') }}"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Caba Xu của tôi</a></li>
                    <li><a href="#"><span class="icon-left ht-bgcover" style="background-image: url('')"></span>Thông tin tài khoản</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>