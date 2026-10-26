
<?php

// ZADANIE 1 – TABLICE TAB1, TAB2, TAB3

$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo "5 komorka tab1: " . $tab1[4] . "<br>";

$tab1[6] = 12;

$tab2 = array();

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

$tab3 = array();

for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[count($tab1) - 1 - $i];
}

echo "Tab1: ";
print_r($tab1);

echo "<br>Tab2 odwrotnie: ";
print_r($tab2);

echo "<br>Tab3: ";
print_r($tab3);


// ZADANIE 2 – TABLICA LICZB PODANYCH PRZEZ UZYTKOWNIKA

echo "<br><br>ZADANIE 2<br>";

$tab = array();

$n = (int)readline("Ile liczb podasz? ");

for ($i = 0; $i < $n; $i++) {
    $tab[$i] = (int)readline("Podaj liczbe: ");
}

$min = $tab[0];
$max = $tab[0];
$suma = 0;
$ile3 = 0;
$parzyste = 0;
$nieparzyste = 0;
$podzielne3 = 0;

for ($i = 0; $i < count($tab); $i++) {
    if ($tab[$i] < $min) {
        $min = $tab[$i];
    }

    if ($tab[$i] > $max) {
        $max = $tab[$i];
    }

    $suma = $suma + $tab[$i];

    if ($tab[$i] == 3) {
        $ile3++;
    }

    if ($tab[$i] % 2 == 0) {
        $parzyste++;
    } else {
        $nieparzyste++;
    }

    if ($tab[$i] % 3 == 0) {
        $podzielne3++;
    }
}

echo "Minimum: " . $min . "<br>";
echo "Maksimum: " . $max . "<br>";
echo "Srednia: " . ($suma / count($tab)) . "<br>";
echo "Ilosc trojek: " . $ile3 . "<br>";

sort($tab);

echo "Sortowanie rosnace: ";
print_r($tab);

$ile = count($tab);
$srodek = (int)($ile / 2);

if ($ile % 2 == 0) {
    $mediana = ($tab[$srodek - 1] + $tab[$srodek]) / 2;
} else {
    $mediana = $tab[$srodek];
}

echo "<br>Mediana: " . $mediana . "<br>";

echo "3 najmniejsze: ";
for ($i = 0; $i < 3 && $i < $ile; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>3 najwieksze: ";
for ($i = $ile - 3; $i < $ile; $i++) {
    if ($i >= 0) {
        echo $tab[$i] . " ";
    }
}

echo "<br>Kwadraty: ";

for ($i = 0; $i < $ile; $i++) {
    $tab[$i] = $tab[$i] * $tab[$i];
    echo $tab[$i] . " ";
}

echo "<br>Liczby parzyste: " . $parzyste;
echo "<br>Liczby nieparzyste: " . $nieparzyste;
echo "<br>Podzielne przez 3: " . $podzielne3;


// ZADANIE 3 – TABLICA LITER

echo "<br><br>ZADANIE 3<br>";

$litery = array();

for ($i = 0; $i < 10; $i++) {
    $litery[$i] = readline("Podaj litere: ");
}

echo "Wpisane litery: ";
print_r($litery);

$slowo = readline("Podaj wyraz 10-literowy: ");

if (strlen($slowo) == 10) {
    $litery2 = array();

    for ($i = 0; $i < 10; $i++) {
        $litery2[$i] = $slowo[$i];
    }

    for ($i = 0; $i < 10; $i++) {
        if ($litery2[$i] >= 'a' && $litery2[$i] <= 'z') {
            $litery2[$i] = strtoupper($litery2[$i]);
        } else {
            $litery2[$i] = strtolower($litery2[$i]);
        }
    }

    echo "<br>Zamiana wielkosci liter: ";
    print_r($litery2);

    shuffle($litery2);

    echo "<br>Losowa kolejnosc: ";
    print_r($litery2);
} else {
    echo "Wyraz musi miec 10 znakow.";
}


// ZADANIE 4 – 100 LOSOWYCH LICZB

echo "<br><br>ZADANIE 4<br>";

$A = array();

for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(0, 30);
}

echo "Tablica A: ";
print_r($A);

$max = $A[0];
$ileMax = 0;
$min = $A[0];
$indeksMin = 0;

for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > $max) {
        $max = $A[$i];
    }

    if ($A[$i] < $min) {
        $min = $A[$i];
        $indeksMin = $i;
    }
}

for ($i = 0; $i < 100; $i++) {
    if ($A[$i] == $max) {
        $ileMax++;
    }
}

echo "<br>Maksimum: " . $max;
echo "<br>Ile razy wystepuje maksimum: " . $ileMax;

echo "<br>Liczby nieparzyste: ";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] % 2 != 0) {
        echo $A[$i] . " ";
    }
}

echo "<br>Liczby na nieparzystych indeksach: ";
for ($i = 1; $i < 100; $i = $i + 2) {
    echo $A[$i] . " ";
}

$ilePrzedzial = 0;

echo "<br>Liczby z przedzialu [5,15): ";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] >= 5 && $A[$i] < 15) {
        echo $A[$i] . " ";
        $ilePrzedzial++;
    }
}

echo "<br>Ilosc liczb w przedziale: " . $ilePrzedzial;

$a = (int)readline("Podaj liczbe a: ");

$bliski = $A[0];

for ($i = 1; $i < 100; $i++) {
    if (abs($A[$i] - $a) < abs($bliski - $a)) {
        $bliski = $A[$i];
    }
}

echo "<br>Najblizsza liczba do a: " . $bliski;

echo "<br>Minimum: " . $min;

if ($indeksMin > 0) {
    echo "<br>Poprzednik minimum: " . $A[$indeksMin - 1];
}

if ($indeksMin < 99) {
    echo "<br>Nastepnik minimum: " . $A[$indeksMin + 1];
}

$B = array();

for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > 10) {
        $B[] = $A[$i];
    }
}

echo "<br>Liczby wieksze od 10: ";
print_r($B);

$C = array();
$suma = 0;

for ($i = 0; $i < 100; $i++) {
    $suma = $suma + $A[$i];
    $C[$i] = $suma;
}

echo "<br>Sumy kolejnych elementow: ";
print_r($C);

$D = $A;
rsort($D);

echo "<br>Sortowanie malejaco: ";
print_r($D);

echo "<br>Liczby wystepujace przynajmniej 3 razy:<br>";

for ($i = 0; $i < 100; $i++) {
    $ile = 0;

    for ($j = 0; $j < 100; $j++) {
        if ($A[$i] == $A[$j]) {
            $ile++;
        }
    }

    $byla = false;

    for ($j = 0; $j < $i; $j++) {
        if ($A[$j] == $A[$i]) {
            $byla = true;
        }
    }

    if ($ile >= 3 && $byla == false) {
        echo $A[$i] . " wystepuje " . $ile . " razy<br>";
    }
}


// ZADANIE 5 – CIAGI LICZBOWE

echo "<br><br>ZADANIE 5<br>";

// Fibonacci
$fib = array();
$fib[0] = 0;
$fib[1] = 1;

for ($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

echo "Fibonacci: ";
print_r($fib);

// Potegi liczby 2
$potegi = array();
$liczba = 1;

for ($i = 0; $i < 100; $i++) {
    $potegi[$i] = $liczba;
    $liczba = $liczba * 2;
}

echo "<br>Potegi liczby 2: ";
print_r($potegi);

// Ciag 3, 6, 9, 12...
$trojki = array();

for ($i = 0; $i < 100; $i++) {
    $trojki[$i] = 3 * ($i + 1);
}

echo "<br>Wielokrotnosci 3: ";
print_r($trojki);

// Ciag 2, 4, 8, 16, 32...
$ciag = array();
$liczba = 2;

for ($i = 0; $i < 100; $i++) {
    $ciag[$i] = $liczba;
    $liczba = $liczba * 2;
}

echo "<br>Ciag 2, 4, 8, 16...: ";
print_r($ciag);

?>
