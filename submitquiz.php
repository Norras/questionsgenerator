<?php

// Formulaire d'ajout de questions dans le fichier texte
// (Un peu chiant de faire une BDD pour ça on verra ça plus tard)

function submitquiz($question=''){
    $question=htmlspecialchars($question);

    return "<form name='submitquiz' action='write.php' method='post'>
    <label for='question'>Question</label>
    <input id='question' name='question' value='$question'/>
    <input type='submit' value='Soumettre'/></form>";
    
}


?>