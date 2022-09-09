<?php

// Formulaire de demande de questions aléatoires

function askquiz($num='1'){
    $num=htmlspecialchars($num);

    return "<form action='questions.php' method='post'><fieldset>
    <label for='num'>Nombre de questions</label>
    <input id='num' name='num' value='$num'/></fieldset>
    <fieldset> 
    <input id='send' type='submit' value='Generer les questions'></fieldset>
    </form>\n";
}
// TEST
// echo askquiz('10');
?>