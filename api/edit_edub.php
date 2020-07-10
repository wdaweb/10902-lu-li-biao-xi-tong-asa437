<?php 
include_once '../base.php';

$table=$_POST['table'];
$db=new DB($table);

 foreach($_POST['id'] as $key=>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
  
     }else{
        $row=$db->find($id);
    
        $row['sch']=$_POST['sch'][$key];
        $row['major']=$_POST['major'][$key];
        $row['content1']=$_POST['content1'][$key];
        $row['content2']=$_POST['content2'][$key];
        $row['content3']=$_POST['content3'][$key];

         $db->save($row);
     }
 }

     to("../admin.php?do=edub")


?>