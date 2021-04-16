<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>奇趣保罗</title>
    <link href="static/32.png" rel="icon" sizes="32x32"/>
    <link href="static/192.png" rel="icon" sizes="192x192"/>
    <link href="static/paul.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background-image: url('static/background-<?php echo rand(1, 7);?>.jpg');">
<div id="loader">
    <figure>
        <img src="static/avatar.jpg"/>
    </figure>
</div>
<main>
    <div class="content">
        <figure class="me">
            <img class="avatar" src="./static/avatar.jpg"/>
            <h2 class="name">奇趣保罗</h2>
        </figure>
        <section id="main" class="active">
            <a href="https://paul.ren" title="深入浅出，日常折腾记录"><i class="fa fa-home"></i><span class="title">小窝</span></a>
            <a href="https://paugram.com" title="分享技术与生活"><i class="fa fa-book"></i><span class="title">博客</span></a>
            <a href="http://music.163.com/#/user/home?id=7041859" target="_blank" title="来听歌吧"><i class="fa fa-music"></i><span class="title">网易云</span></a>
            <a href="http://steamcommunity.com/id/dreamer-paul/" target="_blank" title="找我"><i class="fa fa-steam"></i><span class="title">Steam</span></a>
            <a href="https://github.com/dreamer-paul/" target="_blank"><i class="fa fa-github"></i><span class="title">GitHub</span></a>
            <a href="https://space.bilibili.com/124512959/" target="_blank"><i class="fa fa-flag"></i><span class="title">哔哩哔哩</span></a>
        </section>
        <section id="articles">
<?php
error_reporting(0);

// 设置你的博客 RSS 地址（WordPress、Typecho 均可）
define("BLOG_URL", "https://paugram.com/feed");

$file = simplexml_load_file(BLOG_URL) -> channel -> item;

if(isset($file)){
    for($i = 0; $i < 6; $i++){
        $timestamp = strtotime($file[$i] -> pubDate);
        $timestamp = date("y-m-d", $timestamp);

        if($file[$i]){
            echo '<a href="' . $file[$i] -> link . '" target="_blank">' . $file[$i] -> title . '<span class="meta">' . $timestamp . "</span></a>";
            echo "\n";
        }
        else{
            break;
        }
    }
}
else{
    echo "<a>博客连接失败<span class='meta'>请检查</span></a>";
}

?>
        </section>
        <section id="products">
            <a class="item" href="https://works.paugram.com/style" target="_blank">
                奇趣框架<span class="meta">简洁优雅的基础 CSS 框架</span>
            </a>
            <a class="item" href="https://github.com/Dreamer-Paul/Pio" target="_blank">
                看板娘插件<span class="meta">在博客上显示看板娘</span>
            </a>
            <a class="item" href="https://s.paul.ren">
                奇趣起始页<span class="meta">开源的极简起始页</span>
            </a>
            <a class="item" href="https://github.com/Dreamer-Paul/Single" target="_blank">
                Single<span class="meta">以单身为灵感创作的主题</span>
            </a>
            <a class="item" href="https://github.com/Dreamer-Paul/Fantasy" target="_blank">
                Fantasy<span class="meta">动漫少女粉博客主题</span>
            </a>
            <a class="item" href="https://api.paugram.com" target="_blank">
                保罗 API<span class="meta">免费实用的公益 API</span>
            </a>
        </section>
        <section id="about">
            <p>我是保罗，一个学习中的前后端全栈程序员，貌似对设计更有天赋，对 jQuery + Bootstrap 及其实现方式较为熟悉，在 Vue + React + 小程序均有一定的开发经验，目前在学 TypeScript 和 NextJS。喜欢造轮子，热衷于分析设计思路与研究实现原理。</p>
            <p class="text-center"><a href="https://paul.ren/about" target="_blank">详细阅读</a></p>
        </section>
        <div class="actions">
            <span class="item home active" title="找到我">首页</span>
            <span class="item article" title="近期文章">文章</span>
            <span class="item product" title="精选作品">作品</span>
            <span class="item about" title="关于我">关于我</span>
        </div>
    </div>
</main>
<footer>
    <p>© <?php echo date("Y")?> By <a href="https://paugram.com">Dreamer-Paul</a>.</p>
</footer>

<script src="static/paul.js"></script>

</body>
</html>