<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>刮刮卡效果</title>
<link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
<style type="text/css">
.demo{width:100%; margin: 0 0 0 43%;}
.msg{text-align:center; height:32px; line-height:32px; font-weight:bold; margin-top:50px}
</style>
    <script type="text/javascript" src="http://www.tb.com/App/Common/Static/JS/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="http://www.tb.com/App/Common/Static/JS/jQueryRotate.2.2.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#startbtn").rotate({
                bind:{
                    click:function(){
                        var a = Math.floor(Math.random() * 360);
                        $(this).rotate({
                            duration:12000,
                            angle: 0,
                            animateTo:3600+a,
                            callback: function(){

                                    alert(a);
                                

                            }
                        });
                    }
                }
            });
        });
    </script>
</head>

<body>


   <div class="msg"><a href="javascript:void(0)" onClick="window.location.reload()">再来一次</a></div>
   <div class="demo">
   		<canvas onmousedown="showXY(event)"></canvas>
   </div>
    <div id="clientXY"></div>
   <div class="demo">
       <div id="disk" style="width:20rem;height: 20rem; background-color: #333366; border-radius: 50%;margin-top: 20rem;text-align: center;line-height: 20rem">
       <div id="startbtn">---></div>
       </div>
   </div>
<script type="text/javascript">
    var XY=document.getElementById('clientXY');
    function showXY(event)
    {
        x=event.clientX;
        y=event.clientY;
        XY.innerHTML=("X 坐标: " + x + ", Y 坐标: " + y);
    }
var bodyStyle = document.body.style;
bodyStyle.mozUserSelect = 'none';
bodyStyle.webkitUserSelect = 'none';
var img = new Image();
var canvas = document.querySelector('canvas');
canvas.style.backgroundColor='transparent';
canvas.style.position = 'absolute';
img.src = 'http://localhost/index/randomCode';

img.addEventListener('load', function(e) {
	var ctx;
    var w = img.width,
    	h = img.height;
    var offsetX = canvas.offsetLeft,
    	offsetY = canvas.offsetTop;
    var mouseDown = false;
    function layer(ctx) {
        ctx.fillStyle = 'gray';
        ctx.fillRect(0, 0, w, h);
    }

    function eventDown(e){
        e.preventDefault();
        mouseDown=true;
    }

    function eventUp(e){
        e.preventDefault();
        mouseDown=false;
    }

    function eventMove(e){
        e.preventDefault();
        if(mouseDown) {
             if(e.changedTouches){
                 e=e.changedTouches[e.changedTouches.length-1];
             }
             var x = (e.clientX + document.body.scrollLeft || e.pageX) - offsetX || 0,
                 y = (e.clientY + document.body.scrollTop || e.pageY) - offsetY || 0;
            with(ctx)
             {
                 beginPath()
                 arc(x, y, 12, 30, Math.PI * 2);
                 fill();
             }
        }
    }

    canvas.width=w;
    canvas.height=h;
    canvas.style.backgroundImage='url('+img.src+')';
    ctx=canvas.getContext('2d');
    layer(ctx);
    ctx.font="30px Arial";
    ctx.strokeText("开心刮刮乐",30,h/2);
    ctx.globalCompositeOperation = 'destination-out';

    canvas.addEventListener('touchstart', eventDown);
    canvas.addEventListener('touchend', eventUp);
    canvas.addEventListener('touchmove', eventMove);
    canvas.addEventListener('mousedown', eventDown);
    canvas.addEventListener('mouseup', eventUp);
    canvas.addEventListener('mousemove', eventMove);
});
</script>
<div style="text-align: center;margin-top: 20rem;font-size: 5rem">
<math>
    <mrow>
        <msub>
            <mi>x</mi>
            <mtext>12</mtext>
        </msub>
        <mo>=</mo>
        <mfrac linethickness="1">
            <mrow>
                <mo>-</mo>
                <mi>b</mi>
                <mo>&plusmn;</mo>
                <msqrt linethickness="1">
                    <msup>
                        <mi>b</mi>
                        <mn>2</mn>
                    </msup>
                    <mo>-</mo>
                    <mn>4</mn>
                    <mi selected="true">a</mi>
                    <mi>c</mi>
                </msqrt>
            </mrow>
            <mrow>
                <mn>2</mn>
                <mi>a</mi>
            </mrow>
        </mfrac>
    </mrow>
</math>
</div>
<h3>Canvas API</h3>
<pre>
颜色、样式和阴影
属性 	描述
fillStyle 	设置或返回用于填充绘画的颜色、渐变或模式
strokeStyle 	设置或返回用于笔触的颜色、渐变或模式
shadowColor 	设置或返回用于阴影的颜色
shadowBlur 	设置或返回用于阴影的模糊级别
shadowOffsetX 	设置或返回阴影距形状的水平距离
shadowOffsetY 	设置或返回阴影距形状的垂直距离
方法 	描述
createLinearGradient() 	创建线性渐变（用在画布内容上）
createPattern() 	在指定的方向上重复指定的元素
createRadialGradient() 	创建放射状/环形的渐变（用在画布内容上）
addColorStop() 	规定渐变对象中的颜色和停止位置
线条样式
属性 	描述
lineCap 	设置或返回线条的结束端点样式
lineJoin 	设置或返回两条线相交时，所创建的拐角类型
lineWidth 	设置或返回当前的线条宽度
miterLimit 	设置或返回最大斜接长度
矩形
方法 	描述
rect() 	创建矩形
fillRect() 	绘制“被填充”的矩形
strokeRect() 	绘制矩形（无填充）
clearRect() 	在给定的矩形内清除指定的像素
路径
方法 	描述
fill() 	填充当前绘图（路径）
stroke() 	绘制已定义的路径
beginPath() 	起始一条路径，或重置当前路径
moveTo() 	把路径移动到画布中的指定点，不创建线条
closePath() 	创建从当前点回到起始点的路径
lineTo() 	添加一个新点，然后在画布中创建从该点到最后指定点的线条
clip() 	从原始画布剪切任意形状和尺寸的区域
quadraticCurveTo() 	创建二次贝塞尔曲线
bezierCurveTo() 	创建三次方贝塞尔曲线
arc() 	创建弧/曲线（用于创建圆形或部分圆）
arcTo() 	创建两切线之间的弧/曲线
isPointInPath() 	如果指定的点位于当前路径中，则返回 true，否则返回 false
转换
方法 	描述
scale() 	缩放当前绘图至更大或更小
rotate() 	旋转当前绘图
translate() 	重新映射画布上的 (0,0) 位置
transform() 	替换绘图的当前转换矩阵
setTransform() 	将当前转换重置为单位矩阵。然后运行 transform()
文本
属性 	描述
font 	设置或返回文本内容的当前字体属性
textAlign 	设置或返回文本内容的当前对齐方式
textBaseline 	设置或返回在绘制文本时使用的当前文本基线
方法 	描述
fillText() 	在画布上绘制“被填充的”文本
strokeText() 	在画布上绘制文本（无填充）
measureText() 	返回包含指定文本宽度的对象
图像绘制
方法 	描述
drawImage() 	向画布上绘制图像、画布或视频
像素操作
属性 	描述
width 	返回 ImageData 对象的宽度
height 	返回 ImageData 对象的高度
data 	返回一个对象，其包含指定的 ImageData 对象的图像数据
方法 	描述
createImageData() 	创建新的、空白的 ImageData 对象
getImageData() 	返回 ImageData 对象，该对象为画布上指定的矩形复制像素数据
putImageData() 	把图像数据（从指定的 ImageData 对象）放回画布上
合成
属性 	描述
globalAlpha 	设置或返回绘图的当前 alpha 或透明值
globalCompositeOperation 	设置或返回新图像如何绘制到已有的图像上
其他
方法 	描述
save() 	保存当前环境的状态
restore() 	返回之前保存过的路径状态和属性
createEvent()
getContext()
toDataURL()
</pre>
</body>
</html>