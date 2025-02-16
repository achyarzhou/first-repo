#include <iostream>
#include <string>

using namespace std;

// Function to authenticate the user
bool authenticate(string username, string password) {
    // Hardcoded username and password for simplicity
    string correctUsername = "admin";
    string correctPassword = "password123";

    if (username == correctUsername && password == correctPassword) {
        return true;
    } else {
        return false;
    }
}

int main() {
    string username;
    string password;

    cout << "Enter username: ";
    cin >> username;

    cout << "Enter password: ";
    cin >> password;

    if (authenticate(username, password)) {
        cout << "Login successful!" << endl;
    } else {
        cout << "Invalid username or password. Please try again." << endl;
    }

    return 0;
}

