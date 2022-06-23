<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructures\LinkedList\Singly;

/**
 * @covers \Sajibsrs\DataStructures\LinkedList\Singly
 * @covers \Sajibsrs\DataStructures\LinkedList\SinglyNode
 */
class LinkedListTest extends TestCase
{
    private Singly $list;

    public function setUp(): void
    {
        $this->list = new Singly('😎');
    }

    public function testShouldNotBeEmpty(): void
    {
        $this->assertNotEmpty($this->list->firstNode);
    }

    public function testShouldInsertItems(): void
    {
        $result = $this->list->insert('😎');

        $this->assertTrue($result);
    }

    public function testShouldSearchAndReadItem(): void
    {
        $this->list->insert('😎');
        $this->list->insert('😍');

        $this->assertNotFalse($this->list->search('😍'));
    }

    public function testShouldReadItem(): void
    {
        $this->list->insert('😎');
        $this->list->insert('😍');

        $this->assertNotFalse($this->list->read(1));
    }

    public function testShouldDisplayItems(): void
    {
        $this->list->insert('😎');
        $this->list->add(1, '😍');
        $this->list->display();

        $this->expectOutputString('😎😍😎');
    }

    public function testShouldDeleteItem(): void
    {
        $this->list->insert('😍');
        $this->list->insert('😎');
        $this->list->insert('😍');
        $this->list->insert('😎');

        $this->list->delete(1);
        $this->list->delete(0);
        
        $this->list->display();

        $this->expectOutputString('😎😍😎');
    }

    public function tearDown(): void
    {
        unset($this->list);
    }
}
