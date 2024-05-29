#include<stdio.h>

// Main Menu
main()
{
    while(1)
   { 
    int choice;
    printf("\n\n*********MENU*********\n");
    printf("1. Tower of Hanoi\n");
    printf("2. Greatest Common Divisor\n");
    printf("3. Hailstone Sequence\n");
    printf("4. Fibonacci Series\n");
    printf("5. Factorial of Number \n");
    printf("6. Exit\n");
    printf("Enter your choice: ");
    scanf("%d",&choice);
    switch(choice)
    {
        case 1:
            tower_of_hanoi();
            break;
        case 2:
            gcd();
            break;
        case 3:
            hailstone_sequence();
            break;
        case 4:
            fibonacci_series();
            break;
        case 5:
            factorial();
            break;
        case 6:
            exit(0);
    }
   } 
}

// Tower of Hanoi
void tower_of_hanoi()
{
    int num,i;
    

    printf("\n\nEnter the number of disk: ");
    scanf("%d",&num);
    tower_of_hanoi_function(num,'A','B','C');
    printf("\n\n");
}
void tower_of_hanoi_function(int num,char frompeg,char topeg,char auxpeg)
{
    if(num==1)
    {
        printf("\n\nMove disk 1 from %c to %c",frompeg,topeg);
        return;
    }
    tower_of_hanoi_function(num-1,frompeg,auxpeg,topeg);
    printf("\n\nMove disk %d from %c to %c",num,frompeg,topeg);
    tower_of_hanoi_function(num-1,auxpeg,topeg,frompeg);
}

// Greatest Common Divisor
void gcd()
{
    int num1, num2,hcf; 
    printf("\n\nEnter the two numbers: ");
    scanf("%d %d",&num1,&num2);
    hcf=gcd_function(num1,num2);
    printf("\n\nGCD of %d and %d is %d\n\n",num1,num2,hcf);
}
int gcd_function(int num1,int num2)
{
    if(num2!=0)
        return gcd_function(num2,num1%num2);
    else
        return num1;
}

// Hailstone Sequence
void hailstone_sequence()
{
    int num;
    printf("\n\nEnter the number(>0): ");
    scanf("%d",&num);
    printf("\n\nHailstone Sequence of %d is: ",num);
    while(num!=1)
    {
        printf("%d ",num);
        if(num%2==0)
            num=num/2;
            
        else
            num=(3*num)+1;
    }
    printf("1\n\n");
}

// Fibonacci Series
void fibonacci_series()
{
    int i,n,a=0,b=1,temp;
    printf("\n\nEnter the number of terms: ");
    scanf("%d",&n);
    printf("\n\nFibonacci Series is: ");
    for(i=1;i<=n;i++)
    {
        printf("%d ",a);
        temp=a+b;
        a=b;
        b=temp;
    }
    printf("\n\n");
}

// Factorial of Number Using Recursion in Stack
void factorial()
{
    int num,f;
    printf("\n\nEnter the number: ");
    scanf("%d",&num);
    //push(num);
    f=factorial_function(num);
    printf("\n\nFactorial of %d is %d\n\n",num,f);
}
int factorial_function(int num)
{ 
    
    if(num==0)
        return 1;
    else
    {
        return num*factorial_function(num-1);
    }
}
