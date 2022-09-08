## Task 1 (Welcome Java)

Welcome to the world of Java! 

#### In this challenge, we practice printing to stdout.

The code stubs in your editor declare a Solution class and a main method. Complete the main method by copying the two lines of code below and pasting them inside the body of your main method.

```
System.out.println("Hello, World.");
System.out.println("Hello, Java.");
```

#### Input Format

There is no input for this challenge.

#### Output Format

You must print two lines of output:

```
Print Hello, World. on the first line.

Print Hello, Java. on the second line.
```

- Sample Output

```
Hello, World.
Hello, Java.
```

## Task 2(Java If-else)

In this challenge, we test your knowledge of using if-else conditional statements to automate decision-making processes. An if-else statement has the following logical flow:
Wikipedia if-else flow chart

<img width="382" alt="Screenshot 2022-09-08 at 10 49 09 PM" src="https://user-images.githubusercontent.com/86869537/189154312-cbf0187b-ef5e-4ae1-a4cf-5af220edb5e1.png">

Source: Wikipedia

#### Given an integer, , perform the following conditional actions:

1. If  is odd, print Weird
2. If  is even and in the inclusive range of  to , print Not Weird
3. If  is even and in the inclusive range of  to , print Weird
4. If  is even and greater than , print Not Weird

#### Input Format

A single line containing a positive integer, N.

Constraints: 1 <= N <= 100

#### Output Format

Print Weird if the number is weird; otherwise, print Not Weird.

```
Sample Input 0
3
Sample Output 0
Weird
Sample Input 1
24
Sample Output 1
Not Weird
```

#### Explanation

- Sample Case 0:  

N is odd and odd numbers are weird, so we print Weird.

- Sample Case 1:  

N and  is even, so it isn't weird. Thus, we print Not Weird.
