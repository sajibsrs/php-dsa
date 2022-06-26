<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\Tree;

class TreeNode
{
    public int $value;
    public ?TreeNode $left;
    public ?TreeNode $right;

    public function __construct(int $value, ?TreeNode $left = null, ?TreeNode $right = null)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }
}
