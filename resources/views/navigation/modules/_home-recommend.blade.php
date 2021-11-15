@php
$classDatas = ['one', 'two', 'three', 'four', 'five', 'six', 'seven'];
@endphp
<div class="container tj">
    <div class="d-flex justify-content-between">
        @foreach ($datas['navDatas'] as $pIndex => $pData)
        <a class="sub {{$classDatas[$pIndex]}}" href="{{$pData['website']}}" target="_blank">
            <div class="p-2 bd-highlight">{{$pData['name']}}免费在线工具</div>
        </a>
        @endforeach 
    </div>
</div>
