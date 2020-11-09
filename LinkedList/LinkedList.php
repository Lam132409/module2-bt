<?php

include_once "Nope.php";
class LinkedList
{
    protected $count;
    protected $firstNope;
    protected $lastNope;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNope = null;
        $this->lastNope = null;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNope;
        $this->firstNope = &$link;

        if ($this->lastNope == NULL)
            $this->lastNope = &$link;
        $this->count++;
    }
    public function addtLast($data)
    {
        if ($this->firstNope != NULL) {
            $link = new Node($data);
            $this->lastNope->next = $link;
            $link->next = NULL;
            $this->lastNope = &$link;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($data, $key)
    {
        if ($key == 0) {
            $this->addFirst($data);
        } else {
            $link = new Node($data);
            $current = $this->firstNope;
            $previous = $this->firstNope;
            for ($i = 0; $i < $key; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $link->next = $current;
            $previous->next = $link;
            $this->count++;
        }
    }

    public function get($index)
    {
        $count = 0;
        $currentNode = $this->firstNope;
        while ($count < $index){
            $currentNode = $currentNode->next;
            $count++;
        }
        return $currentNode;
    }

}