## Task 1 (Stdin & Stdout II )

In this challenge, you must read an integer, a double, and a String from stdin, then print the values according to the instructions in the Output Format section below. To make the problem a little easier, a portion of the code is provided for you in the editor.

- Input Format

1. There are three lines of input:
2. The first line contains an integer.
3. The second line contains a double.
4. The third line contains a String.

- Output Format

There are three lines of output:

On the first line, print String: followed by the unaltered String read from stdin.

On the second line, print Double: followed by the unaltered double read from stdin.

On the third line, print Int: followed by the unaltered integer read from stdin.

To make the problem easier, a portion of the code is already provided in the editor.

Note: If you use the nextLine() method immediately following the nextInt() method, recall that nextInt() reads integer tokens; because of this, the last newline character for that line of integer input is still queued in the input buffer and the next nextLine() will be reading the remainder of the integer line (which is empty).

- Sample Input

```
42
3.1415
Welcome to HackerRank's Java tutorials!
```

- Sample Output

```
String: Welcome to HackerRank's Java tutorials!
Double: 3.1415
Int: 42
```

## Task 2 (Java Output Formatting)

Java's System.out.printf function can be used to print formatted output. The purpose of this exercise is to test your understanding of formatting output using printf.
To get you started, a portion of the solution is provided for you in the editor; you must format and print the input to complete the solution.

- Input Format

Every line of input will contain a String followed by an integer. 
Each String will have a maximum of 10 alphabetic characters, and each integer will be in the inclusive range from 0 to 999.

- Output Format

In each line of output there should be two columns: 
The first column contains the String and is left justified using exactly 15 characters. 
The second column contains the integer, expressed in exactly  digits; if the original input has less than three digits, you must pad your output's leading digits with zeroes.

- Sample Input

```
java 100
cpp 65
python 50
```

- Sample Output
```
================================
java           100 
cpp            065 
python         050 
================================
```

- Explanation

Each String is left-justified with trailing whitespace through the first  characters. The leading digit of the integer is the  character, and each integer that was less than  digits now has leading zeroes.

* Links:
https://www.hackerrank.com/challenges/java-stdin-stdout/problem?isFullScreen=true 