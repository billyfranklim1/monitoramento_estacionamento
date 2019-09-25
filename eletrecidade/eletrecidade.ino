//sudo usermod -a -G dialout billy 
//sudo chmod a+rw /dev/ttyUSB0

int portaLed = 21; //Porta a ser utilizada para ligar o led   
void setup()  
{  
//  pinMode(portaLed, OUTPUT); //Define a porta do Led como saída  
    Serial.begin(9600);
    pinMode(portaLed, OUTPUT);

}  

   
void loop()  
{  
  
  int estado = analogRead(A7);  //Lê o valor fornecido pelo LDR 
   
//    Serial.print(estado);
       //digitalWrite(10, HIGH);  
    delay(1000);
    if(estado>= 500){
      Serial.print(estado);
        Serial.print("\n");
        digitalWrite(portaLed, LOW);  
    }else{
          Serial.print(estado);
      Serial.print("\n");
      digitalWrite(portaLed, HIGH);  
    }
}  
