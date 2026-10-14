<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Nishnebis uwyisi</title></head>
<body>

<h2>Nishnebis uwkisi</h2>

<form method="post">
  Studentis saxeli: <input type="text" name="st_saxeli"><br>
  Studentis gvari: <input type="text" name="st_gvari"><br>
  Kursi: <input type="text" name="kursi"><br>
  Semestri: <input type="text" name="semestri"><br>
  Saswavlo kursi: <input type="text" name="sagani"><br>
  kula: <input type="text" name="kula"><br>
  Lektori: <input type="text" name="leqtori"><br>
  Dekani: <input type="text" name="dekani"><br><br>
  <input type="submit" name="gagzavna" value="Gagzavna">
</form>

<?php
if (isset($_POST['gagzavna'])) {
    $studentis_saxeli = $_POST['studentis_saxeli'];
    $studentis_gvari = $_POST['studentis_gvari'];
    $kursi = $_POST['kursi'];
    $semestri = $_POST['semestri'];
    $sagani = $_POST['sagani'];
    $kula = $_POST['kula'];
    $lektori = $_POST['lektori'];
    $dekani = $_POST['dekani'];

    if ($kula >= 91) { 
        $sh = "A"; $t = "friadi";
        }
    elseif ($kula >= 81) { 
        $sh = "B"; $t = "dzalian kargi";
        }
    elseif ($kula >= 71) {
        $sh = "C"; $t = "kargi"; 
        }
    elseif ($kula >= 61) { 
        $sh = "D"; $t = "damakmakofilebeli"; 
        }
    elseif ($kula >= 51) { 
        $sh = "E"; $t = "sakmarisi"; 
        }
    elseif ($kula >= 41) { 
        $sh = "FX"; $t = "ver chaabara"; 
        }
    else { 
        $sh = "F"; $t = "chaichra"; 
        }

    echo "<h3>Shedegi</h3>
    <table border='1' cellpadding='5'>
    <tr><th>Saxeli</th><th>Gvari</th><th>Kursi</th><th>Semestri</th><th>Sagani</th>
    <th>Qula</th><th>Shefaseba</th><th>Ganmarteba</th><th>Leqtori</th><th>Dekani</th></tr>
    <tr><td>$studentis_saxeli</td><td>$studentis_gvari</td><td>$kursi</td><td>$semestri</td><td>$sagani</td>
    <td>$kula</td><td>$sh</td><td>$t</td><td>$lektori</td><td>$dekani</td></tr>
    </table>";
}
?>

</body>
</html>

