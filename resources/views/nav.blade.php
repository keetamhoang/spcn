<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <li class="nav-item start active open">
            <a href="{{ url('admin') }}" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>

        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">Người dùng liên hệ</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{ url('admin/accounts') }}" class="nav-link ">
                        <span class="title">Danh sách người dùng</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('admin/accounts/contents') }}" class="nav-link ">
                        <span class="title">Danh sách nội dung</span>
                    </a>
                </li>
            </ul>
        </li>

        {{--<li class="nav-item  ">--}}
            {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="fa fa-users"></i>--}}
                {{--<span class="title">Quản lý người dùng</span>--}}
                {{--<span class="arrow"></span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/users') }}" class="nav-link ">--}}
                        {{--<span class="title">Danh sách</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item  ">--}}
            {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="fa fa-gift"></i>--}}
                {{--<span class="title">Quản lý sản phẩm</span>--}}
                {{--<span class="arrow"></span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/products') }}" class="nav-link ">--}}
                        {{--<span class="title">Danh sách</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/products/create') }}" class="nav-link ">--}}
                        {{--<span class="title">Thêm mới</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item  ">--}}
            {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="fa fa-credit-card "></i>--}}
                {{--<span class="title">Quản lý Transactions</span>--}}
                {{--<span class="arrow"></span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item  ">--}}
                    {{--<a href="{{ url('admin/transactions') }}" class="nav-link ">--}}
                        {{--<span class="title">Danh sách</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    </ul>
</div>