<?php

include 'debut_html.php';
include 'askquiz.php';
include 'submitquiz.php';

echo debut_html('Générateur de questions');
header('Content-type: text/html; charset=utf-8');
echo "<body><h2>Générateur de questions</h2>";
echo askquiz();
echo "<h2>Soumettre une question</h2>";
echo "<fieldset>",submitquiz(),"</fieldset>";
echo "</body></html>";

?>