<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructures\LinkedList;

class DoublyNode 
{
    public $data = null;
    public ?DoublyNode $nextNode = null;
    public ?DoublyNode $previousNode = null;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
