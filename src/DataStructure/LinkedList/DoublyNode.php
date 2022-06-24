<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\LinkedList;

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
