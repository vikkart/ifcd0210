<?php 
/*  * Dado el siguiente array de alumnos, realizar las siguientes funciones:
 */

$alumnos = [
    ["nombre" => "Juan Pérez", "nota" => 8.5, "curso" => "1º"],
    ["nombre" => "María López", "nota" => 9.2, "curso" => "2º"],
    ["nombre" => "Carlos Sánchez", "nota" => 7.8, "curso" => "1º"],
    ["nombre" => "Ana Torres", "nota" => 8.9, "curso" => "2º"],
    ["nombre" => "Luis Fernández", "nota" => 6.5, "curso" => "1º"],
    ["nombre" => "Sofía Ramírez", "nota" => 9.0, "curso" => "2º"],
    ["nombre" => "Pedro Gómez", "nota" => 7.3, "curso" => "1º"],
    ["nombre" => "Elena Duarte", "nota" => 8.7, "curso" => "2º"]
];
/* * - Mostrar nombres: función que recibe el array y "pinta" un html con todos los nombres, notas y curso de los alumnos
 */
//sacar uno en concreto
echo $alumnos [1]['curso'];
echo"<br>";

function mostrar_nombres($array){
    foreach ($array as $alumno) {
        echo "<li> $alumno[nombre]: $alumno[nota] || Curso: $alumno[curso]</li>";
    }
}
mostrar_nombres($alumnos);
echo"<br>";

/* * - Filtrar alumnos: funcion que recibe el array y un curso, y devuelve otro array con todos los alumnos que cumplen el criterio*/
function filtrar_alumnos($array){
    $filtro = array();
    //$filtro = []; otra forma de ponerlo 
    foreach ($array as $alumno) {
        if ($alumno['nota'] > .numero) {
                    $filtro[] = ['nombre' => $alumno['nombre'], 'nota' => $alumno['nota'], 'curso' => $alumno['curso']];
                }
            }
    return $filtro;//recordar que me retorne esto
};
mostrar_nombres(filtrar_alumnos($alumnos));

/* - Mostrar nota media: función que recibe un array de alumnos y devuelve la nota media */
// funcion count
// foreach { $suma_notas = $suma_notas + $alumno['nota']}
// foreach { $suma_notas = + $alumno['nota']}

?>