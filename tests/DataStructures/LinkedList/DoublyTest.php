<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructures\LinkedList\Doubly;

/**
 * @covers \Sajibsrs\DataStructures\LinkedList\Doubly
 * @covers \Sajibsrs\DataStructures\LinkedList\DoublyNode
 */
final class DoublyTest extends TestCase
{
    public Doubly $list;

    public function setUp(): void
    {
        $this->list = new Doubly('🥝');
    }

    public function testListShouldNotBeEmpty(): void
    {
        $this->expectOutputString('🥝');

        $this->assertNotEmpty($this->list);
        
        print($this->list->firstNode->data);
    }

    public function testShouldInsertAtStart(): void
    {
        $this->expectOutputString('🍑🥝');

        $this->list->insertAtStart('🍑');

        print($this->list->firstNode->data);
        print($this->list->lastNode->data);
    }

    public function testShouldInsertAtEnd(): void
    {
        $this->expectOutputString('🥝🍑');
        
        $this->list->insertAtEnd('🍑');

        print($this->list->firstNode->data);
        print($this->list->lastNode->data);
    }

    public function testShouldDisplayNextNodeData(): void
    {
        $this->expectOutputString('🍑');
        
        $this->list->insertAtEnd('🍑');

        print($this->list->firstNode->nextNode->data);
    }

    public function testShouldDisplayPreviousNodeData(): void
    {
        $this->expectOutputString('🥝');
        
        $this->list->insertAtEnd('🍑');

        print($this->list->lastNode->previousNode->data);
    }

    public function testShouldDeleteFromStart(): void
    {
        $this->expectOutputString('🍑');

        $this->list->insertAtEnd('🍑');
        $this->list->deleteFromStart();

        print($this->list->firstNode->data);
    }

    public function tearDown(): void
    {
        unset($list);
    }
}
