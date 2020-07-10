<?php 
include_once '../base.php';


$db=new DB("me");

 $data=[
    'id'=>1,
    'title'=>1,
    'text'=>$_POST['text'],
    'name'=>$_POST['name'],
    'mail'=>$_POST['mail'],
    'phone'=>$_POST['phone'],
    'interest'=>$_POST['interest'],
];
 
$db->save($data);

to("../admin.php?do=MEb");


?>