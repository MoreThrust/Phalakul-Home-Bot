
void setup()
{
    Serial.begin(9600);
}

void loop()
{
    while(Serial.available())
    {
        String Ex_String_Read = Serial.readString();

        Serial.print("Ex_String_Read = ");
        Serial.println(Ex_String_Read);
    }
}