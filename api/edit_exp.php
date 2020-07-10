<?php 
include_once '../base.php';

// $db=new DB("exp");

// foreach($_POS['id'] as $key=>$value){
//     $data=[
//         'id'=>$_POST['id'],
//         'title'=>$_POST['title'],
//         'posi'=>$_POST['posi'],
//         'job'=>$_POST['job'],
//     ];
//     $db->save($data);


// }

// -------------------
$table=$_POST['table'];
$db=new DB($table);

 foreach($_POST['id'] as $key=>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
     }else{
        $row=$db->find($id);

         switch($table){
            case "expb":
                $row['title']=$_POST['title'][$key];
                $row['posi']=$_POST['posi'][$key];
                $row['job']=$_POST['job'][$key];
            break;
      
         }

         $db->save($row);
     }
 }


     to("../admin.php?do=expb")


?>