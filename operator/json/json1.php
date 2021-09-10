<?php
//Json String
$dataJson = "[5, 3, 4, 2, 1]";

$data = json_decode($dataJson);

echo implode(" - ", $data);
?>