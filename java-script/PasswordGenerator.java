// PasswordGenerator.java
import java.util.Random;
import java.util.Scanner;

public class PasswordGenerator {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Panjang password: ");
        int length = input.nextInt();
        String chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*";
        StringBuilder password = new StringBuilder();
        Random rand = new Random();

        for (int i = 0; i < length; i++) {
            password.append(chars.charAt(rand.nextInt(chars.length())));
        }

        System.out.println("Password: " + password);
        input.close();
    }
}
