@php
$classDatas = ['one', 'two', 'three', 'four', 'five', 'six'];
@endphp
@extends('layouts.main')
@section('header')@include('navigation.header/_tool', [])@endsection
@section('content')
@include('navigation.common._header', ['data' => ''])
<div class="container content" data-spy="scroll" data-target="#navs" data-offset="0">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        @foreach ($datas['recommendDatas']['navDatas'] as $pIndex => $pData)
        <div class="col send">
            <a class="{{$classDatas[$pIndex]}}" href="{{$pData['website']}}" target="_blank">{{$pData['name']}}</a>
        </div>
        @endforeach 
    </div>
    @foreach ($datas['sorts'] as $pIndex => $pData)
    <h5 class="tit fst" id="{{$pData['code']}}">
        <b><i class="fa {{$pData['icon']}}"></i> {{$pData['name']}}</b>
        <!--<span class="remark"><a href="" target="_blank"  style="color: #f60"><i class="fa fa-diamond"></i>115网盘会员</a></span>-->
        <span class="remark">{{$pData['description']}}</span>
    </h5>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        @foreach ($pData['navDatas'] as $subIndex => $subData)
        <div class="col">
            <a href="{{$subData['website']}}" target="_blank">
                <img src="{{$commonAssetUrl}}/{{$subData['extfield']}}" class="ico">{{$subData['name']}}
            </a>
        </div>
        @endforeach 
    </div>
    @endforeach 
    @include('navigation.common._footer', ['data' => ''])
</div>
<ul class="subnav list-group" id="navs">
    @foreach ($datas['sorts'] as $pIndex => $pData)
    <li>
        <a href="#{{$pData['code']}}" class="anchor-scroll"><i class="fa {{$pData['icon']}}"></i> {{$pData['name']}}</a>
    </li>
    @endforeach 
</ul>
<div class="tui">
<a href="https://wj.qq.com/s2/3881997/233a/" target="_blank" title="网站推荐/提交、吐槽反馈">
    <img src="{{$commonAssetUrl}}/nav/img/96fd5-1515.png"></a>
</div>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/52/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/31/bootstrap.min.js'></script>
<script charset="gbk" src="{{$commonAssetUrl}}/nav/js/opensug.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/nav/js/41/jquery.anchorscroll.min.js"></script>
@include('navigation.common._footer-js', ['data' => ''])
@endsection
