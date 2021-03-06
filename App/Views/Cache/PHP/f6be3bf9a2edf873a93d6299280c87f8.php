<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
</head>
<body>
<div style="text-align: center;"><?php echo $title; ?>例子</div>
<hr>
<a name="top"></a>
<h3>id 和 class 选择器以及指定特定的HTML元素使用class。</h3>
<pre>
    #para1{text-align:center;color:red;}
    .center {text-align:center;}
    p.center {text-align:center;}
</pre>
<h3>CSS 创建</h3>
<pre>
    外部样式表
    内部样式表
    内联样式
    一般而言，所有的样式会根据下面的规则层叠于一个新的虚拟样式表中，
    其中数字 4 拥有最高的优先权。
   1 浏览器缺省设置
   2 外部样式表
   3 内部样式表（位于 head 标签内部）
   4 内联样式（在 HTML 元素内部）
</pre>
<h3>CSS 属性定义背景效果</h3>
<pre>
    background 	简写属性，作用是将背景属性设置在一个声明中。
    background-attachment 	背景图像是否固定或者随着页面的其余部分滚动。
    background-color 	设置元素的背景颜色。
    background-image 	把图像设置为背景。
    background-position 	设置背景图像的起始位置。
    background-repeat 	设置背景图像是否及如何重复。
</pre>
<h3>CSS 文本格式</h3>
<pre>
    color 	设置文本颜色
    direction 	设置文本方向。
    letter-spacing 	设置字符间距
    line-height 	设置行高
    text-align 	对齐元素中的文本
    text-decoration 	向文本添加修饰
    text-indent 	缩进元素中文本的首行
    text-shadow 	设置文本阴影
    text-transform 	控制元素中的字母
    unicode-bidi 	设置或返回文本是否被重写
    vertical-align 	设置元素的垂直对齐
    white-space 	设置元素中空白的处理方式
    word-spacing 	设置字间距
</pre>
<h3>CSS 字体</h3>
<pre>
    font 	在一个声明中设置所有的字体属性
    font-family 	指定文本的字体系列
    font-size 	指定文本的字体大小
    font-style 	指定文本的字体样式
    font-variant 	以小型大写字体或者正常字体显示文本。
    font-weight 	指定字体的粗细。
</pre>
<h3>CSS 链接</h3>
<pre>
    a:link - 正常，未访问过的链接
    a:visited - 用户已访问过的链接
    a:hover - 当用户鼠标放在链接上时
    a:active - 链接被点击的那一刻
</pre>
<h3>CSS 列表</h3>
<pre>
    list-style 	简写属性。用于把所有用于列表的属性设置于一个声明中
    list-style-image 	将图象设置为列表项标志。
    list-style-position 	设置列表中列表项标志的位置。
    list-style-type 	设置列表项标志的类型。
</pre>
<h3>CSS 盒子模型</h3>
<pre>
    不同部分的说明：
    Margin(外边距) - 清除边框外的区域，外边距是透明的。
    Border(边框) - 围绕在内边距和内容外的边框。
    Padding(内边距) - 清除内容周围的区域，内边距是透明的。
    Content(内容) - 盒子的内容，显示文本和图像。
</pre>
<h3>CSS 边框</h3>
<pre>
    border 	简写属性，用于把针对四个边的属性设置在一个声明。
    border-style 	用于设置元素所有边框的样式，或者单独地为各边设置边框样式。
    border-width 	简写属性，用于为元素的所有边框设置宽度，
                    或者单独地为各边边框设置宽度。
    border-color 	简写属性，设置元素的所有边框中可见部分的颜色，
                    或为 4 个边分别设置颜色。
    border-bottom 	简写属性，用于把下边框的所有属性设置到一个声明中。
    border-bottom-color 	设置元素的下边框的颜色。
    border-bottom-style 	设置元素的下边框的样式。
    border-bottom-width 	设置元素的下边框的宽度。
    border-left 	简写属性，用于把左边框的所有属性设置到一个声明中。
    border-left-color 	设置元素的左边框的颜色。
    border-left-style 	设置元素的左边框的样式。
    border-left-width 	设置元素的左边框的宽度。
    border-right 	简写属性，用于把右边框的所有属性设置到一个声明中。
    border-right-color 	设置元素的右边框的颜色。
    border-right-style 	设置元素的右边框的样式。
    border-right-width 	设置元素的右边框的宽度。
    border-top 	简写属性，用于把上边框的所有属性设置到一个声明中。
    border-top-color 	设置元素的上边框的颜色。
    border-top-style 	设置元素的上边框的样式。
    border-top-width 	设置元素的上边框的宽度。
</pre>
<h3>CSS 分组 和 嵌套 选择器</h3>
<pre>
     h1,h2,p
    {
    color:green;
    }
    p
    {
    color:blue;
    text-align:center;
    }
    .marked
    {
    background-color:red;
    }
    .marked p
    {
    color:white;
    }
</pre>
<h3>CSS 尺寸 (Dimension)</h3>
<pre>
    height 	设置元素的高度。
    line-height 	设置行高。
    max-height 	设置元素的最大高度。
    max-width 	设置元素的最大宽度。
    min-height 	设置元素的最小高度。
    min-width 	设置元素的最小宽度。
    width 	设置元素的宽度。
</pre>
<h3>CSS Display(显示) 与 Visibility（可见性）</h3>
<pre>
    隐藏一个元素可以通过把display属性设置为"none"，或把visibility
    属性设置为"hidden"。但是请注意，这两种方法会产生不同的结果。
    visibility:hidden可以隐藏某个元素，但隐藏的元素仍需占用与未
    隐藏之前一样的空间。也就是说，该元素虽然被隐藏了，但仍然会影响布局。
    h1.hidden {visibility:hidden;}
    display:none可以隐藏某个元素，且隐藏的元素不会占用任何空间。
    也就是说，该元素不但被隐藏了，而且该元素原本占用的空间也
    会从页面布局中消失。
    h1.hidden {display:none;}
</pre>
<h3>CSS Positioning(定位)</h3>
<pre>
    Fixed 定位
    元素的位置相对于浏览器窗口是固定位置。
    即使窗口是滚动的它也不会移动：
    p.pos_fixed
    {
    position:fixed;
    top:30px;
    right:5px;
    }

    Relative 定位
    相对定位元素的定位是相对其正常位置。
    h2.pos_left
    {
    position:relative;
    left:-20px;
    }
    h2.pos_right
    {
    position:relative;
    left:20px;
    }

    Absolute 定位
    绝对定位的元素的位置相对于最近的已定位父元素，如果元素没有已定位的父元素，
    那么它的位置相对于html:
    h2
    {
    position:absolute;
    left:100px;
    top:150px;
    }
</pre>
<h3>CSS Float(浮动)</h3>
<pre>
    元素怎样浮动
    元素的水平方向浮动，意味着元素只能左右移动而不能上下移动。
    一个浮动元素会尽量向左或向右移动，直到它的外边缘碰到包含框或另一个浮动框的边框为止。
    浮动元素之后的元素将围绕它。
    浮动元素之前的元素将不会受到影响。
    清除浮动 - 使用 clear
    元素浮动之后，周围的元素会重新排列，为了避免这种情况，使用 clear 属性。
    clear 属性指定元素两侧不能出现浮动元素。
</pre>
<h3>CSS 水平对齐(Horizontal Align)</h3>
<pre>
    块元素是一个元素，占用了全宽，前后都是换行符。
    块元素的例子：h1 p div
</pre>
<h3>CSS 组合选择符</h3>
<pre>
    CSS组合选择符包括各种简单选择符的组合方式。
    在 CSS3 中包含了四种组合方式:
    后代选取器(以空格分隔)
    子元素选择器(以大于号分隔）
    相邻兄弟选择器（以加号分隔）
    普通兄弟选择器（以破折号分隔）

</pre>
<h3>CSS 伪类(Pseudo-classes)</h3>
<pre>
    伪类的语法：
    selector:pseudo-class {property:value;}
    CSS类也可以使用伪类：
    selector.class:pseudo-class {property:value;}

    :checked 	input:checked 	选择所有选中的表单元素
    :disabled 	input:disabled 	选择所有禁用的表单元素
    :empty 	p:empty 	选择所有没有子元素的p元素
    :enabled 	input:enabled 	选择所有启用的表单元素
    :first-of-type 	p:first-of-type 	选择每个父元素是
                                p元素的第一个p子元素
    :in-range 	input:in-range 	选择元素指定范围内的值
    :invalid 	input:invalid 	选择所有无效的元素
    :last-child 	p:last-child 	选择所有p元素的最后一个子元素
    :last-of-type 	p:last-of-type 	选择每个p元素是其母元素的最后一个p元素
    :not(selector) 	:not(p) 	选择所有p以外的元素
    :nth-child(n) 	p:nth-child(2) 	选择所有p元素的第二个子元素
    :nth-last-child(n) 	p:nth-last-child(2) 	选择所有p元素倒数的第二个子元素
    :nth-last-of-type(n) 	p:nth-last-of-type(2) 	选择所有p元素倒数的第二个为p的子元素
    :nth-of-type(n) 	p:nth-of-type(2) 	选择所有p元素第二个为p的子元素
    :only-of-type 	p:only-of-type 	选择所有仅有一个子元素为p的元素
    :only-child 	p:only-child 	选择所有仅有一个子元素的p元素
    :optional 	input:optional 	选择没有"required"的元素属性
    :out-of-range 	input:out-of-range 	选择指定范围以外的值的元素属性
    :read-only 	input:read-only 	选择只读属性的元素属性
    :read-write 	input:read-write 	选择没有只读属性的元素属性
    :required 	input:required 	选择有"required"属性指定的元素属性
    :root 	root 	选择文档的根元素
    :target 	#news:target 	选择当前活动#news元素(点击URL包含锚的名字)
    :valid 	input:valid 	选择所有有效值的属性
    :link 	a:link 	选择所有未访问链接
    :visited 	a:visited 	选择所有访问过的链接
    :active 	a:active 	选择正在活动链接
    :hover 	a:hover 	把鼠标放在链接上的状态
    :focus 	input:focus 	选择元素输入后具有焦点
    :first-letter 	p:first-letter 	选择每个p 元素的第一个字母
    :first-line 	p:first-line 	选择每个p 元素的第一行
    :first-child 	p:first-child 	选择器匹配属于任意元素的第一个子元素的 <]p> 元素
    :before 	p:before 	在每个p元素之前插入内容
    :after 	p:after 	在每个p元素之后插入内容
    :lang(language) 	p:lang(it) 	为p元素的lang属性选择一个开始值
</pre>

<h3>CSS 属性 选择器</h3>
<pre>
[title]
{
    color:blue;
}
</pre>

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

</body>
</html>