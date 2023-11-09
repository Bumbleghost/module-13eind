<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    timezone_offset_getteste
    <?php 
    $a=1;
    for ($a=0;$a<10;$a++){  
        ?>

    <div class="project">
        <a href="detail.php?id=<?php echo $a; ?>"><h1>porject "<?php echo $a; ?></h1></a>
    </div>
    <?php }; ?>
<?php
echo "test";
?>
</body>
</html>