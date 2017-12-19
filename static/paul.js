/* ----

# Sweet
# By: Dreamer-Paul
# Last Update: 2017.12.19

一个简洁的个人首页，可以调用博客最新文章。

欢迎你加入缤奇，和我们一起改变世界。
本项目为奇趣保罗原创，并遵守 MIT 开源协议。欢迎访问我的博客：https://paugram.com

---- */

function loader() {
    var loader = document.getElementById("loader");
    setTimeout(function () {
        loader.classList.add("hidden");
    }, 2000);
}
loader();

function actions() {
    var sections = document.getElementsByClassName("content")[0].getElementsByTagName("section");
    var btns = document.getElementsByClassName("actions")[0].getElementsByClassName("item");

    function act(num) {
        for (var i = 0; i < 4; i++) {
            btns[i].classList.remove("active");
            sections[i].classList.remove("active");
        }
        btns[num].classList.add("active");
        sections[num].classList.add("active");
    }

    btns[0].addEventListener("click", function () {act(0)});
    btns[1].addEventListener("click", function () {act(1)});
    btns[2].addEventListener("click", function () {act(2)});
    btns[3].addEventListener("click", function () {act(3)});
}
actions();

if (window.console && window.console.log) {
    console.log("\n %c Sweet %c https://paugram.com \n\n","color: #fff; background: #1979ca; padding:5px 0;","background: #efefef; padding:5px 0;");
}