<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructure\LinkedList\SinglyLinkedList;

/**
 * @covers \Sajibsrs\DataStructure\LinkedList\SinglyLinkedList
 * @covers \Sajibsrs\DataStructure\LinkedList\SinglyNode
 */
final class SinglyTest extends TestCase
{
    private SinglyLinkedList $list;

    public function setUp(): void
    {
        $this->list = new SinglyLinkedList('🥝');
    }

    public function testShouldNotBeEmpty(): void
    {
        $this->assertNotEmpty($this->list->firstNode);
    }

    public function testShouldInsertItems(): void
    {
        $result = $this->list->insert('🥝');

        $this->assertTrue($result);
    }

    public function testShouldSearchItem(): void
    {
        $this->list->insert('🍑');
        $this->list->insert('🥝');

        $this->assertSame(1, $this->list->search('🍑'));
    }

    public function testSearchShouldFail(): void
    {
        $this->list->insert('🥝');

        $this->assertEmpty($this->list->search('🍑'));
    }

    public function testReadOutOfRangeShouldFail(): void
    {
        $this->assertFalse($this->list->read(1));
    }

    public function testShouldReadItem(): void
    {
        $this->list->insert('🥝');
        $this->list->insert('🍑');

        $this->assertNotFalse($this->list->read(1));
    }

    public function testShouldDisplayItems(): void
    {
        $this->list->insert('🍑');
        $this->list->add(2, '🥝');
        $this->list->add(0, '🍑');
        $this->list->display();

        $this->expectOutputString('🍑🍑🥝🥝');
    }

    public function testShouldDeleteItem(): void
    {
        $this->list->insert('🍑');
        $this->list->insert('🍑');
        $this->list->insert('🥝');
        $this->list->insert('🥝');

        $this->list->delete(2);
        $this->list->delete(0);

        $this->list->display();

        $this->expectOutputString('🥝🍑🥝');
    }

    public function tearDown(): void
    {
        unset($this->list);
    }
}
