#include <stdio.h>

int main(int argc, char const *argv[])
{
	void byte_order(){
		// struct T
		// {
			union {
				short a;
				char c[sizeof(short)];
			}test;
		// } test;
		test.a = 0x0102;
		if(test.c[0]==2 && test.c[1] == 1){
			printf("\n");
		}
	}
	return 0;
}
