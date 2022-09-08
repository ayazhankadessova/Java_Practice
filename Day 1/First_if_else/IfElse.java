import java.io.*;
import java.math.*;
import java.security.*;
import java.text.*;
import java.util.*;
import java.util.concurrent.*;
import java.util.regex.*;

// USE:

// RUN in terminal: java IfElse.java
// It will ask to Enter a number
// Write number + Enter
// Scanner will read it -> print output

public class IfElse {

    private static final Scanner scanner = new Scanner(System.in);

    public static void main(String[] args) {
        System.out.println("Enter a number: "); 
        int N = scanner.nextInt();
        // u2028 - Line Separator, u2029 - Paragraph Separator, u0085 - Unicode Character
        scanner.skip("(\r\n|[\n\r\u2028\u2029\u0085])?");
        if (N % 2 != 0) {
            System.out.println("Weird");
        } else if (N % 2 == 0 &&  N >= 2 && N <= 5) {
            System.out.println("Not Weird");
        } else if (N % 2 == 0 && N >= 6 && N <= 20) {
            System.out.println("Weird");
        } else if (N % 2 == 0 && N > 20 ) {
            System.out.println("Not Weird");
        }

        scanner.close();
    }
   
}

