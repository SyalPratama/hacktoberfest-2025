#include <iostream>
#include <cstdlib>
#include <ctime>
using namespace std;

int main() {
    string chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
    int length;
    cout << "Panjang password: ";
    cin >> length;

    srand(time(0));
    string password = "";
    for (int i = 0; i < length; i++) {
        password += chars[rand() % chars.size()];
    }
    cout << "Password: " << password << endl;
    return 0;
}
