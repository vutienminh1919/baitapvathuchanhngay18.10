<?php

class Arraylist
{
    public array $arrayList;

    public function __construct($arr = " ")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList,$obj);
    }

    public function isInteger($toCheck):bool
    {
        return preg_match("/^[0-9]+$/",$toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index)&& $index<$this->size()){
            return $this->arrayList[$index];

        }else{
            die("error");
        }
    }
}