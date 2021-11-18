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
        @include('navigation.common._search-form', ['currentSort' => $datas['currentSort']])
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
