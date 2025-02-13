<?php
require "../componenti/header.php"
?>
<form method="post" action="./risultati_form/risultato_inserimento.php">
    <label for="Nome">inserisci nome</label>
    <input type="text" id="Nome" name="Nome">
    <label for="Cognome">inserisci cognome</label>
    <input type="text" id="Cognome" name="Cognome">
    <label for="Nazionalità">Inserisci Nazionalità</label>
    <input type="text" id="Nazionalità" name="Nazionalità">
    <label for="Numero">Inserisci Numero</label>
    <input type="text" id="Numero" name="Numero">
    <button type="submit">SUBMIT</button>
</form>
