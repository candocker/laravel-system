@extends('layouts.main')
@section('header')@include('navigation.common/_pagecss', ['view' => 'home'])@endsection
@section('content')
{{--@include('navigation.modules._home-signupin', ['data' => ''])
@include('navigation.modules._home-addsite', ['data' => ''])--}}
@include('navigation.modules._home-header', ['data' => ''])
@include('navigation.modules._home-recommend', ['data' => ''])
<div class="container content" data-spy="scroll" data-target="#list-example" data-offset="0">
    <div class="btn-toolbar">
        <div class="btn-group mr-2">
            <a class="btn btn-warning wn">
                <i class="fa fa-star"></i>我的收藏</a>
        </div>
        <div class="btn-group mr-2">
            <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#Login" title="注册登录后可添加自己常用的网站、云同步">
                <i class="fa fa-plus"></i>登录添加</a>
        </div>
    </div>
<div class="btn-toolbar">
        <div class="btn-group mr-2"><a class="btn btn-warning wn"><i class="fa fa-star"></i> 我的收藏</a></div>
        
        <div class="btn-group mr-2">
          <a class="btn btn-light wn" href="http://www.baidu.com" target="_blank">test</a>
          <a class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" style="">
            <input type="hidden" name="webid" value="6804">
            <!--<a class="dropdown-item" href="php/editweb.php?webid=6804" data-toggle="modal" data-target="#editweb">修改</a>-->
            <a class="dropdown-item" onclick="return confirm('确定要删除吗？')" href="php/delweb.php?webid=6804">删除</a>
          </div>
        </div>
                <div class="btn-group mr-2 show">
          <a class="btn btn-light wn" href="https://www.sohu.com" target="_blank">news</a>
          <a class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="true">
            <span class="sr-only">Toggle Dropdown</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right show" x-placement="bottom-end" style="position: absolute; transform: translate3d(53px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
            <input type="hidden" name="webid" value="6805">
            <!--<a class="dropdown-item" href="php/editweb.php?webid=6805" data-toggle="modal" data-target="#editweb">修改</a>-->
            <a class="dropdown-item" onclick="return confirm('确定要删除吗？')" href="php/delweb.php?webid=6805">删除</a>
          </div>
        </div>
                <div class="btn-group mr-2">
                      <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#addweb" title="最多可添加8个网站，下面已收录的不建议重复添加">
                        <i class="fa fa-plus"></i> 添加
                      </a>
                  </div>      </div>
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
    @include('navigation.modules._home-footer-recommend', ['data' => ''])
</div>
@include('navigation.modules._home-footer-mobile', ['data' => ''])
@include('navigation.common._footer-simple', ['data' => ''])
@include('navigation.modules._home-float', ['data' => ''])
@include('navigation.modules._home-js', ['data' => ''])
@endsection
