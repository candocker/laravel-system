@extends('layouts.main')
@section('header')@include('navigation.common/_pagecss', ['view' => $datas['currentSort']])@endsection
@section('content')
{{--@include('navigation.common._header-' . $datas['currentSort'], ['data' => ''])--}}
@include('navigation.common._header', ['data' => ''])
@include('navigation.modules._datas', ['datas' => $datas])
@include('navigation.common._footer-simple', ['data' => ''])
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/52/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/31/bootstrap.min.js'></script>
<script charset="gbk" src="{{$commonAssetUrl}}/nav/js/opensug.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/nav/js/41/jquery.anchorscroll.min.js"></script>
@include('navigation.common._footer-js', ['data' => ''])
@endsection
