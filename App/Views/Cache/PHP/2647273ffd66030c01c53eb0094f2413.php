<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
    <style>
        div.card {
            margin: 1rem;
            float: left;
            width: 20%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        div.header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 8rem;
        }

        div.container {
            padding: 10px;
            border: 1px solid rosybrown;
        }
        [cyl]
        {
            border: 10rem solid #fdd;
            height:10rem;
            background-color: #333366;
            text-align: center;
            width:10rem;
            border-radius: 50%;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 1rem;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */
        .button5 {background-color: #555555;} /* Black */
        .button2:hover {
            background-color: #cccccc;
            color: black;
        }
        .button3:hover {
            background-color: #cccccc;
            color: black;
        }
        .button4:hover {
            background-color: #cccccc;
            color: black;}
        .button5:hover {
            background-color: #cccccc;
            color: black;
        }
    </style>
</head>
<body>
<div style="text-align: center;"><?php echo $title; ?>例子</div>
<hr>
<a name="top"></a>
<h3>CSS3 边框</h3>
<pre>
    border-image 	设置所有边框图像的速记属性。
    border-radius 	一个用于设置所有四个边框- *-半径属性的速记属性
    box-shadow 	附加一个或多个下拉框的阴影
</pre>
<h3>CSS3 背景</h3>
<pre>
    background-clip 	规定背景的绘制区域。
    background-origin 	规定背景图片的定位区域。
    background-size 	规定背景图片的尺寸。
</pre>
<h3>
    CSS3 文本效果
</h3>
<pre>
    hanging-punctuation 	规定标点字符是否位于线框之外。
    punctuation-trim 	规定是否对标点字符进行修剪。
    text-align-last 	设置如何对齐最后一行或紧挨着强制换行符之前的行。
    text-emphasis 	向元素的文本应用重点标记以及重点标记的前景色。
    text-justify 	规定当 text-align 设置为 "justify" 时所使用的对齐方法。
    text-outline 	规定文本的轮廓。
    text-overflow 	规定当文本溢出包含元素时发生的事情。
    text-shadow 	向文本添加阴影。
    text-wrap 	规定文本的换行规则。
    word-break 	规定非中日韩文本的换行规则。
    word-wrap 	允许对长的不可分割的单词进行分割并换行到下一行。
</pre>
<h3>CSS3 2D 转换</h3>
<pre>
    matrix(n,n,n,n,n,n) 	定义 2D 转换，使用六个值的矩阵。
    translate(x,y) 	定义 2D 转换，沿着 X 和 Y 轴移动元素。
    translateX(n) 	定义 2D 转换，沿着 X 轴移动元素。
    translateY(n) 	定义 2D 转换，沿着 Y 轴移动元素。
    scale(x,y) 	定义 2D 缩放转换，改变元素的宽度和高度。
    scaleX(n) 	定义 2D 缩放转换，改变元素的宽度。
    scaleY(n) 	定义 2D 缩放转换，改变元素的高度。
    rotate(angle) 	定义 2D 旋转，在参数中规定角度。
    skew(x-angle,y-angle) 	定义 2D 倾斜转换，沿着 X 和 Y 轴。
    skewX(angle) 	定义 2D 倾斜转换，沿着 X 轴。
    skewY(angle) 	定义 2D 倾斜转换，沿着 Y 轴。
</pre>
<h3>CSS3 3D 转换</h3>
<pre>
    matrix3d(n,n,n,n,n,n,
    n,n,n,n,n,n,n,n,n,n) 	定义 3D 转换，使用 16 个值的 4x4 矩阵。
    translate3d(x,y,z) 	定义 3D 转化。
    translateX(x) 	定义 3D 转化，仅使用用于 X 轴的值。
    translateY(y) 	定义 3D 转化，仅使用用于 Y 轴的值。
    translateZ(z) 	定义 3D 转化，仅使用用于 Z 轴的值。
    scale3d(x,y,z) 	定义 3D 缩放转换。
    scaleX(x) 	定义 3D 缩放转换，通过给定一个 X 轴的值。
    scaleY(y) 	定义 3D 缩放转换，通过给定一个 Y 轴的值。
    scaleZ(z) 	定义 3D 缩放转换，通过给定一个 Z 轴的值。
    rotate3d(x,y,z,angle) 	定义 3D 旋转。
    rotateX(angle) 	定义沿 X 轴的 3D 旋转。
    rotateY(angle) 	定义沿 Y 轴的 3D 旋转。
    rotateZ(angle) 	定义沿 Z 轴的 3D 旋转。
    perspective(n) 	定义 3D 转换元素的透视视图。
</pre>
<h3>CSS3 过渡</h3>
<pre>
    transition	简写属性，用于在一个属性中设置四个过渡属性。
    transition-property	规定应用过渡的 CSS 属性的名称。
    transition-duration	定义过渡效果花费的时间。默认是 0。
    transition-timing-function	规定过渡效果的时间曲线。默认是 "ease"。
    transition-delay	规定过渡效果何时开始。默认是 0。
</pre>
<h3>CSS3 动画</h3>
<pre>
    @keyframes	规定动画。
    animation	所有动画属性的简写属性，除了 animation-play-state 属性。
    animation-name	规定 @keyframes 动画的名称。
    animation-duration	规定动画完成一个周期所花费的秒或毫秒。默认是 0。
    animation-timing-function	规定动画的速度曲线。默认是 "ease"。
    animation-delay	规定动画何时开始。默认是 0。
    animation-iteration-count	规定动画被播放的次数。默认是 1。
    animation-direction	规定动画是否在下一周期逆向地播放。默认是 "normal"。
    animation-play-state	规定动画是否正在运行或暂停。默认是 "running"。
</pre>
<div style="margin-top: 5rem">
<div class="card">
    <div class="header">
        html
    </div>
    <div class="container">
        html description
    </div>
</div>
<div class="card">
    <div class="header">
        html
    </div>
    <div class="container">
        html description
    </div>
</div>
<div class="card">
    <div class="header">
        html
    </div>
    <div class="container">
        html description
    </div>
</div>
<div class="card">
    <div class="header">
        html
    </div>
    <div class="container">
        html description
    </div>
</div>
</div>
<div class="clear"></div>
<div cyl=""></div>
<div class="button button2">1234</div>
<div class="button button3">1234</div>
<div class="button button4">1234</div>
<div class="button button5">1234</div>
基础知识;进阶;在线工具;图书导航(包括简介);IT网站导航(包括简介);新技术的简介;代码实例;购物导航(商品简介);

注意：required 属性适用于下面的 input 类型：text、search、url、tel、email、password、date pickers、number、checkbox、radio 和 file。
<div id="new" style="color: red">

</div>
<div class="msg">刮开灰色部分看看，<a href="javascript:void(0)" onClick="window.location.reload()">再来一次</a></div>
<div class="demo">
    <canvas></canvas>
</div>
<div style="text-align: center;margin-bottom: 5rem"><a  href=<?php echo $url['index']; ?>>返回主页</a></div>


<a name="bottom"></a>
<div id="nav">
    <a  style="margin-left: 10%" href="index.html">首页</a>
    <a href="css.html">基础</a>
    <a href="css.html">在线工具</a>
    <a href="css.html">进阶</a>
    <a href="index.html">购物</a>
    <a href="index.html">求职</a>
    <a href="index.html">招聘</a>
    <a href="#top">top</a>
    <a href="#bottom">bottom</a>
</div>
<script>
    var bodyStyle = document.body.style;
    bodyStyle.mozUserSelect = 'none';
    bodyStyle.webkitUserSelect = 'none';
    var img = new Image();
    var canvas = document.querySelector('canvas');
    canvas.style.backgroundColor='transparent';
    canvas.style.position = 'absolute';
    img.src = 'http://localhost/index/verifyCode';
    img.addEventListener('load', function(e) {
        var ctx;
        var w = img.width,
                h = img.height;
        var offsetX = canvas.offsetLeft,
                offsetY = canvas.offsetTop;
        var mousedown = false;

        function layer(ctx) {
            ctx.fillStyle = 'gray';
            ctx.fillRect(0, 0, w, h);
        }

        function eventDown(e){
            e.preventDefault();
            mousedown=true;
        }

        function eventUp(e){
            e.preventDefault();
            mousedown=false;
        }

        function eventMove(e){
            e.preventDefault();
            if(mousedown) {
                if(e.changedTouches){
                    e=e.changedTouches[e.changedTouches.length-1];
                }
                var x = (e.clientX + document.body.scrollLeft || e.pageX) - offsetX || 0,
                        y = (e.clientY + document.body.scrollTop || e.pageY) - offsetY || 0;
                with(ctx) {
                    beginPath()
                    arc(x, y, 10, 0, Math.PI * 2);
                    fill();
                }
            }
        }

        canvas.width=w;
        canvas.height=h;
        canvas.style.backgroundImage='url('+img.src+')';
        ctx=canvas.getContext('2d');
        ctx.fillStyle='transparent';
        ctx.fillRect(0, 0, w, h);
        layer(ctx);
        ctx.globalCompositeOperation = 'destination-out';
        canvas.addEventListener('touchstart', eventDown);
        canvas.addEventListener('touchend', eventUp);
        canvas.addEventListener('touchmove', eventMove);
        canvas.addEventListener('mousedown', eventDown);
        canvas.addEventListener('mouseup', eventUp);
        canvas.addEventListener('mousemove', eventMove);
    });
</script>
<script type="text/javascript">
    if(typeof(EventSource)!=="undefined")
    {
        var source=new EventSource("http://localhost/index/newMassage");
        source.onmessage=function(event)
        {
            document.getElementById("new").innerHTML=event.data + "<br>";
        };
    }
    else
    {
        document.getElementById("new").innerHTML='浏览器不支持';
    }

</script>
</body>
</html>