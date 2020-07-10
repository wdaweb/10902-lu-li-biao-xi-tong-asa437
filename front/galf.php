<div class="text-center font-weight-bold h3 mt-5">作品集/Gallery</div><br>

<?php
  $table='galb';
      $db=new DB($table);
      $rows=$db->all();
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
?>


<div>
  <div class="card-group container">
    <div class="card col-4 col-md-6 text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/Resume/2.PHP+MySQL_works/Calendary/" target="_blank"><img
          src='img/<?=$rows[0]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">萬年曆</h5>
        <p class="card-text">php、mysql、html、css</p>
        <a href="http://220.128.133.15/s1090208/Resume/2.PHP+MySQL_works/Calendary/"
          class="btn btn-warning text-white " role="button" aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>

    <div class="card col-4 col-md-6  text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/Invoice/" target="_blank"><img
          src='img/<?=$rows[1]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">統一發票對獎</h5>
        <p class="card-text">php、html、css、mysql</p>
        <a href="http://220.128.133.15/s1090208/Invoice/" class="btn btn-warning text-white " role="button"
          aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>

    <div class="card col-4 col-md-6 text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-2_1_AlternativeGame/"
        target="_blank"><img src='img/<?=$rows[2]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">二選一大哉問</h5>
        <p class="card-text">html、Java script、css</p>
        <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-2_1_AlternativeGame/"
          class="btn btn-warning text-white " role="button" aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>
  </div>

  <div class="card-group pb-3 container">
    <div class="card col-4 col-md-6 text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-AnalogClock/" target="_blank"><img
          src='img/<?=$rows[3]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">類比時鐘</h5>
        <p class="card-text">html、Java script、css</p>

        <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-AnalogClock/"
          class="btn btn-warning text-white " role="button" aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>

    <div class="card col-4 col-md-6 text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-ColorChange/" target="_blank"><img
          src='img/<?=$rows[4]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">顏色好好玩</h5>
        <p class="card-text">html、Java script、css</p>
        <a href="http://220.128.133.15/s1090208/5.JavaScript-Work/JS-ColorChange/"
          class="btn btn-warning text-white " role="button" aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>

    <div class="card col-4 col-md-6 text-center mx-auto">
      <a href="http://220.128.133.15/s1090208/Resume/4.Illustrator_works/VI%e8%a8%ad%e8%a8%8801-2.png"
        target="_blank"><img
          src='img/<?=$rows[5]['img'];?>'
          class="card-img-top AsaSkill pt-2 Asasize1" style="height:150px"></a>
      <div class="card-body">
        <h5 class="card-title">LOGO設計</h5>
        <p class="card-text">Photoshop、Illustrator</p>
        <a href="http://220.128.133.15/s1090208/Resume/4.Illustrator_works/VI%e8%a8%ad%e8%a8%8801-2.png"
          class="btn btn-warning text-white " role="button" aria-pressed="true" target="_blank">Link</a>
      </div>
    </div>
  </div>
</div>