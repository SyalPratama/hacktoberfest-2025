#include <iostream>
using namespace std;

int main() {
    double c, f;
    cout << "Masukkan suhu (Celsius): ";
    cin >> c;
    f = (c * 9/5) + 32;
    cout << "Dalam Fahrenheit: " << f << "°F" << endl;
    return 0;
}
