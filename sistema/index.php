<?php
       /*$url = (isset($_GET['url'])) ? $_GET['url']:'home';
        $url = array_filter(explode('/',$url));
        $file = $url[0];
        if (!isset($url[1])){
            $file = $url[0].'.php';
            if(is_file($file)){
                include $file;
            }else{
                include '../404.php';
            }   
        }else{
            include '../404.php';
        }
        */
    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
    $url = array_filter(explode('/', $url));
    $file = $url[0];

    if (!isset($url[1])) {
        $file = $url[0] . '.php';
        if (is_file($file)) {
            include 'header.php';
            if($file == 'Home'){
                include 'home.php';
            }else{
                include $file.'.php';
            }
                        include 'footer.php';
        } else {

            include '../404.php';

        }
    } else {

        include '../404.php';

    }
?>