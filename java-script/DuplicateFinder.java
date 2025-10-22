// DuplicateFinder.java
import java.io.*;
import java.security.*;
import java.util.*;

public class DuplicateFinder {
    public static void main(String[] args) throws Exception {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan path folder: ");
        String folderPath = input.nextLine();

        Map<String, String> fileMap = new HashMap<>();
        File folder = new File(folderPath);
        findDuplicates(folder, fileMap);
        input.close();
    }

    private static void findDuplicates(File folder, Map<String, String> fileMap) throws Exception {
        for (File file : folder.listFiles()) {
            if (file.isDirectory()) {
                findDuplicates(file, fileMap);
            } else {
                String hash = getFileHash(file);
                if (fileMap.containsKey(hash)) {
                    System.out.println("\nDuplikat ditemukan:");
                    System.out.println(" - " + fileMap.get(hash));
                    System.out.println(" - " + file.getAbsolutePath());
                } else {
                    fileMap.put(hash, file.getAbsolutePath());
                }
            }
        }
    }

    private static String getFileHash(File file) throws Exception {
        MessageDigest md = MessageDigest.getInstance("MD5");
        FileInputStream fis = new FileInputStream(file);
        byte[] buffer = new byte[1024];
        int bytesRead;

        while ((bytesRead = fis.read(buffer)) != -1) {
            md.update(buffer, 0, bytesRead);
        }
        fis.close();

        byte[] digest = md.digest();
        StringBuilder sb = new StringBuilder();
        for (byte b : digest) sb.append(String.format("%02x", b));
        return sb.toString();
    }
}
