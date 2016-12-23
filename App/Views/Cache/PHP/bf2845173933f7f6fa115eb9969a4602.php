<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>演示：使用HTML5实现刮刮卡效果</title>
<link rel="stylesheet" type="text/css" href="../css/main.css" />
<style type="text/css">
.demo{width:320px; margin:10px auto 20px auto; min-height:300px;}
.msg{text-align:center; height:32px; line-height:32px; font-weight:bold; margin-top:50px}
</style>
</head>

<body>



   
   <div class="msg">刮开灰色部分看看，<a href="javascript:void(0)" onClick="window.location.reload()">再来一次</a></div>
   <div class="demo">
   		<canvas></canvas>
   </div>


<script type="text/javascript">
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
</body>
</html>