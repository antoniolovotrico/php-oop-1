<?php 
$para = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod recusandae id ipsam, eaque consequuntur facere fuga, adipisci excepturi eveniet sed enim suscipit eligendi, debitis reiciendis iusto velit illum. Deserunt, quia.";
$badword = $_POST['censura'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>
        <p><?php echo str_replace($badword, '***', $para) . strlen($para); ?></p>

        <form action="" method="post">
            <input type="text" name="censura">
            <input type="submit" value="clicca">

        </form>

        
    </body>
</html>
