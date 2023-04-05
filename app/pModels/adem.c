#include <mega8535.h>
void main()
{
DDRA=0xFF;
PORTA=0xFF;
DDRC=0x00;
PORTD=0xFF;
while(1){


if(PINC.0==0)
PORTA=0b00000000;
else if (PINC.1==0)
PORTA=0b00000001;
else if (PINC.2==0)
PORTA=0b00000010;
else if (PINC.3==0)
PORTA=0b000000100;
else if (PINC.4==0)
PORTA=0b00001000;
else if (PINC.5==0)
PORTA=0b00010000;
else if (PINC.6==0)
PORTA=0b00100000;
else if (PINC.7==0)
PORTA=0b01000000;



}
}