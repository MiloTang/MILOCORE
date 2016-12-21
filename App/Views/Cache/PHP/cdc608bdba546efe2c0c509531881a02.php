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
<br>
<div class="left"><?php echo $title; ?></div><div class="right"><?php echo $title; ?></div>

<div class="clear"></div>
<div class="left"><?php echo $title; ?></div><div class="right"><?php echo $title; ?></div>
<div class="clear"></div>
<div style="text-align: center"><a href=<?php echo $url['index']; ?>>返回主页</a> </div>
</body>
</html>