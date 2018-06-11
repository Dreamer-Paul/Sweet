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
<body style="background-image: url('static/background-<?php echo rand(1, 6);?>.jpg');">
<div id="loader">
    <figure>
        <img src="./static/avatar.jpg"/>
    </figure>
</div>
<main>
    <div class="content">
        <figure class="me">
            <img class="avatar" src="./static/avatar.jpg"/>
            <h2 class="name">奇趣保罗</h2>
        </figure>
        <section id="main" class="active">
            <a href="https://paugram.com"><i class="fa fa-home"></i><span class="title">博客</span></a>
            <a href="http://weibo.com/234891753/" target="_blank"><i class="fa fa-weibo"></i><span class="title">微博</span></a>
            <a href="http://music.163.com/#/user/home?id=7041859" target="_blank"><i class="fa fa-music"></i><span class="title">网易云</span></a>
            <a href="http://steamcommunity.com/id/dreamer-paul/" target="_blank"><i class="fa fa-steam"></i><span class="title">Steam</span></a>
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
            echo '<a href="' . $file[$i] -> link . '" target="_blank">' .$file[$i] -> title . '<span class="meta">' . $timestamp . "</span></a>";
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
            <a class="item" href="https://kico.binkic.com/style" target="_blank">Kico Style<span class="meta">极简前端框架</span></a>
            <a class="item" href="https://kico.binkic.com/player" target="_blank">Kico Player<span class="meta">极简音乐播放器</span></a>
            <a class="item" href="javascript:alert('没做好啊，来打我啊~');">Kico Tools<span class="meta">在线时钟小程序</span></a>
            <a class="item" href="https://github.com/Dreamer-Paul/Single" target="_blank">Single<span class="meta">以单身为灵感的主题</span></a>
            <a class="item" href="https://www.binkic.com" target="_blank">缤奇官网<span class="meta">采用 TC 开发的团队官网</span></a>
            <a class="item" href="https://dreamer-paul.github.io/Meeting" target="_blank">梦想主题晨会<span class="meta">以梦想为主题的班级晨会</span></a>
        </section>
        <section id="about">
            <p>我是一个热爱钻研计算机技术的青少年，从小开始对计算机有极大的兴趣。目前我专注网站开发领域。我还自己发起建立了一个制作游戏的团队，希望能和大家合作，一同创造出属于我们自己的原创作品。<a href="https://paugram.com/about.html" target="_blank">详细阅读</a></p>
        </section>
        <div class="actions">
            <div class="item home active">
                <i class="fa fa-star"></i>
                <span class="title">首页</span>
            </div>
            <div class="item article">
                <i class="fa fa-book"></i>
                <span class="title">文章</span>
            </div>
            <div class="item product">
                <i class="fa fa-trophy"></i>
                <span class="title">作品</span>
            </div>
            <div class="item about">
                <i class="fa fa-graduation-cap"></i>
                <span class="title">关于我</span>
            </div>
        </div>
    </div>
</main>
<footer>
    <p>© <?php echo date(Y)?> By <a href="https://paugram.com">Dreamer-Paul</a>.</p>
</footer>

<script src="static/paul.js"></script>

</body>
</html>