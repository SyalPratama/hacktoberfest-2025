// Calculator.java
import java.util.Scanner;

public class Calculator {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan angka pertama: ");
        double a = input.nextDouble();
        System.out.print("Operator (+ - * /): ");
        char op = input.next().charAt(0);
        System.out.print("Masukkan angka kedua: ");
        double b = input.nextDouble();

        double hasil = 0;
        switch (op) {
            case '+': hasil = a + b; break;
            case '-': hasil = a - b; break;
            case '*': hasil = a * b; break;
            case '/': hasil = a / b; break;
            default: System.out.println("Operator tidak valid!"); return;
        }

        System.out.println("Hasil: " + hasil);
        input.close();
    }
}
