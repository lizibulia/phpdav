<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>saxelmwipo uwkisi</title>
</head>
<body>
  <h2>saxelmwipo uwkisi</h2>

  <form method="get">
    saxeli: <input type = "text" name="saxeli"><br>
    gvari: <input type="text" name="gvari"><br>
    tanamdeboba: <input type="text" name="tanamdeboba"><br>
    xelfasi: <input type="text" name="xelpasi"><br>

    gadasaxadi:
  <select name="procenti">
    <option>5</option><option>10</option><option>15</option>
    <option>18</option><option>20</option><option>25</option>
  </select><br><br>

  <input type="submit" name="gagzavna" value="gagzavna">
  </form>

  <?php

  if (isset($_GET['gagzavna'])) {
    $saxeli = $_GET['saxeli'];
    $gvari = $_GET['gvari'];
    $tanamdeboba = $_GET['tanamdeboba'];
    $xelpasi = $_GET['xelpasi'];
    $p = $_GET['procenti'];

    //ak piksirebuli 20%:
    $gadasaxadi1 = $xelpasi * 20 / 100;
    $xelze1 = $xelpasi - $gadasaxadi1;

    //archeuli procenti:
    $gadasaxadi2 = $xelpasi * $p / 100;
    $xelze2 = $xelpasi - $gadasaxadi2;

    echo "<h3>Shedegi</h3>
    <table border='1' cellpadding='5'>
    <tr><th>Saxeli</th><th>Gvari</th><th>Tanamdeboba</th><th>Xelfasi</th>
    <th>Gadasaxadi 20%</th><th>Xelze 20%</th><th>Gadasaxadi $p%</th><th>Xelze $p%</th></tr>
    <tr><td>$saxeli</td><td>$gvari</td><td>$tanamdeboba</td><td>$xelpasi</td>
    <td>$gadasaxadi1</td><td>$xelze1</td><td>$gadasaxadi2</td><td>$xelze2</td></tr>
    </table>";

  }
  
  ?>

</body>
</html>