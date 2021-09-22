<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <title>主页面--管理员信息--我的面板</title>
    <link id="bs-css" href="http://static.canliang.wang/backend/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="">
<link rel="stylesheet" href="http://39.106.102.45/common/asset-third/promotion/css/d4ccd-6570.css" data-minify="1">
<link rel="stylesheet" id="head_iconfont-css" href="http://39.106.102.45/common/asset-third/promotion/css/60d81-1277.css" type="text/css" media="all"> 
<script type="text/javascript" src="http://39.106.102.45/common/asset-third/promotion/js/jquery.js"></script> 
<link rel="icon" href="http://39.106.102.45/common/asset-third/promotion/img/9d0a0-8665.png" sizes="32x32">
<link rel="icon" href="http://39.106.102.45/common/asset-third/promotion/img/9d0a0-8665.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="http://39.106.102.45/common/asset-third/promotion/img/9d0a0-8665.png">
<meta name="msapplication-TileImage" content="http://39.106.102.45/common/asset-third/promotion/img/9d0a0-8665.png">
<link rel="shortcut icon" href="http://39.106.102.45/common/asset-third/promotion/img/4fd0e-8287.png" type="image/x-icon">
</head>
<body class="body-home body-website">
{{--@include('modules.toolbar._top', $datas)
@include('modules.toolbar._header', $datas)--}}
{{--<?php echo $this->render('_nav', ['pCode' => $pCode, 'sorts' => $sorts]); ?>
<?php echo $this->render('_commend'); ?>--}}
@include('modules.toolbar._nav', $datas)
<div class="content">
    <div class="container">
        <div class="row">
            {{--<?php echo $this->render('_nav-left', ['sortData' => $sortData, 'subInfos' => $subInfos]); ?>
            <?php echo $this->render('_content', ['subInfos' => $subInfos]); ?>--}}
        </div>
    </div>
</div>
{{--@include('modules.toolbar._footer-pre', $datas)--}}
@include('modules.toolbar._footer', $datas)
@include('modules.toolbar._right', $datas)
@include('modules.toolbar._footer-js', $datas)
</body>
</html>
