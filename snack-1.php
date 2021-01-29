<!--
    ISTRUZIONI:
    PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di 
    basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di 
    casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60
-->

<?php 
$matches = [
    'Gennaio' => ['casa' => 'Olimpia Milano', 'ospite' => 'Acqua S.Bernardo Cantù', 'punti' => [55, 60]],
    'Febbraio' => ['casa' => 'Carpegna Prosciutto Basket Pesaro', 'ospite' => 'DeLonghi Treviso', 'punti' => [75, 72]],
    'Marzo' => ['casa' => 'Banco di Sardegna Sassari', 'ospite' => 'AX Armani Exchange Milano', 'punti' => [77, 73]],
    'Aprile' => ['casa' => 'Fortitudo Lavoropiù Bologna', 'ospite' => 'Germani Brescia', 'punti' => [59, 51]],
    'Maggio' => ['casa' => 'Happy Casa Brindisi', 'ospite' => 'Dolomiti Energia Trento', 'punti' => [69, 60]],
    'Giugno' => ['casa' => 'Openjobmetis Varese', 'ospite' => 'UNAHOTELS Reggio Emilia', 'punti' => [60, 58]],
    'Luglio' => ['casa' => 'Umana Reyer Venezia', 'ospite' => 'Germani Brescia', 'punti' => [68, 67]],
    'Agosto' => ['casa' => 'Vanoli Basket Cremona', 'ospite' => 'Virtus Segafredo Bologna', 'punti' => [56, 54]],
    'Settembre' => ['casa' => 'Allianz Pallacanestro Trieste', 'ospite' => 'Virtus Roma', 'punti' => [55, 60]],
];

foreach ($matches as $key => $value) {
    echo $value['casa'] . " - " . $value['ospite'] . " | " . $value['punti'][0] . " - " . $value['punti'][1] . "<br>";
}

?>