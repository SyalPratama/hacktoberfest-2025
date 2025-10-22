def calculator():
    print("=== Kalkulator Sederhana ===")
    a = float(input("Masukkan angka pertama: "))
    op = input("Operator (+ - * /): ")
    b = float(input("Masukkan angka kedua: "))

    if op == '+':
        print(f"Hasil: {a + b}")
    elif op == '-':
        print(f"Hasil: {a - b}")
    elif op == '*':
        print(f"Hasil: {a * b}")
    elif op == '/':
        print(f"Hasil: {a / b}")
    else:
        print("Operator tidak valid.")

if __name__ == "__main__":
    calculator()
