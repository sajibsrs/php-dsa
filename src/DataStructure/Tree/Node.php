<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\Tree;

class Node
{
    public $value = null;
    public ?Node $left;
    public ?Node $right;

    public function __construct($value, ?Node $left = null, ?Node $right = null)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }
}
