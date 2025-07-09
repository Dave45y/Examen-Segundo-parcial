<?php



$x1="";
$x2="";
$A=$_POST["a"];
$B=$_POST["b"];
$C=$_POST["c"];
$discriminante=(($B*$B)-(4*$A*$C));


$x1=(-$B + sqrt($discriminante)/(2*$A));

$x2=(-$B - sqrt($discriminante)/(2*$A));


if ($A==0 ||$discriminante< 0){
echo "No hay Solucion"}

echo ("Valor de A insertado:".$A);


echo ("Valor de B insertado:". $B);

echo ("Valor de C insertado:". $C);

echo ("Respuesta de la Ecuacion x1:". $x1);
echo ("Respuesta de la Ecuacion x2:". $x2);

/*Desarrollar una aplicación en php donde se resuelva una ecuación de segundo grado o la formula general
el usuario debe ingresar en un formulario A B y C y el servidor debe entregarme la respuesta de la ecuación
x1
x2
reglas importantes
si el determinante es menor a 0 = no hay solución
si a es igual a 0 = no hayu solucion*/














?>