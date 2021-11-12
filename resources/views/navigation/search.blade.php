@extends('layouts.main')
@section('header')@include('navigation.common/_pagecss', ['view' => 'search'])@endsection
@section('content')
<div class="mob">
    <div class="mobbc">
        <img src="{{$commonAssetUrl}}/nav/img/cd01a-1683.png" class="logo" alt="logo" /></div>
    <div class="search">
        <form action="https://www.baidu.com/s" target="_blank" class="search" method="get">
            <style type="text/css">.bdsug_copy{display:none}</style>
            <input name="ie" type="hidden" value="utf-8">
            <ul>
                <li class="words">
                    <input type="text" class="inputwords" id="inword" name="word" size="30" baiduSug="1" placeholder="随时百度一下"></li>
                <li class="go">
                    <input type="submit" class="gosearch" value="搜索" onMouseOver="this.style.opacity='1'" onMouseOut="this.style.opacity='0.9'"></li>
            </ul>
        </form>
    </div>
    <div class="container tj">
        <div class="row">
            <div class="col">
                <a href="http://guozhivip.com/xs/">
                    <span>
                        <i class="fa fa-book" style="color: #FFA98E"></i>
                    </span>
                    <p>小说</p>
                </a>
            </div>
            <div class="col">
                <a href="https://weixin.sogou.com/">
                    <span>
                        <i class="fa fa-weixin" style="color: #82DCBF"></i>
                    </span>
                    <p>微信</p>
                </a>
            </div>
            <div class="col">
                <a href="https://zhihu.sogou.com/wap">
                    <span>
                        <i class="fa fa-mortar-board" style="color: #AFD6F5"></i>
                    </span>
                    <p>知乎</p>
                </a>
            </div>
            <div class="col">
                <a href="http://guozhivip.com/news/">
                    <span>
                        <i class="fa fa-newspaper-o" style="color: #FFA98E"></i>
                    </span>
                    <p>新闻</p>
                </a>
            </div>
            <div class="col">
                <a href="https://mingyi.sogou.com/?fr=common_index_nav">
                    <span>
                        <i class="fa fa-medkit" style="color: #AFD6F5"></i>
                    </span>
                    <p>明医</p>
                </a>
            </div>
            <div class="col">
                <a href="https://fanyi.sogou.com/">
                    <span>
                        <i class="fa fa-file-text-o" style="color: #FFA98E"></i>
                    </span>
                    <p>翻译</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="https://m.amap.com/nearby/index/">
                    <span>
                        <i class="fa fa-map-o" style="color: #82DCBF"></i>
                    </span>
                    <p>地图</p>
                </a>
            </div>
            <div class="col">
                <a href="http://guozhivip.com/mh/">
                    <span>
                        <i class="fa fa-github-alt" style="color: #AFD6F5"></i>
                    </span>
                    <p>漫画</p>
                </a>
            </div>
            <div class="col">
                <a href="http://guozhivip.com/mvs.html">
                    <span>
                        <i class="fa fa-youtube-play" style="color: #FFA98E"></i>
                    </span>
                    <p>影视</p>
                </a>
            </div>
            <div class="col">
                <a href="http://guozhivip.com/imgs.html">
                    <span>
                        <i class="fa fa-photo" style="color: #AFD6F5"></i>
                    </span>
                    <p>美图</p>
                </a>
            </div>
            <div class="col">
                <a href="https://pic.sogou.com/pic/emo/index.jsp">
                    <span>
                        <i class="fa fa-smile-o" style="color: #82DCBF"></i>
                    </span>
                    <p>表情</p>
                </a>
            </div>
            <div class="col">
                <a href="http://guozhivip.com/">
                    <span>
                        <i class="fa fa-internet-explorer" style="color: #AFD6F5"></i>
                    </span>
                    <p>网址</p>
                </a>
            </div>
        </div>
    </div>
    <div class="cmd">
        <ul>
            <li class="one">
                <a href="https://m.baidu.com/s?word=%e4%bb%8a%e6%97%a5%e6%96%b0%e9%b2%9c%e4%ba%8b&tn&from=1020854c&sa=tre_dl_gh_logo_wj">百度热搜</a></li>
            <li class="two">
                <a href="https://ib.snssdk.com/rogue/aladdin_landingpage/template/aladdin_landingpage/hot_words.html?isBrowser=true&traffic_source=">头条热搜</a></li>
            <li class="thr">
                <a href="https://s.weibo.com/top/summary?cate=realtimehot">微博热搜</a></li>
            <li class="for">
                <a href="https://m.bilibili.com/ranking">哔哩热门</a></li>
            <li class="fiv">
                <a href="https://www.xzw.com/">星座运势</a></li>
            <li class="six">
                <a href="https://huaban.com/favorite/beauty/">颜如玉</a></li>
            <li class="sev">
                <a href="http://guozhivip.com/rank/">更多榜单></a></li>
        </ul>
    </div>
    <div class="tu"></div>
</div>
<ul class="tq">
    <li>
        <a href="https://qq.ip138.com/day/" target="_blank" title="点击查看日历">
            <script>var weekDayLabels = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
                var now = new Date();
                var year = now.getFullYear();
                var month = now.getMonth() + 1;
                var day = now.getDate(); var currentime = '<span class="special">' + year + '年' + month + '月' + day + '日 ' + weekDayLabels[now.getDay()] + '</span><br>';document.write(currentime)</script></a>
    </li>
    <li class="tqq">
        <iframe allowtransparency="true" frameborder="0" width="180" height="32" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=3&z=2&t=0&v=0&d=3&bd=0&k=&f=&ltf=009944&htf=cc0000&q=1&e=1&a=1&c=54511&w=180&h=32&align=center"></iframe>
    </li>
    <!--<li><a href="https://union.115.com/?ac=space_seal_list&share_code=059df4d38630b2da8d1ac52078739aa3" target="_blank" style="color: #f60"><i class="fa fa-diamond"></i>115网盘会员</a></li>--></ul>
<div class="top"></div>
<div class="logos">
    <img src="{{$commonAssetUrl}}/nav/img/e3338-6116.gif" title="输入关键词，点击搜索框下方按钮/回车即可搜索"></div>
<div class="jumbotron">
    <div class="container">
        <form action="https://www.baidu.com/s" method="get" target="_blank">
            <div class="input-group">
                <style type="text/css">.bdsug_copy{display:none}</style>
                <input name="ie" type="hidden" value="utf-8" id="ipt1">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <b>果汁搜索</b>
                    </span>
                </div>
                <input type="text" class="form-control" name="search" id="search" placeholder="回车默认百度，点击下方按钮可切换搜索" baiduSug="0" value="" autofocus="autofocus" onmouseover="focus()" /></div>
            <P style="margin-top: -8px;">
                <center>
                    <input type="submit" value="百度" id="baidu" button type="button" class="btn btn-success" />
                    <input type="submit" value="搜狗" id="sougou" button type="button" class="btn btn-success" />
                    <input type="submit" value="必应" id="bing" button type="button" class="btn btn-success" />
                    <input type="submit" value="谷歌" id="google" button type="button" class="btn btn-success" title="国内暂不可用，需要翻墙" />
                    <input type="submit" value="学术" id="study" button type="button" class="btn btn-default" />
                    <input type="submit" value="翻译" id="fanyi" button type="button" class="btn btn-default" />
                    <input type="submit" value="京东" id="jd" button type="button" class="btn btn-warning" />
                    <input type="submit" value="淘宝" id="taobao" button type="button" class="btn btn-warning" />
                    <input type="submit" value="微信" id="weixin" button type="button" class="btn btn-danger" />
                    <input type="submit" value="知乎" id="zhihu" button type="button" class="btn btn-danger" />
                    <input type="submit" value="微博" id="weibo" button type="button" class="btn btn-danger" />
                    <input type="submit" value="美图" id="meitu" button type="button" class="btn btn-info" />
                    <input type="submit" value="网盘" id="pan" button type="button" class="btn btn-info" />
                    <input type="submit" value="视频" id="movie" button type="button" class="btn btn-info" />
                    <input type="submit" value="音乐" id="music" button type="button" class="btn btn-info" /></center>
            </P>
        </form>
    </div>
</div>
<div class="container t-link">
    <div class="row row-cols-3 row-cols-sm-4 row-cols-md-6 row-cols-lg-6">
        <div class="col">
            <a href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFDJWWA1FBCVbV0IUWVALHFRBEwQAQB1AWQkrU1xpcX9RWilwCmByUH0FbANyBCBgOxkOIgJUGloXBhEBXBlrFgMTDlETXBEEEDdlG1olSXwGZRlaFAEbB1wYXxAyEgNdE10UBBcEUBxcFzIVB1wrjLqvxIT2zPS41ZK3VBlrJTIRN2UrWxUyEjcKXwZIMhAGVB9S" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/afb1b-1966.png" class="ico">京东</a></div>
        <div class="col">
            <a href="https://youhui.pinduoduo.com/?pid=10266509_149496685&fromCustomerMall=1&cpsSign=CM_200809_10266509_149496685_db5badf0b2c3286d5afb3827935d6611&duoduo_type=2" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/5f4fc-4859.png" class="ico">拼多多</a></div>
        <div class="col">
            <a href="https://t.vip.com/A8fTmUbytI7" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/31ab8-7510.png" class="ico">唯品会</a></div>
        <div class="col">
            <a href="https://www.taobao.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/405f8-4130.png" class="ico">淘宝</a></div>
        <div class="col">
            <a href="https://www.ctrip.com/?AllianceID=1226872&sid=2892491&ouid=&app=0101F00" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/688a5-6699.png" class="ico">携程</a></div>
        <div class="col">
            <a href="https://weibo.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/8548c-5260.png" class="ico">微博</a></div>
        <div class="col">
            <a href="https://www.qq.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/107f6-8731.png" class="ico">腾讯网</a></div>
        <div class="col">
            <a href="https://www.bilibili.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/90759-7930.png" class="ico">哔哩哔哩</a></div>
        <div class="col">
            <a href="https://www.kuaishou.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/49245-1514.png" class="ico">快手</a></div>
        <div class="col">
            <a href="https://www.douyin.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/0ba33-9685.png" class="ico">抖音</a></div>
        <div class="col">
            <a href="https://www.huya.com/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/196d5-7284.png" class="ico">虎牙</a></div>
        <div class="col">
            <a href="http://guozhivip.com/mvs.html" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/d21ea-1758.png" class="ico">观影追剧</a></div>
        <div class="col">
            <a href="http://guozhivip.com/">
                <img src="{{$commonAssetUrl}}/nav/img/403a8-5441.png" class="ico">资源大全</a></div>
        <div class="col">
            <a href="http://guozhivip.com/rank/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/bcad7-7063.jpg" class="ico">热门排行榜</a></div>
        <div class="col">
            <a href="http://guozhivip.com/tool/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/002b0-8569.png" class="ico">在线工具</a></div>
        <div class="col">
            <a href="http://guozhivip.com/imgs.html" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/430db-1548.png" class="ico">壁纸美图</a></div>
        <div class="col">
            <a href="http://guozhivip.com/design/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/58739-2277.png" class="ico">设计导航</a></div>
        <div class="col">
            <a href="http://guozhivip.com/lab/" target="_blank">
                <img src="{{$commonAssetUrl}}/nav/img/791ac-8203.png" class="ico">有点意思</a></div>
    </div>
</div>
<a href="https://support.qq.com/products/27320/faqs/49713" class="tc jq" target="_blank" title="小技巧">
    <i class="fa fa-lightbulb-o"></i>
</a>
<!--<a href="https://union.115.com/?ac=space_seal_list&share_code=059df4d38630b2da8d1ac52078739aa3" class="tc wp" target="_blank" title="115网盘会员"><i class="fa fa-diamond"></i></a>-->
<a href="http://guozhivip.com/tc/" class="tc" target="_blank" title="联系/吐槽/捐助">
    <i class="fa fa-commenting-o"></i>
</a>
@include('navigation.common._footer-simple', ['data' => ''])
<script type='text/javascript' src="{{$commonAssetUrl}}/nav/js/jquery-3.1.0.min.js"></script>
<script type='text/javascript' src='{{$commonAssetUrl}}/nav/js/80/bootstrap.min.js'></script>
<script type='text/javascript' src="{{$commonAssetUrl}}/nav/js/jquery-migrate-3.0.0.min.js"></script>
<script type='text/javascript' charset="gbk" src="{{$commonAssetUrl}}/nav/js/opensug.js"></script>
<script>document.getElementById("search").focus();
    var txtObj = document.getElementById("alertSpan");
    //回调函数，用于获取用户当前选择的文字
    function show(str) {
        txtObj.innerHTML = str;
    }
    var params = {
        "XOffset": 0,
        //提示框位置横向偏移量,单位px
        "YOffset": 0,
        //提示框位置纵向偏移量,单位px
        "fontColor": "#555",
        //提示框文字颜色
        "fontColorHI": "#f70",
        //提示框高亮选择时文字颜色
        "fontSize": "15px",
        //文字大小
        "fontFamily": "微软雅黑",
        //文字字体
        "borderColor": "#d8d8d8",
        //提示框的边框颜色
        "bgcolorHI": "#f5f5f5",
        //提示框高亮选择的颜色
        "sugSubmit": false //在选择提示词条是是否提交表单 
    };
    BaiduSuggestion.bind("ipt1", params, show);</script>
<script>var sAddress = document.getElementsByTagName("form")[1];
    var sInfor = document.getElementById("search");
    var sBaidu = document.getElementById("baidu");
    var sSougou = document.getElementById("sougou");
    var sBing = document.getElementById("bing");
    var sGoogle = document.getElementById("google");
    var sStudy = document.getElementById("study");
    var sFanyi = document.getElementById("fanyi");
    var sJd = document.getElementById("jd");
    var sTaobao = document.getElementById("taobao");
    var sWeixin = document.getElementById("weixin");
    var sZhihu = document.getElementById("zhihu");
    var sWeibo = document.getElementById("weibo");
    var sMeitu = document.getElementById("meitu");
    var sPan = document.getElementById("pan");
    var sMovie = document.getElementById("movie");
    var sMusic = document.getElementById("music");

    //百度
    sBaidu.onclick = function() {
        sAddress.action = "https://www.baidu.com/s";
        sInfor.name = "wd";
    }
    //搜狗
    $('#sougou').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://www.sogou.com/web?query=" + query, "_blank");
            return false;
        };
    });
    //必应
    sBing.onclick = function() {
        sAddress.action = "https://cn.bing.com/search";
        sInfor.name = "q";
    };
    //谷歌
    sGoogle.onclick = function() {
        sAddress.action = "https://www.google.com/search";
        sInfor.name = "q";
    };
    //学术
    sStudy.onclick = function() {
        sAddress.action = "https://xueshu.baidu.com/s";
        sInfor.name = "wd";
    };
    //翻译
    $('#fanyi').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://cn.bing.com/dict/search?q=" + query, "_blank");
            return false;
        };
    });
    //京东
    $('#jd').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://search.jd.com/Search?enc=utf-8&keyword=" + query, "_blank");
            return false;
        };
    });
    //淘宝
    sTaobao.onclick = function() {
        sAddress.action = "https://s.taobao.com/search?";
        sInfor.name = "q";
    }
    //微信
    $('#weixin').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://weixin.sogou.com/weixin?type=2&query=" + query + "&ie=utf8", "_blank");
            return false;
        };
    });
    //知乎
    sZhihu.onclick = function() {
        sAddress.action = "https://www.zhihu.com/search";
        sInfor.name = "q";
        sInfor.type = "question";
    }
    //微博
    $('#weibo').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://s.weibo.com/weibo/" + query, "_blank");
            return false;
        };
    });
    //美图
    sMeitu.onclick = function() {
        sAddress.action = "https://huaban.com/search?q=";
        sInfor.name = "q";
    }
    //网盘
    $('#pan').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("http://www.pan58.com/s?wd=" + query + "&page=1", "_blank");
            return false;

        };
    });
    //影视
    $('#movie').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://search.bilibili.com/all?keyword=" + query + " ", "_blank");
            return false;

        };
    });
    //音乐
    $('#music').click(function() {
        var query = $('#search').val();
        if (query) {
            window.open("https://www.kugou.com/yy/html/search.html#searchType=song&searchKeyWord=" + query + " ", "_blank");
            return false;

        };
    });</script>
<!--tm-->
<script type="text/javascript">window.onload = function() {
        showTime();
    }
    function showTime() {
        var now = new Date();
        var year = now.getFullYear();
        document.getElementById("show").innerHTML = "" + year;
        t = setTimeout('showTime()', 1000)
    }</script>
<!--pb-->
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
