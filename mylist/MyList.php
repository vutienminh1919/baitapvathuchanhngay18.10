<?php

class MyList
{
    public int $size;
    public array $elements;


    public function __construct($size, $arr = "")
    {
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = [];
        }
    }

    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    public function remove($index)
    {
        array_splice($this->elements, $index, 1);
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function clear()
    {
        unset($index);
    }

    public function addAll($arr = ''):array
    {
       return array_merge($this->elements,$arr);
    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->elements);

    }


    public function reset(): void
    {

    }

    public function size(): int
    {
        return count($this->elements);
    }


}