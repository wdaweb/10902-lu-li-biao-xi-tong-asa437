<div class="text-center font-weight-bold h3 mt-5">學歷/Education</div><br>

<!--原文 <p class="font-weight-bold">逢甲大學 / 碩士 / 2008～2010</p>
<p class="mx-3">科系:材料科學與工程學系</p>
<p class="mx-4">碩士論文:成長一維氧化釩奈米結構在電性與感測性質之研究</p>
<p class="mx-4">發表論文:2011 室溫型一維二氧化釩奈米線之光致相變特性研究</p>
<p class="mx-4">發表論文:2010 低溫型二氧化釩奈米柱之合成與酒精氣體感測分析 </p>
<br>
<p class="font-weight-bold">逢甲大學 / 學士 / 2004～2008 </p>
<p class="mx-3">科系:材料科學與工程學系</p> -->


<?php
  $table='edub';
      $db=new DB($table);
      $rows=$db->all();
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
  ?>
  
<p class="font-weight-bold h4 mx-5"><?=$rows[0]['sch'];?></p>
  <p class="font-weight-bold mx-5">&nbsp; <?=$rows[0]['major'];?></p>
    <p class="font-weight-bold mx-5">&nbsp;&nbsp;&nbsp;  ‧<?=$rows[0]['content1'];?></p>
    <p class="font-weight-bold mx-5">&nbsp;&nbsp;&nbsp;  ‧<?=$rows[0]['content2'];?></p>
    <p class="font-weight-bold mx-5">&nbsp;&nbsp;&nbsp;  ‧<?=$rows[0]['content3'];?> </p>
<br>
<p class="font-weight-bold h4 mx-5"> <?=$rows[1]['sch'];?> </p>
<p class="font-weight-bold mx-5 font-weight-bold">&nbsp; <?=$rows[1]['major'];?></p>
