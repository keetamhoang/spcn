@extends('frontend')

@section('content')
    <div class="container">
        <div class="row">

            @include('frontend.cash.sidebar')

            <div class="col-xs-12 col-md-9">
                <div class="ht-section ht-depth-1 pa-0">
                    <ul class="ht-nav-tabs nav-justified list-unstyled" role="tablist">
                        <li class="active"><a href="#home" class="ht-oneline" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li><a href="#profile"  class="ht-oneline" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages" class="ht-oneline" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings" class="ht-oneline" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="ht-section ht-depth-1">
                    <p>Cuốn sách của tác giả Dũng Phan gây chú ý khi vừa phát hành. Cuối tháng 6, sách ra mắt, nhưng trước ngày xuất xưởng đã có hơn 5.000 ấn bản được đặt mua trước, 1.000 ấn bản đặc biệt bán hết sau 4 tiếng đồng hồ. Giấy phép tái bản được xin ngay trong ngày phát hành đầu tiên của sách.</p>
                    <p>Trong ngày ra mắt 25/6 tại Hà Nội, khán giả chật kín khán phòng, và xếp hàng dài chờ xin chữ ký tác giả. Thậm chí, ban tổ chức buổi ra mắt không lường được số người tham dự, lượng sách bán tại sự kiện không đáp ứng được nhu cầu bạn đọc. Độc giả phải bốc thăm để nhận quyền mua sách trong ngày phát hành. Buổi ra mắt sách ở TP.HCM cũng đông không kém.</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">sd
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" class="form-control" placeholder="Placeholder">
                                <div class="help-block color-red-500"><i>(*) Help text</i></div>
                            </div>
                            <div class="form-group">
                                <label>Label</label>
                                <textarea class="form-control" rows="4">Edgar Allan Poe là một nhà văn, nhà thơ, nhà biên kịch, và nhà phê bình văn học người Mỹ, được xem là một cây đại thụ lớn của văn học Mỹ thế kỷ 19.</textarea>
                            </div>
                            <div class="form-group">
                                <label>Label</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Chuyển tiền (VNĐ)</label>
                                <div class="input-group">
                                    <div class="input-group-addon">Thanh toán</div>
                                    <input type="text" class="form-control" placeholder="Điền số tiền">
                                    <div class="input-group-addon">VNĐ</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox"><label><input type="checkbox" value="">Option one</label></div>
                                <div class="checkbox disabled"><label><input type="checkbox" value="" disabled>Option two is disabled</label></div>
                                <div class="radio"><label><input type="radio" name="optionsRadios" value="" checked>Option one</label></div>
                                <div class="radio"><label><input type="radio" name="optionsRadios" value="">Option two</label></div>
                                <div class="radio disabled"><label><input type="radio" name="optionsRadios" value="" disabled>Option is disabled</label></div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="sr-only">Label</label>
                                <div class="input-group">
                                    <div class="input-group-addon icon-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" class="form-control" placeholder="Placeholder">
                                </div>
                            </div>

                            <hr>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                  <button class="btn ht-btn-default" type="button"><i class="fa fa-search fz-12"></i></button>
                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" class="form-control form-lg" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>Label</label>
                                <div class="input-group">
                                    <div class="input-group-addon icon-addon icon-lg"><i class="fa fa-lock"></i></div>
                                    <input type="text" class="form-control form-lg" placeholder="Placeholder">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="sample-buttons">
                        <p>
                            <a href="#" class="btn ht-btn-default text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-default btn-sm text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-default btn-lg text-uppercase ht-fw500">Button</a>
                        </p>
                        <p>
                            <a href="#" class="btn ht-btn-orange text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-orange btn-sm text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-orange btn-lg text-uppercase ht-fw500">Button</a>
                        </p>
                        <p>
                            <a href="#" class="btn ht-btn-blue text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-blue btn-sm text-uppercase ht-fw500">Button</a>
                            <a href="#" class="btn ht-btn-blue btn-lg text-uppercase ht-fw500">Button</a>
                        </p>
                    </div>
                    <hr>

                </div>
            </div>
        </div>

    </div>
@endsection