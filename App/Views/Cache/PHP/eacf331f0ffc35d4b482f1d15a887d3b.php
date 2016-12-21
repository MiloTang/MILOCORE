<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>demo</title>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
</head>
<body>
<div id="text-center">一些例子</div>
<hr>
<?php foreach($url as $item=>$value): ?>
<div class="block"><a href="<?php echo $value; ?>"><?php echo $item; ?></a></div>
<?php endforeach; ?>
<div class="clear"></div>
<br>
<div style="text-align: center"><span style="border: 2rem solid gray;border-left:2rem solid green;border-top:2rem solid gold;
border-bottom:2rem solid yellow;border-radius:50% ">宝马</span></div>
<div style="margin: 3rem auto;border: 1rem solid wheat;padding: 2rem;background: red;color: white">d</div>
<div style="text-align:center;left:0; bottom:0;">我要固定浮动在底部</div>
</body>
</html>