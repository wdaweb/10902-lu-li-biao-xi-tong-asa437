<div class="text-center font-weight-bold h3 mt-5">技能/Skill</div><br>

<?php
  $table='skill';
      $db=new DB($table);
      $rows=$db->all();
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
?>

<div class="w-100 mx-4">
  <div class="font-weight-bold h5">Frontend 前端技術</div>
  <div class="card-group  container-fluid">
    <img src="img/<?=$rows[0]['img'];?>" class="AsaSkill mb-3 px-0"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[1]['img'];?>' class="AsaSkill mb-3 mx-0"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[2]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[3]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[4]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
  </div>

  <div class="font-weight-bold h5">Backend 後端技術</div>
  <div class="card-group  container-fluid">
    <img src='img/<?=$rows[5]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[6]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
  </div>

  <div class="font-weight-bold h5">Design 視覺設計</div>
  <div class="card-group  container-fluid">
    <img src='img/<?=$rows[7]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
    <img src='img/<?=$rows[8]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
  </div>

  <div class="font-weight-bold h5">License 證照</div>
  <div class="card-group  container-fluid">
    <img src='img/<?=$rows[9]['img'];?>' class="AsaSkill mb-3"
      style="width:100px;height:100px">
  </div>
</div>