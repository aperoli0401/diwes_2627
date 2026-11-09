<?php

// Rutas absolutas
require_once __DIR__ . '/class/alumno.php';

// 1. Objeto con atributos inicializados a null (por defecto)
$alumno1 = new Alumno();

// 2. Objeto con valores pasados por parámetros
$alumno2 = new Alumno(1, "Alejandro", "Peralta", "Ubrique", "alejandro@email.com", "600123456", "2º DAW");

// Uso de getters y setters en el primer objeto ($alumno1)
$alumno1->setId(2);
$alumno1->setNombre("Lucía");
$alumno1->setApellidos("García Pérez");
$alumno1->setPoblacion("Cádiz");
$alumno1->setEmail("lucia@email.com");
$alumno1->setTelefono("699887766");
$alumno1->setCurso("2º DAW");

// Mostrar resultados utilizando los métodos getters
echo "<h3>Datos del Alumno 1 (Asignado mediante Setters):</h3>";
echo "ID: " . $alumno1->getId() . "<br>";
echo "Nombre y Apellidos: " . $alumno1->getNombre() . " " . $alumno1->getApellidos() . "<br>";
echo "Población: " . $alumno1->getPoblacion() . "<br>";
echo "Email: " . $alumno1->getEmail() . "<br>";
echo "Teléfono: " . $alumno1->getTelefono() . "<br>";
echo "Curso: " . $alumno1->getCurso() . "<br>";

echo "<hr>";

echo "<h3>Datos del Alumno 2 (Asignado mediante Constructor):</h3>";
echo "ID: " . $alumno2->getId() . "<br>";
echo "Nombre y Apellidos: " . $alumno2->getNombre() . " " . $alumno2->getApellidos() . "<br>";
echo "Población: " . $alumno2->getPoblacion() . "<br>";
echo "Email: " . $alumno2->getEmail() . "<br>";
echo "Teléfono: " . $alumno2->getTelefono() . "<br>";
echo "Curso: " . $alumno2->getCurso() . "<br>";