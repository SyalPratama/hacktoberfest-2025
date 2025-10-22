#include <iostream>
using namespace std;

int main() {
    double a, b;
    char op;
    cout << "Masukkan operasi (contoh: 5 + 3): ";
    cin >> a >> op >> b;

    switch (op) {
        case '+': cout << "Hasil: " << a + b << endl; break;
        case '-': cout << "Hasil: " << a - b << endl; break;
        case '*': cout << "Hasil: " << a * b << endl; break;
        case '/': 
            if (b != 0) cout << "Hasil: " << a / b << endl;
            else cout << "Error: pembagian dengan nol!" << endl;
            break;
        default: cout << "Operator tidak valid!" << endl;
    }
    return 0;
}
