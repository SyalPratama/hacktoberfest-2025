// TodoList.java
import java.io.*;
import java.util.Scanner;

public class TodoList {
    private static final String FILE_NAME = "todo.txt";

    public static void main(String[] args) throws IOException {
        Scanner input = new Scanner(System.in);
        while (true) {
            System.out.println("\n1. Lihat Tugas\n2. Tambah Tugas\n3. Keluar");
            System.out.print("Pilih: ");
            String pilih = input.nextLine();

            if (pilih.equals("1")) showTasks();
            else if (pilih.equals("2")) addTask(input);
            else if (pilih.equals("3")) break;
            else System.out.println("Pilihan tidak valid.");
        }
        input.close();
    }

    private static void showTasks() throws IOException {
        File file = new File(FILE_NAME);
        if (!file.exists()) {
            System.out.println("Belum ada tugas.");
            return;
        }

        BufferedReader br = new BufferedReader(new FileReader(file));
        String line;
        int i = 1;
        while ((line = br.readLine()) != null) {
            System.out.println(i++ + ". " + line);
        }
        br.close();
    }

    private static void addTask(Scanner input) throws IOException {
        System.out.print("Masukkan tugas: ");
        String task = input.nextLine();
        BufferedWriter bw = new BufferedWriter(new FileWriter(FILE_NAME, true));
        bw.write(task);
        bw.newLine();
        bw.close();
        System.out.println("Tugas ditambahkan!");
    }
}
