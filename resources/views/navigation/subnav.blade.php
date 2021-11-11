@extends('layouts.main')
@section('header')@include('navigation.header/_' . $datas['currentSort'], [])@endsection
@section('content')
@include('navigation.common._header-' . $datas['currentSort'], ['data' => ''])
@include('navigation.modules._datas', ['datas' => $datas])
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
