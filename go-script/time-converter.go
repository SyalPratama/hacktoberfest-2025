package main

import (
	"fmt"
	"time"
)

func main() {
	local := time.Now()
	fmt.Println("Waktu Lokal:", local)

	japan, _ := time.LoadLocation("Asia/Tokyo")
	fmt.Println("Waktu di Tokyo:", local.In(japan))

	usa, _ := time.LoadLocation("America/New_York")
	fmt.Println("Waktu di New York:", local.In(usa))
}
