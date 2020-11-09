<?php


class MyList
{
    const DEFAULT_CAPACITY = 10;
    protected $elements;
    protected $size;

    public function __construct($elements = [])
    {
        $this->size = 0;
        if (is_array($elements)) {
            $this->elements = $elements;
        } else {
            $this->elements = [];
        }
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function add($object)
    {
        array_push($this->elements, $object);
        $this->size++;
        return $this->elements;
    }

    public function remove($index)
    {
        array_splice($this->elements, $index, 1, null);
        $this->size--;
        return $this->elements;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function insert($index, $element)
    {
        array_splice($this->elements, $index, 0, $element);
        $this->size++;
        return $this->elements;
    }



    public function clear()
    {
        foreach ($this->elements as $index => $value) {
            if ($value == "") {
                array_splice($this->elements, $index, 1, null);
                $this->size--;
            }
        }
        return $this->elements;
    }
    public function addAll($element){
        $this->ArrayList = array_merge($this->ArrayList,$element);
    }
}