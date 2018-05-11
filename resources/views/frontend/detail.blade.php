@extends('frontend')

@section('style')
    <link rel="stylesheet" id="mltx-style-css" href="/css/news.css" type="text/css" media="all">
@endsection

@section('content')
    <section id="kienthuc" class="clearfix">
        <div class="container">
            <div class="adm-mainsection">

                <div class="ads-sponsor type-2 adm-hidden">

                    <div id="admsectionlogo"></div>

                    <div id="admsection1"></div>
                </div>
                <div class="ads-sponsor type-2 adm-hidden">

                    <div id="admsection2"></div>

                    <div id="admsection3"></div>
                </div>


                <div class="khungdetail totalcontentdetail">

                    <div class="wp980">
                        <div class="newscontent adm-leftsection noibat">

                            <div class="detail-single2">


                                <div class="content" id="mainDetail">


                                    <h1 class="title">
                                        {{ $post->name }}
                                    </h1>
                                    <div class="timeandcatdetail">
                                        <span class="time">
                                        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}
                                        </span>
                                        <span class="gach">|</span>
                                        <span class="cat">
                                                                        <a href="cau-chuyen-kinh-doanh.html"
                                                                           title="Kinh doanh">{{ $post->category->name }}</a>

                                                                                                                        </span>
                                    </div>


                                    <div id="fbrecommend">
                                        <div class="fbLikeWrap">
                                            <div class="fb-like add" data-href="{{ $post->link }}"
                                                 data-layout="button_count" data-action="like" data-size="small"
                                                 data-show-faces="false" data-share="false"></div>
                                        </div>

                                        <div class="send-button fr">
                                            <div class="fb-send fl add" data-href="{{ $post->link }}"
                                                 data-colorscheme="light"></div>
                                        </div>
                                    </div>


                                    <div class="w640right">
                                        <div class="mxhsingle2">
                                            <i class="icontronfb"
                                               onclick=""></i>
                                            <i class="icontronsendfb"
                                               onclick=""></i>
                                        </div>

                                        {{--short desc--}}
                                        <div class="short-desc">{!! $post->short_desc !!}</div>

                                        <div data-check-position="body_start"></div>

                                        <div class="detail-content">
                                            {{--content--}}
                                            {!! $post->desc !!}
                                            <p class="p-author">
                                                <strong class="detail-author">
                                                    {{ $post->createdBy->name }}</strong>
                                            </p>
                                        </div>
                                        <div data-check-position="body_end"></div>
                                        @php
                                            $nextPost = \App\Model\Post::where('id', '>', $post->id)->first();
                                            if (empty($nextPost)) {
                                                $nextPost = \App\Model\Post::where('id', '<', $post->id)->first();
                                            }
                                        @endphp

                                        @if (!empty($nextPost))
                                            <div class="VCSortableInPreviewMode link-content-footer IMSCurrentEditorEditObject"
                                                 type="link">
                                                <a href="{{ $nextPost->link }}" title="{{ $nextPost->name }}"
                                                   style="font-size: 22px; font-weight: bold;">{{ $nextPost->name }}</a>
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="noibat-right">
                            <div class="banner">
                                <img src="/assets/images/banner.png">
                            </div>
                        </div>

                        <!--end newscontent-->
                        <!--end contentright-->
                    </div>
                    <div id="adm_sponsor_footer1" class="clearb"></div>
                    <div id="adm_sticky_footer"></div>

                    <div class="tinmoidetail">
                        <div class="docthemdetail tab">Đọc thêm</div>
                        <div class="wp980">
                            <div class="timelineld">
                                <div class="listtimeline list_home2 listpopup listdetail">
                                    <ul class="loadin" id="LoadStreamDetail" dspid="3" algid="0" boxid="1">
                                        @php $randoms = \App\Model\Post::where('id', '!=', $post->id)->inRandomOrder()->limit(15)->get();  @endphp
                                        @foreach($randoms as $random)
                                            <li class="pulistdt"
                                                id="LocalNewsId20180427102712288"><a
                                                        href="{{ $random->link }}"
                                                        title="{{ $random->name }}"
                                                        class="show-popup visit-popup"><img
                                                            src="{{ $random->image }}"
                                                            alt="{{ $random->name }}"
                                                            title="{{ $random->name }}"
                                                            width="260" height="162"></a>
                                                <h3>
                                                    <a href="{{ $random->link }}"
                                                       title="{{ $random->name }}"
                                                       class="show-popup visit-popup">{{ $random->name }}</a></h3>
                                                <p class="cate"><span class="time" title="{{ \Carbon\Carbon::parse($random->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($random->created_at)->format('d/m/Y H:i') }}</span>
                                                </p>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="fb-loading-wrapper more_loading"
                                         style="max-width: 710px; display: none;">
                                        <div class="fblw-timeline-item ">
                                            <div class="fblwti-animated">
                                                <div class="fblwtia-mask fblwtia-title-line fblwtia-title-mask-0"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sapo-line-0"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-0"></div>
                                                <div class="fblwtia-mask fblwtia-title-line fblwtia-title-mask-1"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sapo-line-1"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-1"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-2"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-2"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-2"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-3"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-3"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-3"></div>
                                                <div class="fblwtia-mask fblwtia-front-mask fblwtia-front-mask-4"></div>
                                                <div class="fblwtia-mask fblwtia-sapo-line fblwtia-sapo-line-4"></div>
                                                <div class="fblwtia-mask fblwtia-sepline-sapo fblwtia-sepline-sapo-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" rel="nofollow" class="more" style="display: none">Xem
                                        tiếp &gt;&gt;</a>
                                </div>
                            </div>
                            <div class="timelinerd">

                                <div id="admsection7"></div>

                                <div id="admzone479828"></div>
                                <script>
                                    admicroAD.unit.push(function () {
                                        admicroAD.show('admzone479828')
                                    });
                                </script>
                            </div>
                            <div class="clearb"></div>
                            <div id="adm_sponsor_footer2"></div>
                        </div>
                    </div>


                    <div class="light-box-bounder">
                        <div class="light-box-content">
                            <div class="light-box loading">
                            </div>
                        </div>
                        <div class="radianbotpopup"></div>
                        <div class="close-wrap">
                            <div class="close">
                                <div class="close-1"></div>
                                <div class="close-2"></div>

                            </div>
                        </div>
                    </div>

                    <div class="clearb"></div>
                </div>

                <div style="clear: both"></div>
            </div>
        </div>
    </section>
@endsection