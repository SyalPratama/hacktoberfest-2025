#include <iostream>
#include <sstream>
using namespace std;

int main() {
    string text;
    cout << "Masukkan kalimat: ";
    getline(cin, text);

    int charCount = text.length();
    int wordCount = 0;
    stringstream ss(text);
    string word;
    while (ss >> word) wordCount++;

    cout << "Jumlah karakter: " << charCount << endl;
    cout << "Jumlah kata: " << wordCount << endl;
    return 0;
}
