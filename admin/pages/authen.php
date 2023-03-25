<?php 
    session_start();
    require_once('../../../php/connect.php');

    $uri = $_SERVER['REQUEST_URI']; 
    $array = explode('/', $uri);
    $key = array_search("pages", $array);
    $name = $array[$key + 1];

    if( !isset($_SESSION['authen_id'] ) ){
      header('Location: ../../login.php');  
    } else if ( $name == 'admin' && $_SESSION['status'] == 'admin' ){
      header('Location: ../dashboard/');    
    }

    
    define("BASE_URL", DIRECTORY_SEPARATOR . "blog_final" . DIRECTORY_SEPARATOR); // LOCAL
    //define("BASE_URL", '/'); // Empty
    //define("BASE_URL", DIRECTORY_SEPARATOR . "sclass1" . DIRECTORY_SEPARATOR); // HOST
    define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . BASE_URL);



?>