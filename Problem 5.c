#include<stdio.h>

int main()
{
    int i, j, n;
	int boxy(n)
	{
		for(i = 1; i<=n; i++)
		{
			printf(" -");
		}
		printf("\n");	
    	for(j=1; j<=n; j++)
    	{
        	printf("|%d", j);
        	if (j == n){
        		printf("|");
			}
    	}
		printf("\n");
    	for(i=1; i<=n; i++)
		{
			printf(" -");
		}
	}
    printf("Enter any number: ");
   	scanf("%d", &n);
	boxy(n);
    return 0;
}
