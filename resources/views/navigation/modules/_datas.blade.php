@php
$classDatas = ['one', 'two', 'three', 'four', 'five', 'six'];
@endphp
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
        <!--<span class="remark"><a href="http://guozhivip.com" target="_blank"  style="color: #f60"><i class="fa fa-jpy"></i>代理推广收益</a></span>-->
        <span class="remark">{{$pData['description']}}</span>
    </h5>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        @foreach ($pData['navDatas'] as $subIndex => $subData)
        <div class="col">
            <a href="{{$subData['website']}}" target="_blank">
                @if ($subData['extfield']) <img src="{{$commonAssetUrl}}/{{$subData['extfield']}}" class="ico"> @endif
                {{$subData['name']}}
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
