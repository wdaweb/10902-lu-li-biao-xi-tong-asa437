<div class="text-center font-weight-bold" style="font-size:25px">自傳/Autobigraphy</div>
            <!-- <div>
              我，劉邦鍊，畢業於逢甲大學材料工程與科學系。有將近十年的工作經驗。這十年來大都在新竹科學園區擔任半導體工程師。在其中一份元件工程師工作有包含電性量測的程式撰寫。也開始對程式及軟體工程感到興趣盎然。自此開始一段自我學習的過程，像是在C語言，Excel-VBA巨集。也多次使用VBA來讓自己的工作更多的自動化。2019年被公司諮遣。也決心要轉換職場，而對於PHP資料庫網頁設計課程感到非常的興奮，未來也期許自已在程式設計師&資料庫程式設計等領域上有所發揮。
              過去工作經歷中，寫程式讓我不斷思考如何讓機器順利運作，數據更加自動化並分享在同工的同事。也因此，希望自己的程式是帶給人有豐富性和幫助性。透過自己的程式來與人作互動。思考更多人的需求。客戶需求、老闆需求、同事和朋友需求等。協調與滿足眾人需要也是在工作上的挑戰。在職場上雖是工作，但更多是為人服侍，也持續學習如何對人有負擔。
              期許自已運用網頁的知識技能。也透過網頁來與人有更多的互動。並將專業所學應用實務並貢獻於社會。
            </div> -->

<?php
    $db=new DB('autob');
    $rows=$db->all();
    foreach($rows as $row){
?>

<fieldset>
<legend>Autobigraphy</legend>
    <form action="api/edit_autob.php" method="post"  class="mx-5">
 
    <textarea name="text" id="" cols="30" rows="10"> <?=$row['text'];?> </textarea>

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

            