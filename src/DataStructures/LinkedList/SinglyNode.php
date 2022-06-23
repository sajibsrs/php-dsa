<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructures\LinkedList;

class SinglyNode
{
    public $data = null;
    public ?SinglyNode $nextNode = null;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
