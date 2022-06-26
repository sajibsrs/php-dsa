<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\LinkedList;

class DoublyLinkedList
{
    public ?DoublyNode $firstNode = null;
    public ?DoublyNode $lastNode = null;

    public function __construct(DoublyNode $firstNode = null, DoublyNode $lastNode = null)
    {
        $this->firstNode = $firstNode;
        $this->lastNode = $lastNode;
    }

    public function insertAtStart($data)
    {
        $newNode = new DoublyNode($data);

        if (!$this->firstNode) {
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
        } else {
            $this->firstNode->previousNode = $newNode;
            $newNode->nextNode = $this->firstNode;
            $this->firstNode = $newNode;
        }
    }

    public function insertAtEnd($data)
    {
        $newNode = new DoublyNode($data);

        if (!$this->firstNode) {
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
        } else {
            $newNode->previousNode = $this->lastNode;
            $this->lastNode->nextNode = $newNode;
            $this->lastNode = $newNode;
        }
    }

    public function deleteFromStart(): DoublyNode
    {
        $removedNode = $this->firstNode;
        $this->firstNode = $this->firstNode->nextNode;

        return $removedNode;
    }
}
