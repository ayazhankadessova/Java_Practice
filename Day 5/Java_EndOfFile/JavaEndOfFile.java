package Java_EndOfFile;
import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class JavaEndOfFile {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner in = new Scanner(System.in);
        int i = 1;
        while (in.hasNext()) {
            System.out.println(i + " " + in.nextLine());
            i++;
        }
    }
}