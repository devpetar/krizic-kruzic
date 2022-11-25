<?php


$winner = null;
$poruka = "";

if($_GET) {

    $vrijednosti = [[$_GET['00'], $_GET['01'], $_GET['02']], [$_GET['10'], $_GET['11'], $_GET['12']], [$_GET['20'], $_GET['21'], $_GET['22']]];

    // Provjera jesu li u nekom redu sve vrijednosti jednake
    foreach($vrijednosti as $arr) {
        if(areThreeSameHorizontally($arr)) {
            break;
        }
    }

    // Provjera jesu li u nekom stupcu sve vrijednosti jednake
    if($winner === null) {
        for($i = 0; $i < 3; $i++) {
            if($vrijednosti[0][$i] != null && $vrijednosti[0][$i] == $vrijednosti[1][$i] && $vrijednosti[1][$i] == $vrijednosti[2][$i]) {
                $winner = $vrijednosti[0][$i];
                break;
            }
        }
    }
    // Provjera jesu li koso sve vrijednosti jednake
    if($winner === null && $vrijednosti[1][1] != null) {
        if($vrijednosti[0][0] == $vrijednosti[1][1] && $vrijednosti[1][1] == $vrijednosti[2][2]) {
            $winner = $vrijednosti[1][1];
        } else if ($vrijednosti[0][2] == $vrijednosti[1][1] && $vrijednosti[1][1] == $vrijednosti[2][0]) {
            $winner = $vrijednosti[1][1];
        }
    }

    if($winner === null) {
        $poruka = "Nema pobjednika!";
    } else if ($winner != "x" && $winner != "o" && $winner != "X" && $winner != "O") {
        $poruka = "Greška! Dozvoljeno je koristiti samo slova x i o!";
    } else {
        $osobaX = $_GET['osobaX'];
        $osobaY = $_GET['osobaY'];
        if(strtolower($winner) == "x") {
            $poruka = "Pobjednik je $osobaX!";
        } else {
            $poruka = "Pobjednik je $osobaY!";
        }
    }
}


/**
 * Provjera jesu li u redu sve vrijednosti jednake
 */
function areThreeSameHorizontally($arr) {
    if($arr[0] != null && $arr[0] == $arr[1] && $arr[1] == $arr[2]) {
        global $winner;
        $winner = $arr[0];
        return true;
    }
    return false;
}


?>