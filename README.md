# PHP Recursive Function Bug: Incorrect Nested Array Handling

This repository demonstrates a common bug in PHP involving the incorrect handling of nested arrays within recursive functions. The `buggyFunction` attempts to process an array recursively, doubling the values of elements. However, it contains a flaw in how it handles nested arrays, leading to unexpected results. 

The `bugSolution.php` file provides a corrected version of the function that addresses the bug.

## Bug Description
The original `buggyFunction` doesn't accurately manage the return type and structure when encountering nested arrays. This can lead to incorrect calculations or even infinite recursion if the nested arrays are not handled correctly. 

## Solution
The corrected function in `bugSolution.php` handles nested arrays appropriately by checking the return type and ensuring the values are correctly merged into the main result array.