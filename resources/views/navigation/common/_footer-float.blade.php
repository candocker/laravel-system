<ul class="subnav list-group" id="navs">
    @foreach ($datas['sorts'] as $pIndex => $pData)
    <li>
        <a href="#{{$pData['code']}}" class="anchor-scroll"><i class="fa {{$pData['icon']}}"></i> {{$pData['name']}}</a>
    </li>
    @endforeach 
</ul>
<div class="tui">
    <a href="https://wj.qq.com/s2/3881997/233a/" target="_blank" title="网站推荐/提交、吐槽反馈">
        <img src="{{$commonAssetUrl}}/nav/img/96fd5-1515.png">
    </a>
</div>
