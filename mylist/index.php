<?php
include_once "MyList.php";
$arr = new MyList(10);
$arr->add(1);
$arr->add(2);
$arr->add(3);
$arr->add(4);
$arr->add(5);

//$arr->insert(3,9);
//$arr->remove(3);
$arr->indexOf(1);

echo "<pre>";
print_r($arr);