<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 文章详情</title>
    <meta name="msvalidate.01" content="3ED833EEEC8B466015F352CA0CEC159F" />
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna, Nova, Articles, 某普通上班族的博客, 编程, 软件开发, 程序员, 教程, Computer, PHP, Python, Learn to program"/>
    <meta name="description" content="普通上班族写的的文章，内容涵盖互联网、计算机原理、编程教程与文艺文章，偶尔发发牢骚，卖卖萌o(^・x・^)o"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>
<body>
<!--header start-->
<div id="header">
    <h1>某普通上班族的个人博客</h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="<?php echo base_url('home/index');?>">首页</a></li>
        <li><a href="<?php echo base_url('home/about');?>">关于我</a></li>
        <li><a href="<?php echo base_url('home/tweets');?>">碎言碎语</a></li>
        <li><a href="<?php echo base_url('home/diaries');?>">个人日记</a></li>
        <li><a href="<?php echo base_url('home/photos');?>">相册展示</a></li>
        <li><a href="<?php echo base_url('home/learn');?>">学无止境</a></li>
        <li><a href="<?php echo base_url('home/guestbook');?>">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="learn">
        <div class="content_text">
            <div class="article-title">
                <h1><?php echo $rows->title;?></h1>
            </div>
                <a class="article-time">时间：<?php echo $rows->date;?></a>
                <a class="article-type">分类：<?php echo $rows->type;?></a>
            <div class="article-content">
                <p><?php echo $rows->content;?></p>
            </div>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="<?php echo base_url();?>static/images/kfc.jpg" width="230" height="230" alt="博主"/>
            <p>博主：Nova</p>
            <p>职业：PHP开发工程师</p>
            <p>简介：响珰珰一粒铜豌豆</p>
            <p><br /><div class="clear"></div></p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>友情链接</li><li>友情链接</li><li class="hd_3">友情链接</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
            </div>
        </div>
        <!--end-->
    </div>
    <!--end  right-->
    <div class="clear"></div>
</div>
<!--content end-->
<!--footer-->
<div id="footer">
    <p>Design by：Nova <?php echo date('Y-m-d');?></p>
</div>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>static/js/html5.js"></script>
<![endif]-->

<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
</body>
</html>