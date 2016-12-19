<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
<<<<<<< HEAD
    <title>demo</title>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
</head>
<body>
<?php foreach($url as $item=>$value): ?>
<div class="block"><a href="<?php echo $value; ?>"><?php echo $item; ?></a></div>
<?php endforeach; ?>
=======
    <title>html5自适应</title>
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
    </style>
    <script type="text/javascript">
        console.log('众里寻他千百度，蓦然回首，那人却在灯火阑珊处');
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
<body onload="myFunction()">
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
<pre>
<button onmouseover="this.style.color='red'" onmouseleave="this.style.color='black'">我会变色</button>
<button onclick="showDate()">时间</button>
</pre>
    <script type="text/javascript">
        //定义"改变颜色"的函数
        var obj=document.getElementById("txt");
        var fColor=obj.style.color;
        var bgColor=obj.style.backgroundColor;
        var wd=obj.style.width;
        var ht=obj.style.height;
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
        function myFunction(){
            alert("页面加载完成");
        }
        function showDate() {
            var date = new Date();
           alert(date);
        }
    </script>

>>>>>>> bc42d2727300e40114559cba9860ca441400aaa6
</body>
</html>