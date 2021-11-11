@extends('layouts.main')
@section('header')@include('navigation.header/_coolsite', [])@endsection
@section('content')
<div class="tn">
    <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <a class="navbar-brand" href="http://guozhivip.com/lab/">
            <img src="{{$commonAssetUrl}}/nav/img/b359b-8779.png" width="30" height="30" class="d-inline-block align-top" alt="发现优质、实用、有趣站点">果汁实验室</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://guozhivip.com/" target="_blank">导航
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://guozhivip.com/rank/" target="_blank">热榜</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="http://guozhivip.com/tool/" target="_blank">工具</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">更多</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://guozhivip.com/so/" target="_blank">果汁搜索</a>
                        <a class="dropdown-item" href="http://guozhivip.com/pod/" target="_blank">果汁运营</a>
                        <a class="dropdown-item" href="http://guozhivip.com/zhinan/" target="_blank">果汁指南</a>
                        <a class="dropdown-item" href="http://guozhivip.com/design/" target="_blank">果汁设计</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://guozhivip.com/tc/" target="_blank">联系/吐槽/捐助</a></div>
                </li>
            </ul>
        </div>
        <form class="form-inline" action="https://www.baidu.com/s" target="_blank" method="get">
            <style type="text/css">.bdsug_copy{display:none}</style>
            <input name="ie" type="hidden" value="utf-8">
            <input class="form-control mr-sm-2" type="text" name="word" baiduSug="1" placeholder="搜你所想" aria-label="搜你所想">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">百度一下</button></form>
    </nav>
</div>
@foreach ($datas['sorts'] as $pIndex => $pData)
<div class="container sub @if ($pIndex == 'ydys') first @endif">
    <div class="title">
        <i class="fa {{$pData['icon']}}"></i>&nbsp;{{$pData['name']}} &nbsp;
        <span class="djt" style="font-size: 14px;color: #f70">{{$pData['description']}}</span>
    </div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <!--<div class="col">
        <a href="https://docs.qq.com/doc/DQVBCUHBjcktlR0xE" class="card-link" target="_blank">
        <div class="card-tit"><img src="{{$commonAssetUrl}}/nav/img/c1195-9273.png"><span class="name" style="color: #F70">重要公告</span></div>
        <div class="card-desc">赶快去看看</div></a>
        </div>-->
        @foreach ($pData['navDatas'] as $subIndex => $subData)
        <div class="col">
            <a href="{{$subData['website']}}" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}{{$subData['extfield']}}">
                    <span class="name">{{$subData['name']}}</span>
                </div>
                <div class="card-desc">{{$subData['description']}}</div>
            </a>
        </div>
        @endforeach
        <div class="col">
        <a href="https://www.boredpanda.com/" class="card-link" target="_blank">
        <div class="card-tit"><img src="{{$commonAssetUrl}}/nav/img/72fcb-9508.png"><span class="name">Boredpanda</span></div>
        <div class="card-desc">分享全球有趣的图片故事</div></a>
        </div>
    </div>
</div>
@endforeach
<div class="container sub">
    <footer>
        <p class="tip">
            <i class="fa fa-bullhorn" style="color: #FF7F50"></i>部分外文网站访问速度较慢，属正常现象，请知悉</p>
        <hr style="border-top: 1px dashed #ddd;margin-top: 10px;">
        <ul class="copyright">
            <li>
                <p>
                    <b>果汁实验室，发现国内外优质、实用、有趣资源</b>
                    <br>
                    <a href="http://guozhivip.com/tc/" target="_blank">
                        <i class="fa fa-heart" style="color: #FFB6C1"></i>捐助</a>&nbsp;&nbsp;&nbsp;
                    <a href="https://support.qq.com/products/27320" target="_blank">吐槽建议</a>&nbsp;&nbsp;&nbsp;
                    <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=0_Hg5Obq6uXg4uuToqL9sLy_" title="邮箱：guozhinav@qq.com" target="_blank">联系合作</a>
                    <br>
                    <a href="https://space.bilibili.com/306508238" target="_blank" title="站长B站">
                        <img src="{{$commonAssetUrl}}/nav/img/46a12-6675.png" class="ico" alt="B站" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://docs.qq.com/doc/DQXNORkRMT3dRcGlz" target="_blank" title="微信公众号：果汁指南">
                        <img src="{{$commonAssetUrl}}/nav/img/10521-8628.png" class="ico" alt="微信公众号" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://www.zhihu.com/people/bo-he-feng-03/activities" target="_blank" title="站长知乎">
                        <img src="{{$commonAssetUrl}}/nav/img/35432-3024.png" class="ico" alt="知乎" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://weibo.com/guozhivip?is_all=1" target="_blank" title="站长微博">
                        <img src="{{$commonAssetUrl}}/nav/img/3fe69-5398.png" class="ico" alt="微博" /></a>&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="https://jq.qq.com/?_wv=1027&k=5kgTpGb">
                        <img border="0" src="{{$commonAssetUrl}}/nav/img/72761-3588.png" alt="果汁官方交流群" title="果汁交流群：245229401"></a></p>
                <span class="cp">Copyright © 2016-
                    <span id="showt"></span>
                    <a href="http://guozhivip.com/">果汁导航</a>旗下 All Rights Reserved.
                    <a href="http://beian.miit.gov.cn/" target="_blank">陕ICP备20012493号-2</a></span>
            </li>
            <li class="erwm">
                <div class="ma"></div>
                <p style="margin-top: 2px;">官方公众号</p></li>
        </ul>
    </footer>
</div>
<a href="javascript:;" id="btn" title="返回顶部" class="bts tui">
    <i class="fa fa-chevron-up"></i>
</a>
<a href="https://wj.qq.com/s2/3881997/233a/" class="tui" target="_blank" title="推荐/提交自己的网站至果汁实验室">
    <i class="fa fa-plus"></i>
</a>
<!--本站严禁抄袭上线，抄袭可耻！-->
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/65/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/70/bootstrap.min.js'></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/74/back.js'></script>
<script charset="gbk" src="{{$commonAssetUrl}}/nav/js/opensug.js"></script>
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
<script type="text/javascript">if (self == top) {
        var theBody = document.getElementsByTagName('body')[0];
        theBody.style.display = "block";
    } else {
        top.location = self.location;
    }</script>
@endsection
