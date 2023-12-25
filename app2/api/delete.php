<?php
//處理刪除資料的請求
if(isset($_POST)){
    $Student->del($_POST['id']);
}

?>