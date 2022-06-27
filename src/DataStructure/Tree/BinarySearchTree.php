<?php

declare(strict_types=1);

namespace Sajibsrs\DataStructure\Tree;

use InvalidArgumentException;

class BinarySearchTree
{
    public TreeNode $root;

    public function __construct(TreeNode $node)
    {
        $this->root = $node;
    }

    public function search(int $value, ?TreeNode $node = null)
    {
        $currentNode = $node ?: $this->root;

        if ($value === $currentNode->value) {
            return true;
        } elseif ($value < $currentNode->value) {
            if ($currentNode->left !== null) {
                return $this->search($value, $currentNode->left);
            } else {
                return false;
            }
        } elseif ($value > $currentNode->value) {
            if ($currentNode->right !== null) {
                return $this->search($value, $currentNode->right);
            } else {
                return false;
            }
        }
    }

    public function insert(int $value, ?TreeNode $node = null)
    {
        $currentNode = $node ?: $this->root;

        if ($value < $currentNode->value) {
            if ($currentNode->left === null) {
                $currentNode->left = new TreeNode($value);
            } else {
                $this->insert($value, $currentNode->left);
            }
        } elseif ($value > $currentNode->value) {
            if ($currentNode->right === null) {
                $currentNode->right = new TreeNode($value);
            } else {
                $this->insert($value, $currentNode->right);
            }
        } else {
            throw new InvalidArgumentException("Input value must be less than or greater than it's parent value.", 2001);
        }
    }
}
