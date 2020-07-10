<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
$data=[];

if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);
    $data['img']=$filename;
}

switch($table){
    case "skill":
        $data['text']=$_POST['text'];
        $data['sh']=1;
    break;
    case "galb":
        $data["text"]=$_POST['text'];
        $data['sh']=$_POST['sh'];
    break;
    case "expb":
        $data["title"]=$_POST['title'];
        $data['posi']=$_POST['posi'];
        $data['job']=$_POST['job'];
    break;
    default:
        $data['text']=$_POST['text'];
        $data['sh']=1;
    break;
}



$db->save($data);

to("../admin.php?do=$table");

?>