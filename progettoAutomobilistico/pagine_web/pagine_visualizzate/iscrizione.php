<?php
require "../componenti/header.php";


?>
<form method="post" action="./risultati_form/risultato_inserimento.php">
    <label for="Nome">inserisci nome</label>
    <input type="text" id="Nome" name="Nome">
    <label for="Cognome">inserisci cognome</label>
    <input type="text" id="Cognome" name="Cognome">
    <label for="Nazionalita">Inserisci Nazionalità</label>
    <input type="text" id="Nazionalita" name="Nazionalita">
    <label for="Numero">Inserisci Numero</label>
    <input type="text" id="Numero" name="Numero">
    <label for="id_casa">Inserisci ID casa</label>
    <input type="text" id="id_casa" name="id_casa">
    <button type="submit">SUBMIT</button>
</form>
