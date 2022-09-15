## Task 1 (Java Loops I)

- Objective 
In this challenge, we're going to use loops to help us do some simple math.

- Task 

Given an integer, N, print its first 10 multiples. Each multiple N x i (where 1-10) should be printed on a new line in the form: N x i = result.

- Input Format
A single integer, N.

- Constraints: 2 - 20

- Output Format

Print 10 lines of output; each line i (where 1-10) contains the result of N x i in the form: 

N x i = result.

- Sample Input

2

- Sample Output

2 x 1 = 2

2 x 2 = 4

2 x 3 = 6

2 x 4 = 8

2 x 5 = 10

2 x 6 = 12

2 x 7 = 14

2 x 8 = 16

2 x 9 = 18

2 x 10 = 20

## Task 2 (Java Data Types)

Java has 8 primitive data types; char, boolean, byte, short, int, long, float, and double. For this exercise, we'll work with the primitives used to hold integer values (byte, short, int, and long):

- A byte is an 8-bit signed integer.

- A short is a 16-bit signed integer.

- An int is a 32-bit signed integer.

- A long is a 64-bit signed integer.

Given an input integer, you must determine which primitive data types are capable of properly storing that input.

To get you started, a portion of the solution is provided for you in the editor.
Reference: https://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html

- Input Format
The first line contains an integer, , denoting the number of test cases. 
Each test case, , is comprised of a single line with an integer, , which can be arbitrarily large or small.

- Output Format
For each input variable  and appropriate primitive , you must determine if the given primitives are capable of storing it. If yes, then print:
n can be fitted in:
* dataType
If there is more than one appropriate data type, print each one on its own line and order them by size (i.e.: ).
If the number cannot be stored in one of the four aforementioned primitives, print the line:

``` 
n can't be fitted anywhere.
``` 

- Sample Input

``` 
5
-150
150000
1500000000
213333333333333333333333333333333333
-100000000000000
``` 
- Sample Output

``` 
-150 can be fitted in:
* short
* int
* long
150000 can be fitted in:
* int
* long
1500000000 can be fitted in:
* int
* long
213333333333333333333333333333333333 can't be fitted anywhere.
-100000000000000 can be fitted in:
* long
``` 

- Explanation

 can be stored in a short, an int, or a long.
 is very large and is outside of the allowable range of values for the primitive data types discussed in this problem.

- Link:
https://www.hackerrank.com/challenges/java-loops-i/problem?isFullScreen=true
https://www.hackerrank.com/challenges/java-datatypes/problem