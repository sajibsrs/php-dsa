<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructures\LinkedList;

class Doubly
{
    public ?DoublyNode $firstNode = null;
    public ?DoublyNode $lastNode = null;

    public function __construct($data)
    {   
        $newNode = new DoublyNode($data);
        $this->firstNode = $newNode;
        $this->lastNode = $newNode;
    }
    
    public function insertAtStart($data)
    {
        $newNode = new DoublyNode($data);
        $this->firstNode->previousNode = $newNode;
        $newNode->nextNode = $this->firstNode;
        $this->firstNode = $newNode;
    }

    public function insertAtEnd($data)
    {
        $newNode = new DoublyNode($data);
        $newNode->previousNode = $this->lastNode;
        $this->lastNode->nextNode = $newNode;
        $this->lastNode = $newNode;
    }

    public function deleteFromStart(): DoublyNode
    {
        $removedNode = $this->firstNode;
        $this->firstNode = $this->firstNode->nextNode;

        return $removedNode;
    }
}
