<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
    <title><?php echo $title; ?></title>
    <style>
        body{ font-size:16px;}
        .one{
            border:1px solid #eee;
            width:230px;
            height:50px;
            background:#ccc;
            color:red;
        }
        .two{
            border:1px solid #ccc;
            width:230px;
            height:50px;
            background:#9CF;
            color:blue;
        }
        button
        {
            border: 2px solid #cccccc;
            border-radius: 1rem;
            min-width: 6rem;
            min-height: 3rem;
            display: inline-block;
            background: #4CAF50;
        }
    </style>
    <script>

                var Words ="%3Chtml%3E%0A%3Chead%3E%0A%3Ctitle%3ETest%3C/title%3E%0A%3C/head%3E%0A%3Cbody%3E%0Ahello%2C%20world%0A%3C/body%3E%0A%3C/html%3E";
            function OutWord(){var NewWords;
             NewWords = decodeURI(Words);
             document.getElementById("txtContent").innerHTML=NewWords;
             }
       </script>
    <script type="text/javascript">
        document.write('html5自适应');
        function clickBt() //定义函数
        {
            var message=confirm('你是人么？');
            if(message==true)
            {
                document.write("你不是东西!");
            }
            else
            {
                document.write("你不是人！");
            }
        }
        function rec()
        {
            var score; //score变量，用来存储用户输入的成绩值。
            score = prompt("请输入你的分数:")               ;
            if(score>=90)
            {
                document.write("你很棒!");
            }
            else if(score>=75)
            {
                document.write("不错吆!");
            }
            else if(score>=60)
            {
                document.write("要加油!");
            }
            else
            {
                document.write("要努力了!");
            }
        }
        function NewOpen()
        {
            window.open('http://www.tb.com','_blank','height=500,width=400,top=100,left=0');
        }
        function openWindow()
        {
            var obj=confirm('是否需要打开新窗口');
            if(obj==true)
            {
                window.open('http://www.tb.com','_blank','height=500,width=400,top=100,left=0');
            }
            else
            {
                alert(document.getElementById('con').innerHTML);
            }
        }
        function hideText()
        {
            var myChar = document.getElementById("context");
            myChar.style.display="none";

        }
        function showText()
        {
            var myChar = document.getElementById("context");
            myChar.style.display="block";
        }
        function add(){
            var p1 = document.getElementById("p1");
            p1.className = "one";

        }
        function modify(){
            var p2 = document.getElementById("p2");
            if(p2.className=="two")
            {
                p2.className = "one";
            }
            else
            {
                p2.className = "two";
            }

        }
    </script>
</head>
<body onload="OutWord();">
<input type="button" value="物种判断" onclick="clickBt('d')"/>
<pre>
<button onclick="rec()">测试</button>
</pre>
<pre>
<button onclick="NewOpen()">open new window</button>
</pre>
<pre>
<input type="button" value="新窗口打开网站" onclick="openWindow()" />
</pre>
<p id="con">JavaScript</p>
<script type="text/javascript">
    var aChar= document.getElementById('con');
    document.write("结果:"+aChar.textContent);
    var mychar=document.getElementById("con");
    document.write("原标题:"+mychar.innerHTML+"<br>");
    mychar.innerHTML="Hello world";
    document.write("修改后的标题:"+mychar.innerHTML);
    mychar.style.color="red";
    mychar.style.fontSize="20";
    mychar.style.backgroundColor ="black";
    mychar.style.width="300px";
</script>
<p id="context" style="display: none">做为一个Web开发师来说，如果你想提供漂亮的网页、令用户满意的上网体验，JavaScript是必不可少的工具。</p>
<form>
    <input type="button" onclick="hideText()" value="隐藏内容" />
    <input type="button" onclick="showText()" value="显示内容" />
</form>
<p id="p1" > JavaScript使网页显示动态效果并实现与用户交互功能。</p>
<input type="button" value="添加样式" onclick="add()"/>
<p id="p2" class="one">JavaScript使网页显示动态效果并实现与用户交互功能。</p>
<input type="button" value="更改外观" onclick="modify()"/>


<h2 id="cn">JavaScript课程</h2>
  <div id="txt" >
      <h5>JavaScript为网页添加动态效果并实现与用户交互的功能。</h5>
      <p>1. JavaScript入门篇，让不懂JS的你，快速了解JS。</p>
      <p>2. JavaScript进阶篇，让你掌握JS的基础语法、函数、数组、事件、内置对象、BOM浏览器、DOM操作。</p>
      <p>3. 学完以上两门基础课后，在深入学习JavaScript的变量作用域、事件、对象、运动、cookie、正则表达式、ajax等课程。</p>
  </div>

    <input type="button" value="改变颜色" onclick="ds()">
    <input type="button" value="改变宽高" onclick="we()">
    <input type="button" value="隐藏内容" onclick="tr()">
    <input type="button" value="显示内容" onclick="tt()">
    <input type="button" value="取消设置" onclick="isCancel()">
     <h3>js 事件</h3>
<pre>
onabort	图像加载被中断
onblur	元素失去焦点
onchange	用户改变域的内容
onclick	鼠标点击某个对象
ondblclick	鼠标双击某个对象
onerror	当加载文档或图像时发生某个错误
onfocus	元素获得焦点
onkeydown	某个键盘的键被按下
onkeypress	某个键盘的键被按下或按住
onkeyup	某个键盘的键被松开
onload	某个页面或图像被完成加载
onmousedown	某个鼠标按键被按下
onmousemove	鼠标被移动
onmouseout	鼠标从某元素移开
onmouseover	鼠标被移到某元素之上
onmouseup	某个鼠标按键被松开
onreset	重置按钮被点击
onresize	窗口或框架被调整尺寸
onselect	文本被选定
onsubmit	提交按钮被点击
onunload	用户退出页面

</pre>
<h3>窗口事件属性</h3>
<pre>
onafterprintNew 	script	在打印文档之后运行脚本
onbeforeprintNew 	script	在文档打印之前运行脚本
onbeforeonloadNew 	script	在文档加载之前运行脚本
onblur	script	当窗口失去焦点时运行脚本
onerrorNew 	script	当错误发生时运行脚本
onfocus	script	当窗口获得焦点时运行脚本
onhaschangeNew 	script	当文档改变时运行脚本
onload	script	当文档加载时运行脚本
onmessageNew 	script	当触发消息时运行脚本
onofflineNew 	script	当文档离线时运行脚本
ononlineNew 	script	当文档上线时运行脚本
onpagehideNew 	script	当窗口隐藏时运行脚本
onpageshowNew 	script	当窗口可见时运行脚本
onpopstateNew 	script	当窗口历史记录改变时运行脚本
onredoNew 	script	当文档执行再执行操作（redo）时运行脚本
onresizeNew 	script	当调整窗口大小时运行脚本
onstorageNew 	script	当 Web Storage 区域更新时（存储空间中的数据发生变化时）运行脚本
onundoNew 	script	当文档执行撤销时运行脚本
onunloadNew 	script	当用户离开文档时运行脚本
</pre>
<h3>
    表单事件(Form Events)
</h3>
<pre>
onblur	script	当元素失去焦点时运行脚本
onchange	script	当元素改变时运行脚本
oncontextmenuNew 	script	当触发上下文菜单时运行脚本
onfocus	script	当元素获得焦点时运行脚本
onformchangeNew 	script	当表单改变时运行脚本
onforminputNew 	script	当表单获得用户输入时运行脚本
oninputNew 	script	当元素获得用户输入时运行脚本
oninvalidNew 	script	当元素无效时运行脚本
onreset	script	当表单重置时运行脚本。HTML 5 不支持。
onselect	script	当选取元素时运行脚本
onsubmit	script	当提交表单时运行脚本
</pre>
<h3>键盘事件</h3>
<pre>
onkeydown	script	当按下按键时运行脚本
onkeypress	script	当按下并松开按键时运行脚本
onkeyup	script	当松开按键时运行脚本
</pre>
<h3>鼠标事件</h3>
<pre>
onclick	script	当单击鼠标时运行脚本
ondblclick	script	当双击鼠标时运行脚本
ondragNew 	script	当拖动元素时运行脚本
ondragendNew 	script	当拖动操作结束时运行脚本
ondragenterNew 	script	当元素被拖动至有效的拖放目标时运行脚本
ondragleaveNew 	script	当元素离开有效拖放目标时运行脚本
ondragoverNew 	script	当元素被拖动至有效拖放目标上方时运行脚本
ondragstartNew 	script	当拖动操作开始时运行脚本
ondropNew 	script	当被拖动元素正在被拖放时运行脚本
onmousedown	script	当按下鼠标按钮时运行脚本
onmousemove	script	当鼠标指针移动时运行脚本
onmouseout	script	当鼠标指针移出元素时运行脚本
onmouseover	script	当鼠标指针移至元素之上时运行脚本
onmouseup	script	当松开鼠标按钮时运行脚本
onmousewheelNew 	script	当转动鼠标滚轮时运行脚本
onscrollNew 	script	当滚动元素的滚动条时运行脚本
鼠标事件顺序
(1)touchstart
(2)mouseover
(3)mousemove(一次)
(4)mousedown
(5)mouseup
(6)click
(7)touchend
</pre>
<h3>多媒体事件</h3>
<pre>
onabort	script	当发生中止事件时运行脚本
oncanplayNew 	script	当媒介能够开始播放但可能因缓冲而需要停止时运行脚本
oncanplaythroughNew 	script	当媒介能够无需因缓冲而停止即可播放至结尾时运行脚本
ondurationchangeNew 	script	当媒介长度改变时运行脚本
onemptiedNew 	script	当媒介资源元素突然为空时（网络错误、加载错误等）运行脚本
onendedNew 	script	当媒介已抵达结尾时运行脚本
onerrorNew 	script	当在元素加载期间发生错误时运行脚本
onloadeddataNew 	script	当加载媒介数据时运行脚本
onloadedmetadataNew 	script	当媒介元素的持续时间以及其他媒介数据已加载时运行脚本
onloadstartNew 	script	当浏览器开始加载媒介数据时运行脚本
onpauseNew 	script	当媒介数据暂停时运行脚本
onplayNew 	script	当媒介数据将要开始播放时运行脚本
onplayingNew 	script	当媒介数据已开始播放时运行脚本
onprogressNew 	script	当浏览器正在取媒介数据时运行脚本
onratechangeNew 	script	当媒介数据的播放速率改变时运行脚本
onreadystatechangeNew 	script	当就绪状态（ready-state）改变时运行脚本
onseekedNew 	script	当媒介元素的定位属性 [1] 不再为真且定位已结束时运行脚本
onseekingNew 	script	当媒介元素的定位属性为真且定位已开始时运行脚本
onstalledNew 	script	当取回媒介数据过程中（延迟）存在错误时运行脚本
onsuspendNew 	script	当浏览器已在取媒介数据但在取回整个媒介文件之前停止时运行脚本
ontimeupdateNew 	script	当媒介改变其播放位置时运行脚本
onvolumechangeNew 	script	当媒介改变音量亦或当音量被设置为静音时运行脚本
onwaitingNew 	script	当媒介已停止播放但打算继续播放时运行脚本
</pre>
<h3>Event.which 属性详解</h3>
<pre>
1	鼠标左键
2	鼠标中键(滚轮键)
3	鼠标右键
48 - 57	对应字符 0 - 9
65 - 90	对应字符 A - Z
97 - 122	对应字符 a - z
8	Backspace键
9	Tab键
13	Enter键
16	Shift键
17	Ctrl键
20	Alt键
20	Caps Lock键(大小写锁定)
27	Esc键
33 - 36	对应按键 PageUp、PageDown、End、Home
37 - 40	对应按键 左、上、右、下(方向键)
45 - 46	对应按键 Insert、Delete
48 - 57	对应按键 0 - 9(非小键盘)
65 - 90	对应按键 A - Z
91	Windows键
96 - 105	对应按键 0 - 9(小键盘)
106、107、109、110、111	对应按键*、+、-、.、/(小键盘)
112 - 123	对应按键 F1 - F12
</pre>
<textarea id="txtContent"  title="" name= "text"   rows="20"  style= "width: 100%;border: 1px solid wheat">

</textarea>
<button onclick="subText()">提交</button>
<pre id="preContent"></pre>
    <script type="text/javascript">
        //定义"改变颜色"的函数
        var obj=document.getElementById("txt");
        var subTxt=document.getElementById('subText');
        var con=document.getElementById('txtContent');
        var pre=document.getElementById('preContent');
        var fColor=obj.style.color;
        var bgColor=obj.style.backgroundColor;
        var wd=obj.style.width;
        var ht=obj.style.height;
        function subText()
        {
            pre.innerHTML=con.innerHTML;
        }
        function ds(){

            obj.style.color="red";
            obj.style.backgroundColor="black";
        }
        //定义"改变宽高"的函数
        function we()
        {
            obj.style.width='100%';
            obj.style.height='300px';
        }
        //定义"隐藏内容"的函数
        function tr()
        {
           obj.style.display="none";
        }
        //定义"显示内容"的函数
        function tt()
        {
            obj.style.display="block";
        }
        //定义"取消设置"的函数
        function isCancel()
        {
            var isCancel = confirm("确定取消吗？");
            if (isCancel == true)
            {
                obj.style.width=wd;
                obj.style.height=ht;
                obj.style.color=fColor;
                obj.style.backgroundColor=bgColor;
                obj.style.display="block";
            }
        }
    </script>

</body>
</html>