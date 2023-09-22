<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $url = (isset($_GET['url'])) ? $_GET['url']:'login.php';
        $url = array_filter(explode('/',$url));
           
        $file = $url[0];
        
        if ($file == 'sistema'){
            $file = 'sistema/index.php';
        }else{
            if(is_file($file)){
                include $file;
            }else{
                include '404.php';
            }      
        }      
    ?>
</body>
</html>