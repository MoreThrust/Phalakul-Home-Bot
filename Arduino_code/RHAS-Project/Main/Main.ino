int incomingByte = 0;

void setup() {
    Serial.begin(9600);
    Serial.println("Hello ,type something");
}

void loop() {
     if (Serial.available() > 0) {
         incomingByte = Serial.read();
         Serial.print ("> ");
         Serial.println (incomingByte);
     }
}