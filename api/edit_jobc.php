<?php 
include_once '../base.php';

$db=new DB("jobc");

     $data=[
         'id'=>1,
         'place'=>$_POST['place'],
         'job'=>$_POST['job'],
         'status'=>$_POST['status'],
         'available'=>$_POST['available'],
     ];
     $db->save($data);

     to("../admin.php?do=jobcb")


?>