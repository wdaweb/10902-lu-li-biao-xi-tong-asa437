
<fieldset style="margin:auto;padding:10px;width:50%;">
    <div class="text-center font-weight-bold my-5 h3">會員登入</div>
<table class="text-center mx-auto h5">
    <tr style="">
        <td width="50%" class="text-center" >帳號:</td>
        <td width="50%"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="text-center" >密碼:</td>
        <td><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td><input type="button" value="登入" onclick="login()"><input type="reset" value="清除"></td>
        <td>
            <a href="?do=forget">忘記密碼</a>
        </td>
    </tr>
</table>
</fieldset>



<script>
    function login(){
        //document.querySelector("#acc").value
        let acc=$("#acc").val();
        let pw=$("#pw").val();
        if(acc=="" || pw==""){
            alert("帳號及密碼欄位不可為空白")
        }else{
            $.get("api/chk_acc.php",{acc},function(res){
                if(res==='1'){
                    $.get("api/chk_pw.php",{acc,pw},function(res){
                        if(res==='1'){
                            if(acc=='admin'){
                                location.href="admin.php"
                            }else{
                                location.href="index.php"
                            }
                        }else{
                            alert("密碼錯誤")
                            location.reload();
                        }
                    })
                }else{
                    alert("查無帳號")
                    location.reload();
                }
            })
        }

    }
</script>