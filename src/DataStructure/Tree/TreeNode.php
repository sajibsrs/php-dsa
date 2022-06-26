<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\Tree;

class TreeNode
{
    public $value = null;
    public ?TreeNode $left;
    public ?TreeNode $right;

    public function __construct($value, ?TreeNode $left = null, ?TreeNode $right = null)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }
}
