package main

import (
	"fmt"
)

func simple_print() {
	fmt.Println("My first goroutine")
}
func main() {
	go simple_print()

	// uncomment to print the message of `simple_print`
	// time.Sleep(1 * time.Second)

	fmt.Println("main function")
}