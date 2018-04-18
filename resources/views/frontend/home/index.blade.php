@extends('frontend')

@section('content')

@endsection

@section('scripts')
    <script>
        $(document).ready(function (e) {
            var isClick = true;

            $('#gen-link').click(function (e) {
                $('#error-product-result-box').hide();
                $('#product-result-box').hide();

                if (isClick) {
                    isClick = false;

                    $('.product-loading-progress').show();

                    $(".progress-bar").animate({
                        width: "75%"
                    }, 4000);

                    var link = $('#link-input').val();

                    $.ajax({
                        url: '{{ url('gen-link') }}',
                        data: {
                            link: link
                        },
                        type: 'get',
                        dataType: 'json',
                        success: function (response) {
                            $(".progress-bar").animate({
                                width: "100%"
                            }, 2500, function () {
                                $(".progress-bar").animate({
                                    width: "0%"
                                }, 0);

                                $('.product-loading-progress').hide();

                                if (response.status == 1) {
                                    $('#link-after-gen').html(response.shortLink);
                                    $('#link-after-gen').attr('href', 'http://' + response.shortLink);
                                    $('#product-name-genlink').html(response.productInfo.name);
                                    $('#product-price-genlink').html(response.productInfo.price);
                                    $('#product-image-genlink').attr('src', response.productInfo.image);
                                    $('#product-discount-genlink').html(response.productInfo.discount + '%');

                                    $('#product-result-box').show();
                                }

                                isClick = true;
                            });
                        },
                        error: function (response) {
                            $(".progress-bar").animate({
                                width: "100%"
                            }, 2500, function () {
                                $(".progress-bar").animate({
                                    width: "0%"
                                }, 0);

                                $('.product-loading-progress').hide();

                                $('#error-product-result-box').show();

                                isClick = true;
                            });
                        }
                    });
                }
            }) 
        });
    </script>
@endsection