<?php


namespace Structures;


class Stack
{

    private $items=[];

    public function push($value)
    {
        array_push($this->items, $value);
    }

    public function count():int
    {
        return count($this->items);
    }

    public function pop()
    {
        $lastItem = $this->count() - 1;
        $itemPopped = $this->items[$lastItem];
        array_splice($this->items, $lastItem, 1);
        return $itemPopped;
    }
}