#include<stdio.h>

int main()
{
    int i, n;
	int boxy(n)
	{
    	for(i=1; i<=n; i++)
    	{
        printf("|%d|", i);
    	}
	}
    printf("Enter any number: ");
   	scanf("%d", &n);
	boxy(n);
    return 0;
}
