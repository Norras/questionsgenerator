<?php


header ('Content-type: text/html; charset=utf-8');
if (isset($_POST['question']) AND !empty($_POST['question'])){
    $file=fopen("questions.txt","a+");
    fputs($file,$_POST['question']."\n");
    echo "La question a bien été soumise !";
} else {
    echo "Aucune question n'a été soumise.";
}

?>