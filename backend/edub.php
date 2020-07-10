<div class="text-center font-weight-bold" style="font-size:25px">學歷/Education</div><br>

<!--原文 <p class="font-weight-bold">逢甲大學 / 碩士 / 2008～2010</p>
<p class="mx-3">科系:材料科學與工程學系</p>
<p class="mx-4">碩士論文:成長一維氧化釩奈米結構在電性與感測性質之研究</p>
<p class="mx-4">發表論文:2011 室溫型一維二氧化釩奈米線之光致相變特性研究</p>
<p class="mx-4">發表論文:2010 低溫型二氧化釩奈米柱之合成與酒精氣體感測分析 </p>
<br>
<p class="font-weight-bold">逢甲大學 / 學士 / 2004～2008 </p>
<p class="mx-3">科系:材料科學與工程學系</p> -->


<form action="api/edit_edub.php" method="post">
<table style="margin-top:50px; margin-left:auto;margin-right:auto">
<tbody>
        <tr>
        <td width="5%">id</td>
        <td width="25%">sch</td>
        <td width="10%">major</td>
        <td width="20%">content1</td>
        <td width="20%">content2</td>
        <td width="20%">content3</td>
        </tr>
        <?php
        $table='edub';
            $db=new DB($table);
            $rows=$db->all();
            foreach($rows as $row){
        ?>
        <tr>
        <td width="5%"><?=$row['id'];?></td>
        <td width="25%"> <input type="text" size="13" name="sch[]" value="<?=$row['sch'];?>"> </td>
        <td class="asatable" width="10%"> <input type="text" size="13" name="major[]" value="<?=$row['major'];?>">  </td>
        <td class="asatable" width="20%"> <input type="text" size="13" name="content1[]" value="<?=$row['content1'];?>">   </td>
        <td class="asatable" width="20%"> <input type="text" size="13" name="content2[]" value="<?=$row['content2'];?>">   </td>
        <td class="asatable" width="20%"> <input type="text" size="13" name="content3[]" value="<?=$row['content3'];?>">   </td>
        <input type="hidden" name="id[]" value="<?=$row['id'];?>">

        <!-- overflow-x: scroll; -->
        </tr>
        <?php
            }
        ?>

        <tr>
            <td colspan="4" class="py-2">
            <input type="hidden" name="table" value='<?=$table;?>'>
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </td>
        </tr>
    </tbody>
</table>
</form>