#include <mega8535.h>
#include <delay.h>
//ayang emuah
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
delay_ms(100);
PORTA=0b00000010;
delay_ms(100);
PORTA=0b00000100;
delay_ms(100);
PORTA=0b00001000;
delay_ms(100);
PORTA=0b00010000;
delay_ms(100);
PORTA=0b00100000;
delay_ms(100);
PORTA=0b01000000;
delay_ms(100);
PORTA=0b10000000;
delay_ms(100);


else if (PINC.2==0)
PORTA=0b00000001;
delay_ms(50a);
PORTA=0b00000010;
delay_ms(50a);
PORTA=0b00000100;
delay_ms(50a);
PORTA=0b00001000;
delay_ms(50a);
PORTA=0b00010000;
delay_ms(50a);
PORTA=0b00100000;
delay_ms(50a);
PORTA=0b01000000;
delay_ms(50a);
PORTA=0b10000000;
delay_ms(50a);


else if (PINC.3==0)
PORTA=0b00000001;
delay_ms(50);
PORTA=0b00000010;
delay_ms(50);
PORTA=0b00000100;
delay_ms(50);
PORTA=0b00001000;
delay_ms(50);
PORTA=0b00010000;
delay_ms(50);
PORTA=0b00100000;
delay_ms(50);
PORTA=0b01000000;
delay_ms(50);
PORTA=0b10000000;
delay_ms(50);




}
}