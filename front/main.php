<?php
    $db=new DB('me');
    $row=$db->find(1);


    if(!empty($_GET['do']) && $_GET['do']=="login" ){

      $do=(!empty($_GET['do']))?$_GET['do']:'main';
      $file='front/'.$do.".php";
      if(file_exists($file)){
        include_once $file;
      }else{
        include_once 'front/main.php';
        // include 'backend/ME.php';
      }

    }else{
      include 'front/MEf.php';
}
?>



