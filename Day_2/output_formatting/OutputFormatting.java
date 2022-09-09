import java.util.Scanner;

public class OutputFormatting {

    public static void main(String[] args) {
            Scanner sc=new Scanner(System.in);
            System.out.println("================================");
            for(int i=0;i<3;i++){
                System.out.println("Enter a String: ");
                String s1=sc.next();
                System.out.println("Enter an Integer: ");
                int x=sc.nextInt();
                System.out.printf("%-15s", s1 );
                System.out.printf("%03d\n", x);
                //Complete this line
            }
            System.out.println("================================");

    }
}




