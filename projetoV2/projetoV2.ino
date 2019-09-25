//sudo usermod -a -G dialout billy 
//sudo chmod a+rw /dev/ttyUSB0

int portaLed = 11; //Porta a ser utilizada para ligar o led   
int portaLdr1 = A0;
int portaLdr2 = A1;
int portaLdr3 = A2;
int portaLdr4 = A3;
int portaLdr5 = A4;
int portaLdr6 = A5;



int i;

void setup()  
{  
    Serial.begin(9600);
    pinMode(portaLed, OUTPUT);

}  

   
void loop()  
{  

  
    int estado1 = analogRead(portaLdr1); 
    int estado2 = analogRead(portaLdr2); 
    int estado3 = analogRead(portaLdr3); 
    int estado4 = analogRead(portaLdr4); 
  int estado5 = analogRead(portaLdr5);
    int estado6 = analogRead(portaLdr6);



    delay(1000);
    if(estado1>= 145){
        Serial.print(" - VAGA 01 LIVRE\n");
    }else{
        Serial.print(" - VAGA 01 OCUPADA\n");
    }
  
    if(estado2>= 145){
        Serial.print(" - VAGA 02 LIVRE\n");
    }else{
        Serial.print(" - VAGA 02 OCUPADA\n");
    }
  
  
    if(estado3>= 145){
        Serial.print(" - VAGA 03 LIVRE\n");
    }else{
        Serial.print(" - VAGA 03 OCUPADA\n");
    }
    
    if(estado4>= 145){
        Serial.print(" - VAGA 04 LIVRE\n");
    }else{
        Serial.print(" - VAGA 04 OCUPADA\n");
    }
  
    if(estado5>= 145){
        Serial.print(" - VAGA 05 LIVRE\n");
    }else{
        Serial.print(" - VAGA 05 OCUPADA\n");
    }
  
    if(estado6>= 145){
        Serial.print(" - VAGA 06 LIVRE\n");
    }else{
        Serial.print(" - VAGA 06 OCUPADA\n");
    }
  
    
  Serial.print("\n\n");

}  
