// #include <studio.h>

// int main(){

//     int x, y;

//     x = 1;
//     y = x;
//     x = 2;

//     printf("%d",y);

//     return 0;
// }

// #include <stdio.h>

// int main(){
//   int x, y, z;

//   printf("Enter the value ofx\n");
//   scanf("%d", &x);
//   printf("enter the value of y\n");
//   scanf("%d", &y);
//   z = x + y;
//   printf("The value of %d + %d equals %d\n", x, y, z);

//   return 0;
// }

// #include <stdio.h>

// int main(){
//   int x, y, z;

//   printf("Enter the value of x and then y\n");
//   scanf("%d%d", &x, &y);

//   z = x + y;
//   printf("The value of %d + %d equals %d\n", x, y, z);

//   return 0;
// }

// #include <stdio.h>

// int main(){
//   char ch;
//   printf("Enter a charater \n");
//   scanf("%c", &ch);
//   printf("The charcter you entered: %c\n", ch);

//   return 0;
  
// }

// #include <stdio.h>

// int main(){
  
//   float f;
 
//   scanf("%f", &f);

//   printf("%f\n", f);

//   return 0;
// }

// #include <stdio.h>

// int main(){
  
//   float f;
//  double d;
 
//   scanf("%lf", &d);

//   printf("%.2lf\n", d);

//   return 0;
// }

#include <stdio.h>

int main(){
  
int x =5;

if( x >= 0){
  printf("x is positive\n");
}

  return 0;
}
///
#include <stdio.h>

int main(){
  
int x =2;

if( x % 2 == 0){
  printf("x is even\n");
}

  return 0;
}
//

#include <stdio.h>

int main()
{
    char chr;
    
    scanf("%c", &chr);
    
    if(chr == 'a' || chr == 'A'){
        printf("vowel\n");
    }
    if(chr == 'e'){
      printf("vowel\n");
    }
    if(chr=='i'){
      printf("vowel\n");
    }
    
    if(chr=='o'){
      printf("vowel\n");
    }

    return 0;
}
#include <stdio.h>

int main()
{
    char chr;
    
    scanf("%c", &chr);
    
    if(chr == 'a' || chr == 'A'){
        printf("vowel\n");
    }
    if(chr == 'e' || chr == 'E'){
      printf("vowel\n");
    }
    if(chr=='i'|| chr == 'I'){
      printf("vowel\n");
    }
    
    if(chr=='o' || chr == 'O'){
      printf("vowel\n");
    }

    return 0;
}
#include <stdio.h>

int main()
{
    char chr;
    
    scanf("%c", &chr);
    
    if(chr == '0' || chr == '1' || chr == '2'|| chr == '3'|| chr == '4'){
        printf("vowel\n");
    }
    else
    {
      printf("not digit\n");
    }
    

    return 0;
}

#include <stdio.h>

int main()
{
    int n;
    
    scanf("%d", &n);
    
    if(n > 10){
        printf("%d is greater then 10\n", n);
    }
    if(n > 5){
        printf("%d is greater then 5\n", n);
    }
    

    return 0;
}


#include <stdio.h>

int main()
{
    int n;

    n = 1;

    while(n <= 10){
      printf("%d\n", n);
      n = n+1;
    }


    return 0;
}

#include <stdio.h>

int main()
{
    int n;

    n = 1;

    while(n <= 10){
        if(n % 2 == 0 ){
            printf("%d\n", n);
        }
      n = n+1;
    }


    return 0;
}

#include <stdio.h>

int main()
{
    int n;

    for(n = 1; n <= 10; n = n+ 1){
      
            printf("%d\n", n);
    
    }


    return 0;
}




