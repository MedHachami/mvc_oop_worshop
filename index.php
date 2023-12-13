<?php
function
dd($var){
    echo '<pre>';
    echo '<code>';
    print_r($var);
    echo '</code>';
    echo '</pre>';
    die();
}


if(!isset($_GET['page'])){
    $_GET['page'] = 'home';
}

$page = $_GET['page'];

$all_pages = scandir('controllers');



if(in_array($page . '_controller.php' , $all_pages)){

    include_once 'controllers/' . $page . '_controller.php' ;
}
else{
    header("location:notfound.html");
}



