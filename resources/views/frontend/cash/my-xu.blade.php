@extends('frontend')

@section('styles')
    <style>
        .bonus-xu {
            color: #f6a700;
            text-align: right;
            min-width: 8rem;
            float: right;
            font-size: 2rem;
            padding: 2.5rem 2rem;
        }

        hr {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            @include('frontend.cash.sidebar')

            <div class="col-xs-12 col-md-9">
                <div class="ht-section ht-depth-1">
                    <h5 style="color: #fb784e">{{ $account->xu }} Caba Xu đang có</h5>
                </div>
                <div class="ht-section ht-depth-1 pa-0">
                    <ul class="ht-nav-tabs nav-justified list-unstyled" role="tablist">
                        <li class="active"><a href="#get-xu" class="ht-oneline" aria-controls="home" role="tab" data-toggle="tab">Lịch sử săn xu</a></li>
                        <li><a href="#pay-xu"  class="ht-oneline" aria-controls="profile" role="tab" data-toggle="tab">Lịch sử tiêu xu</a></li>
                    </ul>
                </div>
                <div class="ht-section ht-depth-1" id="get-xu">
                    @foreach($histories as $history)
                        @foreach($history->transaction->transactionDetail as $detail)
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="{{ !empty($detail->product) ? $detail->product->image : '/files/defaults/product.png' }}" style="width: 100%">
                                </div>
                                <div class="col-lg-8">
                                    <div style="font-size: 17px;">{{ $detail->product_name }}</div>
                                    <div style="color: #505050">
                                        <div>{{ $history->transaction->statusText }}</div>
                                        <div>12-04-2007</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 bonus-xu">
                                    <div>+2</div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection