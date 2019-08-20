#include <AntoIO.h>

const char *ssid = "your access point SSID";
const char *pass = "access point password";
const char *user = "your username";
const char *token = "your token";
const char *thing = "your thing";

AntoIO anto(user, token, thing);

void setup() {
  Serial.begin(115200);
  
}

void loop() {

}
