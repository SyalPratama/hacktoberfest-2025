#include <iostream>
#include <ctime>
#include <thread>
#include <chrono>
using namespace std;

int main() {
    while (true) {
        time_t now = time(0);
        tm *ltm = localtime(&now);
        system("clear"); // gunakan "cls" di Windows
        cout << "Jam sekarang: "
             << ltm->tm_hour << ":"
             << ltm->tm_min << ":"
             << ltm->tm_sec << endl;
        this_thread::sleep_for(chrono::seconds(1));
    }
    return 0;
}
