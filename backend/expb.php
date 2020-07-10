<div class="text-center font-weight-bold" style="font-size:25px">經驗/Experience</div><br>
  <!-- <p class="font-weight-bold">PHP資料庫網頁設計班進修</p>
  <p>勞動部泰山職業訓練場 Mar 2020 ~ Aug 2020 </p>
  <p class="mx-3">頁排版編輯、資訊網路概論、數位媒體應用、視覺影像設計、資料庫程式設計、網頁動態技術、網頁設計實務等訓練課程，並取得國家網頁設計相關證照。</p>
  <br>

  <div class="font-weight-bold">美商麥斯功率半導體</div>
  <p>產品工程師 2017～2019 </p>
  <p class="mx-3">在美商麥斯功率半導體 Maxpowr 公司服務期間，主要擔任晶圓製造商與IC設計公司之間的橋樑。持續在功率半導體元件及製程平台上求精進，發現問題並改善良率。</p>
  <br>

  <div class="font-weight-bold">旺宏電子</div>
  <p>元件開發工程師 2015～2017 </p>
  <p class="mx-3">新產品流程規劃，並用Laker繪圖軟體能掌握Layout佈局，在電性量測時也需依據不同製程需求作WAT程式撰寫更甚至Bench量測，歸納其結果去編緝相關技術文件如Design
    rule，量測手法及條件等...</p> -->
                
<form action="api/edit_exp.php" method="post" class="mx-5">
<table style="margin-top:50px; margin-left:auto;margin-right:auto">
<tbody>
        <tr>
        <td width="10%">id</td>
        <td width="30%">公司</td>
        <td width="30%">職位</td>
        <td width="30%">工作內容</td>
        </tr>
        <?php
        $table='expb';
            $db=new DB($table);
            $rows=$db->all();
            foreach($rows as $row){
        ?>
        <tr>
        <td width="10%"><?=$row['id'];?></td>
        <td width="30%"> <input type="text" name="title[]" value="<?=$row['title'];?>"> </td>
        <td width="30%"> <input type="text" name="posi[]" value="<?=$row['posi'];?>">  </td>
        <td width="30%"> <input type="text" name="job[]" value="<?=$row['job'];?>">   </td>
        <input type="hidden" name="id[]" value="<?=$row['id'];?>">

        </tr>
        <?php
            }
        ?>

        <tr>
            <td width="200px">
                        <input type="hidden" name="table" value='<?=$table;?>'>
                        <input class="btnOM" type="button" onclick="openModel('modal/expm.php?table=<?=$table;?>')" value="新增">
                   </td>
            <td colspan="4">
            <input type="hidden" name="table" value='<?=$table;?>'>
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </td>
        </tr>
    </tbody>
</table>
</form>
