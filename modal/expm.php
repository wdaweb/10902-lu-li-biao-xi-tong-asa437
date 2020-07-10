

<h3 class="cent">新增欄位</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="width:70%;margin:auto">
    <tr>
        <td style="text-align:right">公司：</td>
        <td><input type="text" name="title"></td>
    </tr>
    <tr>
        <td style="text-align:right">職位：</td>
        <td><input type="text" name="posi"></td>
    </tr>
    <tr>
        <td style="text-align:right">工作內容：</td>
        <td><input type="text" name="job"></td>
    </tr>
</table>
<div style="width:100px;margin:auto">
<input type="hidden" name="table" value="<?=$_GET['table'];?>">

<table>
<tr> 
    <td colspan="2">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </td>
</tr>
</table>


</form>
