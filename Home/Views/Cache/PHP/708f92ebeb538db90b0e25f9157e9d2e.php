<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
diu na
<pre></pre>
<?php echo $data['1']; ?>
<pre></pre>
<?php if($name==1): ?>
1
<?php elseif($name == 2): ?>
2
<?php else: ?>
3
<?php endif; ?>
<?php foreach ($data as $item=>$value): ?>
<pre><?php echo $value; ?></pre>
<?php endforeach; ?>
<?php switch($name): ?>
<?php case 1: ?>
<hr>
diu1
<?php break; ?>
<?php case 2: ?>
<hr>
diu2
<?php break; ?>
<?php case 3: ?>
<hr>
diu3
<?php break; ?>
<?php case 4: ?>
<hr>
diu4
<?php break; ?>
<?php endswitch; ?>
<?php while ($name==1): ?>
<?php echo $name--; ?>
<?php endwhile; ?>
</body>
</html>