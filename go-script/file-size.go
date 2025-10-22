package main

import (
	"fmt"
	"os"
)

func main() {
	fmt.Print("Masukkan nama file: ")
	var filename string
	fmt.Scanln(&filename)

	info, err := os.Stat(filename)
	if err != nil {
		fmt.Println("Error:", err)
		return
	}

	fmt.Printf("Ukuran file %s: %.2f KB\n", filename, float64(info.Size())/1024)
}
