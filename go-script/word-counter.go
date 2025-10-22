package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

func main() {
	fmt.Print("Masukkan teks: ")
	reader := bufio.NewReader(os.Stdin)
	input, _ := reader.ReadString('\n')

	words := strings.Fields(input)
	fmt.Printf("Jumlah kata: %d\n", len(words))
}
