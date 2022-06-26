<?php

use PHPUnit\Framework\TestCase;
use Sajibsrs\DataStructure\Tree\BinarySearchTree;

/**
 * @covers \Sajibsrs\DataStructure\Tree\BinarySearchTree
 * @covers \Sajibsrs\DataStructure\Tree\TreeNode
 */
final class BinarySearchTreeTest extends TestCase
{
    private BinarySearchTree $tree;

    public function setUp(): void
    {
        $this->tree = new BinarySearchTree(50);
    }

    public function testShouldHaveTreeRootValue(): void
    {
        $this->assertSame(50, $this->tree->root->value);
    }

    public function testInsertingRootValueShouldThrowException(): void
    {
        $this->expectExceptionCode(2001);
        $this->tree->insert(50);
    }

    public function testShouldInsertValueToLeft(): void
    {
        $this->tree->insert(25);
        $this->assertSame(25, $this->tree->root->left->value);
    }

    public function testShouldInsertValueToRight(): void
    {
        $this->tree->insert(75);
        $this->assertSame(75, $this->tree->root->right->value);
    }

    public function testShouldInsertValueToLeftSubtree(): void
    {
        $this->tree->insert(25);
        $this->tree->insert(15);

        $this->assertSame(15, $this->tree->root->left->left->value);
    }

    public function testShouldInsertValueToRightSubtree(): void
    {
        $this->tree->insert(75);
        $this->tree->insert(85);

        $this->assertSame(85, $this->tree->root->right->right->value);
    }

    public function tearDown(): void
    {
        unset($this->tree);
    }
}
