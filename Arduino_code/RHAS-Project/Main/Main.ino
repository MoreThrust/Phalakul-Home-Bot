int incomingByte = 0;

void setup() {
    Serial.begin(115200);
    Serial.println("Hello ,type something");
}

void loop() {
     if (Serial.available() > 0)     {
          incomingByte = Serial.read();
          Serial.print ("> ");
          Serial.println (incomingByte);

          if (incomingByte == 'N') {
              Serial.println("OK");
          }
    }
}