<?php
$alternativni = 0;
$konekcija = mysqli_connect('localhost', 'root', '', 'prodavnica');
if (!$konekcija) {
    die("Neuspešna konekcija: " . mysqli_connect_error());
}

$upit = "SELECT jmbg FROM kupac;";
$rez = mysqli_query($konekcija, $upit);

if(isset($_POST["jmbg"]) && $_POST["jmbg"] != ""){
    $jmbg = $_POST["jmbg"];
}else{
    $jmbg = 999999;
}

while ($red = mysqli_fetch_assoc($rez)) {
    if ($jmbg == $red['jmbg']) {
       $jmbg = $jmbg . ++$alternativni;
       echo $jmbg;
    }
}

$ime = $_POST["ime"];
$lozinka = $_POST["lozinka"];
$pol = $_POST["pol"];
$letak = isset($_POST["letak"]) ? "zelim da dobija letak" : "ne zeli da dobija letak";

$osoba = "INSERT INTO kupac (ime, sifra, jmbg, pol, letak) VALUES ('$ime', '$lozinka', '$jmbg', '$pol', '$letak')";
if (mysqli_query($konekcija, $osoba)) {
    echo "<hr> Uspesno smo dodali kupca.";
} else {
    echo "<hr> Doslo je do greske prilikom dodavanja kupca: " . mysqli_error($konekcija);
}
if(isset($_POST["minCena"]) && isset($_POST["maxCena"])) {
    ?>
    <table id="tabela">
        <tr>
            <th>Ime</th>
            <th>Cena</th>
            <th>Kolicina</th>
        </tr>
        <?php

        $konekcija = mysqli_connect('localhost', 'root', '', 'prodavnica');
        if (!$konekcija) {
            die("Neuspesna konekcija: " . mysqli_connect_error());
        }

        $cenaMin = $_POST["minCena"];
        $cenaMax = $_POST["maxCena"];

        $upit2 = "SELECT * FROM `igracka` WHERE cena > $cenaMin AND cena < $cenaMax;";
        $rez2 = mysqli_query($konekcija, $upit2);

        while ($red = mysqli_fetch_assoc($rez2)) {
            echo "<tr>";
            echo "<td>" . $red['naziv'] . "</td>";
            echo "<td>" . $red['cena'] . "</td>";
            echo "<td>" . $red['zemlja_Porekla'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($konekcija);

        $counter=file_get_contents("fajlovi/posete.txt");
        $counter++;
        file_put_contents("fajlovi/posete.txt",$counter);
    }

?>

