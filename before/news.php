<?php
include_once "../Plugin/base.php";
?>
<h1 class="ct">最新消息</h1>
<div id="newsContext">
<h5 class="ct" style="color:red">*點擊標題觀看詳細資訊</h5>
<div class="t80 tt ct">標題</div>
<?php
$temMath=1;
$rows=all("news","");
foreach ($rows as $r) {
    echo "<div class='t80 pp' onclick=";
    echo " \" ";
    echo "getNews('".$temMath."')";
    echo " \" ";
    echo ">".$r['title']."</div>";
    $temMath++;
}
?>
</div>
<?php
$temMath=1;
foreach ($rows as $r) {
?>
<div id="newsTable<?=$temMath;?>" style="display:none">
<table class="t80">
    <tr>
        <td class="tt ct" style="width: 200px;">標題</td>
        <td class="pp"><?=$r['title'];?></td>
    </tr>
    <tr>
        <td class="tt ct" style="width: 200px;">內容</td>
        <td class="pp"><?=$r['text'];?></td>
    </tr>
</table>    
<div class="ct">
    <button onclick="backToNews('<?=$temMath;?>')">返回</button>
</div>
</div>
<?php
$temMath++;
}
?>
