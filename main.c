#include <stdio.h>

void main()
{
    int num_semestre,opcion;
    printf("Ingresa tu semestre \n");
    scanf("%i", &num_semestre);
    if(num_semestre>3)
    {
        printf("Bienvenido al sistema de consulta de horarios escolares online \n");
        printf("Elige la carrera que cursas \n");
        printf(" 1: Ingeniería en computación, \n ");
        printf(" 2: Ingeniería mecánica \n");
        printf("Opción : \n");
        scanf("%i",&opcion);
        switch(opcion)
        {
            case 1:
            printf("Cuarto semestre \n Análisis de circuitos electrónicos \n Estructuras discretas \n Programación de sistemas \n");
            break;
            case 2:
            printf("Cuarto semestre \n Ciencias y tecnología de materiales \n Fundamentos de mécanica de sólidos \n Mecánica de Fluidos \n");
            break;
            default:("Opción no valida \n");
        }
    }
    else printf("En el sistema sólo están cargados los horarios escolares a partir de cuarto semestre \n");
    getchar();
}