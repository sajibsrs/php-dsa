<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure;

use Sajibsrs\DataStructure\LinkedList\Doubly as DoublyLinkedList;

class Queue
{
    public $queue;
    public $data;

    public function __construct()
    {
        $this->data = new DoublyLinkedList();
    }

    public function enqueue($data)
    {
        $this->data->insertAtEnd($data);
    }

    public function dequeue()
    {
        $removedNode = $this->data->deleteFromStart();
        return $removedNode;
    }

    public function read()
    {
        return $this->data->firstNode ?: null;
    }
}
