// WeatherDummy.java
import java.util.Random;
import java.util.Scanner;

public class WeatherDummy {
    public static void main(String[] args) {
        String[] kondisi = {"Cerah", "Mendung", "Hujan", "Gerimis", "Badai"};
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan nama kota: ");
        String kota = input.nextLine();

        Random rand = new Random();
        int suhu = 20 + rand.nextInt(16);
        String cuaca = kondisi[rand.nextInt(kondisi.length)];

        System.out.println("Cuaca di " + kota + ": " + cuaca + ", " + suhu + "°C");
        input.close();
    }
}
