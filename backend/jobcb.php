<div class="text-center font-weight-bold" style="font-size:25px">求職條件</div>
    <?php
        $db=new DB('jobc');
        $jobc=$db->find(1);

        // $db = new DB();
        // $jobc = $db->all('jobc');
    ?>
                                        
<form action="api/edit_jobc.php" method="post" class="mx-5">

        <div class="input-group py-2"><label for="">希望工作地點&nbsp;：</label><input class='form-control' type='text' name='place' value="<?=$jobc['place'];?>"></div>
        <div class="input-group py-2"><label for="">希望職務 &nbsp;&nbsp;&nbsp; ：</label><input class='form-control' name='job' type="text" value="<?=$jobc['job'];?>"></div>
        <div class="input-group py-2"><label for="">就業狀況 &nbsp;&nbsp;&nbsp; ：</label><input class='form-control' name='status' type="text" value="<?=$jobc['status'];?>"></div>
        <div class="input-group py-2"><label for="">可上班日 &nbsp;&nbsp;&nbsp; ：</label><input class='form-control' name='available' type="text" value="<?=$jobc['available'];?>"></div>


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


