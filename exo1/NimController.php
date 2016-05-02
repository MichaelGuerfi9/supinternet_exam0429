<?php
function play()
{
    if ($_POST) {
        if (sizeof($_POST) < 1 || sizeof($_POST) > 3) {
            echo "Erreur: Il faut choisir entre 1 et 3 allumettes";
        } else {
            $_SESSION['nbAllumettes'] = $_SESSION['nbAllumettes'] - sizeof($_POST);
            if ($_SESSION['nbAllumettes'] <= 0) {
                return winnerIs("L'ordinateur ");
            }
            $ordiTurn = rand(1, 3);
            $_SESSION['nbAllumette'] = $_SESSION['nbAllumettes'] - $ordiTurn;
            if ($_SESSION['nbAllumettes'] <= 0) {
                return winnerIs("Le joueur ");
            }
        }
    }
}

function winnerIs($winner)
{
    $_SESSION['winner'] = "Partie finie:" . $winner . "gagne la partie!";
    unset($_SESSION['nbAllumettes']);
}

function afficheAllumette($table)
{
    $i = 1;
    echo('<form method="post">');
    while ($i <= $_SESSION['nbAllumettes']) {
        echo($table[$i]);
        $i++;
    }
    echo('<br><input type="submit" value="Tirer"></form>');
}

?>