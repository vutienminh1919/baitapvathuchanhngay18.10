<?php
include_once "Arraylist.php";
$listInteger = new Arraylist();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);