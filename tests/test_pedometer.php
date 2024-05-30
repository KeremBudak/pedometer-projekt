<?php
// tests/test_pedometer.php

require_once '../src/Pedometer.php';

// Test the Pedometer class
$pedometer1 = new Pedometer("11.11.2011"); // Erstellen einer Instanz der Klasse Pedometer mit dem Datum "11.11.2011"
for ($i = 0; $i < 1111; $i++) { // Schleife, die 1111 Mal ausgeführt wird
    $pedometer1->incrementSteps(); // Aufruf der Methode incrementSteps, um den Schrittzähler zu erhöhen
}
echo $pedometer1 . "\n"; // Ausgabe der formattierten Zeichenkette für pedometer1

$pedometer2 = new Pedometer("1.9.2017"); // Erstellen einer zweiten Instanz der Klasse Pedometer mit dem Datum "1.9.2017"
for ($i = 0; $i < 10000; $i++) { // Schleife, die 10000 Mal ausgeführt wird
    $pedometer2->incrementSteps(); // Aufruf der Methode incrementSteps, um den Schrittzähler zu erhöhen
}
echo $pedometer2 . "\n"; // Ausgabe der formattierten Zeichenkette für pedometer2
?>
