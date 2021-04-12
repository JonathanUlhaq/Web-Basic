int Relay = 7;
void setup() {
  
  pinMode(Relay,OUTPUT);

}

void loop() {

 digitalWrite(Relay,HIGH);
 delay(500);
 digitalWrite(Relay,LOW);
 delay(500);

}
