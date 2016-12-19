<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>demo</title>
    <link rel="stylesheet" type="text/css" href=<?php echo $cssLink1; ?>>
</head>
<body>
<?php foreach($url as $item=>$value): ?>
<div class="block"><a href="<?php echo $value; ?>"><?php echo $item; ?></a></div>
<?php endforeach; ?>
</body>
</html>