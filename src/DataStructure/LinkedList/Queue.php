<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\LinkedList;

use Sajibsrs\DataStructure\LinkedList\Doubly as DoublyLinkedList;

class Queue
{
    public $data;

    public function __construct()
    {
        $this->data = new DoublyLinkedList();
    }

    /**
     * Insert data at the end of the queue.
     */
    public function enqueue($data)
    {
        $this->data->insertAtEnd($data);
    }

    /**
     * Remove data from to front of the queue.
     */
    public function dequeue()
    {
        $removedNode = $this->data->deleteFromStart();
        return $removedNode;
    }
    
    /**
     * Read data from the front of the queue.
     */
    public function read()
    {
        return $this->data->firstNode ?: null;
    }
}
