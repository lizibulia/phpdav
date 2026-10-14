<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Testi</title></head>
<body>

<h2>testi php-shi</h2>

<form method="post">
  <p><b>1. romeli simboloti iwkeba cvladi php-shi?</b></p>
  <input type="radio" name="k1" value="a"> &;
  <input type="radio" name="k1" value="b"> $
  <input type="radio" name="k1" value="c"> #
  <input type="radio" name="k1" value="d"> @

  <p><b>2. romeli tegit iwkeba php kodi?</b></p>
  <input type="radio" name="k2" value="a"> &lt;php>;
  <input type="radio" name="k2" value="b"> &lt;script&gt;
  <input type="radio" name="k2" value="c"> &lt;?php
  <input type="radio" name="k2" value="d"> &lt;!--

  <p><b>3. romeli metodit igzavneba monacemebi paruli saxit?</b></p>
  <input type="radio" name="k3" value="a"> GET
  <input type="radio" name="k3" value="b"> POST
  <input type="radio" name="k3" value="c"> PUT
  <input type="radio" name="k3" value="d"> SEND

  <p><b>4. ra gafartoeba aqvs php fails?</b></p>
  <input type="text" name="k4">

  <p><b>5. romeli operatori gamoiyeneba ekranze tekstis gamosatanad?</b></p>
  <input type="text" name="k5">

  <br><br>
  <input type="submit" name="gagzavna" value="Shemowmeba">
</form>

<?php
if (isset($_POST['gagzavna'])) {
    $swori = 0;

    if ($_POST['k1'] == "b") { 
        $swori++; 
        }
    if ($_POST['k2'] == "c") { 
        $swori++; 
        }
    if ($_POST['k3'] == "b") { 
        $swori++; 
        }

    if ($_POST['k4'] == "php" || $_POST['k4'] == ".php") { 
        $swori++; 
        }
    if ($_POST['k5'] == "echo" || $_POST['k5'] == "print") { 
        $swori++; 
        }

    echo "<h3>Shedegi</h3>";
    echo "<p><b>Swori pasuxebis raodenoba: $swori/5</b></p>";
}
?>

</body>
</html>