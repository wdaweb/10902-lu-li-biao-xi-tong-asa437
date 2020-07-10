<div class="text-center font-weight-bold mt-5 h3">經驗/Experience</div><br>
<!--原文
   <h5 class="font-weight-bold">PHP資料庫網頁設計班進修</h5>
<h5>勞動部泰山職業訓練場 Mar 2020 ~ Aug 2020 </h5>
<p class="mx-3">頁排版編輯、資訊網路概論、數位媒體應用、視覺影像設計、資料庫程式設計、網頁動態技術、網頁設計實務等訓練課程，並取得國家網頁設計相關證照。</p>
<br>

<h5 class="font-weight-bold">美商麥斯功率半導體</h5>
<h5>產品工程師 2017～2019 </h5>
<p class="mx-3">在美商麥斯功率半導體 Maxpowr公司服務期間，主要擔任晶圓製造商與IC設計公司之間的橋樑。持續在功率半導體元件及製程平台上求精進，發現問題並改善良率。</p>
<br>

<h5 class="font-weight-bold">旺宏電子</h5>
<h5>元件開發工程師 2015～2017 </h5>
<p class="mx-3">新產品流程規劃，並用Laker繪圖軟體能掌握Layout佈局，在電性量測時也需依據不同製程需求作WAT程式撰寫更甚至Bench量測，歸納其結果去編緝相關技術文件如Design
  rule，量測手法及條件等...</p>
<br> -->

  <?php
  $table='expb';
      $db=new DB($table);
      $rows=$db->all();
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
    foreach($rows as $row){
  ?>
<h4 class="font-weight-bold mx-5"><?=$row['title'];?></h4>
<h5 class="font-weight-bold mx-5"><?=$row['posi'];?> </h5>
<p class="mx-3 font-weight-bold mx-5"><?=$row['job'];?></p>
<br>


<?php
}
?>