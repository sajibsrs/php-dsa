<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructure\Queue;

/**
 * @covers \Sajibsrs\DataStructure\Queue
 * @covers \Sajibsrs\DataStructure\LinkedList\Doubly
 * @covers \Sajibsrs\DataStructure\LinkedList\DoublyNode
 */
final class QueueTest extends TestCase
{
    private Queue $queue;
    
    public function setUp(): void
    {
        $this->queue = new Queue();
    }

    public function testEnqueue(): void
    {
        $this->queue->enqueue('🥝');

        print $this->queue->data->lastNode->data;

        $this->expectOutputString('🥝');
    }

    public function testDequeue(): void
    {
        $this->queue->enqueue('🥝');
        $this->queue->enqueue('🍑');

        $removedNode = $this->queue->dequeue();
        
        print $this->queue->data->lastNode->data;
        
        $this->expectOutputString('🍑');
        $this->assertEquals('🥝', $removedNode->data);
    }

    public function testRead(): void
    {
        $this->queue->enqueue('🥝');
        $firstNode = $this->queue->read();

        $this->assertSame('🥝', $firstNode->data);
    }

    public function testEmptyQueueReadShouldFail(): void
    {
        $firstNode = $this->queue->read();

        $this->assertEmpty($firstNode);
    }

    public function tearDown(): void
    {
        unset($this->queue);
    }
}
