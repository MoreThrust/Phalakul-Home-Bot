#include <AntoIO.h>
#define LED 17

const char *ssid = "MT_2.4G";
const char *pass = "facebook";
const char *user = "MoreThrust";
const char *token = "DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4";
const char *thing = "R_H_A_S";

AntoIO anto(user, token, thing);

//==========================================================================//

//#include <Arduino.h>
//#include <sstream>

#include <BLEDevice.h>
#include <BLEUtils.h>
#include <BLEScan.h>
#include <BLEAdvertisedDevice.h>

#define LED_ONBOARD   22

#define SCAN_TIME       1  // seconds
#define INTERVAL_TIME   200   // (mSecs)
#define WINDOW_TIME     100   // less or equal setInterval value

BLEScan* pBLEScan;

String deviceName;
String deviceAddress;
int16_t deviceRSSI;
uint16_t countDevice;


boolean check;
int count_stable = 0; 

class MyAdvertisedDeviceCallbacks: public BLEAdvertisedDeviceCallbacks {
    void onResult(BLEAdvertisedDevice advertisedDevice) {
      Serial.printf("Found device: %s \n", advertisedDevice.toString().c_str());
    }
};

//==========================================================================//

void setup() {
  pinMode(LED, OUTPUT);

  Serial.begin(115200);
  Serial.print("\nTrying to connect ");
  Serial.print(ssid);
  Serial.println("...");

  while (!anto.wifi.begin(ssid, pass));
  Serial.println("\nConnected, trying to connect to broker...");

  while (!anto.mqtt.connect(user, token, true));
  Serial.println("\nConnected");

  anto.mqtt.sub("Door");

  BLEDevice::init("");
  pBLEScan = BLEDevice::getScan();
  pBLEScan->setAdvertisedDeviceCallbacks(new MyAdvertisedDeviceCallbacks());
  pBLEScan->setActiveScan(true); //active scan uses more power, but get results faster
  pBLEScan->setInterval(INTERVAL_TIME); // Set the interval to scan (mSecs)
  pBLEScan->setWindow(WINDOW_TIME);  // less or equal setInterval value
  
}

void loop() {
  anto.mqtt.loop();
  delay(10);

  BLEScanResults foundDevices = pBLEScan->start(SCAN_TIME);

  int count = foundDevices.getCount();
  for (int i = 0; i < count; i++)
  {
    BLEAdvertisedDevice d = foundDevices.getDevice(i);

    if (d.getName() == "MS1020") {
      check = true;
      count_stable =0;
       
      char deviceBuffer[100];
      deviceName = d.getName().c_str();
      deviceAddress = d.getAddress().toString().c_str();
      deviceRSSI = d.getRSSI();

      sprintf(deviceBuffer, "Name: %s| Address: %s| RSSI: %d\n", deviceName.c_str(), deviceAddress.c_str(), deviceRSSI);
      Serial.print(deviceBuffer);

      if (deviceAddress == "a4:c1:ba:fa:88:ad" && deviceRSSI > -70)
      {
        digitalWrite(LED_ONBOARD, HIGH);
        anto.mqtt.pub("Door","0");
      }
      else
      {
        digitalWrite(LED_ONBOARD, LOW); // Turn off LED
        Serial.println("OFF");
      }
      //---------------------------------------------------------Check if not found Mi Band-------------------------------------
    }else if(i == count-1 && check == false){
      count_stable +=1;
      if(count_stable == 30){ // set limit to reset counter
        count_stable =0;
      }
      Serial.println(count_stable);
      if(count_stable == 5){ //set quantity of scan cycle for accept missing Mi Band
      digitalWrite(LED_ONBOARD, LOW); 
        Serial.println("Not Found");
      }
    }
      check = false;
      //---------------------------------------------------------------------------------------------------------------------------
  }
  pBLEScan->clearResults();
}

void messageReceived(String topic, String payload, char * bytes, unsigned int length) {
  Serial.print("incoming: ");
  Serial.print(topic);
  Serial.print(" - ");
  Serial.print(payload);
  Serial.println();

  if (payload.toInt() == 1) {
    digitalWrite(LED, HIGH);
    Serial.println("HIGH");
  } else {
    digitalWrite(LED, LOW);
    Serial.println("LOW");
  }
}
