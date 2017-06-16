<?php
print("<table border='2'>");


$alle ["De spartelkuikens"] = 25;

$alle ["De waterbuffels"] = 32;

$alle ["Plonsmderin"] = 11;

$alle ["Bommetje"] = 23;


foreach ($alle as $zwemclub => $waarde) {
    echo "<tr> <td colspan='2'> " . $zwemclub . "</td>
        <td colspan='2'>" . $waarde . " </td> <br> <td colspan'2'>";

    $totaal = $waarde / 6;

    for ($i = 0; $i < $totaal; $i++) {
        echo "<img src='img/zwem.jpg'>";
    }
    echo "</td></tr>";
}
print("</table>");

