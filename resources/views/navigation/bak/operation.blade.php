@extends('layouts.main')
@section('header')@include('navigation.header/_operation', [])@endsection
@section('bodyClass')onresize="document.activeElement.scrollIntoView(false);"@endsection
@section('content')
@include('navigation.common._header-operation', ['data' => ''])
@include('navigation.modules._datas', ['datas' => $datas])
<a href="javascript:;" id="btn" title="返回顶部" class="bts tui">
    <i class="fa fa-chevron-up"></i>
</a>
<a href="https://wj.qq.com/s2/3881997/233a/" class="tui" target="_blank" title="网站推荐/提交、吐槽反馈">
    <i class="fa fa-plus"></i>
</a>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/79/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/30/popper.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/64/bootstrap.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/63/back.js'></script>
<script charset="gbk" src="{{$commonAssetUrl}}/nav/js/opensug.js"></script>
<script type="text/javascript" src="{{$commonAssetUrl}}/nav/js/47/jquery.anchorscroll.min.js"></script>
<script type="text/javascript">$(document).ready(function() {
        // Anchor Scroll
        $('.anchor-scroll').anchorScroll({
            scrollSpeed: 800 // scroll speed
        });

        $('.arrow-up').anchorScroll({
            scrollSpeed: 1400,
            // scroll speed
            onScroll: function() {
                $(".fill-bg").fadeIn("slow");
                $(".popup").text("Scrolling...");
            },
            scrollEnd: function() {
                $(".fill-bg").delay(1000).fadeOut("slow");
                $(".popup").text("Done!");
            }
        });
    });</script>
<!--pb 本站为作者原创，禁止抄袭，抄袭可耻-->
<script>document.oncontextmenu = function(event) {
        if (window.event) {
            event = window.event;
        }
        try {
            var the = event.srcElement;
            if (! ((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")) {
                return false;
            }
            return true;
        } catch(e) {
            return false;
        }
    }</script>
<script type="text/javascript">$(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })</script>
<script type="text/javascript">if (self == top) {
        var theBody = document.getElementsByTagName('body')[0];
        theBody.style.display = "block";
    } else {
        top.location = self.location;
    }</script>
@endsection
