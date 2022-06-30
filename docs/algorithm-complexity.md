# # Complexity of Algorithm
The soul purpose of an algorithm is to solve a specific problem. In real world there are more than one solution to solve a specific problem. So, how exactly we can determine one algorithm is better performant than another?

To measure or compare algorithms there are two terms, algorithm **time complexity** and **space complexity**. Which determines how an algorithms performs in term of **CPU instructions** and **memory spaces** respectively.

## # Time complexity
Time complexity signifies the total time required by the program to run till its completion. By time we are not talking about the real world clock time, rather the number of steps or CPU instructions it takes to complete.

For example, In a linear search algorithm one step required for each element. If we have 10 elements, a linear search could take 10 steps to find one specific element if it's the last element of the array. That is just a worst case, we can get that element in the first step if that element is the first element of the array.

## # Space complexity
Space complexity specifies the amount of memory used by the algorithm (including the input values of the algorithm) to execute and produce the result. Space complexity relies on two factor:

1. **Input space:** Space used by algorithm input.
2. **Auxiliary space:** Additional space used by the algorithm (e.g. variables).

**Space complexity = Input space + Auxiliary space**.

### # Calculating space complexity

##### # Constant space complexity - $O(1)$:
```php
$a = 1;
$b = 2;
$c = $a + $b;

echo $c; // outputs 3
```
In the example above we have three integers. The size of integer in php is 8 byte in 64bit machine (4 byte in 32bit machine). So, the total space occupied by this program is $8 * 3 = 32$ byte. As no additional space is used, this program would use the same memory for any given integer values.

The space complexity of above program is $O(1)$. Which is constant space complexity.

##### # Linear space complexity - $O(n)$:
```php

``