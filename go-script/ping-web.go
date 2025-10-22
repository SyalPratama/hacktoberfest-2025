package main

import (
	"fmt"
	"net/http"
)

func main() {
	fmt.Print("Masukkan URL (contoh: https://google.com): ")
	var url string
	fmt.Scanln(&url)

	resp, err := http.Get(url)
	if err != nil {
		fmt.Println("Gagal mengakses situs:", err)
		return
	}
	defer resp.Body.Close()

	fmt.Println("Status:", resp.Status)
}
