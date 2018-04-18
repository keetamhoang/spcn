<div class="ht-section">
    <div class="home-product-deals">
        <div class="row">
            <div class="section-header">
                <h2 class="section-title ht-oneline">Người dùng tìm mua mới nhất</h2>
                <div class="section-action">
                    <a href="#" class="view-all">
                        <span class="hidden-xs link-text">Xem tất cả</span>
                        <span class="link-icon ml-8"><i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="section-content">
                <div id="homeProductDealsSlider" class="home-product-deals-slider">
                    @foreach($newestProducts as $product)
                        <div class="single-slide">
                            <div class="single-deal product-deal-card ht-card ht-depth-1">
                                <div class="card-inner">
                                    <div class="card-thumb">
                                        <a href="http://{{ $product->short_link }}" class="thumb-wrap" target="_blank">
                                            <div class="deal-image"><img src="{{ $product->image }}" alt="{{ $product->name }}"></div>
                                            <div class="store-logo"><img src="{{ $product->brand->image }}" alt="{{ $product->brand->name }}"></div>
                                            <div class="cashback-up-to">Hoàn tiền {{ isset($product->cashBack) ? $product->cashBack->discount : config('const.DEFAULT_CK') }}%</div>
                                        </a>
                                        <a href="#" class="deal-like-action" data-toggle="tooltip" data-placement="top" title="Lưu deal"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="deal-title"><a href="http://{{ $product->short_link }}" target="_blank">{{ $product->name }}</a></h3>
                                    </div>
                                    <div class="card-footer clearfix">
                                        <div class="pull-left">
                                            <div class="deal-price">
                                                <div class="percent-discount">
                                                    {{--<span class="discount-label color-blue-500">%</span>--}}
                                                </div>
                                                <div class="price-number">
                                                    <span class="price-current">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                                    {{--<span class="price-old">Nhận được {{ number_format($product->price, 0, ',', '.') }}đ</span>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <a href="http://{{ $product->short_link }}" class="view-deal-btn btn ht-btn-orange text-uppercase" target="_blank">Mua sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>