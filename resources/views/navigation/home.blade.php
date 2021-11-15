@extends('layouts.main')
@section('header')@include('navigation.common/_pagecss', ['view' => 'home'])@endsection
@section('content')
@include('navigation.modules._home-signupin', ['data' => ''])
@include('navigation.modules._home-addsite', ['data' => ''])
@include('navigation.modules._home-header', ['data' => ''])
@include('navigation.modules._home-recommend', ['datas' => $datas['recommendDatas']])
<div class="container content" data-spy="scroll" data-target="#list-example" data-offset="0">
    @include('navigation.modules._home-toolbar', ['data' => ''])
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($datas['sorts'] as $pIndex => $pData)
        <div class="col subs">
            <h5 class="tit">
                <i class="fa {{$pData['icon']}}" style="color: #7CCD7C;"></i>{{$pData['name']}}
                <a href="https://m.bilibili.com/ranking" class="rd">
                    <img src="{{$commonAssetUrl}}/nav/img/93824-4007.png" class="simg">热门视频</a>
                <a href="https://www.douyin.com/" class="yule tg" target="_blank" style="margin-left: 13px">抖音</a>
                <a href="https://www.kuaishou.com/" class="yule tg" target="_blank" style="margin-left: 12px">快手</a>
            </h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                @foreach ($pData['navDatas'] as $subIndex => $subData)
                <div class="col">
                    <a href="{{$subData['website']}}" target="_blank" class="cy">
                        @if ($subData['extfield']) <img src="{{$commonAssetUrl}}{{$subData['extfield']}}" class="img"> @endif
                        {{$subData['name']}}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    @include('navigation.modules._home-footer-recommend', ['datas' => $datas])
</div>
@include('navigation.modules._home-footer-mobile', ['datas' => $datas['mobileBottom']])
@include('navigation.common._footer-simple', ['data' => ''])
@include('navigation.modules._home-float', ['data' => ''])
@include('navigation.modules._home-js', ['data' => ''])
@endsection
