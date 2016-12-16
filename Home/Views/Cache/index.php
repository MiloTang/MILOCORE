<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
diu na
<?php echo $name['1']; ?>
<?php if ($name == 1): ?>
1
<?php elseif ($name == 2): ?>
2
<?php else: ?>
3
<?php endif; ?>
<?php foreach ($data as $item=>$value): ?>
<pre><?php echo $value; ?></pre>
<?php endforeach; ?>
<?php switch($name): ?>
<?php case 1: ?>
<?php break; ?>
<?php case 2: ?>
<?php break; ?>
<?php case 3: ?>
<?php break; ?>
<?php case 4: ?>
<?php break; ?>
<?php endswitch; ?>
<?php while (true): ?>
<?php endwhile; ?>
</body>
</html>