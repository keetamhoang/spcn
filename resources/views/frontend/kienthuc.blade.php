@extends('frontend')

@section('style')
    <link rel="stylesheet" id="mltx-style-css" href="/css/news.css" type="text/css" media="all">
@endsection

@section('content')
    <section id="kienthuc" class="clearfix">
        <div class="container">
            <div class="bgadmtoptotal "></div>
            <div class="contentleft">

                <div data-check-position="cb_home-position_focus"></div>
                <div style="overflow: hidden;">
                    <div class="noibat" data-marked-zoneid="cb_home_focus">
                        @if (count($posts) > 0)
                        <ul>
                            <li class="noibat2">
                                <h2>
                                    <a href="{{ $posts[0]->link }}"
                                       title="{{ $posts[0]->name }}">{{ $posts[0]->name }}</a></h2><a
                                        href="{{ $posts[0]->link }}"
                                        title="{{ $posts[0]->name }}"><img
                                            src="{{ $posts[0]->image }}"
                                            alt="{{ $posts[0]->name }}"
                                            width="425" height="265">
                                </a>
                                <div class="infohl">
                                    {!! $posts[0]->short_desc !!}
                                </div>
                            </li>

                            @for($i=1;$i<4;$i++)
                                @if (!empty($posts[$i]))
                                    <li class="normal {{ $i == 3 ? 'last' : '' }}"><a
                                                href="{{ $posts[$i]->link }}"
                                                title="{{ $posts[$i]->name }}"><img
                                                    src="{{ $posts[$i]->image }}"
                                                    alt="{{ $posts[$i]->name }}"
                                                    width="223" height="140"></a>
                                        <h2>
                                            <a href="{{ $posts[$i]->link }}"
                                               title="{{ $posts[$i]->name }}">{{ $posts[$i]->name }}</a></h2></li>
                                @else
                                    @break
                                @endif
                            @endfor
                        </ul>
                        @endif
                    </div>
                    <div class="noibat-right">
                        <div class="banner">
                            <img src="/assets/images/banner.png">
                        </div>
                    </div>
                </div>

                <!--end noibat-->

                <div style="display: block; width: 100%; float: left; background: #bababa; width: 90px;"></div>
                <i class="gachtimelinedo"></i>
                <div id="admzone3670"></div>

                <div class="listtimeline list_home">
                    <ul class="last">

                        <div data-check-position="cb_home_list1_start"></div>
                        @if (count($posts) > 4)
                            @for($j=4;$j<count($posts);$j++)
                                <li class="">
                                    <a href="{{ $posts[$j]->link }}"
                                            title="{{ $posts[$j]->name }}"
                                            class="show-popup visit-popup"><img
                                                src="{{ $posts[$j]->image }}"
                                                alt="{{ $posts[$j]->name }}"
                                                title="{{ $posts[$j]->name }}" width="200"
                                                height="150"></a>
                                    <h3><a href="{{ $posts[$j]->link }}"
                                           title="{{ $posts[$j]->name }}"
                                           class="show-popup visit-popup">{{ $posts[$j]->name }}</a>
                                    </h3>
                                    <p class="cate">{{ $posts[$j]->category->name }} <span>-</span> <span class="time" title="{{ \Carbon\Carbon::parse($posts[$j]->created_at)->format('d/m/Y H:i') }}">{{ \Carbon\Carbon::parse($posts[$j]->created_at)->format('d/m/Y H:i') }}</span>
                                    </p></li>
                            @endfor
                        @endif

                        <div id="admzone485335"></div>
                    </ul>


                </div>

            </div>
        </div>
    </section>
@endsection