// 
import java.util.Scanner;

public class Countdown {
    public static void main(String[] args) throws InterruptedException {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan waktu (detik): ");
        int detik = input.nextInt();

        while (detik > 0) {
            System.out.print("Waktu tersisa: " + detik + " detik\r");
            Thread.sleep(1000);
            detik--;
        }
        System.out.println("\nWaktu habis!");
        input.close();
    }
}
