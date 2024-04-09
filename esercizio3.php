<?php
// Array delle partite di Serie A e delle relative formazioni
$partite_serie_a = [
    [
        'casa' => 'Juventus',
        'trasferta' => 'Inter',
        'formazioni' => [
            'Juventus' => ['Szczesny', 'De Ligt', 'Chiellini', 'Danilo', 'Bentancur', 'Locatelli', 'McKennie', 'Dybala', 'Morata', 'Kulusevski'],
            'Inter' => ['Handanovic', 'Skriniar', 'De Vrij', 'Bastoni', 'Brozovic', 'Vidal', 'Barella', 'Perisic', 'Lautaro Martinez', 'Dzeko']
        ]
    ],
    [
        'casa' => 'Milan',
        'trasferta' => 'Napoli',
        'formazioni' => [
            'Milan' => ['Maignan', 'Calabria', 'Kjaer', 'Tomori', 'Hernandez', 'Kessie', 'Tonali', 'Bennacer', 'Messias', 'Leao', 'Rebic'],
            'Napoli' => ['Meret', 'Di Lorenzo', 'Koulibaly', 'Manolas', 'Ghoulam', 'Ruiz', 'Fabian Ruiz', 'Zielinski', 'Lozano', 'Osimhen', 'Insigne']
        ]
    ],
    // Aggiungi le altre partite con le relative squadre e formazioni
];

// Stampa delle partite e delle relative formazioni
foreach ($partite_serie_a as $partita) {
    echo "Partita: {$partita['casa']} vs {$partita['trasferta']}<br>";
    echo "Formazioni:<br>";
    echo "Casa: {$partita['casa']}<br><ul>";
    foreach ($partita['formazioni'][$partita['casa']] as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul>";
    echo "Trasferta: {$partita['trasferta']}<br><ul>";
    foreach ($partita['formazioni'][$partita['trasferta']] as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul><br>";
}
?>