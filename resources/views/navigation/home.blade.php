@extends('layouts.main')
@section('header')@include('navigation.header/_home', [])@endsection
@section('content')
@include('navigation.modules._home-signupin', ['data' => ''])
@include('navigation.modules._home-addsite', ['data' => ''])
@include('navigation.modules._home-header', ['data' => ''])
@include('navigation.modules._home-recommend', ['data' => ''])
<div class="container content" data-spy="scroll" data-target="#list-example" data-offset="0">
    <div class="btn-toolbar">
        <div class="btn-group mr-2">
            <a class="btn btn-warning wn">
                <i class="fa fa-star"></i>我的收藏</a>
        </div>
        <div class="btn-group mr-2">
            <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#Login" title="注册登录后可添加自己常用的网站、云同步">
                <i class="fa fa-plus"></i>登录添加</a>
        </div>
    </div>
<div class="btn-toolbar">
        <div class="btn-group mr-2"><a class="btn btn-warning wn"><i class="fa fa-star"></i> 我的收藏</a></div>
        
        <div class="btn-group mr-2">
          <a class="btn btn-light wn" href="http://www.baidu.com" target="_blank">test</a>
          <a class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" style="">
            <input type="hidden" name="webid" value="6804">
            <!--<a class="dropdown-item" href="php/editweb.php?webid=6804" data-toggle="modal" data-target="#editweb">修改</a>-->
            <a class="dropdown-item" onclick="return confirm('确定要删除吗？')" href="php/delweb.php?webid=6804">删除</a>
          </div>
        </div>
                <div class="btn-group mr-2 show">
          <a class="btn btn-light wn" href="https://www.sohu.com" target="_blank">news</a>
          <a class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="true">
            <span class="sr-only">Toggle Dropdown</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right show" x-placement="bottom-end" style="position: absolute; transform: translate3d(53px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
            <input type="hidden" name="webid" value="6805">
            <!--<a class="dropdown-item" href="php/editweb.php?webid=6805" data-toggle="modal" data-target="#editweb">修改</a>-->
            <a class="dropdown-item" onclick="return confirm('确定要删除吗？')" href="php/delweb.php?webid=6805">删除</a>
          </div>
        </div>
                <div class="btn-group mr-2">
                      <a class="btn btn-light t wn" href="#" data-toggle="modal" data-target="#addweb" title="最多可添加8个网站，下面已收录的不建议重复添加">
                        <i class="fa fa-plus"></i> 添加
                      </a>
                  </div>      </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
        <div class="col subs" id="cy">
            <h5 class="tit">
                <i class="fa fa-th-large" style="color: #7CCD7C;"></i>常用网站
                <a href="https://top.baidu.com/board?tab=realtime&platform=wise&sa=fyb_general_realtime_50670" class="rd">
                    <img src="{{$commonAssetUrl}}/nav/img/54f00-9088.png" class="simg">热点</a>
                <a href="https://m.weibo.cn/p/106003type=25&t=3&disable_hot=1&filter_type=realtimehot" class="rd">
                    <img src="{{$commonAssetUrl}}/nav/img/93195-4909.png" class="simg">热搜</a>
                <a href="https://ib.snssdk.com/rogue/aladdin_landingpage/template/aladdin_landingpage/hot_words.html?isBrowser=true&traffic_source=" class="rd">
                    <img src="{{$commonAssetUrl}}/nav/img/83af2-2045.png" class="simg">热门</a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFDJWWA1FBCVbV0IUWVALHFRBEwQAQB1AWQkFa11nbnNRcjMTZ1UAHWgJXEcIHVBLK0MOHjdQGloUABYEUx1fJQETBlwfUxIGFAVlK1sUMllpVCtZFAMRDlUbWRwGIgdRE1MTAxsHVhxYFQAiAFUSa8Ktv9HWuIy6r8WH5RpZJTIiBGUraxUCIgdlRB9IXyIFVBpfHA%3D%3D" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/303e8-7493.png" class="img">京东</a></div>
                <div class="col">
                    <a href="https://www.taobao.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/62d61-9317.png" class="img">淘宝</a></div>
                <div class="col">
                    <a href="https://www.tmall.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/74538-7726.png" class="img">天猫</a></div>
                <div class="col">
                    <a href="https://t.vip.com/FSer4wjobA9" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/5fd5a-2771.png" class="img">唯品会</a></div>
                <div class="col">
                    <a href="https://youhui.pinduoduo.com/?pid=10266509_138219114&fromCustomerMall=1&cpsSign=CM_200422_10266509_138219114_d1c60b4aa1275027e3063ea1f3c6011f&duoduo_type=2" target="_blank" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/b3d3e-2676.png" class="img">拼多多</a></div>
                <div class="col">
                    <a href="https://sugs.suning.com/outstation.htm?p=UAZREFUBAFwUFUNtLHlgXRBJUBBVFHxvN3wPXXUyfH9bSVINYzkoIhwXEBAfExASZRNaIhQISRQ8V1UPUFoKHlVWGEJPCEoKWEtSLjo7aUtdCggdABcgdyY6BwYvNGolDh5JDS45d30JBRoWGxsEGmwIFGcGRkhSdFZbR1BPGA4aPkYGR1R7XUBKUzcWamk4UEpRQlRGfQV3Mg" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/c1797-5057.png" class="img">苏宁易购</a></div>
                <div class="col">
                    <a href="http://union.dangdang.com/transfer.php?from=P-340293&ad_type=10&sys_id=1&backurl=http%3A%2F%2Fwww.dangdang.com%2F" target="_blank" title="网上超级书店" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/a4860-2370.png" class="img">当当</a></div>
                <div class="col">
                    <a href="https://www.ctrip.com/?AllianceID=1226872&sid=2892491&ouid=&app=0101F00" target="_blank" title="机票，酒店，交通，景点门票" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/5b1b2-4279.png" class="img">携程</a></div>
                <div class="col">
                    <a href="https://www.mafengwo.cn/" target="_blank" title="旅行攻略，自由行，旅游分享社区" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/5b64a-9796.png" class="img">马蜂窝</a></div>
                <div class="col">
                    <a href="http://www.10jqka.com.cn/" target="_blank" title="股票，投资，财经" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/7bfb9-3429.png" class="img">同花顺</a></div>
                <div class="col">
                    <a href="https://anjuke.com/" target="_blank" title="买房、卖房、选房看房" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/35920-9848.png" class="img">安居客</a></div>
                <div class="col">
                    <a href="https://www.autohome.com.cn/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/283ec-6182.png" class="img">汽车之家</a></div>
                <div class="col yx">
                    <a href="https://mail.qq.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/33674-7774.png" class="img">邮箱
                        <i class="fa fa-caret-down"></i></a>
                    <div class="emlist">
                        <a href="https://mail.qq.com/" target="_blank">@qq.com</a>
                        <a href="https://mail.163.com/" target="_blank">@163.com</a>
                        <a href="https://www.126.com/" target="_blank">@126.com</a>
                        <a href="https://mail.sina.com.cn/" target="_blank">@sina.com</a>
                        <a href="https://mail.sohu.com/" target="_blank">@sohu.com</a>
                        <a href="https://mail.google.com/" target="_blank">@gmail.com</a>
                        <a href="https://outlook.live.com/owa/" target="_blank">@outlook.com</a>
                        <a href="https://mail.10086.cn/" target="_blank">@139.com</a></div>
                </div>
                <div class="col onpc">
                    <a href="https://wx.qq.com/" target="_blank" title="登录网页版微信" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/5c7e2-9460.png" class="img">网页微信</a></div>
                <div class="col onmob">
                    <a href="https://www.58.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/3e681-2965.png" class="img">58同城</a></div>
                <div class="col">
                    <a href="https://yun.baidu.com/" target="_blank" title="百度网盘" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/b565a-5985.png" class="img">百度网盘</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-coffee" style="color: #7CCD7C;"></i>娱乐大厅
                <a href="https://m.bilibili.com/ranking" class="rd">
                    <img src="{{$commonAssetUrl}}/nav/img/93824-4007.png" class="simg">热门视频</a>
                <a href="https://www.douyin.com/" class="yule tg" target="_blank" style="margin-left: 13px">抖音</a>
                <a href="https://www.kuaishou.com/" class="yule tg" target="_blank" style="margin-left: 12px">快手</a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.toutiao.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/015ad-4130.png" class="img">今日头条</a></div>
                <div class="col">
                    <a href="https://weibo.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/f2704-1917.png" class="img">微博</a>
                    <a href="https://weibo.com/newlogin?tabtype=search&url=" class="suba" target="_blank">·热搜</a></div>
                <div class="col">
                    <a href="https://sports.qq.com/" target="_blank" title="浏览最新新闻资讯" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/c7393-6100.png" class="img">体育NBA</a></div>
                <div class="col">
                    <a href="https://mil.ifeng.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/2f77f-8275.png" class="img">凤凰军事</a></div>
                <div class="col">
                    <a href="https://music.163.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/42b54-4527.png" class="img">网易音乐</a></div>
                <div class="col">
                    <a href="https://y.qq.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/f924c-6136.png" class="img">QQ音乐</a></div>
                <div class="col">
                    <a href="https://www.bilibili.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/5a2fa-5418.png" class="img">B站</a>
                    <a href="https://www.bilibili.com/v/popular/rank/all" class="suba" target="_blank">·热门</a></div>
                <div class="col">
                    <a href="https://www.iqiyi.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/da447-5324.png" class="img">爱奇艺</a></div>
                <div class="col">
                    <a href="https://v.qq.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/d7194-6882.png" class="img">腾讯视频</a></div>
                <div class="col">
                    <a href="https://www.youku.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/6ffcf-9909.png" class="img">优酷</a></div>
                <div class="col">
                    <a href="https://www.huya.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/db16f-2560.png" class="img">虎牙</a></div>
                <div class="col">
                    <a href="https://www.douyu.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/9ae76-7067.png" class="img">斗鱼</a>
                    <a href="https://www.douyu.com/directory/rank_list/PCgame" class="suba" target="_blank">·榜单</a></div>
                <div class="col">
                    <a href="https://tieba.baidu.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/92ce1-8969.png" class="img">贴吧</a>
                    <a href="http://c.tieba.baidu.com/hottopic/browse/topicList?res_type=1" class="suba" target="_blank">·热议</a></div>
                <div class="col">
                    <a href="https://qzone.qq.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/f00dd-8957.png" class="img">QQ空间</a></div>
                <div class="col">
                    <a href="http://www.4399.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/e32bb-1824.png" class="img">4399游戏</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-mortar-board" style="color: #7CCD7C;"></i>知识社区
                <a href="http://guozhivip.com/city/" class="tg" target="_blank" style="margin-left: 13px">城市服务</a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.zhihu.com/explore" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/009c3-7250.png" class="img">知乎</a>·
                    <a href="https://www.zhihu.com/billboard" target="_blank">热榜</a></div>
                <div class="col">
                    <a href="https://www.guokr.com/" target="_blank" title="科技有意思" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/ba2b3-5324.png" class="img">果壳</a></div>
                <div class="col">
                    <a href="https://www.douban.com/" target="_blank" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/18ee0-5853.png" class="img">豆瓣</a>·
                    <a href="https://www.douban.com/group/explore" target="_blank">精选</a></div>
                <div class="col">
                    <a href="https://www.wukong.com/" target="_blank" title="探索你感兴趣的问题" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/3324e-9833.png" class="img">悟空问答</a></div>
                <div class="col">
                    <a href="https://sspai.com/" target="_blank" title="高品质数字消费指南" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/0a810-2763.png" class="img">少数派</a></div>
                <div class="col">
                    <a href="https://www.csdn.net/" target="_blank" title="专业的IT技术社区" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/79058-4144.png" class="img">CSDN</a></div>
                <div class="col">
                    <a href="https://www.cnki.net/" target="_blank" title="中国知网，提供学术、外文文献、学位论文等各类资源检索、在线阅读和下载服务。" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/533fc-4405.ico" class="img">知网</a></div>
                <div class="col">
                    <a href="https://www.51zxw.net/" target="_blank" title="领先的实用技能学习平台" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/1edd9-1545.svg" class="img">51自学</a></div>
                <div class="col">
                    <a href="https://zh.wikihow.com/" target="_blank" title="生活指导手册，教你学习技能" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/c2e96-1199.png" class="img">wikiHow</a></div>
                <div class="col">
                    <a href="https://36kr.com/" target="_blank" title="关注互联网创业" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/15687-1298.ico" class="img">36Kr</a>
                    <a href="https://36kr.com/hot-list/catalog" class="suba" target="_blank">·热门</a></div>
                <div class="col">
                    <a href="https://www.leiphone.com/" target="_blank" title="读懂智能和未来" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/78c54-5295.ico" class="img">雷锋网</a></div>
                <div class="col">
                    <a href="https://www.huxiu.com/" target="_blank" title="创新创业商业资讯" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/50aac-5050.png" class="img">虎嗅网</a></div>
                <div class="col">
                    <a href="http://www.woshipm.com/" target="_blank" title="产品经理、设计爱好者交流学习平台" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/0df6e-5367.png" class="img">产品经理</a></div>
                <div class="col">
                    <a href="https://www.cyzone.cn/" target="_blank" title="创业创新服务平台，让创业者不再孤单" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/164d3-1962.ico" class="img">创业邦</a></div>
                <div class="col">
                    <a href="https://coderschool.cn/1853.html" target="_blank" title="谷歌翻墙搜索一下" class="cy">
                        <img src="{{$commonAssetUrl}}/nav/img/b1774-3312.png" class="img">谷歌翻墙</a></div>
            </div>
        </div>
        <div class="col subs" id="sy">
            <h5 class="tit">
                <i class="fa fa-wrench" style="color: #D28EFF;"></i>实用工具 &nbsp;
                <a href="http://guozhivip.com/tool" style="color: #999" title="免费在线工具大全">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://fanyi.baidu.com/" title="在线翻译" target="_blank">在线翻译</a></div>
                <div class="col">
                    <a href="http://www.1ppt.com/" title="可免费下载的PPT模板" target="_blank">PPT模板</a></div>
                <div class="col">
                    <a href="https://smallpdf.com/cn/pdf-tools" title="强大的文件处理工具" target="_blank">文件转换</a></div>
                <div class="col">
                    <a href="https://web.baimiaoapp.com/" target="_blank">文字识别</a></div>
                <div class="col">
                    <a href="https://xiezuocat.com/?s=guozhivip" title="秘塔写作猫" target="_blank">AI写作伴侣</a></div>
                <div class="col">
                    <a href="https://www.toplinks.cc/s/" title="专业的学术类资源搜索" target="_blank" class="cy">学术资源</a></div>
                <div class="col">
                    <a href="https://www.xzw.com/fortune/" target="_blank">星座运势</a></div>
                <div class="col">
                    <a href="https://web.mypitaya.com/?bd_source=guozhivip" target="_blank">火龙果写作</a></div>
                <div class="col">
                    <a href="https://www.tianyancha.com/" title="查老板、查公司" target="_blank" class="cy">天眼查</a></div>
                <div class="col">
                    <a href="https://cli.im/" title="在线生成二维码" target="_blank">草料二维码</a></div>
                <div class="col">
                    <a href="https://h5.bce.baidu.com/store" title="在线H5设计制作" target="_blank">H5设计</a></div>
                <div class="col">
                    <a href="https://file-post.net/zc/" title="简单，私密的文件共享服务" target="_blank">文件分享</a></div>
                <div class="col">
                    <a href="https://www.cn-ki.net/" title="专业的知识、学术、期刊检索" target="_blank" class="cy">iData</a></div>
                <div class="col">
                    <a href="https://wj.qq.com/" title="免费好用的问卷调查系统" target="_blank">调查问卷</a></div>
                <div class="col">
                    <a href="http://b1bj.com/" title="比一比价" target="_blank" class="cy">购物比价</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-star" style="color: #D28EFF;"></i>酷站精选</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.skypixel.com/explore" title="换个角度看世界，全球最大的无人机航拍影像社区" target="_blank">天空之城</a></div>
                <div class="col">
                    <a href="https://www.sigoo.com/" title="超高像素看世界" target="_blank">极像素</a></div>
                <div class="col">
                    <a href="https://720yun.com/channel" title="全景虚拟现实体验" target="_blank">全景影像</a></div>
                <div class="col">
                    <a href="https://topbook.cc/" target="_blank" title="高效生活视频书">Topbook</a></div>
                <div class="col">
                    <a href="https://www.ipanda.com/" title="专业的熊猫卖萌社区" target="_blank">熊猫频道</a></div>
                <div class="col">
                    <a href="https://miniature-calendar.com/" target="_blank" title="创意插画日历">创意日历</a></div>
                <div class="col">
                    <a href="https://www.mvcat.com/" title="电影推荐" target="_blank">电影推荐</a></div>
                <div class="col">
                    <a href="https://www.topys.cn/" title="全球顶尖创意分享平台" target="_blank">TOPYS</a></div>
                <div class="col">
                    <a href="https://www.shejipi.com/" title="发现好的设计" target="_blank">设计癖</a></div>
                <div class="col">
                    <a href="https://yixi.tv/" title="人文，科技，白日梦" target="_blank">一席</a></div>
                <div class="col">
                    <a href="http://zhongguose.com/" title="中国传统颜色手册" target="_blank">中国传统色</a></div>
                <div class="col">
                    <a href="https://www.chiphell.com/" title="高品质IT社区，分享交流用户体验" target="_blank">Chiphell</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/lab/" target="_blank" title="发现优质、实用、有趣的网络资源">实验室</a></div>
                <div class="col">
                    <a href="https://www.dgtle.com/" title="分享美好数字生活" target="_blank">数字尾巴</a></div>
                <div class="col">
                    <a href="https://www.kujiale.com/xiaoguotu/suggestion" target="_blank" title="家居装修优秀设计鉴赏">家装设计</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-eye" style="color: #D28EFF;"></i>文艺视听&nbsp;
                <a href="#" data-toggle="modal" class="tg" data-target="#Login" title="注册/登录后可免费下载音乐" style="margin-left:13px;color:#f80">登录免费下载音乐</a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.vmovier.com/" title="发现优秀视频短片及微电影" target="_blank">场库</a></div>
                <div class="col">
                    <a href="https://movie.douban.com/" target="_blank">豆瓣电影</a></div>
                <div class="col">
                    <a href="https://tuchong.com/video/" target="_blank">短视频</a></div>
                <div class="col">
                    <a href="https://data.163.com/special/datablog/?_pc=1" title="用数据说话，提供轻量化的阅读体验" target="_blank">网易数读</a></div>
                <div class="col">
                    <a href="https://douban.fm/" title="发现好音乐" target="_blank">豆瓣FM</a></div>
                <div class="col">
                    <a href="https://www.itingwa.com/" title="好听的轻音乐、纯音乐分享社区" target="_blank">听蛙音乐</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/qt/" title="倾听自然声音，享受一份宁静" target="_blank">倾听</a></div>
                <div class="col">
                    <a href="http://www.htqyy.com/" target="_blank">轻音乐</a></div>
                <div class="col">
                    <a href="https://www.lizhi.fm/" title="倾听文字的声音，用声音在一起" target="_blank">荔枝FM</a></div>
                <div class="col">
                    <a href="http://5sing.kugou.com/" title="中国原创音乐基地" target="_blank">5SING</a></div>
                <div class="col">
                    <a href="https://www.autopiano.cn/" title="在线弹钢琴" target="_blank">自由钢琴</a></div>
                <div class="col">
                    <a href="https://meiriyiwen.com/" title="美文阅读" target="_blank">每日一文</a></div>
                <div class="col">
                    <a href="https://www.shuge.org/" title="有品格的数字古籍图书馆" target="_blank">书格</a></div>
                <div class="col">
                    <a href="https://www.allhistory.com/" title="感受文艺设计范儿十足的历史长廊" target="_blank">全历史</a></div>
                <div class="col">
                    <a href="https://www.ageeye.cn/" title="地图知识分享" target="_blank">观沧海</a></div>
            </div>
        </div>
        <div class="col subs" id="gw">
            <h5 class="tit">
                <i class="fa fa-shopping-cart" style="color: #f90;"></i>购物/吃住行 &nbsp;
                <a href="http://guozhivip.com/hg/" style="color: #999" title="发现特价好物">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="http://tb.g2h3.com/3J2YD" target="_blank">小米有品</a></div>
                <div class="col">
                    <a href="https://tb.g2h3.com/4gSZt" target="_blank">华为商城</a></div>
                <div class="col">
                    <a href="https://tb.mktbigdata.com/6rnpU" target="_blank" title="平价精选，淘好货">阿里1688</a></div>
                <div class="col">
                    <a href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFDJWWA1FBCVbV0IUWVALHEBeBUUZTFoNXAAECUteDDc%2BTAZKBUsFB3tBawFRYFVPJgtZeg8DF1clBxMGVBlfFgQUA2UYWhQLFg9SH10XMiIHVCsQewMiBVQaWBwCEgVcHGsVBhoPUxpSFgQRBFMYaxICGzeCtPbDgbHQ%2BraMlbITBWUraxYyIjdUK1slXVZaCCtZFAMWDg%3D%3D" target="_blank">京东超市</a></div>
                <div class="col">
                    <a href="https://s.click.taobao.com/t?e=m%3D2%26s%3D7v237yC%2F38Vw4vFB6t2Z2jAVflQIoZepMljcGUdc4HdyINtkUhsv0DeoGxan81STWFD4NwWNq8EGqyBGg10XJSgWXzy7fQIViqWwbXZ0gRYARPme%2Fj70k7BgyyaVvZ8XcmLoMWlkY1wCL64zDyUAng2XyYz%2FmtaQsrwr79X3yVYhhQs2DjqgEA%3D%3D&union_lens=lensId%3AOPT%401587402641%400b0ad074_0ee3_1719892110d_372f%4001" target="_blank">天猫超市</a></div>
                <div class="col">
                    <a href="https://sugs.suning.com/outstation.htm?p=WFoBRgINAQAdF0JjLHAxB0pNUBVQQXlhbHlbVnRhfCVbSVINYzkoIhwXEBAfExASZRNaIhQISRQ8V1UPUFoKHlVWGEJPCEoKWEtSLjo7aUtdGQkSCwUnMHs8HAEoPSNoAhwLXi45KH0JBQsUGRgZB2URC2wXVElYelJSSVJcGA4" target="_blank">苏宁超市</a></div>
                <div class="col">
                    <a href="https://tb.g2h3.com/4gTet" target="_blank">考拉海购</a></div>
                <div class="col">
                    <a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DMZniTsoFtbRw4vFB6t2Z2iperVdZeJviv2laukthwYj87chln4NoyjdIPyr%2Ba9IGGq5bBsxTxb6vVDIWzCY8o2NMNPsOaXVSSDgHl0%2FlVPnLpeV64Y3CANH%2FZSMLueHgvAkGI0LAZvFHTiuhpphSfoFWPrA1M5eVbcIJJOiyjMjdWJX%2F87QFbZHjKlMEkHC0te8cINf%2BRqT8UZMgt5AYll5j7LRuVuGxxiXvDf8DaRs%3D&union_lens=lensId%3AOPT%401598754420%400ba92eb0_28ad_1743d30777c_7c7e%4001" target="_blank" title="飞猪旅行">飞猪</a></div>
                <div class="col">
                    <a href="https://www.smzdm.com/" target="_blank">什么值得买</a></div>
                <div class="col">
                    <a href="https://www.mafengwo.cn/" target="_blank">马蜂窝</a></div>
                <div class="col">
                    <a href="https://www.qyer.com/" target="_blank">穷游网</a></div>
                <div class="col">
                    <a href="https://www.xiachufang.com/" target="_blank">下厨房</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-newspaper-o" style="color: #f90;"></i>新闻/阅读 &nbsp;
                <a href="http://guozhivip.com/news/" style="color: #999">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.qq.com/" title="有态度新闻资讯" target="_blank">腾讯</a></div>
                <div class="col">
                    <a href="https://www.sohu.com/" title="传递价值资讯" target="_blank">搜狐</a></div>
                <div class="col">
                    <a href="https://www.toutiao.com/" target="_blank">今日头条</a></div>
                <div class="col">
                    <a href="https://www.cctv.com/" title="世界就在眼前" target="_blank">央视网</a></div>
                <div class="col">
                    <a href="https://www.huanqiu.com/" title="环球新闻实时看" target="_blank">环球网</a></div>
                <div class="col">
                    <a href="https://mil.ifeng.com/" title="第一时间了解军事动态" target="_blank">凤凰军事</a></div>
                <div class="col">
                    <a href="https://awtmt.com/" title="第一时间了解互联网科技新闻" target="_blank">全天候科技</a></div>
                <div class="col">
                    <a href="https://www.hupu.com/" title="虎扑体育资讯" target="_blank">虎扑体育</a></div>
                <div class="col">
                    <a href="https://www.yicai.com/" target="_blank" title="全球财经精粹">第一财经</a></div>
                <div class="col">
                    <a href="https://www.jinse.com/" title="在这里，读懂区块链" target="_blank">金色财经</a></div>
                <div class="col">
                    <a href="https://renjian.163.com/" title="活在尘世，看见人间" target="_blank">网易人间</a></div>
                <div class="col">
                    <a href="https://www.zhihu.com/topic/19776749/top-answers" title="话题精华，知乎的 Top1000 高票回答" target="_blank">知乎话题</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-youtube-play" style="color: #f90;"></i>电影/海外剧 &nbsp;
                <a href="http://guozhivip.com/mvs.html" style="color: #999" title="免费电影在线观看/下载">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://ddrk.me/" target="_blank">低端影视</a></div>
                <div class="col">
                    <a href="https://www.kankanwu.com/" target="_blank">看看屋</a></div>
                <div class="col">
                    <a href="http://www.dygangs.com/" target="_blank" title="最新电影/美剧下载">电影港</a></div>
                <div class="col">
                    <a href="https://www.pianku.li/" target="_blank">片库</a></div>
                <div class="col">
                    <a href="https://www.meijutt.tv/" target="_blank" title="不负追剧好时光">美剧天堂</a></div>
                <div class="col">
                    <a href="https://www.99meiju.vip/" target="_blank">九九美剧</a></div>
                <div class="col">
                    <a href="https://www.bd2020.com/" target="_blank">BD影视</a></div>
                <div class="col">
                    <a href="https://www.66e.cc/" target="_blank">66影视</a></div>
                <div class="col">
                    <a href="https://tv.sohu.com/drama/us/" target="_blank">搜狐美剧</a></div>
                <div class="col">
                    <a href="https://www.hanfan.cc/" target="_blank" title="最新韩剧/综艺观看下载">韩饭网</a></div>
                <div class="col">
                    <a href="https://www.hmtv.me/" target="_blank">韩迷TV</a></div>
                <div class="col">
                    <a href="http://www.wwmulu.com/" target="_blank">91日剧</a></div>
            </div>
        </div>
        <div class="col subs" id="bz">
            <h5 class="tit">
                <i class="fa fa-image" style="color: #00CED1;"></i>壁纸/美图 &nbsp;
                <a href="http://guozhivip.com/imgs.html" style="color: #999" title="免费高清美图/壁纸下载">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.pexels.com/" target="_blank">Pexels</a></div>
                <div class="col">
                    <a href="https://pixabay.com/photos/" target="_blank">Pixabay</a></div>
                <div class="col">
                    <a href="https://stocksnap.io/" target="_blank">Stocksnap</a></div>
                <div class="col">
                    <a href="https://unsplash.com/" target="_blank">Unsplash</a></div>
                <div class="col">
                    <a href="https://alpha.wallhaven.cc/" target="_blank">Wallhaven</a></div>
                <div class="col">
                    <a href="https://isorepublic.com/" target="_blank">ISO Republic</a></div>
                <div class="col">
                    <a href="http://www.cnu.cc/inspirationPage/hot-0" title="灵感摄影" target="_blank">CNU</a></div>
                <div class="col">
                    <a href="https://tuchong.com/explore/" target="_blank">图虫</a></div>
                <div class="col">
                    <a href="https://gratisography.com/" target="_blank">Gratisography</a></div>
                <div class="col">
                    <a href="https://www.dpm.org.cn/lights/royal.html" target="_blank">故宫壁纸</a></div>
                <div class="col">
                    <a href="https://pic.sogou.com/" target="_blank">搜狗图片</a></div>
                <div class="col">
                    <a href="https://image.baidu.com/" target="_blank">百度图片</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-search" style="color: #00CED1;"></i>网盘/电子书 &nbsp;
                <a href="http://guozhivip.com/xs/" style="color: #999" title="小说电子书文库">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://pan.baidu.com/" target="_blank">百度网盘</a></div>
                <div class="col">
                    <a href="https://www.weiyun.com/" target="_blank">腾讯微云</a></div>
                <div class="col">
                    <a href="https://www.aliyundrive.com/" target="_blank">阿里云盘</a></div>
                <div class="col">
                    <a href="https://www.dalipan.com/" target="_blank">网盘搜索</a></div>
                <div class="col">
                    <a href="https://www.fastsoso.cn/" target="_blank">fast盘搜</a></div>
                <div class="col">
                    <a href="http://www.pan58.com/" target="_blank">盘58搜索</a></div>
                <div class="col">
                    <a href="https://www.58wangpan.com/" target="_blank">58盘搜索</a></div>
                <div class="col">
                    <a href="https://bbs.leyuz.net/" target="_blank" title="资源分享社区">乐愚社区</a></div>
                <div class="col">
                    <a href="http://www.qcenglish.com/" target="_blank">英文电子书</a></div>
                <div class="col">
                    <a href="http://www.toplinks.cc/s/" target="_blank" title="书籍、学术资源搜索">淘链客</a></div>
                <div class="col">
                    <a href="http://www.banshujiang.cn/" target="_blank" title="编程电子书下载">搬书匠</a></div>
                <div class="col">
                    <a href="https://www.jiumodiary.com/" target="_blank" title="搜电子书">鸠摩搜书</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-wrench" style="color: #00CED1;"></i>软件/工具</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="http://www.pc6.com/" target="_blank">PC6下载</a></div>
                <div class="col">
                    <a href="http://www.downza.cn/" target="_blank">下载之家</a></div>
                <div class="col">
                    <a href="https://www.52pojie.cn/" target="_blank">吾爱破解</a></div>
                <div class="col">
                    <a href="https://www.appinn.com/" target="_blank">小众软件</a></div>
                <div class="col">
                    <a href="https://www.onlinedown.net/" target="_blank">软件园</a></div>
                <div class="col">
                    <a href="https://www.ghxi.com/" target="_blank">果核剥壳</a></div>
                <div class="col">
                    <a href="http://www.pc6.com/mac/" target="_blank">MAC软件</a></div>
                <div class="col">
                    <a href="http://www.cnplugins.com/" target="_blank">Chrome插件</a></div>
                <div class="col">
                    <a href="https://www.bmcx.com/" target="_blank" title="免费的便民查询工具大全">便民查询</a></div>
                <div class="col">
                    <a href="https://tool.lu/" target="_blank" title="程序员的工具箱">程序员工具</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/tool/" target="_blank" title="综合在线工具大全">果汁工具</a></div>
                <div class="col">
                    <a href="http://tools.jb51.net/" target="_blank" title="综合在线工具大全">工具之家</a></div>
            </div>
        </div>
        <div class="col subs" id="fc">
            <h5 class="tit">
                <i class="fa fa-life-ring" style="color: #0066FF;"></i>房产/汽车/股票</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.anjuke.com/" target="_blank">安居客</a></div>
                <div class="col">
                    <a href="https://www.ke.com/" target="_blank">贝壳找房</a></div>
                <div class="col">
                    <a href="https://www.fang.com/" target="_blank">房天下</a></div>
                <div class="col">
                    <a href="https://www.58.com/" target="_blank">58同城</a></div>
                <div class="col">
                    <a href="https://www.autohome.com.cn/" target="_blank">汽车之家</a></div>
                <div class="col">
                    <a href="https://www.pcauto.com.cn/" target="_blank">太平洋汽车</a></div>
                <div class="col">
                    <a href="https://www.xcar.com.cn/" target="_blank">爱卡汽车</a></div>
                <div class="col">
                    <a href="https://www.guazi.com/" target="_blank">瓜子二手车</a></div>
                <div class="col">
                    <a href="https://www.che168.com/" target="_blank">二手车之家</a></div>
                <div class="col">
                    <a href="https://xueqiu.com/" target="_blank">雪球</a></div>
                <div class="col">
                    <a href="http://www.10jqka.com.cn/" target="_blank">同花顺</a></div>
                <div class="col">
                    <a href="https://www.eastmoney.com/" target="_blank">东方财富</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-tablet" style="color: #0066FF;"></i>手机/数码
                <a href="https://tb.g2h3.com/4gSZt" class="tg" target="_blank" style="margin-left: 13px">华为</a>
                <a href="https://www.apple.com.cn/" class="tg" target="_blank" style="margin-left: 5px">苹果</a>
                <a href="https://www.mi.com/" class="tg" target="_blank" style="margin-left: 5px">小米</a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.ithome.com/" target="_blank" title="数码，科技，生活，国内顶级IT科技网站">IT之家</a></div>
                <div class="col">
                    <a href="https://www.mydrivers.com/" target="_blank">快科技</a></div>
                <div class="col">
                    <a href="http://www.zol.com.cn/" title="专业的IT网站" target="_blank">中关村在线</a></div>
                <div class="col">
                    <a href="https://sspai.com/" title="高品质数字消费指南" target="_blank">少数派</a></div>
                <div class="col">
                    <a href="http://www.it168.com/" title="IT导购第一站" target="_blank">IT168</a></div>
                <div class="col">
                    <a href="https://www.dgtle.com/" title="分享美好数字生活" target="_blank">数字尾巴</a></div>
                <div class="col">
                    <a href="https://www.cnmo.com/" title="领先的科技新媒体，给你有价值的信息" target="_blank">手机中国</a></div>
                <div class="col">
                    <a href="https://www.ifanr.com/" title="聚焦创新和消费主题的科技媒体" target="_blank">爱范儿</a></div>
                <div class="col">
                    <a href="https://www.pconline.com.cn/" title="电脑，数码相机，智能硬件一网打尽" target="_blank">太平洋电脑</a></div>
                <div class="col">
                    <a href="http://www.pcpop.com/" target="_blank">泡泡网</a></div>
                <div class="col">
                    <a href="https://www.zealer.com/" title="科技生活第一站" target="_blank">Zealer</a></div>
                <div class="col">
                    <a href="https://www.feng.com/" target="_blank" title="千万果粉大本营">威锋网</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-gamepad" style="color: #0066FF;"></i>游戏娱乐 &nbsp;
                <a href="http://guozhivip.com/game/" style="color: #999" title="游戏攻略/测评/下载">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.douyu.com/" target="_blank">斗鱼</a></div>
                <div class="col">
                    <a href="https://www.huya.com/" target="_blank">虎牙</a></div>
                <div class="col">
                    <a href="https://www.yy.com/" target="_blank" title="YY直播">YY直播</a></div>
                <div class="col">
                    <a href="https://www.gamersky.com/" target="_blank" title="大型单机游戏平台">游民星空</a></div>
                <div class="col">
                    <a href="https://www.3dmgame.com/" target="_blank" title="单机游戏大全">3DM游戏</a></div>
                <div class="col">
                    <a href="https://www.ali213.net/" target="_blank" title="单机游戏门户网站">游侠网</a></div>
                <div class="col">
                    <a href="https://store.steampowered.com/" target="_blank" title="全球最大的游戏平台">Steam</a></div>
                <div class="col">
                    <a href="https://www.taptap.com/" target="_blank" title="发现好游戏">TapTap</a></div>
                <div class="col">
                    <a href="http://www.4399.com/" target="_blank" title="小游戏大全">4399游戏</a></div>
                <div class="col">
                    <a href="https://www.17173.com/" target="_blank" title="中国游戏第一门户">17173游戏</a></div>
                <div class="col">
                    <a href="https://www.gcores.com/" target="_blank" title="一个综合性游戏资讯网站">机核网</a></div>
                <div class="col">
                    <a href="https://lol.qq.com/" target="_blank" title="英雄联盟官网">英雄联盟</a></div>
            </div>
        </div>
        <div class="col subs" id="yy">
            <h5 class="tit">
                <i class="fa fa-book" style="color: #FF83FA;"></i>英语学习</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="http://www.kekenet.com/" target="_blank">可可英语</a></div>
                <div class="col">
                    <a href="https://www.51voa.com/" target="_blank">美国之音</a></div>
                <div class="col">
                    <a href="http://yygrammar.com/" target="_blank" title="最实用的英语语法大全">英语语法</a></div>
                <div class="col">
                    <a href="https://language.chinadaily.com.cn/" target="_blank">英语点津</a></div>
                <div class="col">
                    <a href="https://www.hjenglish.com/" target="_blank">沪江英语</a></div>
                <div class="col">
                    <a href="https://web.shanbay.com/op/articles/pc/list?column_id=xbxai" target="_blank">扇贝英语</a></div>
                <div class="col">
                    <a href="https://dict.eudic.net/ting" target="_blank">每日听力</a></div>
                <div class="col">
                    <a href="https://www.tingclass.net/" target="_blank" title="免费英语学习网站">听力课堂</a></div>
                <div class="col">
                    <a href="https://www.putclub.com/" target="_blank">普特听力</a></div>
                <div class="col">
                    <a href="http://www.tingroom.com/" target="_blank">在线听力室</a></div>
                <div class="col">
                    <a href="https://www.ted.com/" target="_blank" title="TED英文演讲，传播智慧，感受英语魅力">TED</a></div>
                <div class="col">
                    <a href="https://www.en84.com/" target="_blank">英文巴士</a></div>
                <div class="col">
                    <a href="https://www.youdao.com/" target="_blank">有道</a></div>
                <div class="col">
                    <a href="https://www.iciba.com/" target="_blank">爱词霸</a></div>
                <div class="col">
                    <a href="https://dict.cn/" target="_blank">海词词典</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-code" style="color: #FF83FA;"></i>编程指南</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.csdn.net/" target="_blank" title="专业IT技术社区">CSDN</a></div>
                <div class="col">
                    <a href="https://www.oschina.net/" target="_blank" title="中文开源技术交流社区">开源中国</a></div>
                <div class="col">
                    <a href="https://segmentfault.com/" target="_blank" title="技术交流社区，学习技能、解决问题">SegmentFault</a></div>
                <div class="col">
                    <a href="https://www.cnblogs.com/pick/" target="_blank" title="开发者的网上家园">博客园</a></div>
                <div class="col">
                    <a href="https://www.runoob.com/" target="_blank">菜鸟教程</a></div>
                <div class="col">
                    <a href="https://www.w3school.com.cn/" target="_blank">W3school</a></div>
                <div class="col">
                    <a href="https://www.51cto.com/" target="_blank" title="领先的IT技术网站">51CTO</a></div>
                <div class="col">
                    <a href="https://juejin.cn/" target="_blank" title="只有高手分享的中文技术社区">掘金</a></div>
                <div class="col">
                    <a href="https://www.jb51.net/" target="_blank">脚本之家</a></div>
                <div class="col">
                    <a href="https://github.com/explore" target="_blank">Github</a></div>
                <div class="col">
                    <a href="https://www.infoq.cn/" target="_blank" title="软件开发及相关领域知识社区">InfoQ</a></div>
                <div class="col">
                    <a href="https://stackoverflow.com/questions" target="_blank" title="开发者学习交流社区">Stackoverflow</a></div>
                <div class="col">
                    <a href="https://toutiao.io/posts/hot/7" target="_blank" title="程序员分享平台">开发者头条</a></div>
                <div class="col">
                    <a href="https://wiki.jikexueyuan.com/" target="_blank" title="IT技术图文教程库">极客Wiki</a></div>
                <div class="col">
                    <a href="https://www.imooc.com/" target="_blank" title="程序员的梦工厂">慕课网</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-pencil-square-o" style="color: #FF83FA;"></i>效率办公</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.wps.cn/learning/" target="_blank" title="Office办公技巧学习平台">WPS学院</a></div>
                <div class="col">
                    <a href="http://www.wordlm.com/" target="_blank" title="办公软件在线教学平台">Word联盟</a></div>
                <div class="col">
                    <a href="http://ffcell.com/School/Formula/index.aspx" target="_blank" title="专注Excel学习互助，海量资源">Excel教程</a></div>
                <div class="col">
                    <a href="https://www.excelhome.net/" target="_blank">Excelhome</a></div>
                <div class="col">
                    <a href="https://support.office.com/zh-cn/excel" target="_blank" title="快速查询各函数用法">Excel帮助</a></div>
                <div class="col">
                    <a href="http://www.1ppt.com/" target="_blank">第一PPT</a></div>
                <div class="col">
                    <a href="https://smallpdf.com/cn/pdf-tools" target="_blank" title="PDF格式互转、压缩工具">Smallpdf</a></div>
                <div class="col">
                    <a href="https://convertio.co/zh/" target="_blank" title="将您的文件转换成任意格式">文件转换</a></div>
                <div class="col">
                    <a href="https://www.processon.com/" target="_blank" title="在线制作流程图、思维导图、原型图、UML、网络拓扑图、组织结构图等">ProcessOn</a></div>
                <div class="col">
                    <a href="https://topbook.cc/" target="_blank" title="高效生活研究所">Topbook</a></div>
                <div class="col">
                    <a href="https://file-post.net/zc/" target="_blank" title="大文件在线传递分享">文件分享</a></div>
                <div class="col">
                    <a href="https://note.youdao.com/" target="_blank">有道笔记</a></div>
                <div class="col">
                    <a href="https://docs.qq.com/" target="_blank" title="可多人协作的在线文档">腾讯文档</a></div>
                <div class="col">
                    <a href="https://shimo.im/" target="_blank" title="小而美的在线文档和表格工具">石墨文档</a></div>
                <div class="col">
                    <a href="https://translate.google.cn/" target="_blank" title="在线翻译">谷歌翻译</a></div>
            </div>
        </div>
        <div class="col subs" id="zx">
            <h5 class="tit">
                <i class="fa fa-mortar-board" style="color: #7CCD7C;"></i>自学/公考/考研 &nbsp;
                <a href="http://guozhivip.com/edu/" style="color: #999" title="学习、资质考试等教育资源大全">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.51zxw.net/" target="_blank">我要自学网</a></div>
                <div class="col">
                    <a href="https://ke.qq.com/" target="_blank">腾讯课堂</a></div>
                <div class="col">
                    <a href="https://open.163.com/" target="_blank">网易公开课</a></div>
                <div class="col">
                    <a href="https://study.163.com/" target="_blank">网易云课堂</a></div>
                <div class="col">
                    <a href="https://open.163.com/ted/" target="_blank">TED演讲</a></div>
                <div class="col">
                    <a href="https://www.icourse163.org/" target="_blank">大学MOOC</a></div>
                <div class="col">
                    <a href="https://space.bilibili.com/20503549" target="_blank" title="平面设计/影视后期/三维动画等自学教程">doyoudo</a></div>
                <div class="col">
                    <a href="https://www.xuetangx.com/" target="_blank">学堂在线</a></div>
                <div class="col">
                    <a href="https://xue.taobao.com/" target="_blank">淘宝教育</a></div>
                <div class="col">
                    <a href="https://www.offcn.com/" target="_blank" title="公务员考试网">中公教育</a></div>
                <div class="col">
                    <a href="https://www.huatu.com/" target="_blank" title="公务员考试网">华图教育</a></div>
                <div class="col">
                    <a href="https://www.eol.cn/" target="_blank" title="推动教育前进的力量">教育在线</a></div>
                <div class="col">
                    <a href="http://www.kaoyan.com/" target="_blank">考研帮</a></div>
                <div class="col">
                    <a href="https://www.51test.net/kaoyan/" target="_blank">无忧考研</a></div>
                <div class="col">
                    <a href="https://yz.chsi.com.cn/" target="_blank" title="中国研究生招生信息网">招生信息网</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-user-plus" style="color: #7CCD7C;"></i>招聘/求职</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.51job.com/" target="_blank">前程无忧</a></div>
                <div class="col">
                    <a href="https://www.zhaopin.com/" target="_blank">智联招聘</a></div>
                <div class="col">
                    <a href="https://www.liepin.com/" target="_blank">猎聘网</a></div>
                <div class="col">
                    <a href="https://www.zhipin.com/" title="互联网求职神器" target="_blank">Boss直聘</a></div>
                <div class="col">
                    <a href="https://www.lagou.com/" title="最专业的互联网招聘平台" target="_blank">拉钩网</a></div>
                <div class="col">
                    <a href="https://www.haitou.cc/" title="大学生求职搜索" target="_blank">海投网</a></div>
                <div class="col">
                    <a href="https://www.dajie.com/" title="年轻人专属的社交招聘平台" target="_blank">大街网</a></div>
                <div class="col">
                    <a href="https://www.yingjiesheng.com/" title="大学生求职网站" target="_blank">应届生求职</a></div>
                <div class="col">
                    <a href="https://www.nowcoder.com/" title="专业IT人员笔试面试备考平台" target="_blank">牛客网</a></div>
                <div class="col">
                    <a href="https://www.jobui.com/" title="发现和了解你未来的雇主" target="_blank">职友集</a></div>
                <div class="col">
                    <a href="https://www.kanzhun.com/" title="中国领先的职场信息平台" target="_blank">看准网</a></div>
                <div class="col">
                    <a href="https://www.58.com/" target="_blank">58同城</a></div>
                <div class="col">
                    <a href="https://www.shixiseng.com/" title="大学生找实习求职网站" target="_blank">实习僧</a></div>
                <div class="col">
                    <a href="https://www.500d.me/" title="简历模板大全，简历制作" target="_blank">五百丁简历</a></div>
                <div class="col">
                    <a href="https://cv.qiaobutang.com/" title="个人简历模板大全" target="_blank">乔布简历</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-pencil-square" style="color: #7CCD7C;"></i>设计/素材 &nbsp;
                <a href="http://guozhivip.com/design" style="color: #999" title="发现更多设计资源">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.zcool.com.cn/" target="_blank">站酷</a></div>
                <div class="col">
                    <a href="https://huaban.com/" target="_blank">花瓣</a></div>
                <div class="col">
                    <a href="https://www.ui.cn/" target="_blank">UI中国</a></div>
                <div class="col">
                    <a href="https://dribbble.com/" target="_blank">Dribbble</a></div>
                <div class="col">
                    <a href="https://www.uisdc.com/" target="_blank">优设</a></div>
                <div class="col">
                    <a href="https://www.68design.net/work/" target="_blank">68Design</a></div>
                <div class="col">
                    <a href="https://www.zhisheji.com/" target="_blank">致设计</a></div>
                <div class="col">
                    <a href="https://ycg.qq.com/" target="_blank">原创馆</a></div>
                <div class="col">
                    <a href="https://www.materialpalette.com/" target="_blank">在线配色</a></div>
                <!--<div class="col"><a href="https://www.fotor.com.cn/" target="_blank">Fotor设计</a></div>-->
                <div class="col">
                    <a href="https://h5.bce.baidu.com/store" target="_blank">H5设计</a></div>
                <div class="col">
                    <a href="https://www.iconfont.cn/" target="_blank" title="阿里巴巴矢量图标库">图标库</a></div>
                <div class="col">
                    <a href="https://www.transparenttextures.com/" target="_blank" title="好看的底纹素材背景图">纹理背景</a></div>
                <div class="col">
                    <a href="https://www.100font.com/" target="_blank" title="免费字体下载使用">免费字体</a></div>
                <div class="col">
                    <a href="http://www.diyiziti.com/" target="_blank" title="艺术字体在线设计制作">艺术字体</a></div>
                <div class="col">
                    <a href="https://gracg.com/works?type=hot" target="_blank" title="创意插画">插画作品</a></div>
            </div>
        </div>
        <div class="col subs" id="yx">
            <h5 class="tit">
                <i class="fa fa-medkit" style="color: #f60;"></i>医学/健康</h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.120ask.com/" target="_blank">快问医生</a></div>
                <div class="col">
                    <a href="https://dxy.com/" title="中国医药领域连接者" target="_blank">丁香园</a></div>
                <div class="col">
                    <a href="https://www.chunyuyisheng.com/" title="你的医生朋友" target="_blank">春雨医生</a></div>
                <div class="col">
                    <a href="https://mingyi.sogou.com/" target="_blank">搜狗明医</a></div>
                <div class="col">
                    <a href="https://ly.so.com/" target="_blank">360良医</a></div>
                <div class="col">
                    <a href="https://jbk.99.com.cn/" title="疾病查询、疾病大全" target="_blank">99疾病查询</a></div>
                <div class="col">
                    <a href="https://www.mvyxws.com/" title="医学科普" target="_blank">医学微视</a></div>
                <div class="col">
                    <a href="https://baike.guahao.com/" target="_blank">疾病百科</a></div>
                <div class="col">
                    <a href="http://www.39.net/" title="优质医疗信息服务平台" target="_blank">39健康网</a></div>
                <div class="col">
                    <a href="https://jbk.familydoctor.com.cn/" title="疾病症状查询" target="_blank">家庭医生</a></div>
                <div class="col">
                    <a href="http://www.xywy.com/" title="医药交流，医患交流平台" target="_blank">寻医问药</a></div>
                <div class="col">
                    <a href="https://www.haodf.com/" title="找医院、找医生" target="_blank">好大夫在线</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-meh-o" style="color: #f60;"></i>二次元/动漫 &nbsp;
                <a href="http://guozhivip.com/mh/" style="color: #999" title="发现更多资源">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="https://www.bilibili.com/" target="_blank">哔哩哔哩</a></div>
                <div class="col">
                    <a href="https://www.acfun.cn/" target="_blank">AcFun</a></div>
                <div class="col">
                    <a href="https://bcy.net/" title="ACG爱好者社区" target="_blank">半次元</a></div>
                <div class="col">
                    <a href="https://www.missevan.com/" title="来自二次元的声音" target="_blank">猫耳FM</a></div>
                <div class="col">
                    <a href="https://www.kuaikanmanhua.com/" target="_blank">快看漫画</a></div>
                <div class="col">
                    <a href="https://www.u17.com/" title="原创漫画梦工厂" target="_blank">有妖气</a></div>
                <div class="col">
                    <a href="https://ac.qq.com/" target="_blank">腾讯动漫</a></div>
                <div class="col">
                    <a href="https://www.dm5.com/" title="在线漫画" target="_blank">动漫屋</a></div>
                <div class="col">
                    <a href="https://www.mkzhan.com/" title="在线漫画大全" target="_blank">漫客栈</a></div>
                <div class="col">
                    <a href="https://www.kanman.com/" target="_blank">看漫画</a></div>
                <div class="col">
                    <a href="https://www.mooyuu.com/" title="二次元漫画社区" target="_blank">摸鱼</a></div>
                <div class="col">
                    <a href="https://manga.bilibili.com/" target="_blank">哔哩漫画</a></div>
            </div>
        </div>
        <div class="col subs">
            <h5 class="tit">
                <i class="fa fa-lightbulb-o" style="color: #f60;"></i>趣站/有意思 &nbsp;
                <a href="http://guozhivip.com/lab" style="color: #999" title="发现更多好玩">更多></a></h5>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col">
                    <a href="http://jandan.net/" title="不仅仅是娱乐" target="_blank">煎蛋</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/fun/2048/" title="2048经典小游戏" target="_blank">2048</a></div>
                <div class="col">
                    <a href="https://youquhome.com/" title="收藏全球最有趣的网站" target="_blank">有趣网址</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/jzg/" title="敲出属于你的旋律" target="_blank">架子鼓</a></div>
                <div class="col">
                    <a href="https://aidn.jp/mikutap/" title="随意演奏你的音乐" target="_blank">Mikutap</a></div>
                <div class="col">
                    <a href="https://www.xinpianchang.com/channel/index/sort-like" title="就是这么有趣" target="_blank">创意视频</a></div>
                <div class="col">
                    <a href="https://neave.com/" title="超强在线趣味小游戏合集！" target="_blank">小游戏</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/fun/wen.html" title="狗屁不通文章生成器" target="_blank">文章生成器</a></div>
                <div class="col">
                    <a href="http://cn.origami-club.com/" title="创意折纸大全图解" target="_blank">折纸俱乐部</a></div>
                <div class="col">
                    <a href="http://www.staggeringbeauty.com/" title="一个贱萌的减压家伙" target="_blank">贱萌减压</a></div>
                <div class="col">
                    <a href="https://obliterate.me/" title="国外很好玩的涂鸦网站" target="_blank">随意涂鸦</a></div>
                <div class="col">
                    <a href="http://guozhivip.com/eat/" title="再也不用为吃饭发愁了" target="_blank">今天吃啥</a></div>
            </div>
        </div>
    </div>
    <div class="tuijian" id="renyimen">
        <ui class="tj">
            <li class="first-one">
                <a href="https://movie.douban.com/chart" target="_blank">
                    <i class="fa fa-film" style="color: #f90"></i>豆瓣电影排行榜</a>
            </li>
            <li>
                <a href="https://weibo.com/newlogin?tabtype=search&url=" target="_blank">
                    <i class="fa fa-search" style="color: #f90"></i>微博热搜榜</a>
            </li>
            <li>
                <a href="https://v.qq.com/biu/ranks/?t=hotsearch" target="_blank">
                    <i class="fa fa-bar-chart" style="color: #f90"></i>全网影视排行榜</a>
            </li>
            <li>
                <a href="https://www.kuwo.cn/rankList" target="_blank">
                    <i class="fa fa-headphones" style="color: #f90"></i>音乐飙升榜</a>
            </li>
            <li>
                <a href="https://h.bilibili.com/d" target="_blank">
                    <i class="fa fa-image" style="color: #f90"></i>哔哩哔哩相簿</a>
            </li>
            <li>
                <a href="https://www.dgtle.com/article" target="_blank">
                    <i class="fa fa-eye" style="color: #f90"></i>数字尾巴社区</a>
            </li>
        </ui>
    </div>
    <div class="random">
        <ul>
            <li>
                <a href="http://guozhivip.com/tool/" target="_blank" class="one"></a>
            </li>
            <li>
                <a href="http://guozhivip.com/imgs.html" target="_blank" class="two">免费壁纸美图</a></li>
            <li>
                <a href="https://www.douban.com/explore/" target="_blank" class="three">浏览发现</a></li>
            <li>
                <a href="http://guozhivip.com/lab/" target="_blank" class="four">有点儿意思</a></li>
            <li>
                <a href="http://guozhivip.com/eat/" target="_blank" class="five">今天吃啥呀</a></li>
            <li>
                <a href="https://union-click.jd.com/jdc?e=&p=AyIGZRprFDJWWA1FBCVbV0IUWVALHE5fBUUZTFINXAAECUteDDcQQj9Ud1cGN3gfZ2obV1dFJEJEZFElF1clBxMGVBlfFgQUA2UYWhQLFg9SH10XMiIHVCsQewMiBVQaWBwCGwRRH2sVBhoPUxpSFwcRA1ITaxICGzeCtPbDgbHQ%2BraMlbITBWUraxYyIjdUK1slXVZaCCtZFAMWDg%3D%3D" target="_blank" class="six">特价好物疯抢</a></li>
            <li>
                <a href="https://douban.fm/" target="_blank" class="seven">一首歌的时间</a></li>
            <li>
                <a href="https://www.vmovier.com/channel" target="_blank" class="eight">优质短视频</a></li>
            <li>
                <a href="https://sports.qq.com/" target="_blank" class="nine">体育 NBA</a></li>
            <li>
                <a href="http://guozhivip.com/mvs.html" target="_blank" class="ten">在线追剧观影</a></li>
        </ul>
    </div>
</div>
@include('navigation.modules._home-footer-mobile', ['data' => ''])
@include('navigation.modules._home-footer', ['data' => ''])
@include('navigation.modules._home-float', ['data' => ''])
<!-- 抄袭可耻，禁止抄袭 -->
@include('navigation.modules._home-js', ['data' => ''])
@endsection
