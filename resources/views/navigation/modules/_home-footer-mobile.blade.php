<div class="container mob-tool">
    <div class="row">
        @foreach ($datas as $pData)
        <div class="col">
            <a href="{{$pData['url']}}">
                <span><i class="fa {{$pData['icon']}}" style="{{$pData['iColor']}}"></i></span>
                <p>{{$pData['name']}}</p>
            </a>
        </div>
        @endforeach 
    </div>
</div>
