<?php
$juego = [
    'Accion' => ['GTA 5', 'Call Of Duty', 'PUGB'],
    'Aventura' => ['Assasin Creed', 'Tomb Raider', 'Last of us'],
    'Deporte' => ['FIFA', 'PES', 'Moto G']
];

// Imprimir la cabecera de la tabla
echo "<table border='1'>";
echo "<tr>";
foreach (array_keys($juego) as $categoria) {
    echo "<th>$categoria</th>";
}
echo "</tr>";

// Imprimir el resto de la tabla
$max_length = max(array_map('count', $juego));
for ($i = 0; $i < $max_length; $i++) {
    echo "<tr>";
    foreach ($juego as $categoria => $juegos) {
        echo "<td>" . ($i < count($juegos) ? $juegos[$i] : "") . "</td>";
    }
    echo "</tr>";
}
echo "</table>";