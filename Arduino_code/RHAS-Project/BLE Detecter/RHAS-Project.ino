#include <Arduino.h>
#include <sstream>

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
      //Serial.printf("Found device: %s \n", advertisedDevice.toString().c_str());
    }
};


void setup() {
  Serial.begin(115200);
  //Serial.println("BLEDevice init...");

  pinMode(LED_ONBOARD, OUTPUT);
  digitalWrite(LED_ONBOARD, LOW);

  

  BLEDevice::init("");
  pBLEScan = BLEDevice::getScan();
  pBLEScan->setAdvertisedDeviceCallbacks(new MyAdvertisedDeviceCallbacks());
  pBLEScan->setActiveScan(true); //active scan uses more power, but get results faster
  pBLEScan->setInterval(INTERVAL_TIME); // Set the interval to scan (mSecs)
  pBLEScan->setWindow(WINDOW_TIME);  // less or equal setInterval value
}

void loop() {
  BLEScanResults foundDevices = pBLEScan->start(SCAN_TIME);

  int count = foundDevices.getCount();
  for (int i = 0; i < count; i++)
  {
    BLEAdvertisedDevice d = foundDevices.getDevice(i);

    if (d.getName() == "Y 7") {
      check = true;
      count_stable =0;
       
      char deviceBuffer[100];
      deviceName = d.getName().c_str();
      deviceAddress = d.getAddress().toString().c_str();
      deviceRSSI = d.getRSSI();

      //sprintf(deviceBuffer, "Name: %s| Address: %s| RSSI: %d\n", deviceName.c_str(), deviceAddress.c_str(), deviceRSSI);
      //Serial.print(deviceBuffer);

      if (deviceAddress == "ee:e9:9f:1d:25:2b" && deviceRSSI > -60){
        digitalWrite(LED_ONBOARD, HIGH); // Turn on LED
        Serial.println("1111");
      }
      else{
        digitalWrite(LED_ONBOARD, LOW); // Turn off LED
        Serial.println("0000");
      }
      //---------------------------------------------------------Check if not found Mi Band-------------------------------------
    }else if(i == count-1 && check == false){
      count_stable +=1;
      if(count_stable == 30){ // set limit to reset counter
        count_stable =0;
      }
      //Serial.println(count_stable);
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