
<div class="text-center font-weight-bold" style="font-size:25px">技能/Skill</div><br>
<!-- 資料表 image -->

<form method="post"  action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="mx-auto text-center">
                    <td width="10%">id</td>
                    <td width="">圖片</td>
                    <td width="40%">替代文字</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $table="skill";
                    $db=new DB($table);
                    $rows=$db->all();
                                                       
                    foreach($rows as $row){
                        $isChk=($row['sh']==1)?'checked':'';
                ?>
                <tr class="mx-atuo text-center">
                    <td width="10%"><?=$row['id'];?></td>
                    <td width=""><img src='img/<?=$row['img'];?>' style="width:100px"></td>
                    <td width="40%"><input type="text" name="text[]" value="<?=$row['text'];?>"> </td>
                    <td width="10%"><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>> </td>
                    <td width="10%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <!-- <td><input type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload_image.php?id=<?=$row['id'];?>&table=<?=$table;?>&#39;)"></td> -->
                    <td><input class="btnOM" type="button" onclick="openModel('modal/upload_image.php?table=<?=$table;?>&id=<?=$row['id'];?>')" value="更換圖片"></td>
                    
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <!-- submit的id資料 -->
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div style="text-align:center;">
</div>                        
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="hidden" name="table" value='<?=$table;?>'>
                        <input class="btnOM" type="button" onclick="openModel('modal/image.php?table=<?=$table;?>')" value="新增圖片">
                   </td>
                        
                    <td class="cent">
                        <input type="submit" value="修改">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>





