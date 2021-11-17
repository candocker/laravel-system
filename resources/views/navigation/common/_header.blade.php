<div class="cont" style="overflow: visible">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://guozhivip.com/tool/">{{$datas['bigSort']['name']}}</a>
        <ul class="nav justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">更多</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($datas['categorys'] as $pData)
                    <a class="dropdown-item" href="{{$pData['url']}}" target="_blank">{{$pData['name']}}</a>
                    @endforeach
                    <!--<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/tc/" target="_blank">联系/吐槽/捐助</a>-->
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="/">导航</a></li>
            <li class="nav-item"><a class="nav-link" href="/search">搜索</a></li>
        </ul>
    </nav>
    <div class="container so">
        <h2>免费好用的在线工具大全</h2>
        <!--<h2><span style="color: #f90;">免费影视专栏</span></h2>
        <h2>官网便宜购，发现特价好物</h2>
        <h2><span style="color: #fff;">免费图片专栏</span></h2>
        <h2>精选优质设计资源大全</h2>
        -->
        <form class="input-group" action="https://www.baidu.com/s" target="_blank" method="get">
        <!--<form class="input-group" action="https://search.jd.com/Search?enc=utf-8&keyword=" target="_blank" method="get">shop-->
            <style type="text/css">.bdsug_copy{display:none}</style>
            <input name="ie" type="hidden" value="utf-8">
            <input type="text" class="form-control" id="inword" name="word" size="30" baiduSug="1" placeholder="随时百度一下" aria-describedby="button-addon4">
            <!--<input type="text" class="form-control" id="search" name="search" size="30" baiduSug="1" placeholder="京东搜索一下">shop-->
            <div class="input-group-append" id="button-addon4">
                <input class="btn btn-outline-secondary" type="submit" value="百度一下" />
                <!--<input class="btn btn-outline-secondary" type="submit" id="jd" value="京东搜索" />shop-->
                <!--<a href="/search"><input class="btn btn-outline-secondary soo" type="button" value="聚合搜索" /></a>-->
            </div>
        </form>
        @if ($datas['focusDatas'])
        <h6 class="mob-hs">
            @foreach ($datas['focusDatas'] as $pData)
            <a href="{{$pData['url']}}" target="_blank">{{$pData['name']}}</a>&nbsp;
            @endforeach
        </h6>
        @endif
        @if ($datas['mobileLists'])
        <div class="tj">
            @foreach ($datas['mobileLists'] as $subData)
            <div class="row">
                @foreach ($subData as $pData)
                <div class="col">
                    <a href="{{$pData['url']}}">
                        <img src="{{$commonAssetUrl}}{{$pData['logo_path']}}">
                        <p>{{$pData['title']}}</p>
                    </a>
                </div>
                @endforeach 
            </div>
            @endforeach 
        </div>
        @endif
    </div>
</div>
{{--<img src="{{$commonAssetUrl}}/nav/img/f8f5c-5716.png" title="免费好用的在线工具大全" />果汁工具
<img src="{{$commonAssetUrl}}/nav/img/6cd27-5337.png" title="果汁导航漫画专栏" />漫画
<img src="{{$commonAssetUrl}}/nav/img/59da9-6231.png" title="免费好用的在线工具大全" />设计
<img src="{{$commonAssetUrl}}/nav/img/49372-2250.png" title="果汁导航游戏专栏" />游戏
<img src="{{$commonAssetUrl}}/nav/img/b3b98-5587.png" title="果汁导航新闻专栏" />新闻
<img src="{{$commonAssetUrl}}/nav/img/d9a9c-4402.png" title="果汁导航，精选优质实用网络资源" />图片
<img src="{{$commonAssetUrl}}/nav/img/f501c-9438.png" title="果汁导航小说专栏" />小说
<img src="{{$commonAssetUrl}}/nav/img/744f7-4446.png" title="官网便宜购" />惠购
<img src="{{$commonAssetUrl}}/nav/img/16226-2102.png" title="果汁教育专栏" />教育
<img src="{{$commonAssetUrl}}/nav/img/d9a9c-4402.png" title="果汁导航，精选优质实用网络资源" /> 影视--}}
