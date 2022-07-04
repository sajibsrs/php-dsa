# # Space Complexity of Algorithm

## # Calculating space complexity

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