<?php
include_once "db.php";
$schools = $GraduateSchool->all();
$options = "";
if (isset($_GET['id'])) {
    $user = $Student->find($_GET['id']);
}
foreach ($schools as $school) {
    // 學生資料表的graduate_at 和graduate_school資料表的id代碼有國中名稱
    $selected = (isset($user) && ($user['graduate_at'] == $school['id'])) ? 'selected' : '';

    $options .= "<option $selected value='{$school['id']}'>{$school['county']}{$school['name']}'></option>";
}
echo $options;
