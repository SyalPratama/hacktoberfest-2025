
import time

def countdown(seconds):
    while seconds > 0:
        print(f"Waktu tersisa: {seconds} detik", end='\r')
        time.sleep(1)
        seconds -= 1
    print("\nWaktu habis!")

if __name__ == "__main__":
    sec = int(input("Masukkan waktu (detik): "))
    countdown(sec)
