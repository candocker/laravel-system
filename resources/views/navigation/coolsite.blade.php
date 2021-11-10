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
<div class="container sub first">
    <div class="title">
        <i class="fa fa-lightbulb-o"></i>&nbsp;有点意思 &nbsp;
        <span class="djt" style="font-size: 14px;color: #f70">
            <script src="http://guozhivip.com/lab/api/api.php"></script>&nbsp;#今日毒鸡汤</span></div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <!--<div class="col">
        <a href="https://docs.qq.com/doc/DQVBCUHBjcktlR0xE" class="card-link" target="_blank">
        <div class="card-tit"><img src="{{$commonAssetUrl}}/nav/img/c1195-9273.png"><span class="name" style="color: #F70">重要公告</span></div>
        <div class="card-desc">赶快去看看</div></a>
        </div>-->
        <div class="col">
            <a href="http://guozhivip.com/mvs.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/811d8-1220.png">
                    <span class="name">免费影视</span></div>
                <div class="card-desc">免费在线追剧观影</div></a>
        </div>
        <div class="col">
            <a href="https://neave.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/07ad6-9378.png">
                    <span class="name">Neave</span></div>
                <div class="card-desc">好玩的小游戏合集</div></a>
        </div>
        <div class="col">
            <a href="https://alteredqualia.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/a71eb-6931.jpg">
                    <span class="name">Alteredqualia</span></div>
                <div class="card-desc">3D影像技术，各种好玩的神器</div></a>
        </div>
        <div class="col">
            <a href="https://bruno-simon.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/1c08d-1267.jpg">
                    <span class="name">自驾乐趣</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">无聊，把车开起来</div></a>
        </div>
        <div class="col">
            <a href="http://www.staggeringbeauty.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/3b309-1008.png">
                    <span class="name">Staggeringbeauty</span></div>
                <div class="card-desc">一个贱萌的减压家伙</div></a>
        </div>
        <div class="col">
            <a href="https://aidn.jp/wow/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/3c20f-1934.jpg">
                    <span class="name">WOW</span></div>
                <div class="card-desc">让初音未来陪你跳舞</div></a>
        </div>
        <div class="col">
            <a href="https://findtheinvisiblecow.com/" class="card-link" target="_blank" title="移动鼠标，根据动物叫声大小找到牛">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d1138-3053.png">
                    <span class="name">找到隐藏的牛</span></div>
                <div class="card-desc">移动鼠标，根据动物叫声大小找到牛</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/2048" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/2b68e-1514.jpg">
                    <span class="name">2048</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">2048游戏在线玩</div></a>
        </div>
        <div class="col">
            <a href="http://nodtotherhythm.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/0879a-3721.png">
                    <span class="name">节奏照片</span></div>
                <div class="card-desc">可以让照片中的人脸跟着音乐律动</div></a>
        </div>
        <div class="col">
            <a href="https://2020game.io/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/240a7-3300.png">
                    <span class="name">酷跑</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">在线小人酷跑</div></a>
        </div>
        <div class="col">
            <a href="https://fff.cmiscm.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/02b60-1353.png">
                    <span class="name">fff.</span></div>
                <div class="card-desc">让人欲罢不能的鼠标交互</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/wen.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/b310f-4505.png">
                    <span class="name">文章生成器</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">狗屁不通文章生成器</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/els/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/13976-8367.png">
                    <span class="name">俄罗斯方块</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">经典小游戏</div></a>
        </div>
        <div class="col">
            <a href="https://jewels.frvr.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/310ee-2441.jpg">
                    <span class="name">Jewels</span></div>
                <div class="card-desc">开心消消乐</div></a>
        </div>
        <div class="col">
            <a href="https://greed.frvr.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/fcb15-6413.jpg">
                    <span class="name">Greed</span></div>
                <div class="card-desc">疯狂抢金币</div></a>
        </div>
        <div class="col">
            <a href="http://slither.io/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/643e9-6997.jpg">
                    <span class="name">Slither</span></div>
                <div class="card-desc">在线玩贪吃蛇</div></a>
        </div>
        <div class="col">
            <a href="https://lines.frvr.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d80c8-2401.jpg">
                    <span class="name">Play Lines</span></div>
                <div class="card-desc">把相同颜色的点都连接起来</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/fe5a0-3494.jpg">
                    <span class="name">小球跳跃</span></div>
                <div class="card-desc">小球听你指挥</div></a>
        </div>
        <div class="col">
            <a href="https://hex.frvr.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/11c9d-4447.jpg">
                    <span class="name">Hexagon</span></div>
                <div class="card-desc">随机色块填充消除</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/card.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/06cc9-2177.jpg">
                    <span class="name">疯狂纸牌</span></div>
                <div class="card-desc">可以翻滚的扑克牌</div></a>
        </div>
        <div class="col">
            <a href="https://soccer.frvr.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/b0b75-7692.jpg">
                    <span class="name">足球射门</span></div>
                <div class="card-desc">在线踢足球</div></a>
        </div>
        <div class="col">
            <a href="http://kedou.workerman.net/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d4c58-4142.jpg">
                    <span class="name">蝌蚪聊天室</span></div>
                <div class="card-desc">没事儿和陌生人聊个天</div></a>
        </div>
        <div class="col">
            <a href="https://www.yikm.net/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/12b44-2066.jpg">
                    <span class="name">小霸王</span></div>
                <div class="card-desc">找回童年的欢乐</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/fun/fire.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/bfe79-4668.jpg">
                    <span class="name">熊熊火焰</span></div>
                <div class="card-desc">燃烧吧，火焰</div></a>
        </div>
        <div class="col">
            <a href="https://zty.pe/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/fc560-5149.png">
                    <span class="name">ZType</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">停不下来的打字小游戏</div></a>
        </div>
        <div class="col">
            <a href="http://www.windows93.net/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/136f8-2651.png">
                    <span class="name">Windows93</span></div>
                <div class="card-desc">“Windows93”系统操作体验</div></a>
        </div>
        <div class="col">
            <a href="http://lab.mkblog.cn/hacker/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/7dbcd-2342.png">
                    <span class="name">黑客帝国文字</span></div>
                <div class="card-desc">进入点击鼠标，你的电脑将被攻击</div></a>
        </div>
        <div class="col">
            <a href="http://www.geektyper.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/e3cf0-6717.png">
                    <span class="name">Geektyper</span></div>
                <div class="card-desc">伪装成特工，你就是黑客</div></a>
        </div>
        <div class="col">
            <a href="http://www.species-in-pieces.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/c6781-9627.jpg">
                    <span class="name">In-pieces</span></div>
                <div class="card-desc">每切换一次画面，产生新的动物</div></a>
        </div>
        <div class="col">
            <a href="http://www.secaibi.com/howbigisspace/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/52494-4423.jpg">
                    <span class="name">天空有多高</span></div>
                <div class="card-desc">看看天空到底有多高？</div></a>
        </div>
        <div class="col">
            <a href="http://www.autopiano.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/25d71-8620.png">
                    <span class="name">自由钢琴</span></div>
                <div class="card-desc">在线弹钢琴</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/jzg/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/12f8a-5483.png">
                    <span class="name">架子鼓</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">敲打出你自己的旋律</div></a>
        </div>
        <div class="col">
            <a href="https://aidn.jp/mikutap/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/4c857-4623.png">
                    <span class="name">Mikutap</span></div>
                <div class="card-desc">随意演奏属于你的旋律</div></a>
        </div>
        <div class="col">
            <a href="https://learningmusic.ableton.com/zh-Hans/index.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/09800-5948.png">
                    <span class="name">电子音乐</span></div>
                <div class="card-desc">开始你的音乐创作之旅</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/eat/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/43a85-5946.png">
                    <span class="name">今天吃啥呀?</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">再也不用为吃饭发愁了</div></a>
        </div>
        <div class="col">
            <a href="https://www.ipanda.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/cf96e-7339.png">
                    <span class="name">熊猫频道</span></div>
                <div class="card-desc">专业的熊猫卖萌社区</div></a>
        </div>
        <div class="col">
            <a href="http://webapp.vizen.cn/gugong_app_pc/index.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/da251-1689.png">
                    <span class="name">全景故宫</span></div>
                <div class="card-desc">实时感受故宫文化</div></a>
        </div>
        <!--<div class="col">
        <a href="https://www.boredpanda.com/" class="card-link" target="_blank">
        <div class="card-tit"><img src="{{$commonAssetUrl}}/nav/img/72fcb-9508.png"><span class="name">Boredpanda</span></div>
        <div class="card-desc">分享全球有趣的图片故事</div></a>
        </div>-->
        <div class="col">
            <a href="https://www.cbaigui.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/389a1-6990.png">
                    <span class="name">知妖</span></div>
                <div class="card-desc">中国妖怪百集</div></a>
        </div>
        <div class="col">
            <a href="https://cybermap.kaspersky.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/bbfe4-8008.png">
                    <span class="name">Kaspersky</span></div>
                <div class="card-desc">全球实时网络攻击地图</div></a>
        </div>
        <div class="col">
            <a href="https://stars.chromeexperiments.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/96f31-6007.png">
                    <span class="name">Stars</span></div>
                <div class="card-desc">进入宇宙，遨游星际</div></a>
        </div>
        <div class="col">
            <a href="https://www.meteorshowers.org/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/ddeb6-3948.jpg">
                    <span class="name">Meteor showers</span></div>
                <div class="card-desc">太空视角观看流星雨</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-thumbs-o-up"></i>&nbsp;墙裂推荐</div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <div class="col">
            <a href="http://guozhivip.com/rank/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/8517c-8910.png">
                    <span class="name">果汁排行榜</span></div>
                <div class="card-desc">全网热点，早知道</div></a>
        </div>
        <div class="col">
            <a href="https://www.sigoo.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/eaba4-5983.jpg">
                    <span class="name">极像素</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">超高像素看世界</div></a>
        </div>
        <div class="col">
            <a href="http://www.bigpixel.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/157eb-5561.jpg">
                    <span class="name">千亿像素</span></div>
                <div class="card-desc">世界之美, 记录细节！</div></a>
        </div>
        <div class="col">
            <a href="https://www.allhistory.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/b1fba-2826.svg">
                    <span class="name">全历史</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">深入了解历史画廊</div></a>
        </div>
        <div class="col">
            <a href="http://www.ltfc.net/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/91d2c-4646.jpg">
                    <span class="name">中华珍宝馆</span></div>
                <div class="card-desc">观看学习历代名家佳作</div></a>
        </div>
        <div class="col">
            <a href="https://gallerix.asia/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d96e0-6134.jpg">
                    <span class="name">Gallerix</span></div>
                <div class="card-desc">浏览世界著名画家作品</div></a>
        </div>
        <div class="col">
            <a href="https://www.xinpianchang.com/channel/index/sort-like" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/5ca8e-4180.ico">
                    <span class="name">新片场</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">趣味创意短视频作品</div></a>
        </div>
        <div class="col">
            <a href="https://topbook.cc/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/03ee1-1305.png">
                    <span class="name">Topbook</span></div>
                <div class="card-desc">高效生活研究所</div></a>
        </div>
        <div class="col">
            <a href="https://www.avogado6.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/add0a-3712.jpg">
                    <span class="name">avogado6</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">日本画师治愈系插画</div></a>
        </div>
        <div class="col">
            <a href="https://pixivic.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/bd6c1-5285.jpg">
                    <span class="name">Pixivic</span></div>
                <div class="card-desc">P站美图可访问</div></a>
        </div>
        <div class="col">
            <a href="https://www.sony.net/united/clock/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/adc95-5816.jpg">
                    <span class="name">索尼风景图</span></div>
                <div class="card-desc">看一些城市的24h风景照</div></a>
        </div>
        <div class="col">
            <a href="http://zhongguose.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/161fd-4324.jpg">
                    <span class="name">中国传统色</span></div>
                <div class="card-desc">中国古典色在线手册</div></a>
        </div>
        <div class="col">
            <a href="https://www.kujiale.com/xiaoguotu/suggestion" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/c377b-2422.jpg">
                    <span class="name">酷家乐</span></div>
                <div class="card-desc">优秀家装设计鉴赏</div></a>
        </div>
        <div class="col">
            <a href="https://film-grab.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/2c699-6812.jpg">
                    <span class="name">FilmGrab</span></div>
                <div class="card-desc">带你找到全世界的电影截图</div></a>
        </div>
        <div class="col">
            <a href="https://www.skypixel.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/5c39a-5314.png">
                    <span class="name">天空之城</span></div>
                <div class="card-desc">全球航拍摄影作品社区</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/design/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/a65eb-1816.png">
                    <span class="name">设计资源</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">精选优质设计资源大全</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/imgs.html" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/206ae-9295.jpg">
                    <span class="name">壁纸美图</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">壁纸、摄影美图、图片素材</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-book"></i>&nbsp;学习·涨知识</div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <div class="col">
            <a href="https://zh.wikihow.com/%E9%A6%96%E9%A1%B5" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/9359c-9518.png">
                    <span class="name">WikiHow</span></div>
                <div class="card-desc">Get学习、工作、生活小技能</div></a>
        </div>
        <div class="col">
            <a href="https://www.wukong.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/8e4e7-8945.png">
                    <span class="name">悟空问答</span></div>
                <div class="card-desc">了解你感兴趣的知识</div></a>
        </div>
        <div class="col">
            <a href="https://www.yxgapp.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d455a-7480.png">
                    <span class="name">译学馆</span></div>
                <div class="card-desc">分享国外有价值的学习资源</div></a>
        </div>
        <div class="col">
            <a href="https://www.mvyxws.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/9c430-7617.png">
                    <span class="name">医学微视</span></div>
                <div class="card-desc">科普医学知识的良心网站</div></a>
        </div>
        <div class="col">
            <a href="https://www.idongde.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/35544-5288.jpg">
                    <span class="name">懂得</span></div>
                <div class="card-desc">生活知识小百科</div></a>
        </div>
        <div class="col">
            <a href="https://piyao.kepuchina.cn/rumor/rumorlist" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/fdcb2-4302.jpg">
                    <span class="name">科学辟谣</span></div>
                <div class="card-desc">为你揭开真相</div></a>
        </div>
        <div class="col">
            <a href="https://www.gushiwen.org/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/26ede-3814.ico">
                    <span class="name">古诗文网</span></div>
                <div class="card-desc">古诗文经典传承</div></a>
        </div>
        <div class="col">
            <a href="https://xing.911cha.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/e4a7b-2850.png">
                    <span class="name">百家姓</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">查询了解自己的姓氏起源</div></a>
        </div>
        <div class="col">
            <a href="https://www.asklib.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/68a61-9603.png">
                    <span class="name">问答库</span></div>
                <div class="card-desc">有用的题库问答学习平台</div></a>
        </div>
        <div class="col">
            <a href="https://www.examcoo.com/index/ku" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/7ad3d-8444.png">
                    <span class="name">考试酷</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">免费的在线学习考试系统</div></a>
        </div>
        <div class="col">
            <a href="http://www.termonline.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/c71d7-9578.png">
                    <span class="name">术语在线</span></div>
                <div class="card-desc">你不懂的术语，在这里查询</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-eye"></i>&nbsp;创意生活
        <span style="font-size: 14px;color: #888">部分国外网站访问较慢</span></div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <div class="col">
            <a href="https://miniature-calendar.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/64db4-4259.png">
                    <span class="name">Miniature-calendar</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">奇妙的创意小人世界</div></a>
        </div>
        <div class="col">
            <a href="https://odditymall.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/65db0-4611.jpg">
                    <span class="name">Odditymall</span></div>
                <div class="card-desc">神奇的创意产品大合集</div></a>
        </div>
        <div class="col">
            <a href="https://www.thisiscolossal.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/84dce-2304.jpg">
                    <span class="name">Colossal</span></div>
                <div class="card-desc">一个创意图片视频网站</div></a>
        </div>
        <div class="col">
            <a href="https://romain-laurent.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/a380c-2278.jpg">
                    <span class="name">Romain laurent</span></div>
                <div class="card-desc">最有创意的图片&动图</div></a>
        </div>
        <div class="col">
            <a href="https://ello.co/discover" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/3e3b5-7908.png">
                    <span class="name">Ello</span></div>
                <div class="card-desc">全球创意工作者的聚集地</div></a>
        </div>
        <div class="col">
            <a href="https://www.artic.edu/collection" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/99e00-6392.png">
                    <span class="name">Artic</span></div>
                <div class="card-desc">探索博物馆收藏的艺术品</div></a>
        </div>
        <div class="col">
            <a href="https://divisare.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/aef47-6682.png">
                    <span class="name">Divisare</span></div>
                <div class="card-desc">最大的当代建筑线上图书馆</div></a>
        </div>
        <div class="col">
            <a href="https://www.gracg.com/works?type=hot" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/46b0a-8953.png">
                    <span class="name">涂鸦王国</span></div>
                <div class="card-desc">创意插画艺术作品</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-wrench"></i>&nbsp;在线制作</div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <!--<div class="col">
        <a href="https://www.52doutu.cn/" class="card-link" target="_blank">
        <div class="card-tit"><img src="{{$commonAssetUrl}}/nav/img/eae2b-6177.ico"><span class="name">表情包制作</span></div>
        <div class="new">Hot</div>
        <div class="card-desc">在线制作表情/下载</div></a>
        </div>-->
        <div class="col">
            <a href="https://www.gifhome.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/ba454-6272.ico">
                    <span class="name">GIF之家</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">GIF动图在线制作/下载</div></a>
        </div>
        <div class="col">
            <a href="https://obliterate.me/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/24337-1564.svg">
                    <span class="name">Obliterate</span></div>
                <div class="card-desc">国外涂鸦网站，很好玩</div></a>
        </div>
        <div class="col">
            <a href="https://www.autodraw.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/44fb8-9524.jpg">
                    <span class="name">AutoDraw</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">手残党快速上手的作图神器</div></a>
        </div>
        <div class="col">
            <a href="https://www.photopea.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/0fedd-3249.svg">
                    <span class="name">在线PS</span></div>
                <div class="card-desc">在线抠图、拼图、PS设计</div></a>
        </div>
        <div class="col">
            <a href="https://photomosh.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/23261-8241.png">
                    <span class="name">Photomosh</span></div>
                <div class="card-desc">故障艺术的在线定制方式</div></a>
        </div>
        <div class="col">
            <a href="https://wordart.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/1ee52-3793.png">
                    <span class="name">Wordart</span></div>
                <div class="card-desc">将一些文字自动排版成图形</div></a>
        </div>
        <div class="col">
            <a href="https://www.weiciyun.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/45727-2410.png">
                    <span class="name">微词云</span></div>
                <div class="card-desc">好玩的文字云生成</div></a>
        </div>
        <div class="col">
            <a href="https://www.zybuluo.com/mdeditor" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/c324e-6360.png">
                    <span class="name">Markdown编辑器</span></div>
                <div class="card-desc">好用的Markdown在线编辑阅读器</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-heartbeat"></i>&nbsp;文艺视听
        <span style="font-size: 14px;color: #888">书、影、音</span></div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <div class="col">
            <a href="https://new.shuge.org/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/3913f-8010.png">
                    <span class="name">书格</span></div>
                <div class="card-desc">在线古籍图书馆</div></a>
        </div>
        <div class="col">
            <a href="https://www.ageeye.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/d07e0-4627.jpg">
                    <span class="name">观沧海</span></div>
                <div class="card-desc">地图分享知识</div></a>
        </div>
        <div class="col">
            <a href="https://www.vmovier.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/2a65c-1043.jpg">
                    <span class="name">场库</span></div>
                <div class="card-desc">高品质短片分享</div></a>
        </div>
        <div class="col">
            <a href="https://www.itingwa.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/e012d-7996.ico">
                    <span class="name">听蛙音乐</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">听最好听的轻音乐</div></a>
        </div>
        <div class="col">
            <a href="http://www.htqyy.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/78eaa-9016.png">
                    <span class="name">好听轻音乐</span></div>
                <div class="card-desc">听轻音乐放飞好心情</div></a>
        </div>
        <div class="col">
            <a href="http://5sing.kugou.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/0ef16-2418.jpg">
                    <span class="name">5sing</span></div>
                <div class="card-desc">中国原创音乐基地</div></a>
        </div>
        <div class="col">
            <a href="http://guozhivip.com/qt/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/0701f-7795.png">
                    <span class="name">倾听</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">倾听白噪音，放松心情</div></a>
        </div>
        <div class="col">
            <a href="https://www.mvcat.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/87ad9-7766.jpg">
                    <span class="name">电影推荐</span></div>
                <div class="card-desc">很有设计范儿的影音网站</div></a>
        </div>
        <div class="col">
            <a href="https://www.tvmao.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/e69c6-7797.jpg">
                    <span class="name">电视猫</span></div>
                <div class="card-desc">电视剧剧情介绍，节目预告</div></a>
        </div>
    </div>
</div>
<div class="container sub">
    <div class="title">
        <i class="fa fa-bookmark"></i>&nbsp;其他酷站
        <span style="font-size: 14px;color: #888">提交/赞助收录</span></div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
        <div class="col">
            <a href="https://www.producthunt.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/8381e-9709.png">
                    <span class="name">Producthunt</span></div>
                <div class="card-desc">发现新产品</div></a>
        </div>
        <div class="col">
            <a href="https://creativemass.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/b5dc7-2281.png">
                    <span class="name">CreativeMass</span></div>
                <div class="card-desc">精选创意导航</div></a>
        </div>
        <div class="col">
            <a href="https://www.wenshushu.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/b7eb8-8549.png">
                    <span class="name">文叔叔</span></div>
                <div class="card-desc">极速传文件给他人</div></a>
        </div>
        <div class="col">
            <a href="http://typhoon.nmc.cn/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/975a6-7016.png">
                    <span class="name">台风网</span></div>
                <div class="new">Hot</div>
                <div class="card-desc">实时掌握台风、降雨等气象</div></a>
        </div>
        <div class="col">
            <a href="https://www.foodwake.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/a599b-8287.png">
                    <span class="name">唤醒食物</span></div>
                <div class="card-desc">食物营养成分与营养工具</div></a>
        </div>
        <div class="col">
            <a href="https://www.zhijianshang.com/" class="card-link" target="_blank">
                <div class="card-tit">
                    <img src="{{$commonAssetUrl}}/nav/img/8523f-9316.png">
                    <span class="name">指尖上</span></div>
                <div class="card-desc">指尖轻点，看遍世界</div></a>
        </div>
    </div>
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
<script>document.onkeydown = function() {

        if (window.event && window.event.keyCode == 123) {
            alert("Hi,欢迎来到果汁！");
            event.keyCode = 0;
            event.returnValue = false;
        }
        if (window.event && window.event.keyCode == 13) {
            window.event.keyCode = 505;
        }
        if (window.event && window.event.keyCode == 8) {
            alert(str + "\n请使用Del键进行字符的删除操作！");
            window.event.returnValue = false;
        }
    }</script>
<script type="text/javascript">if (self == top) {
        var theBody = document.getElementsByTagName('body')[0];
        theBody.style.display = "block";
    } else {
        top.location = self.location;
    }</script>
<!--tj-->
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?60eb90cd22ee6d9edced4ec9fff31d4f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
@endsection
