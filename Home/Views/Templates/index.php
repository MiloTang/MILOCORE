<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
<a href="<?php echo $url; ?>">chou</a>
<?php foreach($arr as $key=>$value)
    {
           echo '<li>'.$value.'</li>';
    }
?>
<?php echo 'yes'; ?>
<?php
$a_array=array("a","b","c");
foreach($a_array as $key=>$value):
    ?>
    <pre><?php echo $key;?></pre>
    <pre><?php echo $value;?></pre>
    <?php
endforeach;
?>
<hr>
<button id="btn">Ajax get</button>
<hr>
<pre>
    <button id="btn1">Ajax post</button>
</pre>
<pre>
    <button id="btn2">Ajax</button>
</pre>
<div id='box'></div>
<hr>
<input type="text"  onchange="update()" value="test">
</body>
<script type="text/javascript">
    function update() {
        $.get("<?php echo $url1; ?>",{'username':"milo get"},function (data) {
            $("#box").html(data);
        });
    }
    $("#btn").click(function () {
        $.get("<?php echo $url1; ?>",{'username':"milo get"},function (data) {
            $("#box").html(data);
        });
    });
</script>
<script type="text/javascript">
    $("#btn1").click(function () {
        $.post("<?php echo $url1; ?>",{'username':"milo gege post"},function (data) {
            $("#box").html(data);
        });
    });
</script>
<script type="text/javascript">
    $("#btn2").click(function () {
        $.ajax({
            'url':"<?php echo $url2; ?>",
            'data':{'username':"milo gege ajax"},
            'success':function (data) {
                $("#box").html(data);
            },
            'dataType':'html',
            'type':'post'

        });
    });
</script>
</html>