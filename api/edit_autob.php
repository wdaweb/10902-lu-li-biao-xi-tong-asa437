<?php 
include_once '../base.php';

$db=new DB("autob");

 $data=[
    'id'=>1,
    'title'=>1,
    'text'=>$_POST['text'],
];
 
$db->save($data);

to("../admin.php?do=autob");


?>