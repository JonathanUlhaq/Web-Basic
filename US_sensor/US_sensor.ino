 // deklarasi pin trigger,echo sensor 1
 int trigpin = 3;
 int echo = 2; 
 int notif = 6;
  // deklarasi pin trigger dan echo sensor 2
 int trigpin2 = 5; 
 int echo2 = 4; 
 
  // deklarasi pin trigger dan echo sensor 3
 int trigpin3 = 10; 
 int echo3 = 9; 

 
void setup() {
  
// melakukan inisialisasi pada pin yang akan digunakan
  pinMode(trigpin,OUTPUT); 
  pinMode(echo,INPUT);
  
  pinMode(trigpin2,OUTPUT); 
  pinMode(echo2,INPUT);
  
  pinMode(trigpin3,OUTPUT); 
  pinMode(echo3,INPUT);
 
}

void loop() {
  
 Serial.begin(9600);

 // Sensor US 1

 digitalWrite(trigpin,0);//Perintah untuk meyakinkan bahwa pin  untuk trigger pada awalnya bernilai LOW
 digitalWrite(trigpin,1); // menghidupkan pin trigger
 delay(10); // delay pin trigger untuk memancarkan gelombang selama 10 second ( sesuai datasheet )
 digitalWrite(trigpin,0);

 int waktu = pulseIn(echo,1); // variabel waktu menampung echo hingga bernilai high

 int jarak = (waktu / 2 ) / 29.1; // rumus kec * waktu, dan karena waktu dalam sensor ( menerima dan memancarkan ), maka waktu dibagi 2 dan 29.1 (datasheet)

 // tampilan pada virtual terminal ( Sensor US 1 )

  if(jarak == 15 ){
    
    Serial.println("US 1 : OBSTACLE 15cm ");
    delay(500);
  } if (jarak <15 & jarak >= 0 ){

    Serial.print ("US 1 : OBSTACLE KURANG 15 cm : ");
    Serial.print(jarak);
    Serial.println(" cm");
    delay(500);
  } else {

    Serial.print("Jarak US 1 = ");
    Serial.print(jarak);
    Serial.println(" cm");
    delay(500);
    
  }

  // Sensor US 2

 digitalWrite(trigpin2,0);
 digitalWrite(trigpin2,1);
 delay(10);
 digitalWrite(trigpin2,0);

 int waktu2 = pulseIn(echo2,1);
 int jarak2 = (waktu2/2) / 29.1;

  // tampilan pada virtual terminal ( Sensor US 2 )

  if(jarak2 == 15 ){

    Serial.println("US 2 : OBSTACLE 15cm ");
    delay(500);
  } if (jarak2 <15 && jarak2>=0){


    Serial.print ("US 2 : OBSTACLE KURANG 15 cm : ");
    Serial.print(jarak2);
    Serial.println(" cm");
    delay(500);
  } else {

    Serial.print("Jarak US 2 = ");
    Serial.print(jarak2);
    Serial.println(" cm");
    delay(500);
    
  }

  // Sensor US 3

 digitalWrite(trigpin3,0);
 digitalWrite(trigpin3,1);
 delay(10);
 digitalWrite(trigpin3,0);

 int waktu3 = pulseIn(echo3,1);
 int jarak3 = (waktu3/2) / 29.1;

 // tampilan pada virtual terminal ( Sensor US 3 )

  if(jarak3 == 15 ){

    Serial.println("US 3 : OBSTACLE 15cm ");
    delay(500);
  } if (jarak3 <15 && jarak3>=0){


    Serial.print ("US 3 : OBSTACLE KURANG 15 cm : ");
    Serial.print(jarak3);
    Serial.println(" cm");
    delay(500);
  } else {

    Serial.print("Jarak US 3 = ");
    Serial.print(jarak3);
    Serial.println(" cm");
    delay(500);
    
  }


 
 

 
 
 

 
}
