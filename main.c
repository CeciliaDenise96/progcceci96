#include<stdio.h>

void funcion_area_triangulo()
{
    int base,altura,resultado1;
    printf("Ingrese los siguientes datos: \n");
    printf("Ingrese el valor de la base \n ");
    scanf("%i", &base);
    printf("Ingrese el valor de la altura \n ");
    scanf("%i", &altura);
    resultado1 = (base*altura)/2;
    
    printf("El área del triángulo es: %i \n", resultado1);
}

void main()
{
    printf("Bienvenido al programa que calcula el área del triángulo \n");
    funcion_area_triangulo();
    getchar();
}