<div class="text-center font-weight-bold h3 mt-5" >個人簡介</div>
<!-- 原文:我叫劉邦鍊。曾任職於新竹科學園區半導體開發工程師,工作接觸了程式撰寫。也開啟對程式語文興趣。 自此開始一段學習的過程。2019結束半導體工作，決心要轉換職場，開始在職訓局進修學習PHP資料庫網頁設計 -->

<?php
    $db=new DB('me');
    // $row=$db->find(1);
    $rows=$db->all();
    foreach($rows as $row){
?>

    <div class="h5 m-3 font-weight-bold"> <?=$row['text'];?> </div>

    <br>
    <div class="smallbox mx-auto">
        <div class=" font-weight-bold py-2 h4 text-center " style="font-size:25px">個人資訊</div>
            <div class="h5 ml-3 font-weight-bold"><img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/icon/man.ico"> 
            Name:&nbsp;&nbsp; <?=$row['name'];?> </div>
            <div class="h5 ml-3 font-weight-bold"><img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/icon/mail.ico">
            E-mail: <?=$row['mail'];?> </div>
            <div class="h5 ml-3 font-weight-bold"><img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/icon/phone.ico">
            phone:&nbsp; <?=$row['phone'];?> </div>
            <div class="h5 ml-3 font-weight-bold"><img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/icon/game.ico"> 
            Interest:<?=$row['interest'];?></div>
            <div class="h5 ml-3 font-weight-bold"> <a href="https://asa437.github.io" target="_blank"><img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/icon/github.ico"></a> Github</div>
    </div>


             
<?php
 }
?>



