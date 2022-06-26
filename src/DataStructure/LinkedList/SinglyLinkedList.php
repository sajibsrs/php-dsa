<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\LinkedList;

/**
 * SinglyLinkedList linked list.
 */
class SinglyLinkedList
{
    public SinglyNode $firstNode;

    public function __construct($data)
    {
        $this->firstNode = new SinglyNode($data);
    }

    /**
     * Insert at the beginning.
     */
    public function insert($data): bool
    {
        $newNode = new SinglyNode($data);
        $newNode->nextNode = $this->firstNode;
        $this->firstNode = $newNode;

        return true;
    }

    /**
     * Add to a specific position of the list.
     */
    public function add(int $index, $data): bool
    {
        $newNode = new SinglyNode($data);

        if ($index === 0) {
            $newNode->nextNode = $this->firstNode;
            $this->firstNode = $newNode;
            return true;
        }

        $currentNode = $this->firstNode;
        $currentIndex = 0;

        while ($currentIndex < $index - 1 && $currentNode !== null) {
            $currentNode = $currentNode->nextNode;
            $currentIndex++;
        }
        $newNode->nextNode = $currentNode->nextNode;
        $currentNode->nextNode = $newNode;

        return true;
    }

    /**
     * Read a specific item from the list.
     */
    public function read(int $index)
    {
        $currentNode = $this->firstNode;
        $currentIndex = 0;

        while ($currentIndex < $index) {
            $currentNode = $currentNode->nextNode;

            if ($currentNode === null) {
                return false;
            }

            $currentIndex++;
        }
        return $currentNode;
    }

    /**
     * Search for item. Returns found item or false on failure.
     */
    public function search($data)
    {
        $currentNode = $this->firstNode;
        $currentIndex = 0;

        while ($currentNode) {
            if ($currentNode->data === $data) {
                return $currentIndex;
            }
            $currentNode = $currentNode->nextNode;
            $currentIndex++;
        }

        return false;
    }

    /**
     * Delete list node by index.
     */
    public function delete(int $index)
    {
        if ($index === 0) {
            $this->firstNode = $this->firstNode->nextNode;
            return;
        }
        $currentNode = $this->firstNode;
        $currentIndex = 0;

        while ($currentIndex < $index - 1 && $currentNode !== null) {
            $currentNode = $currentNode->nextNode;
            $currentIndex++;
        }
        $nodeAfterDeleted = $currentNode->nextNode->nextNode;
        $currentNode->nextNode = $nodeAfterDeleted;
    }
    
    /**
     * Echo the items of the list.
     */
    public function display(): void
    {
        $currentNode = $this->firstNode;

        while ($currentNode !== null) {
            echo $currentNode->data;
            $currentNode = $currentNode->nextNode;
        }
    }
}
