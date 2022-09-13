import java.util.*;
import java.io.*;
import java.lang.Math;

public class JavaLoopsII {
    public static void main(String []argh){
        Scanner in = new Scanner(System.in);
        int t=in.nextInt();
        for(int i=0;i<t;i++){
            int a = in.nextInt();
            int b = in.nextInt();
            int n = in.nextInt();
            
            // nested loops
            for(int j = 0; j<n; j++) {
                int s = 0;
                s += a;
                for(int x = 0; x< j+1; x++){
                    // use power operator
                    s += Math.pow(2, x) * b;
                }
                System.out.print(s + " ");
            }
            System.out.print("\n");
        }
        
        in.close();
    }
}