@extends('frontend')

@section('content')
    <div class="container">
        <div class="row">

            @include('frontend.cash.sidebar')

            <div class="col-xs-12 col-md-9">
                {{--<div class="ht-section ht-depth-1 pa-0">--}}
                    {{--<ul class="ht-nav-tabs nav-justified list-unstyled" role="tablist">--}}
                        {{--<li class="active"><a href="#home" class="ht-oneline" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>--}}
                        {{--<li><a href="#profile"  class="ht-oneline" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>--}}
                        {{--<li><a href="#messages" class="ht-oneline" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>--}}
                        {{--<li><a href="#settings" class="ht-oneline" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="ht-section ht-depth-1">
                    <h5 class="page-title">Sản phẩm của bạn</h5>
                    <p>Những sản phẩm bạn đã tạo link</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Hoàn tiền</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><div style="max-width: 300px">{{ $product->product->name }}<br><i class="fa fa-hand-o-right"></i> Link: <a href="http://{{ $product->product->short_link }}" target="_blank">{{ $product->product->short_link }}</a></div></td>
                                        <td><div style="width: 100px"><img src="{{ $product->product->image }}"></div></td>
                                        <td>{{ number_format($product->product->price, 0, ',', '.') }} đ</td>
                                        <td style="color: red">{{ isset($product->product->cashBack) ? $product->product->cashBack->discount : config('const.DEFAULT_CK') }}%<br>{{ number_format((isset($product->product->cashBack) ? $product->product->cashBack->discount : config('const.DEFAULT_CK')) * $product->product->price / 100, 0, ',', '.') }}đ</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>

    </div>
@endsection