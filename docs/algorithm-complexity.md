# # Complexity of Algorithm
The soul purpose of an algorithm is to solve a specific problem. In real world there are more than one solution to solve a specific problem. So, how exactly we can determine one algorithm is better performant than another?

To measure or compare algorithms there are two terms, algorithm **time complexity** and **space complexity**. Which determines how an algorithms performs in term of **time** and **memory usages** respectively.

## # Time complexity
Time complexity signifies the total time required by the program to run till its completion. By time we are not talking about the real world clock time, rather the number of elementary steps it performs to complete.

*Time complexity of an algorithm is measured by it's growth rate of elementary steps according to its input growth.*

For example, In a linear search algorithm one step required for each element. If we have 10 elements, a linear search could take 10 steps to find one specific element if it's the last element of the array. That is the worst case scenario, we can get that element in the first step if that element is the first element of the array.

## # Space complexity
Space complexity specifies the amount of memory used by the algorithm to complete execution according to its input size. Space complexity relies on two factor:

1. **Input space:** Space used by algorithm input.
2. **Auxiliary space:** Additional space used by the algorithm (e.g. variables).

**Space complexity = Input space + Auxiliary space**.

*Space complexity of an algorithm is measured by it's growth rate of space consumption according to its input growth.*

## # Asymptotic analysis