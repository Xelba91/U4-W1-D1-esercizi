<?php
// Imposta la lingua italiana per le date
setlocale(LC_TIME, 'it_IT.utf8');

// Ottieni il nome del giorno della settimana in inglese
$nomeGiornoInglese = date('l');

// Traduci il nome del giorno della settimana in italiano
$giorniSettimana = array(
    'Monday' => 'Lunedì',
    'Tuesday' => 'Martedì',
    'Wednesday' => 'Mercoledì',
    'Thursday' => 'Giovedì',
    'Friday' => 'Venerdì',
    'Saturday' => 'Sabato',
    'Sunday' => 'Domenica'
);

$nomeGiorno = $giorniSettimana[$nomeGiornoInglese];

// Ottieni la data odierna con il nome del mese in italiano
$dataOdierna = date('d F Y');

// Traduci il nome del mese in italiano
$dataOdierna = str_replace(
    array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    array('gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'),
    $dataOdierna
);

// Stampare la data odierna in italiano con il giorno della settimana
echo "Oggi è $nomeGiorno, $dataOdierna";
?>