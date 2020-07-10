<div class="text-center font-weight-bold" style="font-size:25px">個人簡介</div>

<?php
    $db=new DB('me');
    // $row=$db->find(1);
    $rows=$db->all();
    foreach($rows as $row){

?>
<fieldset>
    <legend>About Me</legend>
    <form action="api/edit_me.php" method="post"  class="mx-5">
 
    <div>簡介:</div>
        <textarea class="mx-5" name="text" id="" cols="30" rows="10"> <?=$row['text'];?> </textarea>
    <div class="input-group py-2"><label for="">姓名：</label><input class='form-control' type='text' name='name'     value="<?=$row['name'];?>"></div>
    <div class="input-group py-2"><label for="">郵件：</label><input class='form-control' type='text' name='mail'     value="<?=$row['mail'];?>"></div>
    <div class="input-group py-2"><label for="">電話：</label><input class='form-control' type='text' name='phone'    value="<?=$row['phone'];?>"></div>
    <div class="input-group py-2"><label for="">興趣：</label><input class='form-control' type='text' name='interest' value="<?=$row['interest'];?>"></div>

        <table style="margin-top:50px; margin-left:auto;margin-right:auto">
            <tbody>
                <tr>
                    <td>
                        <input type="submit" value="修改">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</fieldset>

<?php
 }
?>

<!-- 我叫劉邦鍊。曾任職於新竹科學園區半導體開發工程師,工作接觸了程式撰寫。也開啟對程式語文興趣。 自此開始一段學習的過程。2019結束半導體工作，決心要轉換職場，開始在職訓局進修學習PHP資料庫網頁設計 -->


