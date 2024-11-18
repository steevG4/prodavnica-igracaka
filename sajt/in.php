<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="fajlovi/styleProdavnica.css">
<script src="fajlovi/procedura.js"></script>
</head>
<body onload="vreme()">
    <div class="meni">
        <img src="slike/ts.png">
        <ul class="glavnaLista">    
    <li><a href="#" onclick="meni(1)">Vlasnici</a> 
        <ul id="lista1">
        <li>prvi</li>
        <li>prvi</li>
        <li>prvi</li>
    </ul></li>
    <li><a href="#" onclick="meni(2)">Prodajna mesta</a> 
        <ul id="lista2">
        <li>drugi</li>
        <li>drugi</li>
        <li>drugi</li>
    </ul>
</li>
    <li><a href="index.html">Pocetna</a></li>
    <li><a href="#">Kontakt</a></li>
    <li><a href="slike/Sheriff_Woody.png" name="preuzmi" download="Sheriff_Woody.png">preuzmite nasu brrosuru</a></li>
        </ul> 
        <div id="vreme"></div>
        </div>
	<img src="faks/slike/ts.png" >
	<div id="levi">
    <div class="slajd a"></div>
    <div class="slajd b"></div>
    <div class="slajd c"></div>
   
	</div>
   <div id="galerija">
<div class="slika vudi"><p>vudi<p></div>
<div class="slika buzz"><p>buzz<p></div>
<div class="slika ajfel"><p>ajfelova kula<p></div>

   </div>
    <div id="desni">
  
    <?php
if(isset($_POST["minCena"]) && isset($_POST["maxCena"])) {
    ?>
    <table id="tabela" border="1">
        <tr>
            <th>Ime</th>
            <th>Cena</th>
            <th>Zemlja porekla</th>
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
        ?>
    </table>
   
   
    <?php
}
?>

    <form method="post" enctype="multipart/form-data">
     <label for="minCena">Minimalna cena</label> <br>  
    <input type="number" id="minCena" name="minCena" min="0" max="10000"><br>
    <label for="maxCena">maksimalna cena</label><br>   
    <input type="number" id="maxCena" name="maxCena" min="350" max="1000000"><br>
    <input type="submit" value="prikazi">

    </form>
	</div>
    <div id="podnozje">
    <p>broj posetilaca <?php 
$counter=file_get_contents("fajlovi/posete.txt");
$counter++;
file_put_contents("fajlovi/posete.txt",$counter);
echo $counter ."<br>";
$vreme=file_get_contents('https://wttr.in/NoviSad?format=%t');
echo "Trenutna temperatura u novom sadu je ".$vreme;
?></p>
    </div>
   
</body>
</html>

