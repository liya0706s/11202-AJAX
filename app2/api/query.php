<?php
include_once "db.php";
//處理查詢資料的請求
switch ($_GET['do']){
    case "all":
    echo json_encode($Student->all());
    break;
}

?>