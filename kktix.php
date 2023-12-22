<?php
$json=file_get_contents("kktix.json");
$kktix=json_decode($json);
// decode vs encode 
// echo "<pre>";
// print_r($kktix);
// echo "</pre>"

echo "<h4>".$kktix->title."</h4>";
echo "<div>".$kktix->updated. "</div>";
echo "<ul class='list-group'>";
foreach($kktix->entry as $event){
    echo "<li>".$event->title."</li>";
}
echo "</ul>";
?>