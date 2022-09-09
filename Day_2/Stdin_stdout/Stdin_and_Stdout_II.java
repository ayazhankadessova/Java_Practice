import java.util.Scanner;

public class Stdin_and_Stdout_II {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int i = scan.nextInt();
        double d = scan.nextDouble();
        String dummy = scan.nextLine();
        String name = scan.nextLine();

        // Write your code here.

        System.out.println("String: " + name);
        System.out.println("Double: " + d);
        System.out.println("Int: " + i);
        
        scan.close();
    }
}

// Input:
// 1
// 2.0
// Hello
// Output
// String: Hello
// Double: 2.0
// Int: 1