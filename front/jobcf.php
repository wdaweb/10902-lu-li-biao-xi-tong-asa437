<div class="text-center font-weight-bold h3 mt-5">求職條件</div>
    <?php
        $db=new DB('jobc');
        $jobc=$db->find(1);
    ?>

    <ui class="h5 font-weight-bold ml-3">

             <li class="mx-5 h4 font-weight-bold py-1">希望工作地點: <?=$jobc['place'];?></li> 
             <li class="mx-5 h4 font-weight-bold py-1">希望應徵職務: <?=$jobc['job'];?> </li> 
             <li class="mx-5 h4 font-weight-bold py-1">就業狀況:<?=$jobc['status'];?> </li> 
             <li class="mx-5 h4 font-weight-bold py-1">可上班日:<?=$jobc['available'];?> </li> 
    </ui>



