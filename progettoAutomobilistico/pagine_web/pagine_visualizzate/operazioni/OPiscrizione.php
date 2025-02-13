<?php
try {
    // Connessione al database
    $pdo = new PDO("mysql:host=localhost;dbname=campionato", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recupero dei dati dal form
    $Nome = $_POST['Nome'] ?? null;
    $Cognome = $_POST['Cognome'] ?? null;
    $Nazionalita = $_POST['Nazionalita'] ?? null;  // Modifica il nome del parametro
    $Numero = $_POST['Numero'] ?? null;
    $id_casa = $_POST['id_casa'] ?? null;

    // Verifica se tutti i dati sono presenti
    if (empty($Nome) || empty($Cognome) || empty($Nazionalita) || empty($Numero) || empty($id_casa)) {
        echo "<div class='catDespair'>
            OPERAZIONE NON RIUSCITA, CONTROLLA I DATI INSERITI
            </div>";
    }
    elseif (!is_numeric($Numero) || $Numero <= 0) {
        echo "<div class='catDespair'>
            INSERIRE UN NUMERO VALIDO
            </div>";
    }
    else {
        // Correzione del nome del parametro in :nazionalita
        $sql = "INSERT INTO piloti (nome, cognome, nazionalita, numero, id_casa) 
                VALUES (:nome, :cognome, :nazionalita, :numero, :id_casa)";
        $stmt = $pdo->prepare($sql);

        // Assicurati che i nomi delle variabili corrispondano a quelli dei parametri nella query
        $stmt->execute([
            ':nome' => $Nome,           // Parametro :nome
            ':cognome' => $Cognome,     // Parametro :cognome
            ':nazionalita' => $Nazionalita,  // Parametro :nazionalita (modificato)
            ':numero' => $Numero,       // Parametro :numero
            ':id_casa' => $id_casa      // Parametro :id_casa
        ]);

        echo "<div class='no_errore'>
            OPERAZIONE RIUSCITA
            </div>";
    }
} catch (PDOException $e) {
    echo "<div class='catDespair'>
        ERRORE: " . $e->getMessage() . "
        </div>";
}
?>
