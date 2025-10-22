package main

import (
	"crypto/rand"
	"fmt"
)

const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*"

func generatePassword(length int) string {
	bytes := make([]byte, length)
	rand.Read(bytes)
	for i, b := range bytes {
		bytes[i] = charset[b%byte(len(charset))]
	}
	return string(bytes)
}

func main() {
	var length int
	fmt.Print("Panjang password: ")
	fmt.Scanln(&length)

	fmt.Println("Password:", generatePassword(length))
}
