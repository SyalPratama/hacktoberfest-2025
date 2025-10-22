def show_tasks():
    try:
        with open("todo.txt", "r") as f:
            tasks = f.readlines()
            if tasks:
                print("\nDaftar Tugas:")
                for i, task in enumerate(tasks, 1):
                    print(f"{i}. {task.strip()}")
            else:
                print("Belum ada tugas.")
    except FileNotFoundError:
        print("Belum ada file tugas.")

def add_task(task):
    with open("todo.txt", "a") as f:
        f.write(task + "\n")
    print("Tugas ditambahkan!")

if __name__ == "__main__":
    while True:
        print("\n1. Lihat Tugas\n2. Tambah Tugas\n3. Keluar")
        pilihan = input("Pilih: ")
        if pilihan == '1':
            show_tasks()
        elif pilihan == '2':
            add_task(input("Masukkan tugas: "))
        elif pilihan == '3':
            break
        else:
            print("Pilihan tidak valid.")
