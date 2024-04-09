<?php
// Array con tutte le squadre di Serie A 
$squadre_serie_a = [
    'Napoli' => ['Meret', 'Di Lorenzo', 'Koulibaly', 'Manolas', 'Ghoulam', 'Ruiz', 'Fabian Ruiz', 'Zielinski', 'Lozano', 'Osimhen', 'Insigne'],
    'Juventus' => ['Szczesny', 'De Ligt', 'Chiellini', 'Danilo', 'Bentancur', 'Locatelli', 'McKennie', 'Dybala', 'Morata', 'Kulusevski'],
    'Inter' => ['Handanovic', 'Skriniar', 'De Vrij', 'Bastoni', 'Brozovic', 'Vidal', 'Barella', 'Perisic', 'Lautaro Martinez', 'Dzeko'],
    'Milan' => ['Maignan', 'Calabria', 'Kjaer', 'Tomori', 'Hernandez', 'Kessie', 'Tonali', 'Bennacer', 'Messias', 'Leao', 'Rebic'],
    'Roma' => ['Rui Patricio', 'Mancini', 'Ibanez', 'Karsdorp', 'Spinazzola', 'Veretout', 'Cristante', 'Pellegrini', 'Zaniolo', 'Abraham', 'Mkhitaryan'],
    'Lazio' => ['Strakosha', 'Acerbi', 'Marusic', 'Hysaj', 'Lulic', 'Leiva', 'Milinkovic-Savic', 'A. Anderson', 'Pedro', 'Immobile', 'Felipe Anderson'],
    
];

// Stampa delle squadre e delle relative formazioni
foreach ($squadre_serie_a as $squadra => $formazione) {
    echo "Squadra: $squadra<br>";
    echo "Formazione:<br><ul>";
    foreach ($formazione as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul><br>";
}
?>