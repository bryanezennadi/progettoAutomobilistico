<?php
require '../../altre_pagine/funzioni/functions.php';
// Ottieni il nome del file corrente
$currentPage = basename($_SERVER['PHP_SELF']);
// Funzione per determinare il percorso del CSS
$linkcss = function () {
global $currentPage;
    // Verifica se la pagina è index.php
    if ($currentPage === "index.php") {
        return '../../altre_pagine/css/styleHome.css'; // Percorso CSS per la home
    } else{
        return "../../altre_pagine/css/styleInserimento.css"; // Percorso CSS per altre pagine
    }
};

// Funzione per determinare il titolo della pagina
$titolo = function () {
global $currentPage;
    switch($currentPage) {

        case "index.php": return 'HOME';
        case "iscrizione.php": return 'Pagina_Iscrizione';
        case "elimina.php": return 'Pagina_Cancella';
        case "visualizza.php": return 'Pagina_Visualizza';
        case "modifica.php": return 'Pagina_Modifica';
        default: return 'pagina non trovata';
    }
};
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-salable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link per il CSS dinamico -->
    <link rel="stylesheet" href="<?= $linkcss() ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Titolo dinamico -->
    <title><?= $titolo() ?></title> <!-- Corretto: chiamato la funzione con le parentesi -->
</head>
<?php require '../componenti/navbar.php' ?>
<h1 id="titolo"> Campionato automobilistico </h1>
