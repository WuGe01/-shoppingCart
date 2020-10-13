<?php
include_once "../Plugin/base.php";
$rows=all("news","");
foreach ($rows as $r) {
echo $r['title'];
for ($i=0; $i < 100; $i++) { 
    echo "&nbsp;";
}
}
?>