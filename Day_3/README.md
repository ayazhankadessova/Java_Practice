## Task 1 (Stdin and Stdout I)

One popular way to read input from stdin is by using the Scanner class and specifying the Input Stream as System.in. 

- For example:

```
Scanner scanner = new Scanner(System.in);
String myString = scanner.next();
int myInt = scanner.nextInt();
scanner.close();

System.out.println("myString is: " + myString);
System.out.println("myInt is: " + myInt);
```

The code above creates a Scanner object named  and uses it to read a String and an int. It then closes the Scanner object because there is no more input to read, and prints to stdout using

```
System.out.println(String)
```
So, if our input is:
```
Hi 5
```
Our code will print:
```
myString is: Hi
myInt is: 5
```
Alternatively, you can use the BufferedReader class.

### Task 

In this challenge, you must read  integers from stdin and then print them to stdout. Each integer must be printed on a new line. To make the problem a little easier, a portion of the code is provided for you in the editor below.

- Input Format

There are  lines of input, and each line contains a single integer.

- Sample Input
```
42
100
125
```
- Sample Output
```
42
100
125
```

## Task 2 (Java Loops II)

- Input Format
The first line contains an integer, q, denoting the number of queries. 
Each line i of the q subsequent lines contains three space-separated integers describing the respective ai, bi, and ni values for that query.

- Output Format
For each query, print the corresponding series on a new line. Each series must be printed in order as a single line of n space-separated integers.

- Sample Input
``` 
2
0 2 10
5 3 5
```

- Sample Output
```
2 6 14 30 62 126 254 510 1022 2046
8 14 26 50 98
```

- Explanation
We have two queries:
We use a = 0, b = 2, and n=10 to produce some series :

<img width="345" alt="Screenshot 2022-09-14 at 12 46 50 AM" src="https://user-images.githubusercontent.com/86869537/189959774-e43df629-9a47-46ec-8064-4c95c166b17f.png">


... and so on.
Once we hit n = 10, we print the first ten terms as a single line of space-separated integers.

- Links:

https://www.hackerrank.com/challenges/java-stdin-and-stdout-1/problem?isFullScreen=true

https://www.hackerrank.com/challenges/java-loops/problem?isFullScreen=true
