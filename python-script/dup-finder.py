import os, hashlib

def file_hash(filename):
    hasher = hashlib.md5()
    with open(filename, 'rb') as f:
        buf = f.read()
        hasher.update(buf)
    return hasher.hexdigest()

def find_duplicates(folder):
    seen = {}
    for root, _, files in os.walk(folder):
        for file in files:
            path = os.path.join(root, file)
            hash_ = file_hash(path)
            if hash_ in seen:
                print(f"Duplikat ditemukan:\n - {seen[hash_]}\n - {path}\n")
            else:
                seen[hash_] = path

if __name__ == "__main__":
    folder = input("Masukkan path folder: ")
    find_duplicates(folder)
