<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructure\LinkedList\Doubly;

/**
 * @covers \Sajibsrs\DataStructure\LinkedList\Doubly
 * @covers \Sajibsrs\DataStructure\LinkedList\DoublyNode
 */
final class DoublyTest extends TestCase
{
    public Doubly $list;

    public function setUp(): void
    {
        $this->list = new Doubly();
    }

    public function testListShouldBeEmpty(): void
    {
        $this->assertEmpty($this->list->firstNode);
    }

    public function testShouldInsertAtStart(): void
    {
        $this->list->insertAtStart('🍑');
        
        print($this->list->firstNode->data);

        $this->expectOutputString('🍑');
    }

    public function testShouldInsertAtStartWhenListHasItems(): void
    {
        $this->list->insertAtStart('🥝');
        $this->list->insertAtStart('🍑');
        
        print($this->list->firstNode->data);

        $this->expectOutputString('🍑');
    }

    public function testShouldInsertAtEnd(): void
    {
        $this->list->insertAtStart('🍑');
        $this->list->insertAtEnd('🥝');
        
        print($this->list->lastNode->data);
        
        $this->expectOutputString('🥝');
    }

    public function testShouldDisplayNextNodeData(): void
    {
        $this->list->insertAtEnd('🥝');
        $this->list->insertAtEnd('🍑');
        
        print($this->list->firstNode->nextNode->data);

        $this->expectOutputString('🍑');
    }

    public function testShouldDisplayPreviousNodeData(): void
    {
        $this->list->insertAtEnd('🥝');
        $this->list->insertAtEnd('🍑');

        $this->expectOutputString('🥝');
        
        print($this->list->lastNode->previousNode->data);
    }

    public function testShouldDeleteFromStart(): void
    {
        $this->list->insertAtEnd('🥝');
        $this->list->insertAtEnd('🍑');
        $this->list->deleteFromStart();
        
        print($this->list->firstNode->data);

        $this->expectOutputString('🍑');
    }

    public function tearDown(): void
    {
        unset($list);
    }
}
